<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel Installer') }}</title>

    <link rel="stylesheet" href="http://lara-installer.test\resources\dist\css\app.css">

</head>

<body class="antialiased bg-gray-50 dark:bg-slate-800 dark:text-slate-400">
    <div class="h-full">
        <main class="flex lg:items-start lg:basis-full min-h-screen">
            <div class="relative flex w-full lg:flex-auto min-h-screen">
                <div class="lg:flex lg:items-start lg:justify-start lg:flex-auto mx-auto">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
</body>

</html>
