@extends('layouts.main')
@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-20 mb-20 justify-center items-center">
        @foreach ($news as $item)
            @if (isset($item->news_string))
                @php
                    $newsData = json_decode($item->news_string, true);
                @endphp

                @if (isset($newsData['results']) && is_array($newsData['results']))
                    @foreach ($newsData['results'] as $new)
                        @if ($new['image_url'] != '')
                            <div class="news-item ">
                                <div
                                    class="bg-gray-50 border border-gray-200 rounded-lg shadow dark:bg-gray-700
                                dark:border-gray-700 mx-5 mt-5 relative self-center delay-tran">
                                    <a href="#">
                                        <img class="rounded-t-lg w-full h-60" src="{{ $new['image_url'] }}" alt="" />
                                    </a>
                                    <div class="p-3 flex flex-col max-h-60">
                                        <a href="">
                                            <h6 class="mb-2 text-1xl font-semibold tracking-tight text-gray-900
                                            dark:text-white journal-info line-clamp-2 h-20 delay-tran"
                                                style="max-height: 3em; overflow: hidden;">
                                                {{ $new['title'] }}
                                            </h6>
                                        </a>
                                        <p class="text-sm font-normal text-gray-500 dark:text-white
                                            mt-auto journal-info">
                                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1
                                            text-sm font-semibold text-gray-700 mr-2 mb-2 dark:text-white
                                            dark:bg-gray-800 hashtag-span delay-tran">
                                                #{{ $new['category'][0] }}
                                            </span><br>
                                            {{ date('d M Y', strtotime($new['pubDate'])) }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif
            @endif
        @endforeach

    </div>
@endsection
