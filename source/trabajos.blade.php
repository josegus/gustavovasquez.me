@extends('_layouts.master')

@section('body')
    <div class="mx-auto max-w-4xl text-justify space-y-10">
        <!-- Snap -->
        <div>
            <h1 class="text-2xl font-semibold">Snap</h1>
            <p class="mt-2">Marketplace para empresas locales, con variedad de productos.</p>
            <p class="mt-2">
                Nuestro objetivo fue ayudar a que empresas locales tengan presencia en internet y puedan comercializar
                sus productos físicos a través de nuestro servicio.
            </p>
            <p class="mt-2">
                Cuenta con <span class="text-pink-500 font-bold italic">pagos en línea</span>, control de stock y <span class="text-pink-500 font-bold italic">notificaciones</span>
                de inventario.
            </p>

            <div class="mt-4 flex">
                @include('_partials.laravel')
                @include('_partials.vue')
                @include('_partials.livewire')
                @include('_partials.bootstrap')
            </div>

            <a class="mt-4 inline-block text-blue-600 underline" href="https://snap.com.bo" target="_blank">snap.com.bo</a>
        </div>


        <!-- FOCA -->
        <div>
            <h1 class="text-2xl font-semibold">FOCA (SAAS)</h1>
            <p class="mt-2">
                Sistema de facturación electrónica, desarrollado para empresas Bolivianas.
            </p>
            <p class="mt-2">
                El reto mas grande fue encontrar la manera de que todos los clientes tengan su información separada del resto.
                Esto se hizo posible gracias a que implementamos una arquitectura
                <a class="hover:underline text-pink-500 font-bold italic"
                    href="https://tomschlick.com/2017/07/25/laracon-2017-multi-tenancy-talk/" target="_blank">multi-tenant</a>,
                y nos permitió crear una aplicación web desarrollada con Laravel que es comercializada como
                servicio (SAAS).
            </p>

            <div class="mt-4 flex">
                @include('_partials.laravel')
                @include('_partials.vue')
                @include('_partials.tailwind')
                @include('_partials.bootstrap')
            </div>

            <a class="mt-4 inline-block text-blue-600 underline" href="https://foca.com.bo" target="_blank">foca.com.bo</a>
        </div>

        <!-- UAGRM -->
        <div>
            <h1 class="text-2xl font-semibold">Universidad Autónoma Gabriel René Moreno (UAGRM)</h1>
            <p class="mt-2">
                Sitio web oficial de la Universidad Autónoma Gabriel René Moreno.
            </p>
            <p class="mt-2">
                Probablemente el reto mas grande en el que estuve involucrado: construir desde cero el nuevo sitio de mi universidad.
            </p>
            <p class="mt-2">
                Trabajando bajo la guía de ingenieros de la <span class="italic underline">Dirección de Tecnologías de la Información (DTIC)</span>,
                desarrollamos el nuevo <span class="text-pink-500 font-bold italic">portal web informativo</span> de la universidad, alimentando
                su contenido a través de su propio <span class="text-pink-500 font-bold italic">CMS</span>.
            </p>

            <div class="mt-4 flex">
                @include('_partials.laravel')
                @include('_partials.bootstrap')
            </div>

            <a class="mt-4 inline-block text-blue-600 underline" href="https://www.uagrm.edu.bo" target="_blank">www.uagrm.edu.bo</a>
        </div>
    </div>
@endsection
