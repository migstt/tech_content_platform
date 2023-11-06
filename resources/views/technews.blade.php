@extends('layouts.main')
@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-20 mb-20 justify-center items-center">
        @forelse($news->results as $new)
            @if ($new->image_url != '')
                <div
                    class="bg-gray-50 border border-gray-200 rounded-lg shadow dark:bg-gray-700
        dark:border-gray-700 mx-5 mt-5 relative self-center journal-div">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ $new->image_url }}" alt="" />
                    </a>
                    <div class="p-3 flex flex-col max-h-60">
                        <a href="">
                            <h6 class="mb-2 text-1xl font-semibold tracking-tight text-gray-900
                    dark:text-white journal-info"
                                style="max-height: 3em; overflow: hidden;">
                                {{ $new->title }}
                            </h6>
                        </a>
                        <p class="text-sm font-normal text-gray-500 dark:text-white mt-auto journal-info">
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1
                                text-sm font-semibold text-gray-700 mr-2 mb-2 dark:text-white
                                dark:bg-gray-800 hashtag-span">
                                #{{ $new->category[0] }}
                            </span><br>
                            {{ date('d M Y', strtotime($new->pubDate)) }}
                        </p>
                    </div>
                </div>
            @endif
        @empty
            <p>there's nothing here...</p>
        @endforelse
    </div>
@endsection