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

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-800 antialiased mt-10 blogs-section">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl">
        <!-- Article Content -->
        <article
            class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <header class="mb-4 lg:mb-6 not-format">
                <!-- Author Info -->
                <address class="flex items-center mb-6 not-italic">
                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
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
                class="text-base font-normal text-gray-500 dark:text-gray-400 pre-scrollable leading-6 prose prose-blockqoute custom-content">
                {!! $parsedJournalContentsv2 !!}
            </div>
        </article>

        <!-- Table of Contents -->
        <div class="tablecontents sticky top-0 max-h-screen overflow-y-auto">
            <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white mt-20">TABLE OF CONTENTS</h2>
            {{-- {!! App\Http\Controllers\JournalController::generateIndexHTML($parsedJournalContents)['index'] !!} --}}
            {!! $tableOfContentsv2 !!}
        </div>
    </div>
</main>

<aside aria-label="Related articles" class="py-8 lg:py-24 bg-gray-0 dark:bg-gray-800 blogs-section">
    <div class="px-4 mx-auto max-w-screen-xl">
        <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">Related articles</h2>
        <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-3">
            @forelse($journals as $journ)
            @if ($journ->id != $journal->id)
            <article class="max-w-xs">

                {{-- CENTERED ARTICLES --}}
                {{-- <article class="max-w-xs mx-auto"> --}}
                    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                        <a href="/journal/{{ $journ->id }}">{{ $journ->title }}</a>
                    </h2>
                    <p class="mb-4 text-gray-500 dark:text-gray-400 max-h-14 overflow-hidden">
                        {{ $journ->contents }}
                    </p>

                    {{-- <a href="#"
                        class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                        Read in 2 minutes
                    </a> --}}
                </article>
                @endif
                @empty
                <p>There's nothing here...</p>
                @endforelse
        </div>
    </div>
</aside>

<style>
    .toc-item a {
        color: #333;
        transition: color 0.3s ease;
        margin-right: 5%;
        padding: 1%;
    }

    .toc-item.active-toc-item a {
        color: #666;
        background-color: #f0f0f0;
        transition: background-color 0.3s ease;
    }

    .tablecontents {
        max-height: 100vh;
        /* Set the maximum height to 100% of the viewport height */
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var tocItems = document.querySelectorAll('.toc-item');
        var bufferZone = 300; // Adjust this value as needed

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