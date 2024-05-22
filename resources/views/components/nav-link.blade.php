@php
$classes = "dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm";
@endphp

<a {{ $attributes(['class'=> $classes]) }} >

    {{$slot}}

</a>