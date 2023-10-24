<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script>
        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }
    </script>
</head>

<body class="">

    <div class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-700">
        <a href="{{ route('google.auth') }}" class="block px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 hover:text-gray-10 ">
            Hello User! Login or Register with Google
        </a>
    </div>
</body>

</html>
