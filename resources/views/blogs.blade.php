@extends('layouts.main')
@section('content')
    <div class="px-6 py-8 mx-20 mt-10">
        <div class="container flex justify-between mx-auto">
            <div class="w-full lg:w-8/12">
                <div class="flex items-center justify-between">
                    {{-- <h1 class="text-xl font-bold text-gray-700 md:text-2xl">Latests posts</h1> --}}
                    {{-- <div>
                        <select class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option>Latest</option>
                            <option>Last Week</option>
                        </select>
                    </div> --}}
                </div>
                @forelse($journals as $journal)
                    <div class="mt-6">
                        <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                            <div class="flex items-center justify-between">
                                <span class="font-light text-gray-600">{{ date('d M Y', strtotime($journal->created_at)) }}
                                </span>
                                {{-- <a
                                        href="#"
                                        class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">Laravel
                                    </a> --}}
                            </div>
                            <div class="mt-2">
                                <a href="/journal/{{ $journal->id }}"
                                    class="text-2xl font-bold text-gray-700">{{ $journal->title }}
                                </a>
                                <p class="block p-2 pl-0 pt-1 text-sm text-gray-600 max-h-16 overflow-hidden overflow-ellipsis">
                                    {{ $journal->contents }}
                                </p>
                            </div>
                            <div class="flex items-center justify-between mt-4"><a href="/journal/{{ $journal->id }}"
                                    class="text-blue-500">Read
                                    more</a>
                                <div><a href="#" class="flex items-center">
                                        {{-- <img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                            alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block"> --}}
                                        <h1 class="font-bold text-gray-700">{{ $journal->author }}</h1>
                                    </a></div>
                            </div>
                        </div>
                    </div>

                @empty
                    <p>There's nothing here...</p>
                @endforelse

                {{-- <div class="mt-6">
                    <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                        <div class="flex items-center justify-between"><span class="font-light text-gray-600">Jun 1,
                                2020</span><a href="#"
                                class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">Laravel</a>
                        </div>
                        <div class="mt-2"><a href="#" class="text-2xl font-bold text-gray-700 hover:underline">Build
                                Your New Idea with Laravel Freamwork.</a>
                            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                                reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
                        </div>
                        <div class="flex items-center justify-between mt-4"><a href="#"
                                class="text-blue-500 hover:underline">Read more</a>
                            <div><a href="#" class="flex items-center"><img
                                        src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                        alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                                    <h1 class="font-bold text-gray-700 hover:underline">Alex John</h1>
                                </a></div>
                        </div>
                    </div>
                </div> --}}
                <div class="mt-8">
                    <div class="flex">
                        <a href="#"
                            class="px-3 py-2 mx-1 font-medium text-gray-500 bg-white rounded-md cursor-not-allowed">
                            Previous
                        </a>

                        <a href="#"
                            class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                            1
                        </a>

                        <a href="#"
                            class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                            2
                        </a>

                        <a href="#"
                            class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                            3
                        </a>

                        <a href="#"
                            class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                            Next
                        </a>
                    </div>
                </div>
            </div>

            <div class="hidden w-4/12 -mx-8 lg:block mt-8">
                <!-- sub-main posts -->
                <div class="w-full md:w-4/7">
                    <!-- post 1 -->
                    {{-- <div class="rounded w-full flex flex-col md:flex-row mb-10">
                        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60"
                            class="block md:hidden lg:block rounded-md h-64 md:h-32 m-4 md:m-0" />
                        <div class="bg-white rounded px-4">
                            <div class="md:mt-0 text-gray-800 font-semibold text-xl mb-2">
                                At every tiled on ye defer do. No attention suspected oh difficult.
                            </div>
                            <p class="block md:hidden p-2 pl-0 pt-1 text-sm text-gray-600">
                                Wonder matter now can estate esteem assure fat roused. Am performed on existence as
                                discourse is. Pleasure friendly at marriage blessing or
                            </p>
                        </div>
                    </div> --}}

                    @foreach ($news as $item)
                        @if (isset($item->news_string))
                            @php
                                $newsData = json_decode($item->news_string, true);
                            @endphp

                            @if (isset($newsData['results']) && is_array($newsData['results']))
                                @foreach ($newsData['results'] as $new)
                                    @if ($new['image_url'] != '')
                                        <a href="{{ $new['link'] }}" class="rounded w-full flex flex-col md:flex-row mb-5">
                                            <img src="{{ $new['image_url'] }}"
                                                class="block md:hidden lg:block rounded-md h- w-20 m-4 md:m-0" />
                                            <div class="bg-white rounded px-4 flex items-center">
                                                <p
                                                    class="block p-2 pl-0 pt-1 text-sm text-gray-600 max-h-16 overflow-hidden overflow-ellipsis">
                                                    {{ $new['title'] }}
                                                </p>
                                            </div>
                                        </a>
                                    @endif
                                @endforeach
                            @endif
                        @endif
                    @endforeach





                </div>
                {{-- <div class="px-8 mt-10">
                    <h1 class="mb-4 text-xl font-bold text-gray-700">Categories</h1>
                    <div class="flex flex-col max-w-sm px-4 py-6 mx-auto bg-white rounded-lg shadow-md">
                        <ul>
                            <li><a href="#" class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
                                    AWS</a></li>
                            <li class="mt-2"><a href="#"
                                    class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
                                    Laravel</a></li>
                            <li class="mt-2"><a href="#"
                                    class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">- Vue</a>
                            </li>
                            <li class="mt-2"><a href="#"
                                    class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
                                    Design</a></li>
                            <li class="flex items-center mt-2"><a href="#"
                                    class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
                                    Django</a></li>
                            <li class="flex items-center mt-2"><a href="#"
                                    class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">- PHP</a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
