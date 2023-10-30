<nav class="bg-white shadow dark:bg-gray-800 px-25">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button"
                    class="hover:bg-gray-300 dark:hover:bg-gray-600 dark:bg-gray-700 relative inline-flex items-center justify-center rounded-md p-2 text-gray-600 dark:text-white hover:bg-gray-700"
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
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="{{ route('home') }}"
                            class="text-black bg-gray-100 hover:bg-gray-400 hover:text-white dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-white dark:hover:text-black rounded-md px-3 py-2 text-sm font-medium">Home</a>
                            <a href="{{ route('authors') }}"
                            class="text-black bg-gray-100 hover:bg-gray-400 hover:text-white dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-white dark:hover:text-black rounded-md px-3 py-2 text-sm font-medium">Authors</a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                <button type="button" id="theme-toggle"
                    class="mr-3 relative rounded-full bg-white dark:bg-gray-800 p-1 text-gray-400 hover:text-black dark:hover:text-white">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">Toggle Dark/Light Mode</span>
                    <svg id="theme-toggle-dark-icon" class="w-4 h-4" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path
                            d="M17.8 13.75a1 1 0 0 0-.859-.5A7.488 7.488 0 0 1 10.52 2a1 1 0 0 0 0-.969A1.035 1.035 0 0 0 9.687.5h-.113a9.5 9.5 0 1 0 8.222 14.247 1 1 0 0 0 .004-.997Z">
                        </path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="w-4 h-4 hidden" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 15a5 5 0 1 0 0-10 5 5 0 0 0 0 10Zm0-11a1 1 0 0 0 1-1V1a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1Zm0 12a1 1 0 0 0-1 1v2a1 1 0 1 0 2 0v-2a1 1 0 0 0-1-1ZM4.343 5.757a1 1 0 0 0 1.414-1.414L4.343 2.929a1 1 0 0 0-1.414 1.414l1.414 1.414Zm11.314 8.486a1 1 0 0 0-1.414 1.414l1.414 1.414a1 1 0 0 0 1.414-1.414l-1.414-1.414ZM4 10a1 1 0 0 0-1-1H1a1 1 0 0 0 0 2h2a1 1 0 0 0 1-1Zm15-1h-2a1 1 0 1 0 0 2h2a1 1 0 0 0 0-2ZM4.343 14.243l-1.414 1.414a1 1 0 1 0 1.414 1.414l1.414-1.414a1 1 0 0 0-1.414-1.414ZM14.95 6.05a1 1 0 0 0 .707-.293l1.414-1.414a1 1 0 1 0-1.414-1.414l-1.414 1.414a1 1 0 0 0 .707 1.707Z">
                        </path>
                    </svg>
                </button>

                <!-- Profile dropdown -->
                <div class="relative ml-3">
                    <div>
                        <button type="button"
                            class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </button>
                    </div>
                    <div class="hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <!-- Active: "bg-gray-100", Not Active: "" -->
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                            id="user-menu-item-0">Your Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                            id="user-menu-item-1">Settings</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                            id="user-menu-item-2">Sign out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="{{ route('home') }}"
                class="bg-gray-100 hover:bg-gray-300 text-black dark:text-white dark:bg-gray-700 dark:hover:bg-gray-600 block rounded-md px-3 py-2 text-base font-medium"
                aria-current="page">Home</a>
            <a href="{{ route('authors') }}"
                class="bg-gray-100 hover:bg-gray-300 text-black dark:text-white dark:bg-gray-700 dark:hover:bg-gray-600 block rounded-md px-3 py-2 text-base font-medium"
                aria-current="page">Authors</a>
        </div>
    </div>
    <script>
        const userMenuButton = document.getElementById("user-menu-button");
        const userMenu = document.querySelector('[aria-labelledby="user-menu-button"]');

        // Function to toggle the user menu
        function toggleUserMenu() {
            if (userMenu.style.display === "block") {
                userMenu.style.display = "none";
            } else {
                userMenu.style.display = "block";
            }
        }

        // USER MENU MOBILE
        // Add a click event listener to the user menu button
        userMenuButton.addEventListener("click", toggleUserMenu);
        const mobileMenuButton = document.querySelector('[aria-controls="mobile-menu"]');
        const mobileMenu = document.getElementById("mobile-menu");
        // Function to toggle the mobile menu
        function toggleMobileMenu() {
            if (mobileMenu.style.display === "block") {
                mobileMenu.style.display = "none";
            } else {
                mobileMenu.style.display = "block";
            }
        }
        mobileMenuButton.addEventListener("click", toggleMobileMenu);


        // TOGGLE DARK OR LIGHT MODE
        const themeToggle = document.getElementById("theme-toggle");
        const darkIcon = document.getElementById("theme-toggle-dark-icon");
        const lightIcon = document.getElementById("theme-toggle-light-icon");
        const body = document.body;

        themeToggle.addEventListener("click", () => {
            if (body.classList.contains("dark")) {
                body.classList.remove("dark");
                darkIcon.classList.remove("hidden");
                lightIcon.classList.add("hidden");
            } else {
                body.classList.add("dark");
                darkIcon.classList.add("hidden");
                lightIcon.classList.remove("hidden");
            }
        });
    </script>

</nav>
