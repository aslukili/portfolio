<header
    class="sticky top-0 z-30 w-full md:p-2 bg-slate-800 shadow-lg shadow-yellow-300/10 sm:px-4 font-hacking font-medium">
    <nav class="flex flex-wrap items-center justify-between w-full px-4 text-lg text-yellow-100">
        <div>
            <a href="#">
                <img src="{{ asset('/img/Aslukili.png') }}" alt="Abdeslam Loukili Logo" />
            </a>
        </div>
        <div>

        </div>
        <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="h-6 w-6 cursor-pointer md:hidden block"
             fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
            <ul class="pt-4 font-bold text-base text-yellow-100 md:flex md:justify-between md:items-center md:pt-0">
                @foreach($navigationItems as $item)
                    <x-layout.navbar-item :href="$item['href']">{{ $item['label'] }}</x-layout.navbar-item>
                @endforeach
                <li class="mb-3 md:mb-0">
                    <a class=" md:px-4 md:py-1 md:border md:rounded-md md:border-yellow-500 md:hover:bg-slate-800  md:bg-yellow-500 md:block hover:text-yellow-500 md:text-slate-800 transition ease-in delay-75"
                       href="mailto:abdeslam.loukili.contact@gmail.com">Contact me</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
