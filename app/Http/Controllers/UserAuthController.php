<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Balance;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function showRegisterForm(Request $request)
    {
        $data = [
            'metaTitle' => 'Registration',
            'metaDescription' => 'Registration description',
        ];
        return view('user.register', $data);
    }



    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    // public function register(Request $request)
    // {
    //     return redirect()->route('wg-register');
    // }
    public function register(Request $request)
    {
        $status =  $request->query('status');
        if ($status === null) {
            return redirect()->route('wg-register');
        }

        if ($status === 'error') {
            // вернуть ошибку
            // status === 'error'
            $code = $request->query('code');
            $message = $request->query('message');

            dd(__FILE__ . ':' . __LINE__, $status, $code, $message);
        }

        if ($status === 'ok') {
            $user = User::updateOrCreate([
                'nickname' => $request->query('nickname'),
                'account_id' => $request->query('account_id'),
                'access_token' => $request->query('access_token'),
                'expires_at' => $request->query('expires_at'),
            ]);

            $balance = $user->balance::create();

            // $balance = $user->balance::firstOrCreate();
            // $balance = $user->balance::firstOrCreate([
            //     'user_nickname' => $user->nickname,
            //     'total' => 0,
            //     'own' => 0,
            //     'bonus' => 0,
            // ]);

            event(new Registered($user));

            Auth::login($user, $remember = true);
            $request->session()->regenerate();

            return redirect()->route('user.index');
        }
    }


    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('user.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $status =  $request->query('status');

        if ($status === null) {
            return redirect()->route('wg-login');
        }
        if ($status === 'error') {
            // вернуть ошибку
            $code = $request->query('code');
            $message = $request->query('message');

            dd(__FILE__ . ':' . __LINE__, $status, $code, $message);
        }

        if ($status === 'ok') {
            $user = User::where([
                'nickname' => $request->query('nickname'),
                'account_id' => $request->query('account_id'),
                'active' => 1,
            ])->firstOr(function () {
                return redirect()->route('register');
            });

            $user->update([
                'access_token' => $request->query('access_token'),
                'expires_at' => $request->query('expires_at'),
            ]);

            // $user->access_token = $request->query('access_token');
            // $user->expires_at = $request->query('expires_at');
            // $user->save();

            Auth::login($user, $remember = true);
            $request->session()->regenerate();

            return redirect()->intended(RouteServiceProvider::HOME);
        }
        dd(__FILE__ . ':' . __LINE__, $request, $status);
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function _login(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }


    /**
     * Destroy an authenticated session.
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::guard('user')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(RouteServiceProvider::HOME);
    }
}
