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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title ?? 'App' }}</title>

    {{-- Alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style type="text/tailwindcss">
        @theme {
        --font-montserrat: "Montserrat", sans-serif;
      }
    </style>
</head>


{{ $slot }}




@if(session('login_success'))
<script>
document.addEventListener('DOMContentLoaded', function () {
    window.Swal.fire({
        toast: true,
        position: 'top-end',
        icon: 'success',
        title: @json(session('login_success')),
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        width: 350,
        padding: '12px',
        customClass: {
            popup: 'text-base'
        }
    });
});
</script>
@endif

@if(session('success'))
<script>
document.addEventListener('DOMContentLoaded', function () {
    window.Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: @json(session('success')),
        confirmButtonColor: '#16a34a',
        confirmButtonText: 'OK'
    });
});
</script>
@endif

@if($errors->any())
<script>
document.addEventListener('DOMContentLoaded', function () {

    let messages = @json($errors->all());

    Swal.fire({
        icon: 'error',
        title: 'Validasi Gagal!',
        html: messages.map(msg => `• ${msg}`).join('<br>'),
        confirmButtonColor: '#dc2626'
    });

});
</script>
@endif

@if(session('error'))
<script>
document.addEventListener('DOMContentLoaded', function () {

    Swal.fire({
        icon: 'error',
        title: 'Oops!',
        text: @json(session('error')),
        confirmButtonColor: '#dc2626'
    });

});
</script>
@endif

</html>