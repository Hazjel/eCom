<nav class="flex items-center justify-between px-6 h-[96px] border-b shadow sticky top-0 bg-white z-50">
    <!-- Logo -->
    <div class="flex items-center">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-32 w-32">
    </div>

    <!-- Navigation Links -->
    <div class="flex space-x-4">
        <a href="{{ route('home') }}"
            class="px-4 py-2 border border-indigo-500 text-indigo-500 rounded-lg hover:bg-indigo-100">Home</a>
        <a href="#products"
            class="px-4 py-2 border border-indigo-500 text-indigo-500 rounded-lg hover:bg-indigo-100">Products</a>
        <a href="#"
            class="px-4 py-2 border border-indigo-500 text-indigo-500 rounded-lg hover:bg-indigo-100">Category</a>
        <a href="#footer"
            class="px-4 py-2 border border-indigo-500 text-indigo-500 rounded-lg hover:bg-indigo-100">About</a>
    </div>

    <!-- Icons -->
    <div class="flex space-x-4">
        <div class="max-w-sm">
            <!-- SearchBox -->
            <div class="relative"
                data-hs-combo-box='{
              "groupingType": "default",
              "isOpenOnFocus": true,
              "apiUrl": "../assets/data/searchbox.json",
              "apiGroupField": "category",
              "outputItemTemplate": "<div data-hs-combo-box-output-item><span class=\"flex items-center cursor-pointer py-2 px-4 w-full text-sm text-gray-800 hover:bg-gray-100"><div class=\"flex items-center w-full\"><div class=\"flex items-center justify-center rounded-full bg-gray-200 size-6 overflow-hidden me-2.5\"><img class=\"shrink-0\" data-hs-combo-box-output-item-attr=&apos;[{\"valueFrom\": \"image\", \"attr\": \"src\"}, {\"valueFrom\": \"name\", \"attr\": \"alt\"}]&apos; /></div><div data-hs-combo-box-output-item-field=\"name\" data-hs-combo-box-search-text data-hs-combo-box-value></div></div><span class=\"hidden hs-combo-box-selected:block\"><svg class=\"shrink-0 size-3.5 text-blue-600" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"></polyline></svg></span></span></div>",
              "groupingTitleTemplate": "<div class=\"text-xs uppercase text-gray-500 m-3 mb-1"></div>"
            }'>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
                        <svg class="shrink-0 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.3-4.3"></path>
                        </svg>
                    </div>
                    <input
                        class="py-3 ps-10 pe-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                        type="text" role="combobox" aria-expanded="false" placeholder="Type a name" value=""
                        data-hs-combo-box-input="">
                </div>

                <!-- SearchBox Dropdown -->
                <div class="absolute z-50 w-full bg-white border border-gray-200 rounded-lg" style="display: none;"
                    data-hs-combo-box-output="">
                    <div class="max-h-72 rounded-b-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300"
                        data-hs-combo-box-output-items-wrapper=""></div>
                </div>
                <!-- End SearchBox Dropdown -->
            </div>
            <!-- End SearchBox -->
        </div>

        <button class="text-indigo-500 hover:text-indigo-600">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                <mask id="mask0_23_51" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="32"
                    height="32">
                    <rect width="32" height="32" fill="#D9D9D9" />
                </mask>
                <g mask="url(#mask0_23_51)">
                    <path
                        d="M9.53833 28.7437C8.89056 28.7437 8.33978 28.5167 7.886 28.0627C7.43222 27.6089 7.20533 27.0581 7.20533 26.4103C7.20533 25.7623 7.43222 25.2114 7.886 24.7577C8.33978 24.3039 8.89056 24.077 9.53833 24.077C10.1863 24.077 10.7372 24.3039 11.191 24.7577C11.6448 25.2114 11.8717 25.7623 11.8717 26.4103C11.8717 27.0581 11.6448 27.6089 11.191 28.0627C10.7372 28.5167 10.1863 28.7437 9.53833 28.7437ZM22.4617 28.7437C21.8137 28.7437 21.2628 28.5167 20.809 28.0627C20.3552 27.6089 20.1283 27.0581 20.1283 26.4103C20.1283 25.7623 20.3552 25.2114 20.809 24.7577C21.2628 24.3039 21.8137 24.077 22.4617 24.077C23.1094 24.077 23.6602 24.3039 24.114 24.7577C24.5678 25.2114 24.7947 25.7623 24.7947 26.4103C24.7947 27.0581 24.5678 27.6089 24.114 28.0627C23.6602 28.5167 23.1094 28.7437 22.4617 28.7437ZM8.02033 7.66667L11.4 14.7437H20.4897C20.5666 14.7437 20.635 14.7244 20.695 14.686C20.7548 14.6476 20.806 14.5941 20.8487 14.5257L24.4257 8.02567C24.477 7.93167 24.4812 7.84833 24.4383 7.77567C24.3957 7.703 24.323 7.66667 24.2203 7.66667H8.02033ZM7.06167 5.66667H25.5743C26.1197 5.66667 26.532 5.89878 26.8113 6.363C27.0909 6.827 27.1042 7.30089 26.8513 7.78467L22.5793 15.523C22.3607 15.9077 22.0714 16.2072 21.7117 16.4217C21.3517 16.6363 20.9572 16.7437 20.5283 16.7437H10.8L9.25633 19.564C9.18789 19.6667 9.18578 19.7778 9.25 19.8973C9.314 20.0171 9.41011 20.077 9.53833 20.077H23.795C24.0786 20.077 24.3161 20.1727 24.5077 20.364C24.699 20.5556 24.7947 20.7932 24.7947 21.077C24.7947 21.3608 24.699 21.5983 24.5077 21.7897C24.3161 21.9812 24.0786 22.077 23.795 22.077H9.53833C8.64944 22.077 7.98156 21.6937 7.53467 20.927C7.08756 20.1603 7.07178 19.3949 7.48733 18.6307L9.38967 15.2103L4.53867 5H3C2.71622 5 2.47867 4.90422 2.28733 4.71267C2.09578 4.52133 2 4.28378 2 4C2 3.71622 2.09578 3.47867 2.28733 3.28733C2.47867 3.09578 2.71622 3 3 3H5.03833C5.26589 3 5.47789 3.06022 5.67433 3.18067C5.871 3.30133 6.02056 3.471 6.123 3.68967L7.06167 5.66667Z"
                        fill="#1E1B4B" />
                </g>
            </svg>
        </button>
        <div class="m-1 hs-dropdown relative inline-flex">
            <button id="hs-dropdown-default" type="button"
                class="hs-dropdown-toggle focus:outline-none disabled:opacity-50 disabled:pointer-events-none"
                aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                    fill="none">
                    <mask id="mask0_23_40" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="32"
                        height="32">
                        <rect width="32" height="32" fill="#D9D9D9" />
                    </mask>
                    <g mask="url(#mask0_23_40)">
                        <path
                            d="M16 15.5896C14.7167 15.5896 13.6181 15.1327 12.7043 14.2189C11.7903 13.3049 11.3333 12.2062 11.3333 10.9229C11.3333 9.63956 11.7903 8.541 12.7043 7.62723C13.6181 6.71323 14.7167 6.25623 16 6.25623C17.2833 6.25623 18.3819 6.71323 19.2957 7.62723C20.2097 8.541 20.6667 9.63956 20.6667 10.9229C20.6667 12.2062 20.2097 13.3049 19.2957 14.2189C18.3819 15.1327 17.2833 15.5896 16 15.5896ZM6 23.7179V22.7792C6 22.1263 6.17733 21.5217 6.532 20.9652C6.88667 20.4088 7.36067 19.981 7.954 19.6819C9.27178 19.0359 10.6012 18.5513 11.9423 18.2282C13.2834 17.9051 14.636 17.7436 16 17.7436C17.364 17.7436 18.7166 17.9051 20.0577 18.2282C21.3988 18.5513 22.7282 19.0359 24.046 19.6819C24.6393 19.981 25.1133 20.4088 25.468 20.9652C25.8227 21.5217 26 22.1263 26 22.7792V23.7179C26 24.2801 25.803 24.7583 25.409 25.1526C25.015 25.5466 24.5368 25.7436 23.9743 25.7436H8.02567C7.46322 25.7436 6.985 25.5466 6.591 25.1526C6.197 24.7583 6 24.2801 6 23.7179ZM8 23.7436H24V22.7792C24 22.5092 23.9218 22.2592 23.7653 22.0292C23.6089 21.7994 23.3966 21.6119 23.1283 21.4666C21.9794 20.9008 20.8081 20.4721 19.6143 20.1806C18.4203 19.8892 17.2156 19.7436 16 19.7436C14.7844 19.7436 13.5797 19.8892 12.3857 20.1806C11.1919 20.4721 10.0206 20.9008 8.87167 21.4666C8.60344 21.6119 8.39111 21.7994 8.23467 22.0292C8.07822 22.2592 8 22.5092 8 22.7792V23.7436ZM16 13.5896C16.7333 13.5896 17.3611 13.3284 17.8833 12.8062C18.4056 12.284 18.6667 11.6562 18.6667 10.9229C18.6667 10.1896 18.4056 9.56178 17.8833 9.03956C17.3611 8.51734 16.7333 8.25623 16 8.25623C15.2667 8.25623 14.6389 8.51734 14.1167 9.03956C13.5944 9.56178 13.3333 10.1896 13.3333 10.9229C13.3333 11.6562 13.5944 12.284 14.1167 12.8062C14.6389 13.3284 15.2667 13.5896 16 13.5896Z"
                            fill="#1E1B4B" />
                    </g>
                </svg>
            </button>

            <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-transparent shadow-md rounded-lg mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full"
                role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-default">
                <div class="p-1 space-y-0.5">
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                        href="{{ route('login') }}" target="_blank">
                        Login
                    </a>
                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                        href="{{ route('register') }}" target="_blank">
                        Register
                    </a>
                </div>
            </div>
        </div>

        </a>
    </div>
</nav>
