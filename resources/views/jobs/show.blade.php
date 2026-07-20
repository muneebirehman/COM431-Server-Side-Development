<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold txt-lg">{{ $job['title'] }}</h2>
    <p>
        This job pays {{ $job['salary'] }} per year
    </p>

    <p class="mt-6">
        <a href="/jobs/{{ $job->id }}/edit" class="text-blue-500 hover:underline">
            Edit
        </a>
    </p>
</x-layout>
