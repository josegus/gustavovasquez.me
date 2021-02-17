<div x-data="{ open: false }">
    <!-- waves -->
    <div class="hidden md:block absolute w-full h-40 -z-10 bg-gradient-to-t from-blue-900 to-purple-700">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M-1.41,84.38 C387.97,153.45 252.54,19.23 587.75,122.86 L500.00,150.00 L0.00,150.00 Z"
                style="stroke: none; fill: #fff;"></path>
        </svg>
    </div>

    <!-- content -->
    <div class="text-white text-xl p-2 md:pt-9 container mx-auto flex justify-between items-center bg-gradient-to-t from-blue-900 to-purple-700 md:bg-none">
        <div class="hidden md:flex">
            <a href="/">Inicio</a>
            <a class="ml-6" href="/trabajos">Trabajos</a>
            <a class="ml-6" href="/aprendizaje">Aprendizaje</a>
        </div>

        <span class="inline-block md:hidden text-base">Gustavo Vasquez</span>

        <div class="hidden md:flex flex-row ">
            <a class="px-3" href="https://github.com/josegus" target="_blank">
                <span class="fab fa-github"></span>
            </a>
            <a class="px-3" href="https://www.linkedin.com/in/gustavo-vasquez/" target="_blank">
                <span class="fab fa-linkedin"></span>
            </a>
            <a class="px-3" href="mailto:jgvv15@gmail.com">
                <span class="fa fa-envelope"></span>
            </a>
        </div>

        <!-- mobile menu bars -->
        <div @click="open = !open" class="inline md:hidden">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </div>

        <div x-show="open">mobile menu</div>
    </div>
</div>
