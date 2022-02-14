@extends('lara-installer::layouts.setup')
@section('content')
<div class="relative flex items-center lg:justify-end w-full lg:w-1/2 h-full overflow-hidden lg:p-16">
    <div
        class="flex flex-col lg:mr-40 md:bg-white lg:bg-inherit md:px-16 md:py-8 md:rounded-lg md:shadow-sm lg:p-0 lg:rounded-none lg:shadow-none">
        <div class="flex items-start space-x-2">
            <div class="text-4xl font-semibold">
                {{ config('app.name') }}
            </div>
            <div class="bg-orange-600 py-0.5 px-1 rounded text-xs text-white font-semibold">
                v{{ config('lara-installer.app_version') }}
            </div>
        </div>

        <ul class="flex flex-col space-y-3 my-12">
            <li class="flex space-x-2 items-center">
                <div class="h-6 w-6 rounded-full bg-slate-400 flex justify-center items-center text-white font-bold">
                    1
                </div>
                <span class="text-lg">
                    Check Requirements
                </span>
            </li>
            <li class="flex space-x-2 items-center">
                <div class="h-6 w-6 rounded-full bg-slate-400 flex justify-center items-center text-white font-bold">
                    2
                </div>
                <span class="text-lg">
                    Setup Database
                </span>
            </li>
            <li class="flex space-x-2 items-center">
                <div class="h-6 w-6 rounded-full bg-slate-400 flex justify-center items-center text-white font-bold">
                    3
                </div>
                <span class="text-lg">
                    Environment Values
                </span>
            </li>
            <li class="flex space-x-2 items-center">
                <div class="h-6 w-6 rounded-full bg-slate-400 flex justify-center items-center text-white font-bold">
                    4
                </div>
                <span class="text-lg">
                    Create Admin Account
                </span>
            </li>
        </ul>

        <div class="flex">
            <a href="{{ route('li.requirement') }}"
                class="block px-8 pt-1.5 pb-2 bg-slate-800 text-slate-200 rounded-md">
                Get Started
            </a>
        </div>
    </div>
</div>
<div
    class="relative hidden lg:flex flex-auto items-center justify-center lg:w-1/2 h-full overflow-hidden p-16 bg-orange-400">
    <svg xmlns='http://www.w3.org/2000/svg' width='100%' height='100%' viewBox='0 0 1600 800'
        class="absolute inset-0 pointer-events-none block align-middle">
        <rect fill='#ff9d00' width='1600' height='800' />
        <g stroke='#000' stroke-width='66.7' stroke-opacity='0.05'>
            <circle fill='#ff9d00' cx='0' cy='0' r='1800' />
            <circle fill='#fb8d17' cx='0' cy='0' r='1700' />
            <circle fill='#f47d24' cx='0' cy='0' r='1600' />
            <circle fill='#ed6e2d' cx='0' cy='0' r='1500' />
            <circle fill='#e35f34' cx='0' cy='0' r='1400' />
            <circle fill='#d85239' cx='0' cy='0' r='1300' />
            <circle fill='#cc453e' cx='0' cy='0' r='1200' />
            <circle fill='#be3941' cx='0' cy='0' r='1100' />
            <circle fill='#b02f43' cx='0' cy='0' r='1000' />
            <circle fill='#a02644' cx='0' cy='0' r='900' />
            <circle fill='#901e44' cx='0' cy='0' r='800' />
            <circle fill='#801843' cx='0' cy='0' r='700' />
            <circle fill='#6f1341' cx='0' cy='0' r='600' />
            <circle fill='#5e0f3d' cx='0' cy='0' r='500' />
            <circle fill='#4e0c38' cx='0' cy='0' r='400' />
            <circle fill='#3e0933' cx='0' cy='0' r='300' />
            <circle fill='#2e062c' cx='0' cy='0' r='200' />
            <circle fill='#210024' cx='0' cy='0' r='100' />
        </g>
    </svg>
    <div class="z-10 relative w-full max-w-lg">
        <div class="text-5xl font-bold mb-8 text-slate-200">
            {{ config('lara-installer.heading') }}
        </div>
        <div class="text-lg text-orange-300">
            {{ config('lara-installer.sub_heading') }}
        </div>
        <div class="flex mt-4">
            <a href="{{ config('lara-installer.cta') }}"
                class="block bg-orange-400 text-white px-4 py-2 mt-4 rounded-md shadow-sm">Learn
                More</a>
        </div>
    </div>
</div>
@endsection
