<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ mix('css/admin/app.css') }}">
    <link rel="icon" href="{{ asset($favicon) }}" type="image/x-icon" />
    @yield('styles')
</head>
<body>
    <div id="app">

        @if (session('error') || session('success'))
        <x-admin.alert></x-admin.alert>
        @endif

        <div class="wrapper">
            <x-admin.sidebar/>
            <main class="dashboard">
                {{ $slot }}
            </main>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="{{ mix('js/admin.js') }}"></script>
    
    @yield('scripts')
</body>
</html>
