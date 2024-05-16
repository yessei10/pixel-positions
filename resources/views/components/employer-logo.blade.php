@props(['employer', 'width' => 90])

@php

    $pathLogo = $employer->logo;

    if (strpos($pathLogo, 'logos') !== false) {

        $pathLogo = asset('storage/' . $pathLogo);

    } else {
        $randomSeed = rand(0, 100000);
        $pathLogo = "http://picsum.photos/seed/{$randomSeed}/100/100";
    }

@endphp

<img src="{{ $pathLogo }}" alt="" class="rounded-xl" width="{{ $width }}">

{{-- <img src="{{ asset('storage/' . $pathLogo) }}" alt="" class="rounded-xl" width="{{ $width }}"> --}}
