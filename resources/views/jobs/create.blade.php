<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/jobs" class="space-y-6">
        @csrf

        <div>
            <label for="title" class="block text-sm font-medium text-gray-900">
                Title
            </label>

            <input
                type="text"
                name="title"
                id="title" 
                required
                placeholder="Shift Leader"
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
                placeholder="50000"
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
            Save
        </button>
    </form>
</x-layout>