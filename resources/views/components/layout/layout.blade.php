<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'Halaman Teknik Informatika' }}</title>
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    {{-- library select2 --}}
    <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <title>{{ $title ?? 'App' }}</title>

    {{-- Alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style type="text/tailwindcss">
        @theme {
        --font-montserrat: "Montserrat", sans-serif;
      }
    </style>

    <style>
        .ts-wrapper {
            width: 100%;
        }

        /* Control */
        .ts-wrapper.single .ts-control {
            min-height: 42px !important;
            height: 42px !important;

            border: 1px solid #bfdbfe !important;
            border-radius: 18px !important;

            background: #fff !important;

            box-shadow: none !important;

            padding: 0 12px !important;

            display: flex;
            align-items: center;

            transition: .2s;
        }

        /* Hover */
        .ts-wrapper.single .ts-control:hover {
            border-color: #93c5fd !important;
        }

        /* Focus */
        .ts-wrapper.focus .ts-control {
            border-color: #60a5fa !important;
            box-shadow: 0 0 0 2px rgba(96, 165, 250, .15) !important;
        }

        /* Tulisan */
        .ts-control>.item,
        .ts-control>input {
            font-size: 15px;
            color: #374151;
            line-height: 1;
        }

        /* Placeholder */
        .ts-control>input::placeholder {
            color: #9ca3af;
        }

        /* Panah */
        .ts-wrapper.single .ts-control::after {
            border-width: 5px 5px 0 5px;
            border-color: #6b7280 transparent transparent transparent;
            right: 16px;
        }

        /* Dropdown */
        .ts-dropdown {
            margin-top: 6px;

            border: 1px solid #bfdbfe !important;
            border-radius: 18px !important;

            overflow: hidden;

            box-shadow: 0 10px 25px rgba(0, 0, 0, .08);
        }

        /* List */
        .ts-dropdown .option {
            padding: 11px 15px;
            font-size: 15px;
        }

        /* Hover option */
        .ts-dropdown .option.active {
            background: #2563eb;
            color: #fff;
        }

        /* Selected */
        .ts-dropdown .selected {
            background: #eff6ff;
        }
        
    </style>

</head>


{{ $slot }}

{{-- NOTIFIKASI LOGIN --}}
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


{{-- NOTIFIKASI INSERT UPDATE DELETE BERHASIL --}}
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


{{-- NOTIFIKASI VALIDASI ADA YANG SALAH --}}
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


{{-- VALIDASI TERJADI ERROR --}}
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