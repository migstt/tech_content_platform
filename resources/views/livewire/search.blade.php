<div class="w-full max-w-2xl rounded-md relative">
    <label class="bg-white rounded-md relative min-w-sm max-w-2xl flex flex-col md:flex-row items-center justify-center gap-2 focus-within:border-gray-300" for="search-bar">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6 ml-2">
            <path d="M11 2C15.968 2 20 6.032 20 11C20 15.968 15.968 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2ZM11 18C14.8675 18 18 14.8675 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18ZM19.4853 18.0711L22.3137 20.8995L20.8995 22.3137L18.0711 19.4853L19.4853 18.0711Z"></path>
        </svg>
        <input wire:model.live="search" id="search-bar" placeholder="Search" name="q" class="px-2 py-2 w-full rounded-md flex-1 outline-none bg-white" required="">
    </label>
    @if ($search)
    <div class="container absolute bg-white rounded-md z-10" id="live-result-article">
        <p class="px-4 py-2 text-xs text-gray-500">Articles</p>
        <ul class="flex flex-col divide-y w-full">
            @forelse($resultsArticle as $result)
            @php
            // Replace spaces in title with dash and make it lowercase
            // for routing, showing in web the dashes title instead of
            // the id.
            $lowercaseDashedTitle = str_replace(' ', '-', strtolower($result->title));
            @endphp
                <li class="flex flex-row rounded-sm">
                    <div class="select-none cursor-pointer hover:bg-gray-100 flex flex-1 items-center px-6 py-2 text-sm">
                        <div><a href="/article/{{ $result->id }}/{{ $lowercaseDashedTitle }}">{{ $result->title }}</a></div>
                    </div>
                </li>
            @empty
                <li class="flex flex-row">
                    <div class="select-none cursor-pointer hover:bg-gray-100 flex flex-1 items-center px-6 py-2 text-sm">
                        <div>Search: {{ $search }}</div>
                    </div>
                </li>
            @endforelse
        </ul>
    </div>
    <div class="container absolute bg-white rounded-md" id="live-result-user">
        {{-- List user results here. --}}
    </div>
    @endif

</div>
@script
<script>
    const searchInput = document.getElementById('search-bar');
    const liveResultArticle = document.getElementById('live-result-article');
    
    function showResults() {
        liveResultArticle.style.display = 'block';
    }

    function hideResults() {
        liveResultArticle.style.display = 'none';
    }

    // Optionally, you can add a scroll event listener to hide results on scroll
    window.addEventListener('scroll', function() {
        hideResults();
    });
</script>
@endscript