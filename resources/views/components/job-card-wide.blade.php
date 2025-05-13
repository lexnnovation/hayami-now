<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo />
    </div>
    <div class="flex-1 flex flex-col">
        <a class=" self-start text-sm text-gray-400">Google</a>
        <h3 class=" font-bold text-xl group-hover:text-blue-600 transition-colors duration-300">Frontend Developer</h3>
        <p class="text-gray-400 mt-auto text-sm">Full Time - From $120,000</p>
    </div>
    <div class="flex flex-col">
        <div class="flex text-xs justify-end gap-4">
            <p>Remote</p>
            <p class="text-gray-400">{{ rand(0, 15) }}m ago</p>
        </div>
        <div class="flex mt-auto gap-2">
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
        </div>

    </div>
</x-panel>
