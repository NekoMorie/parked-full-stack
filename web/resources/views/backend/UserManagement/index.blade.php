@extends('backend.layout.app')

@section('contentAdmin')
    <div class="content-wrapper">
        <div class="container-fluid py-4">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="mb-4">User Management</h2>
                    <div class="card shadow">
                        <div class="card-header text-white d-flex justify-content-end align-items-center">
                            <a href="/UserAdd" class="btn btn-primary m-3"><i class="fa-solid fa-plus font-weight-bold"></i>
                                Add</a>
                        </div>
                        <div class="card-body p-4">
                            <div class="table-responsive">
                                <table class="table table table-striped table-bordered table-hover row-border"
                                    id="historyTable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Last Login</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="historyTableBody">
                                        @foreach ($users as $i => $us)
                                            <tr>
                                                <td>{{ $i + 1 }}</td> <!-- This will display the row number -->
                                                <td>
                                                    <img src="{{ $us->photo ? Storage::url($us->photo) : asset($us->google_photo) }}"
                                                        alt="{{ $us['name'] }}'s photo" width="40px"
                                                        class="border rounded-circle img-fluid"
                                                        style="margin-right: 5px; object-fit: cover;">
                                                </td>
                                                <td>{{ $us['first_name'] }} {{ $us['last_name'] }}</td>
                                                <td>{{ $us['email'] }}</td>
                                                <td>{{ $us['last_login'] }}</td>
                                                <td>
                                                    <a href="{{ route('UserEdit', $us->id) }}" class="btn btn-warning"
                                                        title="Edit User">
                                                        <i class="fa-solid fa-pen text-white"></i>
                                                    </a>
                                                    <button class="btn btn-info" data-bs-toggle="modal"
                                                        data-bs-target="#infoModal{{ $us->id }}">
                                                        <i class="fa-brands fa-readme text-white"></i>
                                                    </button>
                                                    <button class="btn btn-danger"
                                                        onclick="confirmDelete({{ $us->id }})">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <!-- Modal untuk menampilkan informasi lebih lanjut -->
                                            <div class="modal fade" id="infoModal{{ $us->id }}" tabindex="-1"
                                                aria-labelledby="infoModalLabel{{ $us->id }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="infoModalLabel{{ $us->id }}">
                                                                Informasi Pengguna: {{ $us['first_name'] }}
                                                                {{ $us['last_name'] }}</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-4 text-center">
                                                                    <img src="{{ $us->photo ? Storage::url($us->photo) : asset($us->google_photo) }}"
                                                                        class="img-fluid rounded-circle"
                                                                        alt="{{ $us['first_name'] }}'s photo"
                                                                        style="width: 120px; height: 120px; object-fit: cover;">
                                                                    <h5 class="mt-2">{{ $us['first_name'] }}
                                                                        {{ $us['last_name'] }}</h5>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <p><strong><i class="fa-solid fa-envelope"></i>
                                                                            Email:</strong> {{ $us['email'] }}</p>
                                                                    <p><strong><i class="fa-solid fa-calendar-alt"></i> Date
                                                                            of Birth:</strong>
                                                                        {{ $us['tgl_ulangtahun'] ? \Carbon\Carbon::parse($us['tgl_ulangtahun'])->format('d-m-Y') : 'N/A' }}
                                                                    </p>
                                                                    <p><strong><i class="fa-solid fa-map-marker-alt"></i>
                                                                            Address:</strong> {{ $us['address'] ?? 'N/A' }}
                                                                    </p>
                                                                    <p><strong><i class="fa-solid fa-phone"></i> Phone
                                                                            Number:</strong>
                                                                        {{ $us['phone_number'] ?? 'N/A' }}</p>
                                                                    <p><strong><i class="fa-solid fa-briefcase"></i>
                                                                            Occupation:</strong>
                                                                        {{ $us['occupation'] ?? 'N/A' }}</p>
                                                                    <p><strong><i class="fa-solid fa-sign-in-alt"></i> Last
                                                                            Login:</strong>
                                                                        {{ $us['last_login'] ? \Carbon\Carbon::parse($us['last_login'])->format('d-m-Y H:i:s') : 'N/A' }}
                                                                    </p>
                                                                    <p><strong><i class="fa-solid fa-calendar-plus"></i>
                                                                            Date Created:</strong>
                                                                        {{ $us['created_at'] ? \Carbon\Carbon::parse($us['created_at'])->format('d-m-Y H:i:s') : 'N/A' }}
                                                                    </p>
                                                                    <p><strong><i class="fa-solid fa-calendar-check"></i>
                                                                            Date Edited:</strong>
                                                                        {{ $us['updated_at'] ? \Carbon\Carbon::parse($us['updated_at'])->format('d-m-Y H:i:s') : 'N/A' }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Tutup</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
