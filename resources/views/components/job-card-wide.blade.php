@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo />
    </div>
    <div class="flex-1 flex flex-col">
        <a class=" self-start text-sm text-gray-400">{{ $job->employer->name }}</a>
        <h3 class=" font-bold text-xl group-hover:text-blue-600 transition-colors duration-300">{{ $job->title }}</h3>
        <p class="text-gray-400 mt-auto text-sm">{{ $job->work_type }} - from {{ $job->salary }}</p>
    </div>
    <div class="flex flex-col">
        <div class="flex text-xs justify-end gap-4">
            <p>Remote</p>
            <p class="text-gray-400">{{ rand(0, 15) }}m ago</p>
        </div>


    </div>
    <div class="flex mt-auto gap-2">
        @foreach ($job->tags as $tag)
            <x-tag :tag="$tag" />
        @endforeach
    </div>
</x-panel>
