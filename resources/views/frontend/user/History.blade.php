@extends('frontend.layout.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <!-- Sidebar starts here -->
            <div class="col-md-3 col-lg-2 me-md-4">
                <div class="d-flex align-items-center mb-4">
                    <h3 class="ms-3 mb-0 ">Nama Akun</h3>
                </div>
                <ul class="list-unstyled border-top border-bottom py-3">
                    <li class="mb-2"><a href="/profile" class="text-decoration-none text-black">Biodata</a></li>
                    <li class="mb-2"><a href="/history" class="text-decoration-none text-black">Riwayat Diagnosis</a>
                    </li>
                </ul>
            </div>
            <!-- Sidebar ends here -->

            <!-- Main content starts here -->
            <div class="col-md-8 col-lg-9">
                <h1 class="text-center mb-4">Riwayat Diagnosis</h1>
                <p class="text-center mb-5">Berikut adalah catatan diagnosis Anda sebelumnya.</p>

                <div class="table-responsive">
                    <table class="table table-hover" id="historyTable">
                        <thead>
                            <tr class="text-center" style="text-align: center!important">
                                <th scope="col">Tanggal</th>
                                <th scope="col">Tes Mengambar Spiral</th>
                                <th scope="col">Tes Rekaman Suara</th>
                                <th scope="col">Tes DaTScan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($history as $his)
                                <tr class="text-center ">
                                    <td>{{ $his['created_at'] }}</td>
                                    <td>
                                        <span
                                            class="badge text-white {{ $his['hasil_diagnosa1'] !== null ? ($his['hasil_diagnosa1'] ? 'bg-danger' : 'bg-success') : '' }}">
                                            {{ $his['hasil_diagnosa1'] !== null ? ($his['hasil_diagnosa1'] ? 'Terdeteksi' : 'Tidak Terdeteksi') : '-' }}
                                        </span>
                                    </td>
                                    <td>
                                        <span
                                            class="badge  text-white {{ $his['hasil_diagnosa2'] !== null ? ($his['hasil_diagnosa2'] ? 'bg-danger' : 'bg-success') : '' }}">
                                            {{ $his['hasil_diagnosa2'] !== null ? ($his['hasil_diagnosa2'] ? 'Terdeteksi' : 'Tidak Terdeteksi') : '-' }}
                                        </span>
                                    </td>
                                    <td>
                                        <span
                                            class="badge text-white {{ $his['hasil_diagnosa3'] !== null ? ($his['hasil_diagnosa3'] ? 'bg-danger' : 'bg-success') : '' }}">
                                            {{ $his['hasil_diagnosa3'] !== null ? ($his['hasil_diagnosa3'] ? 'Terdeteksi' : 'Tidak Terdeteksi') : '-' }}
                                        </span>
                                    </td>

                                    <td><button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                            data-bs-target="#resultModal{{ $his['id'] }}">
                                            Lihat Hasil
                                        </button></td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="resultModal{{ $his['id'] }}" tabindex="-1"
                                    aria-labelledby="resultModalLabel{{ $his['id'] }}" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content border-0">
                                            <!-- Simplified Header -->
                                            <div class="modal-header border-0">
                                                <h5 class="modal-title fw-bold" id="resultModalLabel{{ $his['id'] }}">
                                                    Detail Hasil Diagnosis
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body px-4 py-2">
                                                <!-- Tanggal Card -->
                                                <div class="date-card mb-4">
                                                    <div class="d-flex align-items-center">
                                                        <div class="date-icon me-3">
                                                            <i class="fas fa-calendar-alt"></i>
                                                        </div>
                                                        <div>
                                                            <small class="text-muted d-block">Tanggal Pemeriksaan</small>
                                                            <span class="fw-medium">{{ $his['created_at'] }}</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Test Results -->
                                                <div class="test-results">
                                                    <!-- Spiral Test -->
                                                    <div class="result-card mb-3">
                                                        <div class="result-header">
                                                            <div class="result-icon spiral-icon">
                                                                <i class="fas fa-pen-fancy"></i>
                                                            </div>
                                                            <div class="result-info">
                                                                <h6 class="mb-2">Tes Menggambar Spiral</h6>
                                                                <span class="status-badge {{ $his['hasil_diagnosa1'] !== null ? ($his['hasil_diagnosa1'] ? 'status-danger' : 'status-success') : 'status-neutral' }}">
                                                                    {{ $his['hasil_diagnosa1'] !== null ? ($his['hasil_diagnosa1'] ? 'Terdeteksi' : 'Tidak Terdeteksi') : '-' }}
                                                                </span>
                                                            </div>
                                                            <button class="download-button">
                                                                <i class="fas fa-download"></i>
                                                                <span>Download</span>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <!-- Voice Test -->
                                                    <div class="result-card mb-3">
                                                        <div class="result-header">
                                                            <div class="result-icon voice-icon">
                                                                <i class="fas fa-microphone-alt"></i>
                                                            </div>
                                                            <div class="result-info">
                                                                <h6 class="mb-2">Tes Rekaman Suara</h6>
                                                                <span class="status-badge {{ $his['hasil_diagnosa2'] !== null ? ($his['hasil_diagnosa2'] ? 'status-danger' : 'status-success') : 'status-neutral' }}">
                                                                    {{ $his['hasil_diagnosa2'] !== null ? ($his['hasil_diagnosa2'] ? 'Terdeteksi' : 'Tidak Terdeteksi') : '-' }}
                                                                </span>
                                                            </div>
                                                            <button class="download-button">
                                                                <i class="fas fa-download"></i>
                                                                <span>Download</span>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <!-- DaTScan Test -->
                                                    <div class="result-card">
                                                        <div class="result-header">
                                                            <div class="result-icon datscan-icon">
                                                                <i class="fas fa-brain"></i>
                                                            </div>
                                                            <div class="result-info">
                                                                <h6 class="mb-2">Tes DaTScan</h6>
                                                                <span class="status-badge {{ $his['hasil_diagnosa3'] !== null ? ($his['hasil_diagnosa3'] ? 'status-danger' : 'status-success') : 'status-neutral' }}">
                                                                    {{ $his['hasil_diagnosa3'] !== null ? ($his['hasil_diagnosa3'] ? 'Terdeteksi' : 'Tidak Terdeteksi') : '-' }}
                                                                </span>
                                                            </div>
                                                            <button class="download-button">
                                                                <i class="fas fa-download"></i>
                                                                <span>Download</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer border-0">
                                                <button type="button" class="close-button" data-bs-dismiss="modal">
                                                    <i class="fas fa-times"></i>
                                                    <span>Tutup</span>
                                                </button>
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
@endsection
