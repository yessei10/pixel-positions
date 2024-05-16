@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo :employer="$job->employer" />
    </div>

    <div class="flex flex-col flex-1">
        <a class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>

        <h3 class="mt-4 text-xl font-bold transition-colors duration-500 group-hover:text-blue-800">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        
        <p class="mt-auto text-xs text-gray-400">{{ $job->salary }}</p>
    </div>

    <div>
        @foreach ($job->tags as $tag)
            <x-tag :$tag />
        @endforeach
    </div>
</x-panel>