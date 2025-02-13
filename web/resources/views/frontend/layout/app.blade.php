<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ParkEd | {{ $tittle }}</title>
    <link href="{{ asset('vendor/bootstrap-5.3.3/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free-6.6.0-web/css/all.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/logo/logo_ParkED.png') }}" sizes="200x200" />
</head>

<body>
    @include('sweetalert::alert')

    @include('frontend.layout.navbar')

    @yield('content')
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4 mb-md-0">
                    <h2 class="h5 mb-3">ParkED </h2>
                    <p class="small">Memberdayakan melalui edukasi dan deteksi dini penyakit Parkinson.</p>
                    <div class="social-icons">
                        <a href="#" class="text-white me-2"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <h3 class="h6 mb-3">Tautan Cepat</h3>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Beranda</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Tentang Parkinson</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Alat Diagnosis</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Sumber Daya</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Hubungi Kami</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <h3 class="h6 mb-3">Alat Diagnosis</h3>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Tes Spiral</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Analisis Suara</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Analisis CT Scan</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3 class="h6 mb-3">Sumber Daya</h3>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">Artikel Edukasi</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Berita Penelitian</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Grup Dukungan</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Sumber Daya Pengasuh</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Tanya Jawab</a></li>
                        <li><a href="#" class="text-white text-decoration-none">Glosarium</a></li>
                    </ul>
                </div>
            </div>
            <hr class="mt-4 mb-3">
            <div class="row">
                <div class="col-md-6 small">
                    &copy; 2024 ParkED. Hak Cipta Dilindungi.
                </div>
                <div class="col-md-6 text-md-end small">
                    <a href="#" class="text-white text-decoration-none me-2">Kebijakan Privasi</a>
                    <a href="#" class="text-white text-decoration-none me-2">Ketentuan Layanan</a>
                    <a href="#" class="text-white text-decoration-none">Kebijakan Cookie</a>
                </div>
            </div>
    </footer>
    <script src="{{ asset('vendor/bootstrap-5.3.3/dist/js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>

    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script>
        function confirmLogout(event) {
            event.preventDefault();

            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda akan keluar dari akun Anda!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, keluar!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "{{ route('logout') }}";
                }
            });
        }
        @if (session('gagal'))
            Swal.fire({
                icon: 'warning',
                title: 'Peringatan',
                text: '{{ session('gagal') }}',
            });
        @endif

        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ session('success') }}',
            });
        @endif

        // document.addEventListener('DOMContentLoaded', function() {
        //     // Menggunakan SweetAlert untuk notifikasi sukses
        //     Swal.fire({
        //         title: 'Selamat Datang!',
        //         text: 'Terima kasih telah mengunjungi ParkED!',
        //         icon: 'success',
        //         confirmButtonText: 'Oke'
        //     });
        // });
    </script>
</body>

</html>
