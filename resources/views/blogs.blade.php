@extends('layouts.main')
@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-20 mb-20 justify-center items-center">
        @forelse($journals as $journal)
            <div
                class="bg-gray-50 border border-gray-200 rounded-lg shadow
                    dark:bg-gray-700 dark:border-gray-700 mx-5 mt-5 relative self-center journal-div">
                <a href="#">
                    <img class="rounded-t-lg" src="/resources/views/qwe.jpeg" alt="" />
                </a>
                <div class="p-3 flex flex-col h-60 max-h-60">
                    <a href="/journal/{{ $journal->id }}">
                        <h6 class="mb-2 text-1xl font-semibold tracking-tight text-gray-900 dark:text-white">
                            {{ $journal->title }}
                        </h6>
                    </a>
                    <p class="text-sm font-normal text-gray-500 dark:text-white mt-auto">
                        {{ $journal->author }} <br>
                        {{ date('d M Y', strtotime($journal->created_at)) }}
                    </p>
                </div>
            </div>
        @empty
            <p>there's nothing here...</p>
        @endforelse
    </div>
@endsection
