@extends('Login.layout')

@section('login-content')
    <div class="container login-container">
        <div class="card">
            <div class="row g-0">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="image-container"></div>
                </div>
                <div class="col-lg-6">
                    <div class="card-header">
                        <h2 class="mb-0 fw-bold">Selamat Datang Kembali</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('login.submit') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label for="email" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label">Kata Sandi</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-4 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">Ingat Saya</label>
                                </div>
                                <a href="/forgot" class="text-muted">Lupa kata sandi?</a>
                            </div>
                            <div class="d-grid gap-3">
                                <button type="submit" class="btn btn-warning btn-login fw-bold">Masuk</button>
                                <a href="{{ route('auth-google') }}" class="btn btn-google btn-login fw-bold"
                                    type="button">
                                    <i class="fab fa-google me-2"></i>Masuk dengan Google
                                </a>
                            </div>
                        </form>
                        <div class="mt-4 text-center">
                            <p class="mb-0">Belum punya akun? <a href="/regist" class="fw-bold">Daftar</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
