@extends('layouts.main')
@section('content')
    <div class="grid grid-cols-1 px-12 md:grid-cols-4 mt-20 mb-20 justify-center">
        <div class="md:col-span-3 grid grid-cols-2 mx-10">
            @forelse($journals as $journal)
            <div class="ml-5 bg-gray-50 border border-gray-200 rounded-lg shadow
            dark:bg-gray-700 dark:border-gray-700 mt-5 relative self-center delay-tran">
                <a href="#">
                    <img class="rounded-t-lg object-cover w-full h-40"
                    src="https://www.cleverfiles.com/howto/wp-content/uploads/2018/03/minion.jpg"
                    alt="Cat Image" />
                </a>
                <div class="p-3 flex flex-col h-40">
                    <a href="/journal/{{ $journal->id }}">
                        <h6 class="break-all mb-2 text-2xl font-semibold tracking-tight
                        text-gray-900 dark:text-white journal-info">
                            {{ $journal->title }}
                        </h6>
                    </a>
                    <p class="text-sm font-normal text-gray-500 dark:text-white mt-auto journal-info">
                        {{ $journal->author }} <br>
                        {{ date('d M Y', strtotime($journal->created_at)) }}
                    </p>
                </div>
            </div>
            
            @empty
                <p>There's nothing here...</p>
            @endforelse
        </div>
        <div class="md:col-span-1">
            <div class="border mt-5 w-full max-w-md p-4 rounded-lg sm:px-8 bg-gray-50
             border-gray-200 shadow dark:bg-gray-700 dark:border-gray-700
              relative self-center delay-tran">
                <div class="flex items-center justify-center mb-4">
                    <h6 class="text-1xl font-semibold leading-none text-gray-900 
                    dark:text-white delay-tran">New Authors</h6>
                    {{-- <a href="#" class="text-sm font-medium dark:text-white">
                        Entries
                    </a> --}}
                </div>
                <div class="flow-root">
                    <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700 list-none">
                        @foreach ($authors as $author)
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-1.jpg"
                                        alt="Neil image">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white delay-tran">
                                        {{ $author->name }}
                                    </p>
                                    {{-- <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        email@windster.com
                                    </p> --}}
                                </div>
                                {{-- <div class="inline-flex items-center text-base font-semibold 
                                text-gray-900 dark:text-white">
                                    #
                                </div> --}}
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
