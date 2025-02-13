<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ParkEd | {{ $tittle }}</title>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('vendor/bootstrap-5.3.3/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free-6.6.0-web/css/all.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/logo/logo_ParkED.png') }}" sizes="200x200" />

    <style>
        body {
            background-image: url({{ asset('assets/img/Image\ \(7\).png') }});
        }

        .image-container {
            background-image: url({{ asset('assets/img/Image\ \(4\).png') }});
        }
    </style>

</head>

<body>
    @include('sweetalert::alert')

    @yield('login-content')

    <!-- Bootstrap Bundle with Popper -->
    {{-- <script src="{{ asset('vendor/bootstrap-5.3.3/dist/js/bootstrap.bundle.min.js') }}"></script> --}}
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>

    <script src="{{ asset('assets/js/login.js') }}"></script>
    <script>
        // Menampilkan SweetAlert berdasarkan sesi
        document.addEventListener('DOMContentLoaded', function() {
            @if (session('loginAdmin'))
                Swal.fire({
                    title: "Berhasil!",
                    text: "{{ session('loginAdmin') }}",
                    icon: "success",
                    button: "OK",
                }).then(() => {
                    window.location.href = '/dashboard'
                });
            @endif
            @if (session('loginUser'))
                Swal.fire({
                    title: "Berhasil!",
                    text: "{{ session('loginUser') }}",
                    icon: "success",
                    button: "OK",
                }).then(() => {
                    window.location.href = '/profile'
                });
            @endif


            @if (session('loginGagal'))
                Swal.fire({
                    title: "Error!",
                    text: "{{ session('loginGagal') }}",
                    icon: "error",
                    button: "OK",
                });
            @endif
            @if (session('Registrasi Sukses'))
                Swal.fire({
                    title: "Berhasil!",
                    text: "{{ session('Registrasi Sukses') }}",
                    icon: "success",
                    button: "OK",
                });
            @endif
        });
    </script>
</body>

</html>
