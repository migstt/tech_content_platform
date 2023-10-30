<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

</head>

<body class="blogs-section bg-white dark:bg-gray-900">

    @include('partials.navbar')

    <div class="container w-100 mx-auto">
        <div class="flex justify-center p-25">
            @yield('content')
        </div>
    </div>

    @include('partials.footer')

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
</body>
</html>
