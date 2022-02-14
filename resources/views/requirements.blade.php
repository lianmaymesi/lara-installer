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

        <ul class="flex flex-col space-y-3 mt-8">
            <li class="flex space-x-4 items-center">
                <a href="{{ route('li.index') }}" class="mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                </a>
                <span class="text-md text-xl font-medium">
                    Check Requirements
                </span>
            </li>
        </ul>

        <ul class="flex flex-col space-y-2 my-8">
            @foreach($results as $key => $successful)
            <li class="flex space-x-2 items-center">
                <div class="h-6 w-6 rounded-full flex justify-center items-center">
                    @if($successful)
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-400" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                    @else
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-600" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                            clip-rule="evenodd" />
                    </svg>
                    @endif
                </div>
                <span class="text-md text-slate-900 flex items-center space-x-2">
                    <span>
                        @lang('lara-installer::installer.requirements.' . $key)
                    </span>
                    @if($key === 'php_version')
                    <span class="text-xs bg-indigo-600 text-white py-0.5 px-1 rounded font-semibold">
                        {{ phpversion('core') }}
                    </span>
                    @endif
                </span>
            </li>
            @endforeach
        </ul>

        <div class="flex items-center space-x-8">
            <a href="{{ route('li.database') }}" {{ !in_array(false, $results, true) ? '' : 'disabled' }}
                class="block px-8 pt-1.5 pb-2 bg-slate-800 text-slate-200 rounded-md">
                Next
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
