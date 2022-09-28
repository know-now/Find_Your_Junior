<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi maxime sunt facilis minima consectetur natus blanditiis laborum voluptatibus pariatur earum porro tenetur, harum expedita? Distinctio praesentium at aut totam maiores.</p>
                <hr>
                <x-quote />
                <nav>
                    <li><a href="/adem">Work permit in ADEM</a></li>
                    <li><a href="/dashboard">My account</a></li>
                    <li><a href="/junior_profile">Junior profile</a></li>
                    <li><a href="/junior">Junior Homepage</a></li>
                    <li><a href="/skills">Search a Junior</a></li>
                    <li><a href="/">Company Homepage</a></li>
                    <li><a href="/soft_skills">Soft Skills</a></li>
                    <li><a href="/grade">Test Results</a></li>
                    <li><a href="/junior_details">Info about Junior</a></li>
                </nav>
            </div>
        </div>

    </div>

</x-app-layout>
