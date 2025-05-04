<x-layout>
    <div class="space-y-10">
        <section>
            <x-section-heading class="text-xl">Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>

        </section>
        <section>
            <x-section-heading class="text-xl">Tags</x-section-heading>
            <div class="mt-6 space-x-1"><x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>

        </section>
        <section>
            <x-section-heading class="text-xl">Latest Jobs</x-section-heading>
            <div class="space-y-6 mt-6">
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
            </div>
        </section>
    </div>

</x-layout>
