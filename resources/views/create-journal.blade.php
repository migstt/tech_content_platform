@extends('layouts.main')

@section('content')
    <form method="POST" action="{{ route('savejournal') }}" id="publishJournalForm">
        <div class="mt-20">
            @csrf
            <div class="mb-2">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900">
                    Your article title
                </label>
                <input type="text" id="title" name="title"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900
                    text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block
                    w-full p-2.5"
                    placeholder="" required>
            </div>
            <div class="flex flex-col space-y-2">
                <label for="editor" class="text-gray-600 font-semibold">Content</label>
                <div id="editor" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>
                <input type="hidden" name="contents" id="contents">
            </div>
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
            focus:outline-none focus:ring-blue-300 font-medium rounded-lg
            text-sm px-5 py-2.5 mt-5 text-center dark:bg-blue-600 dark:hover:bg-blue-700
          dark:focus:ring-blue-800">
            Publish
        </button>
    </form>
@endsection
