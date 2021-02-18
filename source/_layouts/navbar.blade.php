<div x-data="{ open: false }">
    <!-- waves -->
    <div class="hidden md:block absolute w-full h-40 -z-10 bg-gradient-to-t from-blue-900 to-purple-700">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M-1.41,84.38 C387.97,153.45 252.54,19.23 587.75,122.86 L500.00,150.00 L0.00,150.00 Z"
                style="stroke: none; fill: #fff;"></path>
        </svg>
    </div>

    <!-- navbar -->
    <div class="text-white text-xl px-4 py-2 md:pt-9 lg:container mx-auto bg-gradient-to-t from-blue-900 to-purple-700 md:bg-none">

        <!-- desktop -->
        <div class="hidden md:flex justify-between items-center">
            <!-- main links -->
            <div class="flex flex-row text-xl">
                <a class="{{ $page->selected('') }}" href="/">Me</a>
                <a class="{{ $page->selected('works') }} ml-6" href="/works">Works</a>
                <a class="{{ $page->selected('learning') }} ml-6" href="/learning">Learning</a>
            </div>

            <!-- social links -->
            <div class="flex flex-row">
                <a class="pr-3" href="https://github.com/josegus" target="_blank">
                    <span class="fab fa-github"></span>
                </a>
                <a class="px-3" href="https://www.linkedin.com/in/gustavo-vasquez/" target="_blank">
                    <span class="fab fa-linkedin"></span>
                </a>
                <a class="px-3" href="https://twitter.com/gusvasquezdev" target="_blank">
                    <span class="fab fa-twitter"></span>
                </a>
                <a class="px-3" href="mailto:jgvv15@gmail.com">
                    <span class="fa fa-envelope"></span>
                </a>
            </div>
        </div>


        <!-- mobile -->
        <div class="md:hidden">
            <div class="flex justify-between items-center">
                <!-- brand name -->
                <a class="text-base" href="/">Gustavo Vasquez</a>

                <!-- menu bars -->
                <button @click="open = !open" class="flex">
                    <svg class="w-6 h-6 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <div x-show="open">
                <!-- main links -->
                <div class="flex flex-col text-base mt-2">
                   <div><a class="{{ $page->selected('') }}" href="/">Me</a></div>
                   <div><a class="{{ $page->selected('works') }}" href="/works">Works</a></div>
                   <div><a class="{{ $page->selected('learning') }}" href="/learning">Learning</a></div>
                </div>

                <!-- social links -->
                <div class="flex-row mt-4">
                    <a class="pr-3" href="https://github.com/josegus" target="_blank">
                        <span class="fab fa-github"></span>
                    </a>
                    <a class="px-3" href="https://www.linkedin.com/in/gustavo-vasquez/" target="_blank">
                        <span class="fab fa-linkedin"></span>
                    </a>
                    <a class="px-3" href="https://twitter.com/gusvasquezdev" target="_blank">
                        <span class="fab fa-twitter"></span>
                    </a>
                    <a class="px-3" href="mailto:jgvv15@gmail.com">
                        <span class="fa fa-envelope"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
