@php
    $classes = 'p-4 transition-colors duration-600 border border-transparent dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1
    dark:ring-inset dark:ring-white/5 shadow-2xl shadow-gray-500/20 dark:shadow-none flex
    motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500 bg-white/5 rounded-xl hover:border-blue-800 group';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    {{$slot}}
</div>

{{-- p-4 transition-colors duration-500 border border-transparent bg-white/5 rounded-xl hover:border-blue-800 group --}}
 
{{-- p-4 transition-colors dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1
dark:ring-inset dark:ring-white/5 shadow-2xl shadow-gray-500/20 dark:shadow-none flex
motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500
bg-white/5 rounded-xl hover:border-blue-800 group --}}
