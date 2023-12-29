@extends('layouts.main')

@section('content')
{{-- <div class="mx-20 content-center mt-20 mb-20">
    <h5 class="text-3xl font-extrabold dark:text-white">{!! $journal->title !!}</h5>
    <p class="mb-4 text-lg font-normal text-gray-500 dark:text-gray-400">{!! $journal->author !!},
        {{ date('M Y', strtotime($journal->created_at)) }}
    </p>
    <div class="text-base font-normal text-gray-500 dark:text-gray-400 pre-scrollable leading-6
        prose prose-blockqoute custom-content">
        {!! $parsedContents !!}
    </div>
</div> --}}

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-geay-100 dark:bg-gray-800 antialiased mt-10 blogs-section mx-20">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl">
        <!-- Article Content -->
        <article
            class="bg-white px-5 py-5 rounded-xl mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <header class="mb-4 lg:mb-6 not-format">
                <!-- Author Info -->
                <address class="flex items-center mb-6 not-italic">
                    <div class="inline-flex items-center text-sm text-gray-900 dark:text-white">
                        <!-- Author Image -->
                        {{-- <img class="mr-4 w-16 h-16 rounded-full"
                            src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                            alt="{!! $journal->author !!}"> --}}
                        <img class="mr-4 w-16 h-16 rounded-full" alt="{!! $journal->author !!}">
                        <div>
                            <!-- Author Name -->
                            <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{!!
                                $journal->author !!}</a>
                            <!-- Date -->
                            <p class="text-base text-gray-500 dark:text-gray-400">
                                <time>
                                    {{ date('M Y', strtotime($journal->created_at)) }}
                                </time>
                            </p>
                        </div>
                    </div>
                </address>
                <!-- Article Title -->
                <h1
                    class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                    {!! $journal->title !!}</h1>
            </header>
            <!-- Article Content -->
            <div
                class="mb-3 text-base font-normal text-gray-500 dark:text-gray-400 pre-scrollable leading-6 prose prose-blockqoute custom-content">
                {!! $parsedJournalContentsv2 !!}
            </div>
        </article>

        <div class="sticky top-0 max-h-screen overflow-y-auto">


            <!-- Table of Contents -->
            <div class="sticky top-0 max-h-screen overflow-y-auto mt-10">
                <fieldset class="text-base bg-white rounded-lg p-2 mb-4 max-w-sm mx-auto mt-10">
                    {{-- <legend class="px-2 text-lg font-semibold 5">
                        Table of contents
                    </legend> --}}
                    <div class="tablecontents sticky top-0 max-h-screen overflow-y-auto mx-2 mb-3">
                        {{-- {!!
                        App\Http\Controllers\JournalController::generateIndexHTML($parsedJournalContents)['index'] !!}
                        --}}
                        <ul>
                            <li class="list-none py-2 font-black text-green-700">TABLE OF CONTENTS</li>
                        </ul>
                        {!! $tableOfContentsv2 !!}
                    </div>
                </fieldset>
            </div>

            <!-- Share Card -->
            <div class="sticky top-0 max-h-screen overflow-y-auto">
                <fieldset class="text-lg rounded-lg p-2 mb-4 max-w-sm mx-auto bg-white">
                    {{-- <legend class="px-2 text-lg font-semibold">
                        Share
                    </legend> --}}
                    <ul class="flex justify-center space-x-5 list-none mb-3 mt-3">
                        <li>
                            <a href="#"
                                class="text-gray-500 hover:text-green-700 dark:hover:text-white dark:text-gray-400">
                                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-gray-500 hover:text-green-700 dark:hover:text-white dark:text-gray-400">
                                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="text-gray-500 hover:text-green-700 dark:hover:text-white dark:text-gray-400">
                                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                                    </path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </fieldset>
            </div>
        </div>
    </div>
    <!-- PREVIOUS AND NEXT ARTICLES -->
    <div class="flex items-center justify-center mt-10 lg:px-0 sm:px-6 px-4">
        <div class="mx-10 w-full flex items-center justify-between border-t border-b border-gray-300">
            <div class="flex items-center pt-5 pb-5 text-gray-600 hover:text-green-700 cursor-pointer">
                @if ($previousJournal == null)
                <p class="text-2xl ml-3 font-medium leading-none nextprev"> </p>
                @else
                <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.1665 4H12.8332" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M1.1665 4L4.49984 7.33333" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M1.1665 4.00002L4.49984 0.666687" stroke="currentColor" stroke-width="1.25"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <a class="text-2xl ml-3 font-medium leading-none nextprev no-underline" href="/journal/{{ $previousJournal->id }}">
                    {{ $previousJournal->title }}
                </a>
                @endif
            </div>
            <div class="flex items-center pt-5 pb-5 text-gray-600 hover:text-green-700 cursor-pointer">
                @if ($nextJournal == null)
                <p class="text-2xl font-medium leading-none mr-3 nextprev"></p>
                @else
                <a class="text-2xl mr-3 font-medium leading-none nextprev no-underline" href="/journal/{{ $nextJournal->id }}">
                    {{ $nextJournal->title }}
                </a>
                <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.1665 4H12.8332" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M9.5 7.33333L12.8333 4" stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M9.5 0.666687L12.8333 4.00002" stroke="currentColor" stroke-width="1.25"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                @endif
            </div>
        </div>
    </div>
</main>


{{-- RELATED ARTICLES --}}
{{-- <aside aria-label="Related articles" class="py-8 lg:py-24 bg-gray-0 dark:bg-gray-800 blogs-section">
    <div class="px-4 mx-auto max-w-screen-xl">
        <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">Related articles</h2>
        <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-3">
            @forelse($journals as $journ)
            @if ($journ->id != $journal->id)
            <article class="max-w-xs">

                <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                    <a href="/journal/{{ $journ->id }}">{{ $journ->title }}</a>
                </h2>
                <p class="mb-4 text-gray-500 dark:text-gray-400 max-h-14 overflow-hidden">
                    {{ $journ->contents }}
                </p>

            </article>
            @endif
            @empty
            <p>There's nothing here...</p>
            @endforelse
        </div>
    </div>
</aside> --}}
{{-- RELATED ARTICLES --}}

<style>
    .toc-item a {
        color: #66BB6A;
        transition: color 0.3s ease;
        padding: 2%;
        padding-top: 1%;
        padding-bottom: 1%;
        /* Add this line for a border */
        display: inline-block;
        /* Ensures that the border wraps around the content */
        width: 100%;

    }

    #nextprev {
        transition: color 0.3s ease;
    }

    .toc-item.active-toc-item a {
        color: #388E3C;
        background-color: #E8F5E9;
        transition: background-color 0.3s ease;
        font-weight: bold;
        border-radius: 6px;
    }

    .tablecontents {
        max-height: 100vh;
        overflow-x: hidden;
        /* Set the maximum height to 100% of the viewport height */
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var tocItems = document.querySelectorAll('.toc-item');
        var bufferZone = 450; // Adjust this value as needed

        function highlightActiveSection() {
            var scrollPosition = window.scrollY;

            tocItems.forEach(function (item) {
                var targetId = item.getAttribute('data-target');
                var targetElement = document.getElementById(targetId);

                if (targetElement.offsetTop - bufferZone <= scrollPosition &&
                    (targetElement.offsetTop + targetElement.offsetHeight + bufferZone) > scrollPosition) {
                    item.classList.add('active-toc-item');
                } else {
                    item.classList.remove('active-toc-item');
                }
            });
        }

        window.addEventListener('scroll', highlightActiveSection);
        highlightActiveSection();
    });
</script>
@endsection