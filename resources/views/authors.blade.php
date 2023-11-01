@extends('layouts.main')
@section('content')
    <div class="grid grid-cols-1 gap-4 mx-20 content-center mt-20 mb-20">
        @forelse($authors as $author)
        <figure
            class="mb-20 flex flex-col items-center justify-center p-4 text-center bg-white
            border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-tl-lg
            md:border-r dark:bg-gray-800 dark:border-gray-700">
            {{-- <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Very easy this was to integrate</h3>
            <p class="my-4">If you care for your time, I hands down would go with this."</p>
        </blockquote> --}}
            <figcaption class="flex items-center justify-center space-x-3">
                <img class="rounded-full w-9 h-9"
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png"
                    alt="profile picture">
                <div class="space-y-0.5 font-medium dark:text-white text-left">
                    <div>{{ $author->name }}</div>
                    {{-- <div class="text-sm text-gray-500 dark:text-gray-400">Developer at Open AI</div> --}}
                </div>
            </figcaption>
        </figure>
        @empty
        <p class="pl-8 pr-3">empty</p>
        @endforelse
    </div>
@endsection