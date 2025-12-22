<x-layout>
    <div class="space-y-10">

        <x-job-search />
        {{-- <x-forms.form class="mt-6" action="/search">
            <x-forms.input :label="false" name="q" placeholder="Search by title, companies, expertise" />
        </x-forms.form> --}}
        <section class="pt-10">
            <x-section-heading class="text-xl">Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featuredJobs as $job)
                    <x-job-card :job="$job" />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading class="text-xl">Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                    {{-- <x-tag>{{ $tag->name }}</x-tag> --}}
                    <x-tag :tag="$tag" />
                @endforeach

            </div>

        </section>
        <section>
            <x-section-heading class="text-xl">Latest Jobs</x-section-heading>
            <div class="space-y-6 mt-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :job="$job" />
                @endforeach
            </div>
        </section>
    </div>

</x-layout>
