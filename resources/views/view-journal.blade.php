@extends('layouts.main')

@section('content')

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-geay-100 dark:bg-gray-800 antialiased mt-10 blogs-section mx-20">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl">
        <!-- Article Content -->
        <article
            class="bg-white px-5 py-5 rounded-t-xl mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
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
                    <legend></legend>
                    <div class="tablecontents sticky top-0 max-h-screen overflow-y-auto mx-2 mb-3">
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
                    <legend></legend>
                    <ul class="flex justify-center space-x-2 list-none mb-3 mt-3">
                        <button type="button" data-te-ripple-init data-te-ripple-color="light"
                            class="inline-block rounded px-4 py-3 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg"
                            style="background-color: #1877f2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                viewBox="0 0 25 25">
                                <path
                                    d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                            </svg>
                        </button>
                        <button type="button" data-te-ripple-init data-te-ripple-color="light"
                            class="inline-block rounded px-4 py-3 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg"
                            style="background-color: #1da1f2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                viewBox="0 0 25 25">
                                <path
                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                            </svg>
                        </button>
                        <button type="button" data-te-ripple-init data-te-ripple-color="light"
                            class="inline-block rounded px-4 py-3 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg"
                            style="background-color: #0077b5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                viewBox="0 0 25 25">
                                <path
                                    d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                            </svg>
                        </button>
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
                @php
                $previousJournalTransformed = str_replace(' ', '-', strtolower($previousJournal->title));
                @endphp
                <a class="text-2xl ml-3 font-medium leading-none nextprev no-underline"
                    href="/article/{{ $previousJournal->id }}/{{ $previousJournalTransformed }}">
                    {{ $previousJournal->title }}
                </a>
                @endif
            </div>
            <div class="flex items-center pt-5 pb-5 text-gray-600 hover:text-green-700 cursor-pointer">
                @if ($nextJournal == null)
                <p class="text-2xl font-medium leading-none mr-3 nextprev"></p>
                @else
                @php
                $nextJournalTransformed = str_replace(' ', '-', strtolower($nextJournal->title));
                @endphp
                <a class="text-2xl mr-3 font-medium leading-none nextprev no-underline"
                    href="/article/{{ $nextJournal->id }}/{{ $nextJournalTransformed }}">
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