<nav x-data="{ open: false }" class="bg-white border-b border-gray-100" style="background: #F8F9FA">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto lg:px-8" style="background: #F8F9FA">
        <div class="flex justify-between h-26">
            <div class="flex">

                <!-- Navigation Links -->
                <nav class="navbar navbar-expand-lg py-3 mb-4 border-bottom">
                    <div class="container-fluid">
                        <div class="row">

                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li>
                                    <div style="min-width: 100px"><a href="/">
                                            <img src="{{ asset('assets/find_your_junior_black_sm.png') }}"
                                                alt=""></div>
                                </li>

                                @if ($user->type === 'company')
                                    <li class="nav-item">
                                        <a class="nav-link" href="/company">My account</a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="/profile">My account</a>
                                    </li>
                                @endif

                                </ul>
                        </div>
                </nav>
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">



                </div>

                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>{{ Auth::user()->name }}</div>


                            </button>
                        </x-slot>

                        <x-slot name="content">

                        </x-slot>
                    </x-dropdown>
                    {{-- <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link> --}}
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        </div>
</nav>

<style>
    nav {
        display: flex flex-direction: row;
        font-size: 18px;
        background-color: #f8f9fa;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: 400;
    }

    nav ul {
        margin: 0;
        padding: 0;
        list-style-type: none;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: flex-end;
        gap: 16px;
    }

    nav li:first-child {
        align-content: flex-start;
    }

    .navbar-container {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
    }

    nav img {
        width: 107px;
        height: 76px;
    }

    nav a {
        color: #616161;
        text-decoration: none;
        display: block;
    }

    nav a:hover,
    nav [class*="fa-"]:hover {
        color: black;
    }

    .button {
        background-color: #00A2DF;
        border-radius: 5px;
        color: white;
        padding: 0.5rem;
        text-decoration: none;
        width: 100px;
        text-align: center;
    }

    .button:hover {
        box-shadow: rgba(93, 14, 21, 5) 0px 3px 8px;
    }
</style>
