@extends('_layouts.master')

@section('body')
<div class="max-w-2xl mx-auto text-center">
    <h1 class="font-serif text-4xl underline">Sobre mi</h1>

    <p class="mt-4">
        Mi nombre es <span class="underline">Gustavo Vasquez</span>, soy desarrollador web Full-Stack, titulado en ingeniería en sistemas, de la ciudad de Santa Cruz, Bolivia.
    </p>

    <p class="mt-4">
        A lo largo de mi vida, he trabajado en diferentes proyectos que me han permitido crecer
        profesionalmente, siempre siguiendo las mejores prácticas y usando las mejores
        herramientas para generar productos de calidad. Puedes ver mis trabajos mas
        destacados <a class="text-blue-600 underline" href="/trabajos">aquí</a>.
    </p>

    <p class="mt-4">
        En mi tiempo libre, me gusta jugar videojuegos con amigos (los viernes de dota son casi una obligación <img class="inline w-8" src="/assets/images/smile-face.svg" alt="Smile face icon">).
    </p>

    <h1 class="font-serif mt-20 text-4xl underline">Mi stack</span></h1>

    <p class="mt-4">
        Desde que conocí Laravel (allá por la versión 5.0) me gustó mucho lo simple y al mismo tiempo poderoso que es
        este framework, así que decidí especializarme en él.
    </p>

    <p class="mt-4">
        Diariamente utilizo otras herramientas y tecnologías conocidas dentro del ecosistema
        de Laravel,  pero personalmente considero que estas son las mejores.
    </p>

    <p class="mt-4">
        Son mi <span class="italic">"dream team"</span> <img class="inline w-8" src="/assets/images/muscle.svg" alt="Muscle icon">
        <span class="ml-1">, ya que con ellas puedo divertirme mientras trabajo
        y me han permitido encarar proyectos de manera simple y rápida.</span>
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
