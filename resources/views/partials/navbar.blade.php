<nav class="fixed top-0 w-full transition-transform bg-white shadow dark:bg-gray-800 px-25 z-50" id="navbar">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                {{-- MOBILE MENU BUTTON --}}
                <button type="button"
                    class="hover:bg-gray-300 dark:hover:bg-gray-600 dark:bg-gray-700
                            relative inline-flex items-center justify-center rounded-md p-2
                            text-gray-600 dark:text-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>

                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>

                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                        alt="Your Company">
                </div>
                {{-- MOBILE VIEW MENU OPTIONS --}}
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <a href="{{ route('home') }}"
                            class="text-black bg-gray-50 hover:bg-gray-400 hover:text-white dark:bg-gray-700
                            dark:hover:bg-gray-600 dark:text-white dark:hover:text-black rounded-md px-3 py-2
                            text-sm font-medium menu-button">Home</a>
                        {{-- <a href="{{ route('authors') }}"
                            class="text-black bg-gray-50 hover:bg-gray-400 hover:text-white dark:bg-gray-700
                            dark:hover:bg-gray-600 dark:text-white dark:hover:text-black rounded-md px-3 py-2
                            text-sm font-medium menu-button">Authors</a> --}}
                        <a href="{{ route('technews') }}"
                            class="text-black bg-gray-50 hover:bg-gray-400 hover:text-white dark:bg-gray-700
                            dark:hover:bg-gray-600 dark:text-white dark:hover:text-black rounded-md px-3 py-2
                            text-sm font-medium menu-button">Latest Tech News</a>
                    </div>
                </div>
            </div>

            {{-- DIV FOR TOGGLE MODE, PROFILE DROPDOWN OR SIGN UP BUTTON --}}
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <button type="button" id="theme-toggle"
                    class="mr-3 relative rounded-full bg-white dark:bg-gray-800 p-1 text-gray-400 hover:text-black
                    dark:hover:text-white">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">Toggle Dark/Light Mode</span>
                    <svg id="theme-toggle-dark-icon" class="w-4 h-4" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path d="M17.8 13.75a1 1 0 0 0-.859-.5A7.488 7.488 0 0 1 10.52 2a1 1 0 0 0 0-.969A1.035
                             1.035 0 0 0 9.687.5h-.113a9.5 9.5 0 1 0 8.222 14.247 1 1 0 0 0 .004-.997Z">
                        </path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="w-4 h-4 hidden" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 15a5 5 0 1 0 0-10 5 5 0 0 0 0 10Zm0-11a1 1 0 0 0 1-1V1a1 1 0 0 0-2 0v2a1
                            1 0 0 0 1 1Zm0 12a1 1 0 0 0-1 1v2a1 1 0 1 0 2 0v-2a1 1 0 0 0-1-1ZM4.343 5.757a1
                            1 0 0 0 1.414-1.414L4.343 2.929a1 1 0 0 0-1.414 1.414l1.414 1.414Zm11.314 8.486a1
                            1 0 0 0-1.414 1.414l1.414 1.414a1 1 0 0 0 1.414-1.414l-1.414-1.414ZM4 10a1
                            1 0 0 0-1-1H1a1 1 0 0 0 0 2h2a1 1 0 0 0 1-1Zm15-1h-2a1 1 0 1 0 0 2h2a1
                            1 0 0 0 0-2ZM4.343 14.243l-1.414 1.414a1 1 0 1 0 1.414 1.414l1.414-1.414a1
                            1 0 0 0-1.414-1.414ZM14.95 6.05a1 1 0 0 0 .707-.293l1.414-1.414a1 1 0 1
                            0-1.414-1.414l-1.414 1.414a1 1 0 0 0 .707 1.707Z">
                        </path>
                    </svg>
                </button>

                {{-- PROFILE PICTURE DROPDOWN OR GOOGLE SIGNUN --}}
                <div class="relative ml-3 flex items-center">
                    {{-- PROFILE PICTURE and CREATE JOURNAL WITH DROPDOWN FOR AUTHENTICATED USERS --}}
                    @auth
                        <a href="{{ route('create') }}">
                            <button id="user-menu-button" type="button"
                                class="mr-5 mt-2 text-white bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4
                                    focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-5 py-2.5
                                    text-center inline-flex items-center dark:focus:ring-[#4285F4]/55 mb-2">
                                Publish a Journal
                            </button>
                        </a>
                        <button type="button"
                            class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2
                                focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full" src="" alt="profile pic">
                        </button>
                        <div class="hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white
                             py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                id="user-menu-item-0">Your Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                id="user-menu-item-2">Publish a Journal</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                id="user-menu-item-1">Settings</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                id="user-menu-item-2">Sign out</a>
                        </div>
                    @endauth
                    {{-- SIGN IN WITH GOOGLE BUTTON FOR GUEST USERS --}}
                    @guest
                        <a href="{{ route('google.auth') }}">
                            <button id="user-menu-button" type="button"
                                class="mt-2 text-white bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4
                                    focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-5 py-2.5
                                    text-center inline-flex items-center dark:focus:ring-[#4285F4]/55 mr-2 mb-2">
                                <svg class="mr-2 -ml-1 w-4 h-4" aria-hidden="true" focusable="false" data-prefix="fab"
                                    data-icon="google" role="img" mlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 488 512">
                                    <path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504
                                                            110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5
                                                            166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0
                                                            86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4
                                                            140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z">
                                    </path>
                                </svg>
                                Sign in with Google
                            </button>
                        </a>
                    @endguest
                </div>
            </div>
        </div>
    </div>

    {{-- MOBILE USER MENU --}}
    <div class="hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <a href="{{ route('home') }}"
                class="bg-gray-100 hover:bg-gray-300 text-black dark:text-white dark:bg-gray-700
                dark:hover:bg-gray-600 block rounded-md px-3 py-2 text-base font-medium"
                aria-current="page">Home</a>
            <a href="{{ route('authors') }}"
                class="bg-gray-100 hover:bg-gray-300 text-black dark:text-white dark:bg-gray-700
                dark:hover:bg-gray-600 block rounded-md px-3 py-2 text-base font-medium"
                aria-current="page">Authors</a>
        </div>
    </div>
</nav>
