@extends('lara-installer::layouts.setup')

@section('content')
<div class="relative flex items-center lg:justify-end w-full lg:w-1/2 h-full overflow-hidden lg:p-16">
    <form action="{{ route('li.save.account') }}" method="post">
        <div
            class="flex flex-col lg:mr-20 md:bg-white lg:bg-inherit md:px-16 md:py-8 md:rounded-lg md:shadow-sm lg:p-0 lg:rounded-none lg:shadow-none">
            <div class="flex items-end space-x-2">
                <div class="text-4xl font-semibold">
                    {{ config('app.name') }}
                </div>
                <div>
                    v{{ config('lara-installer.app_version') }}
                </div>
            </div>

            <ul class="flex flex-col space-y-3 mt-8">
                <li class="flex space-x-4 items-center">
                    <a href="{{ route('li.requirement') }}" class="mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                    </a>
                    <span class="text-md text-xl font-medium">
                        Create Account
                    </span>
                </li>
            </ul>

            <div class="grid grid-cols-1 min-w-[250px] space-y-4 my-8">
                @csrf
                <div>
                    <div class="relative w-full space-y-1">
                        <div class="flex items-center justify-between">
                            <label class="inline-flex items-center text-slate-700" for="name">
                                Name
                            </label>
                        </div>
                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                            class="block transition duration-75 shadow-sm focus:ring-1 w-full focus:ring-inset font-semibold bg-slate-50 text-sm dark:bg-slate-800 dark:border-slate-700 focus:border-blue-400 focus:ring-blue-400 border-gray-300 focus:bg-white" />
                    </div>
                    @if ($errors->has('name'))
                    <span class="text-xs text-red-400 mt-1 font-bold">
                        {{ $errors->first('name') }}
                    </span>
                    @endif
                </div>
                <div>
                    <div class="relative w-full space-y-1">
                        <div class="flex items-center justify-between">
                            <label class="inline-flex items-center text-slate-700" for="email">
                                Email
                            </label>
                        </div>
                        <input type="text" id="email" name="email" value="{{ old('email') }}"
                            class="block transition duration-75 shadow-sm focus:ring-1 w-full focus:ring-inset font-semibold bg-slate-50 text-sm dark:bg-slate-800 dark:border-slate-700 focus:border-blue-400 focus:ring-blue-400 border-gray-300 focus:bg-white" />
                    </div>
                    @if ($errors->has('email'))
                    <span class="text-xs text-red-400 mt-1 font-bold">
                        {{ $errors->first('email') }}
                    </span>
                    @endif
                </div>
                <div>
                    <div class="relative w-full space-y-1">
                        <div class="flex items-center justify-between">
                            <label class="inline-flex items-center text-slate-700" for="password">
                                Password
                            </label>
                        </div>
                        <input type="text" id="password" name="password" value="{{ old('password') }}"
                            class="block transition duration-75 shadow-sm focus:ring-1 w-full focus:ring-inset font-semibold bg-slate-50 text-sm dark:bg-slate-800 dark:border-slate-700 focus:border-blue-400 focus:ring-blue-400 border-gray-300 focus:bg-white" />
                    </div>
                    @if ($errors->has('password'))
                    <span class="text-xs text-red-400 mt-1 font-bold">
                        {{ $errors->first('password') }}
                    </span>
                    @endif
                </div>
                <div>
                    <div class="relative w-full space-y-1">
                        <div class="flex items-center justify-between">
                            <label class="inline-flex items-center text-slate-700" for="password_confirmation">
                                Re-type Password
                            </label>
                        </div>
                        <input type="text" id="password_confirmation" name="password_confirmation"
                            value="{{ old('password_confirmation') }}"
                            class="block transition duration-75 shadow-sm focus:ring-1 w-full focus:ring-inset font-semibold bg-slate-50 text-sm dark:bg-slate-800 dark:border-slate-700 focus:border-blue-400 focus:ring-blue-400 border-gray-300 focus:bg-white" />
                    </div>
                    @if ($errors->has('password_confirmation'))
                    <span class="text-xs text-red-400 mt-1 font-bold">
                        {{ $errors->first('password_confirmation') }}
                    </span>
                    @endif
                </div>
            </div>

            <div class="flex">
                <button type="submit" class="block px-8 pt-1.5 pb-2 bg-slate-800 text-slate-200 rounded-md">
                    Create Account
                </button>
            </div>
        </div>
    </form>
</div>
<div
    class="relative hidden lg:flex flex-auto items-center justify-center w-1/2 h-full overflow-hidden p-16 bg-slate-800">
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
