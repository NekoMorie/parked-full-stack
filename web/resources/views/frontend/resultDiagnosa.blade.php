@extends ("frontend.layout.app")

@section('content')
    <section class="container my-5">
        <h1 class="text-center mb-5 fw-bold">Hasil Diagnosis</h1>

        <div class="row justify-content-center">
            @if (isset($apiResponse['hw-result']))
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0 rounded-4">
                        <div class="card-header {{ $apiResponse['hw-result'] ? 'bg-danger' : 'bg-success' }} text-white rounded-top-4">
                            <h5 class="card-title mb-0 py-2 text-center">Tes Spiral</h5>
                        </div>
                        <div class="card-body text-center py-4">
                            <div class="mb-3">
                                @if($apiResponse['hw-result'])
                                    <i class="fas fa-times-circle text-danger" style="font-size: 48px;"></i>
                                    <h3 class="mt-3 text-danger">Terdeteksi</h3>
                                    <p class="text-muted">Ditemukan indikasi Parkinson pada tes spiral</p>
                                @else
                                    <i class="fas fa-check-circle text-success" style="font-size: 48px;"></i>
                                    <h3 class="mt-3 text-success">Tidak Terdeteksi</h3>
                                    <p class="text-muted">Tidak ditemukan indikasi Parkinson pada tes spiral</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if (isset($apiResponse['vm-result']))
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0 rounded-4">
                        <div class="card-header {{ $apiResponse['vm-result'] ? 'bg-danger' : 'bg-success' }} text-white rounded-top-4">
                            <h5 class="card-title mb-0 py-2 text-center">Analisis Suara</h5>
                        </div>
                        <div class="card-body text-center py-4">
                            <div class="mb-3">
                                @if($apiResponse['vm-result'])
                                    <i class="fas fa-times-circle text-danger" style="font-size: 48px;"></i>
                                    <h3 class="mt-3 text-danger">Terdeteksi</h3>
                                    <p class="text-muted">Ditemukan indikasi Parkinson pada analisis suara</p>
                                @else
                                    <i class="fas fa-check-circle text-success" style="font-size: 48px;"></i>
                                    <h3 class="mt-3 text-success">Tidak Terdeteksi</h3>
                                    <p class="text-muted">Tidak ditemukan indikasi Parkinson pada analisis suara</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if (isset($apiResponse['ni-result']))
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0 rounded-4">
                        <div class="card-header {{ $apiResponse['ni-result'] ? 'bg-danger' : 'bg-success' }} text-white rounded-top-4">
                            <h5 class="card-title mb-0 py-2 text-center">Analisis CT Scan</h5>
                        </div>
                        <div class="card-body text-center py-4">
                            <div class="mb-3">
                                @if($apiResponse['ni-result'])
                                    <i class="fas fa-times-circle text-danger" style="font-size: 48px;"></i>
                                    <h3 class="mt-3 text-danger">Terdeteksi</h3>
                                    <p class="text-muted">Ditemukan indikasi Parkinson pada analisis CT Scan</p>
                                @else
                                    <i class="fas fa-check-circle text-success" style="font-size: 48px;"></i>
                                    <h3 class="mt-3 text-success">Tidak Terdeteksi</h3>
                                    <p class="text-muted">Tidak ditemukan indikasi Parkinson pada analisis CT Scan</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>

        <div class="alert alert-warning mt-5 shadow-sm rounded-4 p-4" role="alert">
            <h4 class="alert-heading fw-bold mb-3">📋 Catatan Penting:</h4>
            <p class="mb-0 lead">Hasil diagnosis ini bersifat indikatif dan tidak menggantikan diagnosis medis profesional. 
                Silakan berkonsultasi dengan spesialis untuk evaluasi lebih lanjut dan rencana pengobatan yang sesuai.</p>
        </div>

        <div class="text-center mt-5">
            <a href="/resources" class="btn btn-primary btn-lg px-4 me-3 rounded-3">
                <i class="fas fa-book-medical me-2"></i>Lihat Sumber Daya
            </a>
            <a href="#" class="btn btn-outline-secondary btn-lg px-4 rounded-3">
                <i class="fas fa-download me-2"></i>Unduh Laporan
            </a>
        </div>
    </section>
@endsection
