<!-- Sidebar Menu -->
<div :class="{ '!translate-x-0': open }" class="fixed top-0 left-0 z-20 w-9/12 h-screen overflow-y-auto transition duration-300 ease-in-out transform -translate-x-full bg-white shadow-2xl sm:w-64 md:translate-x-0">

    <!-- Profile Section -->
    <div class="divide-y divide-gray-100 divide-solid">
        <div class="p-5 text-center">
            <!-- Profile Picture -->
            <a href="" class="inline-block w-auto p-2 mb-4 bg-white rounded-full">
                <img src="{{ asset('img/user.png') }}" alt="" class="object-cover object-top w-32 h-32 align-top rounded-full">
            </a>
            <!-- Profile Info -->
            <div>
                <h3 class="mb-2 overflow-hidden text-2xl font-bold whitespace-nowrap overflow-ellipsis text-gray-800">{{ auth()->user()->name }}</h3>
            </div>
        </div>
    </div>
    <!-- Navigation Links -->
    <div class="flex flex-col mb-0 ml-0">
        <x-sidebar-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            <x-slot name="icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                  </svg>

            </x-slot>
            <span class="ml-3">Dashboard</span>
        </x-sidebar-nav-link>

        <x-sidebar-nav-link>
            <x-slot name="icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                </svg>
            </x-slot>
            <button type="button" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example"><span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>ITS</span></button>
            <ul id="dropdown-example" class="hidden">
                <a href="welcome" class="flex items-center px-4 py-3 text-lg md:text-sm w-full transition duration-300 ease-in-out hover:bg-green-700 hover:text-gray-100 text-black-800">Device</a>
                <a href="welcome" class="flex items-center px-4 py-3 text-lg md:text-sm w-full transition duration-300 ease-in-out hover:bg-green-700 hover:text-gray-100 text-black-800">Cables & Peripherals</a>
                <a href="welcome" class="flex items-center px-4 py-3 text-lg md:text-sm w-full transition duration-300 ease-in-out hover:bg-green-700 hover:text-gray-100 text-black-800">Consumables</a>
            </ul>
        </x-sidebar-nav-link>

        <x-sidebar-nav-link href="#AH">
            <x-slot name="icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                  </svg>

            </x-slot>
            <span class="ml-3">Allied Health</span>
        </x-sidebar-nav-link>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-sidebar-nav-link onclick="event.preventDefault();this.closest('form').submit();" class="cursor-pointer">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                      </svg>

                </x-slot>
                <span class="ml-3">Sign Out</span>
            </x-sidebar-nav-link>
        </form>

    </div>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
</div>
<div :class="{ '!inline': open }" class="z-10 fixed top-0 left-0 w-screen h-screen bg-gray-900 bg-opacity-30 hidden md:!hidden transition ease-in-out duration-300"></div>

