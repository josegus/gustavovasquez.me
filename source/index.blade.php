@extends('_layouts.master')

@section('body')
<div class="max-w-2xl mx-auto text-center">
    <h1 class="font-serif text-4xl underline">About me</h1>

    <p class="mt-4">
        My name is <span class="underline">Gustavo Vasquez</span>, I'm a full-Stack web developer, with a
        degree in systems engineering, from the city of Santa Cruz, Bolivia.
    </p>

    <p class="mt-4">
        Throughout my life, I have worked on different projects that have allowed me to grow professionally, always following
        the best practices and using the best tools to generate quality products. You can see my most outstanding works <a class="text-blue-600 underline" href="/works">here</a>.
    </p>

    <p class="mt-4">
        In my spare time, I like to play video games with friends <br>
        (playing DOTA Fridays at night are almost a must <img class="inline w-8" src="/assets/images/smile-face.svg" alt="Smile face icon">).
    </p>

    <h1 class="font-serif mt-20 text-4xl underline">My stack</span></h1>

    <p class="mt-4">
        Since I met Laravel (back in version 5.0) I really liked how simple and at the same time powerful this framework is, so
        I decided to specialize in it.
    </p>

    <p class="mt-4">
        I use other known tools (like VS Code, you can find my current workspace settings
        <a class="text-blue-600 underline" href="https://gist.github.com/josegus/629a68884a0028b0bc4b8e349b133f25" target="_blank">here</a>)
        and technologies within the Laravel ecosystem on a daily basis, but personally I find these to be the best.
    </p>

    <p class="mt-4">
        They are my <span class="italic">"dream team"</span> <img class="inline w-8" src="/assets/images/muscle.svg" alt="Muscle icon">
        <span class="ml-1">, since with them I can have fun while I work and they have allowed me to tackle projects simply and quickly.</span>
    </p>

    <div class="mt-8 flex justify-center">
        @include('_partials.laravel')
        @include('_partials.vue')
        @include('_partials.livewire')
        @include('_partials.tailwind')
        @include('_partials.bootstrap')
    </div>
</div>
@endsection
