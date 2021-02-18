@extends('_layouts.master')

@section('body')
    <div class="mx-auto max-w-4xl text-justify space-y-10">
        <div>
            <h1 class="text-xl font-semibold">Works</h1>
            <p class="mt-2">These are some of the mosts importants projects I've developed.</p>
        </div>

        <!-- Snap -->
        <div>
            <h2 class="text-lg font-semibold">Snap</h2>
            <p class="mt-2">Marketplace for local businesses, with a variety of products.</p>
            <p class="mt-2">
                Our main goal was to help local companies have a presence on the internet and can market their physical products through our
                service.
            </p>
            <p class="mt-2">
                It has <span class="text-pink-500 font-bold italic">online payments</span>, stock control and inventory <span class="text-pink-500 font-bold italic">notificacions</span>
                de inventario.
            </p>

            <div class="mt-4 flex flex-wrap justify-center">
                @include('_partials.laravel')
                @include('_partials.vue')
                @include('_partials.livewire')
                @include('_partials.bootstrap')
                @include('_partials.redis')
            </div>

            <a class="mt-4 inline-block text-blue-600 underline" href="https://snap.com.bo" target="_blank">snap.com.bo</a>
        </div>


        <!-- FOCA -->
        <div>
            <h2 class="text-lg font-semibold">FOCA (SAAS)</h2>
            <p class="mt-2">
                Electronic billing system, developed for Bolivian companies.
            </p>
            <p class="mt-2">
                The biggest challenge here was to develop a simple, elegant and useful billing web application, and give the
                users the opportunity to try it for free.
            </p>
            <p class="mt-2">
                This was made possible thanks to the fact that we implemented a
                <a class="hover:underline text-pink-500 font-bold italic"
                    href="https://tomschlick.com/2017/07/25/laracon-2017-multi-tenancy-talk/" target="_blank">multi-tenant</a>
                architecture, allowing us to create a Laravel SAAS web application.
            </p>

            <div class="mt-4 flex flex-wrap justify-center">
                @include('_partials.laravel')
                @include('_partials.vue')
                @include('_partials.tailwind')
                @include('_partials.bootstrap')
                @include('_partials.redis')
            </div>

            <a class="mt-4 inline-block text-blue-600 underline" href="https://foca.com.bo" target="_blank">foca.com.bo</a>
        </div>

        <!-- UAGRM -->
        <div>
            <h2 class="text-lg font-semibold">Universidad Autónoma Gabriel René Moreno (UAGRM)</h2>
            <p class="mt-2">
                Official website of the Universidad Autónoma Gabriel René Moreno.
            </p>
            <p class="mt-2">
                Probably the biggest challenge I was involved in: building my new university site from scratch & CMS.
            </p>
            <p class="mt-2">
                Working under the guidance of engineers from the <span class="italic underline">Dirección de Tecnologías de la Información (DTIC)</span>,
                we developed the new <span class="text-pink-500 font-bold italic">informative & administratite web portal</span> of the university,
                feeding its content through its own <span class="text-pink-500 font-bold italic">CMS</span>.
            </p>

            <div class="mt-4 flex flex-wrap justify-center">
                @include('_partials.laravel')
                @include('_partials.bootstrap')
                @include('_partials.redis')
            </div>

            <a class="mt-4 inline-block text-blue-600 underline" href="https://www.uagrm.edu.bo" target="_blank">www.uagrm.edu.bo</a>
        </div>
    </div>
@endsection
