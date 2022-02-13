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
                v1.0.0
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
    class="relative hidden lg:flex flex-auto items-center justify-center lg:w-1/2 h-full overflow-hidden p-16 bg-slate-800">
    <svg viewBox="0 0 960 540" width="100%" height="100%" preserveAspectRatio="xMidYMax slice"
        xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 pointer-events-none block align-middle">
        <g fill="none" stroke="currentColor" stroke-width="100" class="text-gray-700 opacity-25">
            <circle r="234" cx="196" cy="23"></circle>
            <circle r="234" cx="790" cy="491"></circle>
        </g>
    </svg>
    <svg viewBox="0 0 220 192" width="220" height="192" fill="none" class="absolute -top-16 -right-16 text-gray-700">
        <defs>
            <pattern id="837c3e70-6c3a-44e6-8854-cc48c737b659" x="0" y="0" width="20" height="20"
                patternUnits="userSpaceOnUse">
                <rect x="0" y="0" width="4" height="4" fill="currentColor"></rect>
            </pattern>
        </defs>
        <rect width="220" height="192" fill="url(#837c3e70-6c3a-44e6-8854-cc48c737b659)">
        </rect>
    </svg>
    <div class="z-10 relative w-full max-w-2xl">
        <div class="text-5xl font-bold mb-8 text-slate-200">Laravel installer <br />for your App
        </div>
        <div class="text-lg text-slate-400">
            A simple Laravel installer for your App which is manages to migrate & update the
            environment into
            your
            live server. Laravel Installer is higly inspired from XXXX.
        </div>
        <button class="bg-slate-700 text-slate-400 px-4 py-2 mt-4 rounded-md shadow-sm">Learn
            More</button>
    </div>
</div>
@endsection
