@props(['job'])

<x-panel class="flex flex-col text-center">
    <div class=" self-start text-sm">{{ $job->employer->name }}</div>
    <div class="py-8 ">
        <h3 class="text-xl font-bold group-hover:text-blue-600 transition-colors duration-300">
            <a target="_blank" href="{{ $job->url }}">{{ $job->title }}</a>
        </h3>
        <p class="text-sm mt-4">{{ $job->work_type }} - from {{ $job->salary }}</p>
    </div>
    <div class="flex justify-between items-center ">
        <div class="flex justify-start gap-1">≈
            @foreach ($job->tags as $tag)
                <x-tag size="small" :tag="$tag" />
            @endforeach
        </div>
        <x-employer-logo :employer="$job->employer" :width="40" />
    </div>

</x-panel>
