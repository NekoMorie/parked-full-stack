<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ParkEd | {{ $tittle }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor\fontawesome-free-6.6.0-web\css\all.min.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="icon" type="image/png" href="{{ asset('assets/logo/logo_ParkED.png') }}" sizes="200x200" />

    <link rel="stylesheet" href="{{ asset('assets/css/styleadmin.css') }}">
</head>

<body>
    @include('sweetalert::alert')

    @include('backend.layout.navbar')

    @yield('contentAdmin')

    <!-- Footer -->
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">&copy; 2024 ParkED Admin. All rights reserved.</span>
        </div>
    </footer>
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/scriptadmin.js') }}"></script>
    <script>
        function confirmLogout(event) {
            event.preventDefault(); // Prevent the default link action

            Swal.fire({
                title: 'Are you sure?',
                text: "You will be logged out of your account!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, logout!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect to the logout route if confirmed
                    window.location.href = "{{ route('logout') }}";
                }
            });
        }
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
                confirmButtonText: 'OK'
            });
        @endif
    </script>
</body>

</html>
