<!doctype html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>halaman teknik informatika</title>

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

        /* Control (Kondisi Normal) */
        .ts-wrapper.single .ts-control {
            /* Gunakan min-height saja, hapus height mati agar flexbox bisa bekerja normal */
            min-height: 42px !important;

            border: 1px solid #d1d5db !important;
            /* gray-300 */
            border-radius: 9999px !important;
            /* Pakai pill/capsule bulat penuh agar senada dengan input kirimu */
            background: #fff !important;
            box-shadow: none !important;

            /* Berikan padding kanan agak luas (pr-10 / 40px) supaya teks TIDAK MENABRAK panah */
            padding: 0 40px 0 16px !important;

            display: flex !important;
            align-items: center !important;
            position: relative;
            transition: .2s;
        }

        /* Hover */
        .ts-wrapper.single .ts-control:hover {
            border-color: #9ca3af !important;
            /* gray-400 */
        }

        /* Focus (Pas Dropdown Kebuka) */
        .ts-wrapper.focus .ts-control {
            outline: none !important;
            border-color: #93c5fd !important;
            /* Blue-300 */
            box-shadow: 0 0 0 4px rgba(147, 197, 253, 0.25) !important;
            /* Ring focus khas Tailwind */
        }

        /* Memperbaiki posisi teks terpilih & input pencarian internal Tom Select */
        .ts-wrapper.single .ts-control .item,
        .ts-wrapper.single .ts-control input {
            font-size: 14px !important;
            color: #374151 !important;
            /* gray-700 */
            line-height: 1.5 !important;
            margin: 0 !important;
            padding: 0 !important;
            background: transparent !important;
            /* Mencegah teks patah jadi 2 baris, potong pakai titik-titik jika terlalu panjang */
            white-space: nowrap !important;
            overflow: hidden !important;
            text-overflow: ellipsis !important;
        }

        /* Placeholder pencarian */
        .ts-control>input::placeholder {
            color: #9ca3af !important;
        }

        /* Menyelamatkan Ikon Panah Dropdown agar presisi di kanan tengah */
        .ts-wrapper.single .ts-control::after {
            content: ' ' !important;
            display: block !important;
            position: absolute !important;
            top: 50% !important;
            right: 16px !important;
            /* Jarak pas dari dinding kanan */
            transform: translateY(-50%) !important;
            /* Sempurna di tengah vertikal */

            border-width: 5px 5px 0 5px !important;
            border-color: #6b7280 transparent transparent transparent !important;
            width: 0 !important;
            height: 0 !important;
        }

        /* Dropdown Kotak Pilihan di Bawahnya */
        .ts-dropdown {
            margin-top: 6px !important;
            border: 1px solid #e5e7eb !important;
            /* gray-200 */
            border-radius: 14px !important;
            overflow: hidden !important;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important;
            z-index: 50 !important;
        }

        /* Gaya untuk baris list pilihan di dalam dropdown */
        .ts-dropdown .option {
            padding: 10px 16px !important;
            font-size: 14px !important;
            color: #374151 !important;
            cursor: pointer;
        }

        /* Efek saat list di-hover kursor */
        .ts-dropdown .active {
            background-color: #f3f4f6 !important;
            /* gray-100 */
            color: #111827 !important;
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