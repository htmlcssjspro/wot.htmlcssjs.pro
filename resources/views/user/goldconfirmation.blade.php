<x-layouts.app :meta-title="$metaTitle" :meta-description="$metaDescription">

    <x-layout.main class="goldconfirmation" wrapper>

        <h1>{{ __($h1) }}</h1>
        <span>{{ __($quantity) }}</span>
        <h2>{{ __('Способ оплаты') }}</h2>
        <form id="buygold" action="#" method="POST">
            @csrf

            <div class="radio">
                <input type="radio" name="pay-method" value="visa" id="visa" checked>
                <label for="visa">Visa</label>
            </div>
            <div class="radio">
                <input type="radio" name="pay-method" value="qiwi" id="qiwi">
                <label for="qiwi">Qiwi</label>
            </div>
            <div class="radio">
                <input type="radio" name="pay-method" value="yumoney" id="yumoney">
                <label for="yumoney">ЮMoney</label>
            </div>
            <div class="radio">
                <input type="radio" name="pay-method" value="paypal" id="paypal">
                <label for="paypal">PayPal</label>
            </div>

            <button type="submit" class="btn btn_common">{{ __('Перейти к оплате') }}</button>
        </form>

    </x-layout.main>

</x-layouts.app>
