<!doctype>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <title>Tech Journal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <script src="/resources/js/app.js"></script>

    <style>
        #navbar {
            position: fixed;
            top: 0;
            width: 100%;
            /* background-color: #388E3C; */
            padding: 10px;
            border-bottom: 1px solid #ddd;
            transition: top 0.5s;
            z-index: 1000;
        }

        html {
            scroll-behavior: smooth;
        }

        #body,
        .delay-tran,
        .menu-button,
        .blogs-section,
        .journal-info,
        .hashtag-span {
            transition: 0.5s;
        }

        .dark-mode {
            background-color: rgb(31 41 55);
        }

        .pre-scrollable {
            overflow-y: auto;
        }

        .toastui-editor-mode-switch {
            display: none !important;
        }
   
    </style>

</head>

<body class="blogs-section bg-gray-100">
    @include('partials.navigation')
    <div class="container mx-auto justify-center items-center min-h-screen">
        @yield('content')
    </div>
    @include('partials.footer')

    <script>
        const userMenuButton = document.getElementById("user-menu-button");
        const userMenu = document.querySelector('[aria-labelledby="user-menu-button"]');

        // TOGGLE USER MENU
        function toggleUserMenu() {
            if (userMenu.style.display === "block") {
                userMenu.style.display = "none";
            } else {
                userMenu.style.display = "block";
            }
        }

        // USER MENU MOBILE
        userMenuButton.addEventListener("click", toggleUserMenu);
        const mobileMenuButton = document.querySelector('[aria-controls="mobile-menu"]');
        const mobileMenu = document.getElementById("mobile-menu");

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
        var body = document.body;

        themeToggle.addEventListener("click", () => {
            if (body.classList.contains("dark")) {
                body.classList.remove("dark");
                darkIcon.classList.remove("hidden");
                lightIcon.classList.add("hidden");
                body.classList.toggle("dark-mode");
            } else {
                body.classList.toggle("dark");
                darkIcon.classList.add("hidden");
                lightIcon.classList.remove("hidden");
                body.classList.toggle("dark-mode");
            }
        });

        // SMOOTH SCROLLING AND REDIRECT ON TABLE OF CONTENTS SECTION CLICK
        document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.tablecontents a').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                const targetSlug = this.getAttribute('href').substring(1);
                const targetElement = document.querySelector('a[name="' + targetSlug + '"]');

                if (targetElement) {
                    const offset = targetElement.getBoundingClientRect().top + window.scrollY;
                    
                    window.scrollTo({
                        top: offset - 20,
                        behavior: 'smooth'
                    });
                }
            });
        });
        });


        document.addEventListener('DOMContentLoaded', function () {
        var tocItems = document.querySelectorAll('.toc-item');

            function highlightActiveSection() {
                var scrollPosition = window.scrollY;

                tocItems.forEach(function (item) {
                    var targetId = item.getAttribute('data-target');
                    var targetElement = document.getElementById(targetId);

                    if (targetElement.offsetTop <= scrollPosition && (targetElement.offsetTop + targetElement.offsetHeight) > scrollPosition) {
                        item.classList.add('active-toc-item');
                    } else {
                        item.classList.remove('active-toc-item');
                    }
                });
            }
            window.addEventListener('scroll', highlightActiveSection);
            highlightActiveSection(); // Initial highlighting
        });
      
    </script>
</body>

</html>