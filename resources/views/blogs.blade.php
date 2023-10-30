@extends('layouts.main')
@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 flex content-center">
        @forelse($journals as $journal)
            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-5 mt-5 relative">
                <a href="#">
                    <img class="rounded-t-lg" src="/resources/views/qwe.jpeg" alt="" />
                </a>
                <div class="p-5 flex flex-col justify-between h-full">
                    <a href="/journal/{{ $journal->id }}">
                        <h6 class="mb-2 text-1xl font-semibold tracking-tight text-gray-900 dark:text-white">
                            {{ $journal->title }}
                        </h6>
                    </a>
                    <p class="text-sm font-normal text-gray-500 dark:text-gray-400 mt-auto">
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
