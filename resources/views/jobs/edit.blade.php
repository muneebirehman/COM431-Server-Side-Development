<x-layout>
    <x-slot:heading>
        Edit Job: {{ $job->title }}
    </x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}" class="space-y-6">
        @csrf
        @method('PATCH')

        <div>
            <label for="title" class="block text-sm font-medium text-gray-900">
                Title
            </label>

            <input
                type="text"
                name="title"
                id="title"
                value="{{ $job->title }}"
                class="mt-2 block w-full rounded-md border border-gray-300 px-3 py-2"
            >
            @error('title')
            <p class="text-xs text-red-500 font-semibold mt-1">{{$message}}</p>
            @enderror
        </div>

        <div>
            <label for="salary" class="block text-sm font-medium text-gray-900">
                Salary
            </label>

            <input
                type="text"
                name="salary"
                id="salary"
                value="{{ $job->salary }}"
                class="mt-2 block w-full rounded-md border border-gray-300 px-3 py-2"
            >
            @error('salary')
            <p class="text-xs text-red-500 font-semibold mt-1">{{$message}}</p>
            @enderror
        </div>

        <button
            type="submit"
            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white"
        >
            Update
        </button>

        <a href="/jobs/{{ $job->id }}" class="text-sm font-semibold leading-6 text-gray-900">
            Cancel
        </a>
    </form>

    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>

    <button
        type="button"
        form="delete-form"
        class="text-red-500 text-sm font-bold"
        onclick="document.getElementById('delete-form').submit();"
    >
        Delete
    </button>
</x-layout>
