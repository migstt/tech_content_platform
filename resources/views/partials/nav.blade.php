<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 bg-opacity-30 backdrop-blur-sm" id="navbar">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-1">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">TechTickle</span>
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">

            <ul class="items-center justify-between mr-12 flex flex-col font-small rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:border-gray-700 list-none">
                <li class="flex items-center list-item-hover">
                    <a href="{{ route('write') }}"
                       class="ml-1 flex items-center py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
            
                        <svg class="svg-hover" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-label="Write">
                            <path
                                d="M14 4a.5.5 0 0 0 0-1v1zm7 6a.5.5 0 0 0-1 0h1zm-7-7H4v1h10V3zM3 4v16h1V4H3zm1 17h16v-1H4v1zm17-1V10h-1v10h1zm-1 1a1 1 0 0 0 1-1h-1v1zM3 20a1 1 0 0 0 1 1v-1H3zM4 3a1 1 0 0 0-1 1h1V3z"
                                fill="currentColor"></path>
                            <path
                                d="M17.5 4.5l-8.46 8.46a.25.25 0 0 0-.06.1l-.82 2.47c-.07.2.12.38.31.31l2.47-.82a.25.25 0 0 0 .1-.06L19.5 6.5m-2-2l2.32-2.32c.10-.10.26-.10.36 0l1.64 1.64c.10.10.10.26 0 .36L19.5 6.5m-2-2l2 2"
                                stroke="currentColor"></path>
                        </svg>
            
                        <span class="ml-1">Write</span>
                    </a>
                </li>
            </ul>
            

            @auth
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-small border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-gray-50 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 list-none">
                    <li>
                        <a href="{{ route('logout') }}"
                            class="ml-4 block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Log out
                        </a>
                    </li>
                </ul>
            </div>
            @endauth

            @guest
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-small border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 list-none">
                    <li>
                        <a href="{{ route('google.auth') }}"
                            class="ml-4 block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Sign
                            in
                        </a>
                    </li>
                </ul>
            </div>
            <button type="button"
                class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-small rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <a href="{{ route('google.auth') }}">Sign up</a>
            </button>
            @endguest



            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>

        </div>

        {{-- <div class="items-center justify-between hidden flex-1 md:flex md:w-auto md:order-1 ml-10 mr-10"
            id="navbar-sticky">
            <div class="relative hidden md:block w-full">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none w-full">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search icon</span>
                </div>
                <input type="text" id="search-bar" name="q" required=""
                    class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                    placeholder="Search...">
            </div>
        </div> --}}

        {{-- <div class="w-full max-w-2xl rounded-md relative">
            <label class="bg-white rounded-md relative min-w-sm max-w-2xl flex flex-col md:flex-row items-center justify-center gap-2 focus-within:border-gray-300" for="search-bar">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 ml-2">
                    <path d="M11 2C15.968 2 20 6.032 20 11C20 15.968 15.968 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2ZM11 18C14.8675 18 18 14.8675 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18ZM19.4853 18.0711L22.3137 20.8995L20.8995 22.3137L18.0711 19.4853L19.4853 18.0711Z"></path>
                </svg>
                <input wire:model="search" id="search-bar" placeholder="Search" name="q" class="px-2 py-2 w-full rounded-md flex-1 outline-none bg-white" required="">
            </label>
            <div class="container absolute bg-white rounded-md z-10" id="live-result-article">

            </div>
            <div class="container absolute bg-white rounded-md" id="live-result-user">

            </div>
        </div> --}}

        @livewire('search')


    </div>
</nav>



<style>
    .list-item-hover:hover .svg-hover path,
    .list-item-hover:hover a {
        color: #388E3C;
    }
</style>

<script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("navbar").style.top = "0";
        } else {
            // document.getElementById("navbar").style.top = "-60px";
            document.getElementById("navbar").style.top = "-68px";
        }
        prevScrollpos = currentScrollPos;
    }

    const data = [
    'Jean Marc',
    'Jean Paul',
    'John Doe',
    'Jane Doe',
    'James Smith',
    'Jack Johnson',
    'Jessica Miller',
    'Jennifer Brown',
    'Justin White'
  ];

//   const searchInput = document.getElementById('search-bar');
//   const liveResult = document.getElementById('live-result-article');
//   const liveResultUser = document.getElementById('live-result-user');

//   searchInput.addEventListener('input', handleSearch);

//   function handleSearch() {
//     const query = searchInput.value.toLowerCase();

//     if (query === '') {
//       liveResult.innerHTML = '';
//       liveResultUser.innerHTML = '';
//       return;
//     }

//     const matchedItems = data.filter(item => item.toLowerCase().includes(query));

//     const resultHtml = matchedItems.length > 0 ?
//       matchedItems.map(item =>
//         `<li class="flex flex-row"><div class="select-none cursor-pointer hover:bg-gray-100 flex flex-1 items-center px-6 py-2 text-sm"><div>${item}</div></div></li>`
//       ).join('') :
//       '<li class="flex flex-row"><div class="select-none cursor-pointer hover:bg-gray-100 flex flex-1 items-center px-6 py-2 text-sm"><div>Search: {input}</div></div></li>';

//     liveResult.innerHTML = `<p class="px-4 py-2 text-xs text-gray-500">Articles</p><ul class="flex flex-col divide-y w-full">${resultHtml}</ul>`;

//     const resultHtmlUsers = matchedItems.length > 0 ?
//       matchedItems.map(item =>
//         `<li class="flex flex-row"><div class="select-none cursor-pointer hover:bg-gray-100 flex flex-1 items-center px-6 py-2 text-sm"><div>${item}</div></div></li>`
//       ).join('') :
//       '<li class="flex flex-row"><div class="select-none cursor-pointer hover:bg-gray-100 flex flex-1 items-center px-6 py-2 text-sm"><div>Search: {input}</div></div></li>';
      
//     liveResultUser.innerHTML = `<p class="px-4 py-2 text-xs text-gray-500">Users</p><ul class="flex flex-col divide-y w-full">${resultHtmlUsers}</ul>`;
//   }
</script>