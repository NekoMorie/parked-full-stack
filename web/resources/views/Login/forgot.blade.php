@extends('Login.layout')

@section('login-content')
    <div class="container forgot-password-container">
        <div class="card">
            <div class="row g-0">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="image-container"></div>
                </div>
                <div class="col-lg-6">
                    <div class="card-header">
                        <h2 class="mb-0 fw-bold">Lupa Kata Sandi</h2>
                    </div>
                    <div class="card-body">
                        <p class="mb-4">Masukkan alamat email Anda dan kami akan mengirimkan tautan untuk mengatur ulang kata sandi.</p>
                        <form id="forgotPasswordForm">
                            <div class="mb-4">
                                <label for="email" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-warning btn-reset fw-bold">Atur Ulang Kata Sandi</button>
                            </div>
                        </form>
                        <div class="mt-4 text-center">
                            <p class="mb-0">Ingat kata sandi Anda? <a href="login.html" class="fw-bold">Masuk</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
