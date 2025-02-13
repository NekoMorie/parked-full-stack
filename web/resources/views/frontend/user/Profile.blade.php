@extends('frontend.layout.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <!-- Sidebar starts here -->
            <div class="col-md-3 col-lg-2 me-md-4">
                <div class="d-flex align-items-center mb-4">
                    <h4 class="ms-3 mb-0 ">{{ $user->first_name }} {{ $user->last_name }}</h4>
                </div>
                <ul class="list-unstyled border-top border-bottom py-3">
                    <li class="mb-2"><a href="/profile" class="text-decoration-none text-black">Profil Pengguna</a></li>
                    <li class="mb-2"><a href="/history" class="text-decoration-none text-black">Riwayat Diagnosis</a>
                    </li>
                </ul>
            </div>
            <!-- Sidebar ends here -->

            <!-- Main content starts here -->
            <div class="col-md-8 col-lg-9">
                <h1 class="text-center mb-4">Profil Pengguna</h1>

                <form action="/update-profile" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-3 mb-3 text-center">
                            <img id="imagePreview"
                                src="{{ $user->photo ? Storage::url($user->photo) : asset($user->google_photo) }}"
                                class="img-thumbnail" alt="Foto Profil" style="max-width: 150px; height: auto;">
                        </div>

                        <div class="col-md-9 mb-3">
                            <label for="photo" class="form-label">Foto Profil</label>
                            <input type="file" class="form-control" id="photo" accept="image/*"
                                onchange="previewImage(event)" name="photo">
                            @error('photo')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="form-label">Nama Depan</label>
                            <input type="text" name="first_name" class="form-control" id="firstName"
                                value="{{ old('first_name', $user->first_name) }}" required>
                            @error('first_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName" class="form-label">Nama Belakang</label>
                            <input type="text" class="form-control" id="lastName"
                                value="{{ old('last_name', $user->last_name) }}" name="last_name" required>
                            @error('last_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    @if ($user->password == null)
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" required>
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="confirmPassword" class="form-label">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="confirmPassword" name="confirmed" required>
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="oldPassword" class="form-label">Password Lama</label>
                                <input type="password" name="old_password" class="form-control" id="oldPassword" required>
                                @error('old_password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="newPassword" class="form-label">Password Baru</label>
                                <input type="password" name="password" class="form-control" id="newPassword" required>
                                @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="confirmNewPassword" class="form-label">Konfirmasi Password Baru</label>
                                <input type="password" class="form-control" id="confirmNewPassword" name="confirmed"
                                    required>
                            </div>
                        </div>
                    @endif
                    <div class="mb-3">
                        <label for="email" class="form-label">Alamat Email</label>
                        <input type="email" class="form-control" id="email" value="{{ $user->email }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="dateOfBirth" class="form-label">Tanggal Lahir
                        </label>
                        <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth" required
                            value="{{ $user->formatted_tgl_ulangtahun }}">
                        @error('dateOfBirth')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat</label>
                        <textarea class="form-control" id="address" name="address" rows="3" required>{{ old('address', $user->address) }}</textarea>
                        @error('address')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label">Nomor Telepon</label>
                        <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber"
                            value="{{ old('phoneNumber', $user->phone_number) }}" required>
                        @error('phoneNumber')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="occupation" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" id="occupation" name="occupation"
                            value="{{ old('occupation', $user->occupation) }}">
                        @error('occupation')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </form>
            </div>


            <!-- Main content ends here -->
        </div>
    </div>
@endsection
