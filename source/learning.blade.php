@extends('_layouts.master')

@section('body')
<div class="mx-auto max-w-4xl">
    <h1 class="text-2xl font-semibold">Learning</h1>

    <p class="mt-4">
        Since I started with Laravel, I have always considered learning from who I personally believe to be some of the best
        authors within the Laravel community, whether it be creating packages, tools, courses or books.
    </p>

    <p class="mt-2">
        The following are some recommended ebooks that I have read and use as a guide in all my projects:
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

        <div>
            <span class="block text-gray-500 uppercase font-semibold text-xs">Mohamed Said</span>
            <a class="text-lg font-bold no-underline hover:underline" href="https://learn-laravel-queues.com/"
                target="_blank">Learn Laravel Queues</a>
        </div>

        <div>
            <span class="block text-gray-500 uppercase font-semibold text-xs">Adam Wathan & Steve Schoger</span>
            <a class="text-lg font-bold no-underline hover:underline" href="https://refactoringui.com/book/"
                target="_blank">Refactoring UI</a>
        </div>
    </div>
</div>
@endsection
