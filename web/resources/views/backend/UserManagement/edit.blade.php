@extends('backend.layout.app')

@section('contentAdmin')
    <!-- Page Content -->
    <div class="content-wrapper">
        <div class="container-fluid py-4">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <h2 class="mb-4">Edit User</h2>
                    <div class="card shadow">
                        <div class="card-body p-4">
                            <form id="editUserForm" method="POST" action="{{ route('update.User', $users->id) }}"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="first_name" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="first_name" name="first_name"
                                                placeholder="First Name" value="{{ old('first_name', $users->first_name) }}"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">New Password</label>
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="Leave blank to get default password.">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="email@email.com" value="{{ old('email', $users->email) }}"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="last_name" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="last_name" name="last_name"
                                                placeholder="Last Name" value="{{ old('last_name', $users->last_name) }}"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control" id="confirmPassword"
                                                name="confirmPassword" placeholder="Confirm Password">
                                        </div>
                                        <div class="mb-3">
                                            <label for="role" class="form-label">Choose Role</label>
                                            <select class="form-select" id="role" name="role" required>
                                                <option value="" disabled>Select a role</option>
                                                <option value="admin" {{ $users->role === 'admin' ? 'selected' : '' }}>
                                                    Admin
                                                </option>
                                                <option value="user" {{ $users->role === 'user' ? 'selected' : '' }}>User
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label for="profilePhoto" class="form-label">Profile Photo</label>
                                            <input type="file" class="form-control" id="profilePhoto" name="profilePhoto"
                                                accept="image/*" onchange="previewPhoto(event)">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <img id="photoPreview"
                                                src="{{ $users->photo ? Storage::url($users->photo) : asset($users->google_photo) }}"
                                                alt="Profile photo preview" class="img-thumbnail"
                                                style="max-width: 100%; max-height: 200px; border-radius: 10px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">Update User</button>
                                    <a href="{{ route('UserManagement') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
