@extends('layouts.main')

@section('content')
    <div class="mt-4 mx-20 flex grid grid-cols-3 gap-4 content-center">
        @forelse($journals as $journal)
            <div
                class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-50 mx-5 mt-5">
                <a href="#">
                    <img class="rounded-t-lg" src="/resources/views/qwe.jpeg" alt="" />
                </a>
                <div class="p-5">
                    {{-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    {{ $journal->contents }}
                </p> --}}
                    <a href="/journal/{{ $journal->id }}">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                            {{ $journal->title }}
                        </h5>
                    </a>
                    <p class="text-sm font-normal text-gray-500 dark:text-gray-400">
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
