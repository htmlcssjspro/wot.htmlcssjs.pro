<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WGAuthController extends Controller
{
    public const APP_ID = '0bcf97697885bda2f260a58dc6531902';
    public const WOT_API_URL = 'https://api.worldoftanks.ru/wot';

    public function getUrl($path, $query)
    {
        $appId = self::APP_ID;
        $appId = '0bcf97697885bda2f260a58dc6531902';

        $api = self::WOT_API_URL;
        $api = 'https://api.worldoftanks.ru/wot';

        $uri = "{$api}/{$path}/?application_id={$appId}&{$query}";
        return $uri;
    }

    public function getLoginUrl($redirect_uri)
    {
        $path = 'auth/login';
        $query = "redirect_uri={$redirect_uri}";
        return $this->getUrl($path, $query);
    }

    public function register(Request $request)
    {
        $url = $this->getLoginUrl(route('register'));
        return redirect($url);
    }

    public function login(Request $request)
    {
        $url = $this->getLoginUrl(route('login'));
        return redirect($url);
    }

    public function wotAuthLogin($url)
    {
        // $response = Http::get($loginUri, [
        //     'application_id' => $applicationID,
        //     'display' => 'page',
        //     'display' => 'popup',
        //     'expires_at' => '1209600',
        //     'nofollow' => '0',
        //     'nofollow' => '1',
        //     'redirect_uri' => route('register'),
        // ]);

        // $uri = "$loginUri/?application_id=$applicationID&display=popup&expires_at=1209600&nofollow=1&redirect_uri=$redirect_uri";
    }
}
