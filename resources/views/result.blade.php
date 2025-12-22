<x-layout>
    <x-page-heading>Results</x-page-heading>
    <section>
        <x-section-heading class="text-xl">Search result</x-section-heading>
        <div class="space-y-6 mt-6">
            @foreach ($jobs as $job)
                <x-job-card-wide :job="$job" />
            @endforeach
        </div>
    </section>
</x-layout>
