<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <title>Halaman Masuk</title>
    <link rel="icon" type="image/png" href="assets/logo/logo_ParkED.png" />
</head>

<body>
    @include('sweetalert::alert')

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="{{ route('register.submit') }}" method="POST">
                @csrf
                <h1>Buat Akun</h1>
                <div class="social-icons">
                    <a href="{{ route('auth-google') }}" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>atau gunakan email untuk pendaftaran</span>
                <!-- First Name -->
                <input type="text" placeholder="Nama Depan" name="first_name" value="{{ old('first_name') }}"
                    required />
                @error('first_name')
                    <span class="error-message" style="color: red; font-size: 12px;">{{ $message }}</span>
                @enderror

                <!-- Last Name -->
                <input type="text" placeholder="Nama Belakang" name="last_name" value="{{ old('last_name') }}"
                    required />
                @error('last_name')
                    <span class="error-message" style="color: red; font-size: 12px;">{{ $message }}</span>
                @enderror

                <!-- Email -->
                <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" required />
                @error('email')
                    <span class="error-message" style="color: red; font-size: 12px;">{{ $message }}</span>
                @enderror

                <!-- Password -->
                <input type="password" placeholder="Kata Sandi" name="password" required />
                @error('password')
                    <span class="error-message" style="color: red; font-size: 12px;">{{ $message }}</span>
                @enderror

                <!-- Password confirmation field -->
                <input type="password" name="password_confirmation" placeholder="Konfirmasi Kata Sandi" required />

                <button type="submit">Daftar</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="{{ route('login.submit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h1>Masuk</h1>
                <div class="social-icons">
                    <a href="{{ route('auth-google') }}" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>atau gunakan email dan kata sandi</span>
                <input type="email" placeholder="Email" name="email" />
                <input type="password" placeholder="Kata Sandi" name="password" />
                <a href="#">Lupa Kata Sandi?</a>
                <button type="submit">Masuk</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Selamat Datang Kembali!</h1>
                    <p>Masukkan detail pribadi Anda untuk menggunakan semua fitur situs</p>
                    <button type="submit" class="hidden" id="login">Masuk</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Halo, Teman!</h1>
                    <p>Daftar dengan detail pribadi Anda untuk menggunakan semua fitur situs</p>
                    <button class="hidden" id="register">Daftar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/sweetalert/sweetalert.all.js"></script>
    <script>
        // Menampilkan SweetAlert berdasarkan sesi
        document.addEventListener('DOMContentLoaded', function() {
            @if (session('loginBerhasil'))
                Swal.fire({
                    title: "Berhasil!",
                    text: "{{ session('loginBerhasil') }}",
                    icon: "success",
                    button: "OK",
                }).then(() => {
                    window.location.href =
                        @php
                            if ($user->role == 'admin') {
                                '/dashboard';
                            } elseif ($user->role == 'user') {
                                '/dashboard';
                            }
                        @endphp;
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



        const container = document.getElementById("container");
        const registerBtn = document.getElementById("register");
        const loginBtn = document.getElementById("login");

        registerBtn.addEventListener("click", () => {
            container.classList.add("active");
        });

        loginBtn.addEventListener("click", () => {
            container.classList.remove("active");
        });
    </script>
    {{-- <script src="assets/js/script.js"></script> --}}
</body>

</html>
