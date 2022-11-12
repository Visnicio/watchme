<!DOCTYPE html>
<html lang="en_US">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Watchme - @yield('title')</title>
        

        @vite('resources/css/app.css')

    </head>
    <body class="bg-gray-800 text-white">
        <nav class="bg-rose-600 text-white p-10 ">
            <div class="container mx-auto">
                <a href="<?= url('/'); ?>" class="text-3xl font-bold">WatchMe</a>
            </div>
        </nav>
 
        <div class="container mx-auto py-10">
            @yield('content')
        </div>
    </body>
    <footer>
        @yield('footer')
        @yield('footer_scripts')
    </footer>
</html>