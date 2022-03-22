<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ mix('css/app/app.css') }}" />
</head>
<body>
    <div class="wrapper">
        <x-app.cursor/>

        <x-app.modals.newsletter/>
        <x-app.modals.search/>
        
        <x-app.menu/>
        
        <x-app.headers.default class="header--dark" aria-label="header" id="header"/>
        <main id="app">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <x-app.footer />
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" async></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" async></script>

    <script src="{{ mix('js/app.js') }}" defer></script>

</body>

</html>
