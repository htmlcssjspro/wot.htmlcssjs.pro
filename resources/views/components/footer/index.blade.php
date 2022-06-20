@props([
    'email' => 'example@mail.com',
    'phone' => '+7 999 999 99 99',
    'facebook' => 'facebook',
    'youtube' => 'youtube',
    'twitter' => 'twitter',
    'discord' => 'discord',
    'telegram' => 'telegram',
])

<x-layout.footer>
    <div class="footer__wrapper">
        <nav class="navbar">
            <ul class="navbar__group">
                <li class="navbar__item">
                    <x-logo class="footer__logo" />
                </li>
                <li class="navbar__item">
                    <a href="#">{{ __('Политика Конфидициальности') }}</a>
                </li>
                <li class="navbar__item">
                    <a href="#">{{ __('Пользовательское соглашение') }}</a>
                </li>
            </ul>
            <ul class="navbar__group">
                <li class="navbar__item">
                    <a href="#">{{ __('Партнерам') }}</a>
                </li>
                <li class="navbar__item">
                    <a href="#">{{ __('Реферальная программа для игроков') }}</a>
                </li>
                <li class="navbar__item">
                    <a href="#">{{ __('Реферальная программа для вебмастеров') }}</a>
                </li>

            </ul>
            <ul class="navbar__group">
                <li class="navbar__item">
                    <a href="#">{{ __('Помощь') }}</a>
                </li>
                <li class="navbar__item">
                    <a href="#">{{ __('Инструкции для игроков') }}</a>
                </li>
                <li class="navbar__item">
                    <a href="#">{{ __('Частозадаваемые вопросы') }}</a>
                </li>

            </ul>
            <ul class="navbar__group">
                <li class="navbar__item">
                    <a href="#">{{ __('Контакты') }}</a>
                </li>
                <li class="navbar__item">
                    <a href="mailto:{{ $email }}">{{ $email }}</a>
                </li>
                <li class="navbar__item">
                    <a href="tel:{{ $phone }}">{{ $phone }}</a>
                </li>
            </ul>
            <ul class="navbar__group">
                <li class="navbar__item">
                    <ul class="social">
                        <li>
                            <a href="https://www.facebook.com/{{ $facebook }}">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M26 13C26 5.82029 20.1797 0 13 0C5.82029 0 0 5.82029 0 13C0 19.4886 4.75389 24.8668 10.9688 25.8421V16.7578H7.66797V13H10.9688V10.1359C10.9688 6.87781 12.9096 5.07812 15.879 5.07812C17.3009 5.07812 18.7891 5.33203 18.7891 5.33203V8.53125H17.1498C15.535 8.53125 15.0313 9.53342 15.0313 10.5625V13H18.6367L18.0604 16.7578H15.0313V25.8421C21.2461 24.8668 26 19.4886 26 13Z"
                                        fill="#1D1E1F" />
                                    <path
                                        d="M18.0604 16.7578L18.6367 13H15.0313V10.5625C15.0313 9.53443 15.535 8.53125 17.1498 8.53125H18.7891V5.33203C18.7891 5.33203 17.3014 5.07812 15.879 5.07812C12.9096 5.07812 10.9688 6.87781 10.9688 10.1359V13H7.66797V16.7578H10.9688V25.8421C12.3147 26.0526 13.6853 26.0526 15.0313 25.8421V16.7578H18.0604Z"
                                        fill="white" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $youtube }}">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_95_2194)">
                                        <path
                                            d="M25.4821 6.70082C25.3351 6.14769 25.0454 5.64286 24.642 5.23686C24.2386 4.83087 23.7357 4.53795 23.1835 4.38741C21.1508 3.84082 13.0258 3.84082 13.0258 3.84082C13.0258 3.84082 4.90076 3.84082 2.86803 4.38741C2.31585 4.53795 1.81289 4.83087 1.40949 5.23686C1.00608 5.64286 0.716388 6.14769 0.569393 6.70082C0.0257569 8.74241 0.0257568 12.9999 0.0257568 12.9999C0.0257568 12.9999 0.0257569 17.2574 0.569393 19.299C0.716388 19.8521 1.00608 20.357 1.40949 20.763C1.81289 21.1689 2.31585 21.4619 2.86803 21.6124C4.90076 22.159 13.0258 22.159 13.0258 22.159C13.0258 22.159 21.1508 22.159 23.1835 21.6124C23.7357 21.4619 24.2386 21.1689 24.642 20.763C25.0454 20.357 25.3351 19.8521 25.4821 19.299C26.0258 17.2574 26.0258 12.9999 26.0258 12.9999C26.0258 12.9999 26.0258 8.74241 25.4821 6.70082Z"
                                            fill="#0B0B0B" />
                                        <path d="M10.3667 16.8661V9.13403L17.1621 13.0001L10.3667 16.8661Z"
                                            fill="#FEFEFE" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_95_2194">
                                            <rect width="26" height="26" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/{{ $twitter }}">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.17648 23.5631C17.9878 23.5631 23.3542 15.4345 23.3542 8.38536C23.3542 8.15448 23.3542 7.92464 23.3386 7.69584C24.3826 6.94071 25.2838 6.00572 26 4.93464C25.0265 5.36624 23.9937 5.64916 22.9362 5.77392C24.0498 5.10733 24.8833 4.05877 25.2814 2.82344C24.2343 3.44485 23.0887 3.88275 21.8941 4.11824C21.0898 3.26303 20.0261 2.69673 18.8675 2.50698C17.709 2.31723 16.5202 2.5146 15.4851 3.06855C14.4501 3.6225 13.6264 4.50214 13.1416 5.57137C12.6569 6.64059 12.538 7.83978 12.8034 8.98336C10.6826 8.87697 8.6079 8.32581 6.71391 7.36565C4.81992 6.40548 3.14899 5.05777 1.8096 3.41C1.12746 4.58433 0.918528 5.9745 1.22536 7.29746C1.53219 8.62042 2.3317 9.7767 3.46112 10.5309C2.61217 10.506 1.7817 10.277 1.04 9.8632V9.9308C1.04034 11.1624 1.46667 12.3559 2.24669 13.309C3.02672 14.2621 4.1124 14.9161 5.3196 15.1599C4.53427 15.3741 3.71028 15.4054 2.91096 15.2514C3.25197 16.3113 3.91563 17.2381 4.80918 17.9023C5.70272 18.5665 6.78148 18.9349 7.89464 18.9559C6.78864 19.8253 5.52209 20.468 4.16745 20.8474C2.8128 21.2268 1.39665 21.3354 0 21.167C2.43949 22.7324 5.27792 23.5628 8.17648 23.559"
                                        fill="white" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $discord }}">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.0101 4.50191C20.3529 3.74154 18.5759 3.18133 16.7179 2.86048C16.6841 2.85428 16.6503 2.86976 16.6328 2.90071C16.4043 3.30719 16.1511 3.83748 15.9739 4.25429C13.9754 3.95511 11.9873 3.95511 10.0298 4.25429C9.85254 3.82822 9.59019 3.30719 9.36062 2.90071C9.34319 2.87079 9.30939 2.85532 9.27555 2.86048C7.41857 3.18031 5.64152 3.74051 3.98335 4.50191C3.96899 4.5081 3.95669 4.51843 3.94852 4.53183C0.577841 9.56755 -0.345529 14.4795 0.107445 19.3306C0.109495 19.3543 0.122817 19.377 0.141265 19.3914C2.36514 21.0246 4.51935 22.0161 6.63355 22.6732C6.66739 22.6836 6.70324 22.6712 6.72477 22.6433C7.22489 21.9604 7.6707 21.2402 8.05293 20.4829C8.07549 20.4386 8.05396 20.386 8.00785 20.3684C7.30073 20.1002 6.6274 19.7731 5.97971 19.4017C5.92848 19.3718 5.92437 19.2985 5.9715 19.2635C6.1078 19.1613 6.24414 19.0551 6.37428 18.9478C6.39783 18.9282 6.43064 18.924 6.45833 18.9364C10.7134 20.8791 15.32 20.8791 19.5249 18.9364C19.5525 18.923 19.5854 18.9272 19.6099 18.9467C19.7401 19.054 19.8764 19.1613 20.0137 19.2635C20.0609 19.2985 20.0578 19.3718 20.0066 19.4017C19.3589 19.7804 18.6855 20.1002 17.9774 20.3674C17.9313 20.3849 17.9108 20.4386 17.9333 20.4829C18.3238 21.2392 18.7696 21.9593 19.2605 22.6423C19.281 22.6712 19.3179 22.6836 19.3517 22.6732C21.4761 22.0161 23.6303 21.0246 25.8542 19.3914C25.8737 19.377 25.886 19.3553 25.8881 19.3316C26.4302 13.7232 24.98 8.85157 22.0439 4.53286C22.0367 4.51843 22.0245 4.5081 22.0101 4.50191ZM8.68836 16.3768C7.40729 16.3768 6.35173 15.2007 6.35173 13.7563C6.35173 12.3119 7.38682 11.1358 8.68836 11.1358C10.0001 11.1358 11.0455 12.3222 11.025 13.7563C11.025 15.2007 9.98986 16.3768 8.68836 16.3768ZM17.3276 16.3768C16.0466 16.3768 14.991 15.2007 14.991 13.7563C14.991 12.3119 16.0261 11.1358 17.3276 11.1358C18.6394 11.1358 19.6847 12.3222 19.6643 13.7563C19.6643 15.2007 18.6394 16.3768 17.3276 16.3768Z"
                                        fill="white" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://t.me/{{ $telegram }}">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13 26C20.1797 26 26 20.1797 26 13C26 5.8203 20.1797 0 13 0C5.8203 0 0 5.8203 0 13C0 20.1797 5.8203 26 13 26Z"
                                        fill="url(#paint0_linear_95_2200)" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.88448 12.8627C9.67424 11.2116 12.2013 10.123 13.4658 9.5971C17.076 8.09548 17.8262 7.83463 18.3152 7.82602C18.4227 7.82413 18.6632 7.85078 18.8189 7.97716C18.9504 8.08388 18.9866 8.22804 19.0039 8.32922C19.0212 8.4304 19.0428 8.66089 19.0257 8.84098C18.83 10.8966 17.9835 15.885 17.5528 18.1873C17.3706 19.1615 17.0118 19.4881 16.6644 19.5201C15.9095 19.5896 15.3362 19.0212 14.605 18.5419C13.4608 17.7919 12.8145 17.325 11.7038 16.5931C10.4203 15.7473 11.2524 15.2824 11.9838 14.5227C12.1753 14.3239 15.5015 11.2984 15.5659 11.0239C15.574 10.9896 15.5814 10.8617 15.5054 10.7941C15.4294 10.7265 15.3172 10.7496 15.2363 10.768C15.1215 10.7941 13.2937 12.0022 9.75279 14.3924C9.23397 14.7486 8.76403 14.9222 8.34299 14.9131C7.87882 14.9031 6.98595 14.6507 6.32219 14.4349C5.50807 14.1703 4.86102 14.0304 4.91736 13.5809C4.94671 13.3468 5.26908 13.1074 5.88448 12.8627Z"
                                        fill="white" />
                                    <defs>
                                        <linearGradient id="paint0_linear_95_2200" x1="13" y1="0" x2="13" y2="25.8072"
                                            gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#0E0E0E" />
                                            <stop offset="1" stop-color="#121212" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="navbar__item">
                    <button class="footer__btn">
                        {{ __('Расскажите друзьям') }}
                    </button>
                </li>
            </ul>
        </nav>
    </div>

</x-layout.footer>