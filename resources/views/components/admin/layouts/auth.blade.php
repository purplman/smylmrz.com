<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ mix('css/admin/app.css') }}">
    <link rel="icon" href="{{ asset($favicon) }}" type="image/x-icon" />
</head>
<body>
    <main id="app">
        <div class="wrapper">
            <div class="auth">
                {{ $slot }}
            </div>
        </div>
    </main>
</body>
</html>
