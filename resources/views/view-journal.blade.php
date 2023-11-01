@extends('layouts.main')

@section('content')
    <div class="mx-20 content-center mt-20 mb-20">
        <h5 class="text-3xl font-extrabold dark:text-white">{!! $journal->title !!}</h5>
        <p class="mb-4 text-lg font-normal text-gray-500 dark:text-gray-400">{!! $journal->author !!},
            {{ date('M Y', strtotime($journal->created_at)) }}</p>
        <p class="mb-4 text-lg font-normal text-gray-500 dark:text-gray-400">{!! $parsedContents !!}</p>
    </div>
@endsection
