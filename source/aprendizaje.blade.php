@extends('_layouts.master')

@section('body')
<div class="mx-auto max-w-4xl">
    <h1 class="text-2xl font-semibold">Aprendizaje</h1>

    <p class="mt-4">
        Desde que inicié con Laravel, siempre consideré aprender de quienes creo personalmente que son algunos
        de los mejores autores dentro de la comunidad de Laravel, ya sea creando paquetes,
        herramientas, cursos o libros.
    </p>

    <p class="mt-2">
        Los siguientes son algunos ebooks recomendados que he leído y los uso como guía en todos mis proyectos:
    </p>

    <div class="mt-8 space-y-6">
        <div>
            <span class="block text-gray-500 uppercase font-semibold text-xs">Jason McCreary</span>
            <a class="text-lg font-bold no-underline hover:underline" href="https://basecodefieldguide.com/"
                target="_blank">BaseCode</a>
        </div>

        <div>
            <span class="block text-gray-500 uppercase font-semibold text-xs">Jason McCreary</span>
            <a class="text-lg font-bold no-underline hover:underline" href="https://baselaravel.com/"
                target="_blank">BaseLaravel</a>
        </div>

        <div>
            <span class="block text-gray-500 uppercase font-semibold text-xs">Brent Roose</span>
            <a class="text-lg font-bold no-underline hover:underline" href="https://laravel-beyond-crud.com/"
                target="_blank">Laravel Beyond CRUD</a>
        </div>
    </div>
</div>
@endsection
