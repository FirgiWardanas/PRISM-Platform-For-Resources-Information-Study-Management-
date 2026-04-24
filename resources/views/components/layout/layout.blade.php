<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>halaman teknik informatika</title>
    <link rel="stylesheet" href="/src/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
    @vite('..\resources\css\app.css')
    <title>{{ $title ?? 'App' }}</title>

    <style type="text/tailwindcss">
        @theme {
        --font-montserrat: "Montserrat", sans-serif;
      }
    </style>
</head>


    {{ $slot }} 

     
    <script src="{{ asset('js/app.js') }}"></script>
</html>

