@extends('backend.layout.app')

@section('contentAdmin')
    <div class="content-wrapper">
        <div class="container-fluid py-4">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <h2 class="mb-4">Add User</h2>
                    <div class="card shadow">
                        <div class="card-body p-4">
                            <form action="{{ route('store.User') }}" id="addUserForm" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="first_name" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="first_name" name="first_name"
                                                placeholder="First Name" value="{{ old('first_name') }}" required>
                                            @error('first_name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="$def4ult23">
                                            @error('password')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="email@gmail.com" value="{{ old('email') }}" required>
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="last_name" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="last_name" name="last_name"
                                                placeholder="Last Name" value="{{ old('last_name') }}" required>
                                            @error('last_name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control" id="confirmPassword" name="confirm"
                                                placeholder="Confirm Password">
                                            @error('confirm')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="role" class="form-label">Choose Role</label>
                                            <select class="form-select" id="role" name="role" required>
                                                <option value="" selected disabled>Select a role</option>
                                                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin
                                                </option>
                                                <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User
                                                </option>
                                            </select>
                                            @error('role')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label for="profilePhoto" class="form-label">Profile Photo</label>
                                            <input type="file" class="form-control" id="profilePhoto" name="profilePhoto"
                                                accept="image/*">
                                            @error('profilePhoto')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <center>
                                                <img id="photoPreview" src="assets/img/defaultUser.jpg"
                                                    alt="Profile photo preview" class="img-thumbnail"
                                                    style="max-width: 100%; max-height: 200px; border-radius: 10px;">
                                            </center>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">Add User</button>
                                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
