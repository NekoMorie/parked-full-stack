@extends('frontend.layout.app')

@section('content')
    <form action="/patient-form" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="main-content">
            <div class="container">
                <!-- Intro Section -->
                <div class="row justify-content-center mb-5 mt-5">
                    <div class="col-lg-10">
                        <!-- Header Section -->
                        <div class="text-center mb-5">
                            <h2 class="display-5 fw-bold mb-3">Screening Test Parkinson</h2>
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <p class="lead text-muted">
                                        Pada halaman ini, Anda dapat memasukkan data untuk ketiga jenis tes screening
                                        Parkinson yang didukung oleh ParkED.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Test Types Cards -->
                        <div class="row g-4">

                            <!-- Spiral Drawing Card -->
                            <div class="col-lg-4">
                                <div class="test-card h-100">
                                    <div class="test-card-icon">
                                        <i class="fas fa-pen-fancy"></i>
                                    </div>
                                    <div class="test-card-content">
                                        <h4>Gambar Spiral</h4>
                                        <p>Evaluasi kontrol motorik halus melalui analisis pola gambar spiral Archimedes.
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <!-- Voice Recording Card -->
                            <div class="col-lg-4">
                                <div class="test-card h-100">
                                    <div class="test-card-icon">
                                        <i class="fas fa-microphone"></i>
                                    </div>
                                    <div class="test-card-content">
                                        <h4>Rekaman Suara</h4>
                                        <p>Analisis pola suara untuk mendeteksi tremor vokal dan perubahan dalam kemampuan
                                            berbicara.</p>
                                        <div class="test-card-stats">

                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!-- Brain Scan Card -->
                            <div class="col-lg-4">
                                <div class="test-card h-100">
                                    <div class="test-card-icon">
                                        <i class="fas fa-brain"></i>
                                    </div>
                                    <div class="test-card-content">
                                        <h4>Citra Medis Otak</h4>
                                        <p>Analisis DaTscan untuk mengevaluasi aktivitas dopamin dalam otak.</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Info Note -->
                        <div class="info-note mt-5">
                            <div class="d-flex align-items-center">
                                <div class="info-icon">
                                    <i class="fas fa-lightbulb"></i>
                                </div>
                                <p class="mb-0">
                                    Anda dapat memilih untuk mengunggah salah satu, dua, atau ketiga jenis data untuk
                                    memperoleh hasil yang lebih komprehensif.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Diagnosa 1 -->

                <div class="formdiagnosa-diagnosis-section mb-4 mt-4">
                    <h2 class="text-center mb-2">
                        <button class="btn btn-link text-decoration-none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#formdiagnosa1" aria-expanded="true" aria-controls="formdiagnosa1">
                            Tes Menggambar Spiral

                        </button>
                    </h2>
                    <div class="collapse show" id="formdiagnosa1">
                        <div class="py-5 formdiagnosa-bg-cream">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Deskripsi Tujuan Tes -->
                                    <div class="text-center mb-4">
                                        <div class="card border-warning">
                                            <div class="card-body">
                                                <h5 class="card-title mb-3">
                                                    <i class="fas fa-info-circle text-warning me-2"></i>
                                                    Tentang Tes Ini
                                                </h5>
                                                <p class="card-text">
                                                    Tes ini bertujuan untuk mendeteksi tanda-tanda awal tremor atau
                                                    ketidakstabilan motorik
                                                    melalui analisis pola gambar spiral. Ikuti langkah-langkah di bawah ini
                                                    untuk menyelesaikan tes gambar spiral.
                                                </p>
                                                <a href="https://arxiv.org/abs/2111.10207" class="btn btn-link text-warning"
                                                    target="_blank" rel="noopener noreferrer">
                                                    <i class="fas fa-external-link-alt me-1"></i>
                                                    Informasi Lebih Lanjut
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4 mb-md-0">
                                            <div class="position-relative">
                                                <img src="assets/img/Spiral.png" alt="Spiral Image"
                                                    class="img-fluid rounded shadow-sm mb-3"
                                                    style="width: 100%; height: 600px; object-fit: cover;">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="formdiagnosa-diagnosis-content instruction-section">
                                                <h4 class="mb-4 text-center fw-bold">Instruksi Menggambar</h4>

                                                <div class="instruction-card">
                                                    <div class="d-flex align-items-center">
                                                        <div class="instruction-icon">
                                                            <i class="fas fa-file-download"></i>
                                                        </div>
                                                        <div class="instruction-content">
                                                            <h6>Persiapan Template</h6>
                                                            <p>Unduh dan cetak template spiral pada kertas A4 putih.
                                                                Pastikan hasil cetakan jelas dan tidak buram.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="instruction-card">
                                                    <div class="d-flex align-items-center">
                                                        <div class="instruction-icon">
                                                            <i class="fas fa-pen"></i>
                                                        </div>
                                                        <div class="instruction-content">
                                                            <h6>Menelusuri Spiral</h6>
                                                            <p>Gunakan pulpen biru untuk mengikuti pola spiral dengan
                                                                perlahan dan teliti, dari pusat atau sebaliknya.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="instruction-card">
                                                    <div class="d-flex align-items-center">
                                                        <div class="instruction-icon">
                                                            <i class="fas fa-camera"></i>
                                                        </div>
                                                        <div class="instruction-content">
                                                            <h6>Dokumentasi</h6>
                                                            <p>Ambil foto hasil gambar dengan jelas, pastikan seluruh bagian
                                                                spiral terlihat dalam frame.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="instruction-card">
                                                    <div class="d-flex align-items-center">
                                                        <div class="instruction-icon">
                                                            <i class="fas fa-upload"></i>
                                                        </div>
                                                        <div class="instruction-content">
                                                            <h6>Unggah Hasil</h6>
                                                            <p>Unggah foto hasil gambar spiral Anda pada area yang
                                                                disediakan di bawah ini.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class=" mt-2">
                                                    <a href="{{ asset('assets/template/Test_Spiral.pdf') }}"
                                                        class="btn btn-warning text-black">
                                                        <i class="fas fa-download me-2"></i>Unduh Template
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 formdiagnosa-upload-section">
                                        <div class="formdiagnosa-dropzone text-center p-5 border border-dashed rounded"
                                            id="formdiagnosa-drop-area">
                                            <input type="file" id="formdiagnosa-fileElem" accept="image/*"
                                                onchange="handleFiles(this.files)" style="display:none" name="fileModel1">
                                            <div id="formdiagnosa-preview-container"
                                                class="mb-3 formdiagnosa-preview-wrapper" style="display:none;">
                                                <img id="formdiagnosa-preview-image" src="" alt="Preview"
                                                    style="max-width: 100%; height: auto; object-fit: contain;">
                                            </div>
                                            <i class="fas fa-image fa-3x text-muted mb-3"></i>
                                            <p class="mb-2">Tarik dan letakkan gambar di sini</p>
                                            <button type="button" class="btn btn-warning text-black"
                                                onclick="document.getElementById('formdiagnosa-fileElem').click()">Pilih
                                                berkas</button>
                                        </div>
                                        <p class="text-muted small text-center mt-2">JPG, PNG / Maks. 60 MB / Min. 224px x
                                            224px</p>
                                        <div class="text-center mt-3">
                                            <button type="button" class="btn btn-warning text-black"
                                                id="formdiagnosa-changeFileBtn" style="display:none;"
                                                onclick="changeFile()">Ganti berkas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Diagnosa 2 -->
                <div class="formdiagnosa-diagnosis-section mb-4">
                    <h2 class="text-center mb-2">
                        <button class="btn btn-link text-decoration-none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#formdiagnosa2" aria-expanded="false" aria-controls="formdiagnosa2">
                            Tes Rekaman Suara
                        </button>
                    </h2>
                    <div class="collapse" id="formdiagnosa2">
                        <div class="py-5 formdiagnosa-bg-orange">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Deskripsi Tujuan Tes -->
                                    <div class="text-center mb-4">
                                        <div class="card border-warning">
                                            <div class="card-body">
                                                <h5 class="card-title mb-3">
                                                    <i class="fas fa-info-circle text-warning me-2"></i>
                                                    Tentang Tes Ini
                                                </h5>
                                                <p class="card-text">
                                                    Tes ini menggunakan rekaman suara Anda untuk menganalisis pola bicara
                                                    dan mendeteksi kemungkinan adanya tremor vokal
                                                    atau kelainan lain yang sering dikaitkan dengan Parkinson.
                                                </p>
                                                <a href="https://www.sciencedirect.com/science/article/abs/pii/S0169260716301894"
                                                    class="btn btn-link text-warning" target="_blank"
                                                    rel="noopener noreferrer">
                                                    <i class="fas fa-external-link-alt me-1"></i>
                                                    Informasi Lebih Lanjut
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4 mb-md-0">
                                            <img src="assets/img/Voice.png" alt="Voice Analysis"
                                                class="img-fluid rounded shadow-sm mb-3"
                                                style="width: 100%; height: 300px; object-fit: cover;">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="formdiagnosa-diagnosis-content instruction-section">
                                                <h4 class="mb-4 text-center fw-bold">Instruksi Rekaman</h4>

                                                <div class="instruction-card">
                                                    <div class="d-flex align-items-center">
                                                        <div class="instruction-icon">
                                                            <i class="fas fa-microphone-alt"></i>
                                                        </div>
                                                        <div class="instruction-content">
                                                            <h6>Pilih Metode Rekaman</h6>
                                                            <p>Unggah file rekaman mandiri atau gunakan fitur rekam langsung
                                                                melalui mikrofon perangkat Anda.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="instruction-card">
                                                    <div class="d-flex align-items-center">
                                                        <div class="instruction-icon">
                                                            <i class="fas fa-sliders-h"></i>
                                                        </div>
                                                        <div class="instruction-content">
                                                            <h6>Spesifikasi Rekaman</h6>
                                                            <p>Sample Rate: 44.1 kHz, Bit Depth: 16 bit, Format: .wav</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="instruction-card">
                                                    <div class="d-flex align-items-center">
                                                        <div class="instruction-icon">
                                                            <i class="fas fa-book-reader"></i>
                                                        </div>
                                                        <div class="instruction-content">
                                                            <h6>Baca Teks</h6>
                                                            <p>Bacalah teks yang disediakan dengan perlahan dan jelas di
                                                                ruangan yang tenang.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="instruction-card">
                                                    <div class="d-flex align-items-center">
                                                        <div class="instruction-icon">
                                                            <i class="fas fa-check-circle"></i>
                                                        </div>
                                                        <div class="instruction-content">
                                                            <h6>Selesaikan Rekaman</h6>
                                                            <p>Unggah file atau akhiri rekaman langsung setelah selesai
                                                                membaca teks.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Teks untuk dibaca -->
                                    <div class="card mt-4 border-warning">
                                        <div class="card-body">
                                            <h5 class="card-title mb-3">
                                                <i class="fas fa-quote-left text-warning me-2"></i>
                                                Teks untuk Dibaca
                                            </h5>
                                            <p class="card-text" style="text-align: justify;">
                                                “Hal ini terjadi karena hamburan cahaya biru lebih sedikit karena panjang
                                                jalur atmosfer dan tingkat hamburan radiasi yang masuk berkurang. Dengan
                                                alasan yang sama, matahari tampak lebih putih dan kurang berwarna oranye
                                                seiring dengan peningkatan ketinggian pengamat. Hal ini terjadi karena
                                                proporsi sinar matahari yang lebih besar datang langsung ke mata pengamat.
                                                Gambar 5.7 adalah representasi skematik dari jalur energi elektromagnetik
                                                dalam spektrum tampak saat bergerak dari matahari ke Bumi dan kembali lagi
                                                menuju sensor yang dipasang pada satelit yang mengorbit. Jalur gelombang
                                                yang mewakili energi yang rentan terhadap hamburan (yaitu, panjang gelombang
                                                yang lebih pendek) saat bergerak dari matahari ke Bumi ditunjukkan. Bagi
                                                sensor, tampaknya seluruh energi tersebut telah dipantulkan dari titik P di
                                                permukaan tanah padahal, kenyataannya, tidak sepenuhnya demikian, karena
                                                sebagian energi telah tersebar di dalam atmosfer dan tidak pernah mencapai
                                                permukaan tanah sama sekali.”
                                                <!-- Teks lengkap bisa ditambahkan di sini -->
                                            </p>
                                        </div>
                                    </div>

                                    <div class="mt-4 formdiagnosa-upload-section">
                                        <ul class="nav nav-tabs" id="voiceAnalysisTabs" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="upload-tab" data-bs-toggle="tab"
                                                    data-bs-target="#upload" type="button" role="tab"
                                                    aria-controls="upload" aria-selected="true">Upload Audio</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="record-tab" data-bs-toggle="tab"
                                                    data-bs-target="#record" type="button" role="tab"
                                                    aria-controls="record" aria-selected="false">Record Voice</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="voiceAnalysisTabContent">
                                            <div class="tab-pane fade show active" id="upload" role="tabpanel"
                                                aria-labelledby="upload-tab">
                                                <div class="formdiagnosa-dropzone text-center p-5 border border-dashed rounded"
                                                    id="drop-area-audio">
                                                    <input type="file" id="audioFileElem" accept="audio/*"
                                                        onchange="handleAudioFiles(this.files)" style="display:none"
                                                        name="fileModel2">
                                                    <div id="audio-preview-container" class="mb-3"
                                                        style="display:none;">
                                                        <audio id="audio-preview" controls></audio>
                                                    </div>
                                                    <i class="fas fa-microphone fa-3x text-muted mb-3"></i>
                                                    <p class="mb-2">Tarik dan letakkan berkas audio di sini</p>
                                                    <button type="button" class="btn btn-warning text-black"
                                                        onclick="document.getElementById('audioFileElem').click()">Pilih
                                                        berkas audio</button>
                                                </div>
                                                <p class="text-muted small text-center mt-2"> WAV / Max. 10 MB / Max.
                                                    30 seconds</p>
                                                <div class="text-center mt-3">
                                                    <button type="button" class="btn btn-warning text-black"
                                                        id="changeAudioBtn" style="display:none;"
                                                        onclick="changeAudioFile()">Ganti berkas</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="record" role="tabpanel"
                                                aria-labelledby="record-tab">
                                                <div class="text-center p-5 border border-dashed rounded">
                                                    <i class="fas fa-microphone fa-3x text-muted mb-3"></i>
                                                    <p class="mb-3">Klik tombol di bawah untuk mulai merekam</p>
                                                    <a href="record" id="recordButton" class="btn btn-warning"
                                                        name="recordedAudio">
                                                        <i class="fas fa-microphone"></i> Mulai Merekam
                                                    </a>
                                                    <p id="recordingStatus" class="mt-3 d-none">
                                                        Merekam: <span id="recordingTime">00:00</span>
                                                        <br>
                                                        <small class="text-muted">Rekaman akan berhenti otomatis setelah 60
                                                            detik</small>
                                                    </p>
                                                    <audio id="audioPlayback" controls class="mt-3 d-none"></audio>
                                                    <br>
                                                    <a id="deleteRecordingBtn" class="btn btn-warning mt-3 d-none"
                                                        onclick="deleteRecording()">Hapus Rekaman</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Diagnosa 3 -->
                <div class="formdiagnosa-diagnosis-section mb-4">
                    <h2 class="text-center mb-2">
                        <button class="btn btn-link text-decoration-none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#formdiagnosa3" aria-expanded="false" aria-controls="formdiagnosa3">
                            Tes DaTScan
                        </button>
                    </h2>
                    <div class="collapse" id="formdiagnosa3">
                        <div class="py-5 formdiagnosa-bg-cream">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Deskripsi Tujuan Tes -->
                                    <div class="text-center mb-4">
                                        <div class="card border-warning">
                                            <div class="card-body">
                                                <h5 class="card-title mb-3">
                                                    <i class="fas fa-brain text-warning me-2"></i>
                                                    Tentang DaTscan
                                                </h5>
                                                <p class="card-text">
                                                    Tes ini dirancang khusus untuk membantu tenaga ahli dalam menganalisis
                                                    citra DaTscan, sebuah teknik pencitraan yang umum digunakan dalam
                                                    menilai aktivitas dopamin pada otak pasien, sebagai bagian dari upaya
                                                    deteksi awal Parkinson.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Informasi Dokter & Pasien -->
                                    <div class="row">
                                        <div class="col-12 mb-4">
                                            <div class="card border-warning">
                                                <div class="card-header bg-warning bg-opacity-10">
                                                    <h5 class="card-title mb-0">
                                                        <i class="fas fa-user-md me-2"></i>
                                                        Informasi Untuk Dokter
                                                    </h5>
                                                </div>
                                                <div class="card-body">
                                                    <p>Tes ini diperuntukkan bagi pasien yang memenuhi kriteria berikut,
                                                        berdasarkan ketentuan yang diadaptasi dari Parkinson’s Progression
                                                        Markers Initiative (PPMI):</p>
                                                    <h6 class="fw-bold mb-3">Kriteria Pasien:</h6>
                                                    <div class="d-flex mb-3">
                                                        <i class="fas fa-check-circle text-warning me-3 mt-1"></i>
                                                        <p class="mb-0">Minimal dua gejala: tremor saat istirahat,
                                                            bradikinesia, atau kekakuan otot; ATAU tremor/bradikinesia
                                                            asimetris.</p>
                                                    </div>
                                                    <div class="d-flex mb-3">
                                                        <i class="fas fa-check-circle text-warning me-3 mt-1"></i>
                                                        <p class="mb-0">Diagnosis Parkinson dalam 2 tahun atau kurang.
                                                        </p>
                                                    </div>
                                                    <div class="d-flex">
                                                        <i class="fas fa-check-circle text-warning me-3 mt-1"></i>
                                                        <p class="mb-0">Usia 30 tahun atau lebih.</p>
                                                    </div>
                                                    <a href="https://tech.snmjournals.org/content/47/1/27"
                                                        class="btn btn-link text-warning p-0 mt-3" target="_blank"
                                                        rel="noopener noreferrer">
                                                        <i class="fas fa-info-circle me-1"></i>
                                                        Baca Selengkapnya
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 mb-4">
                                            <div class="card border-warning">
                                                <div class="card-header bg-warning bg-opacity-10">
                                                    <h5 class="card-title mb-0">
                                                        <i class="fas fa-user me-2"></i>
                                                        Informasi Untuk Pasien
                                                    </h5>
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text" style="text-align: justify;">DaTscan adalah
                                                        prosedur pencitraan medis yang membantu dokter untuk memahami apakah
                                                        gejala yang Anda alami terkait dengan penurunan sel dopamin di otak.
                                                        Dopamin adalah zat kimia penting yang membantu otak mengendalikan
                                                        gerakan tubuh. Pada penyakit Parkinson, sel-sel dopamin ini rusak
                                                        atau hilang, sehingga mengakibatkan kesulitan dalam bergerak,
                                                        seperti gemetar, kekakuan, atau masalah keseimbangan.</p>
                                                    <p class="card-text" style="text-align: justify;">Melalui DaTscan,
                                                        dokter dapat melihat aktivitas sel dopamin dan menentukan apakah
                                                        gejala yang Anda alami mungkin disebabkan oleh masalah ini. Tes ini
                                                        hanya bisa dilakukan dengan resep dokter, jadi jika Anda merasa
                                                        memiliki gejala tersebut, diskusikan dengan dokter untuk mengetahui
                                                        apakah DaTscan sesuai untuk Anda.</p>
                                                    <a href="https://www.apdaparkinson.org/article/what-is-a-datscan-and-should-i-get-one/"
                                                        class="btn btn-link text-warning p-0" target="_blank"
                                                        rel="noopener noreferrer">
                                                        <i class="fas fa-info-circle me-1"></i>
                                                        Baca Selengkapnya
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- New Image Examples Section -->
                                    <div class="card border-warning mb-4">
                                        <div class="card-header bg-warning bg-opacity-10">
                                            <h5 class="card-title mb-0">
                                                <i class="fas fa-images me-2"></i>
                                                Contoh Gambar DaTscan
                                            </h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                <div class="col-md-8 mb-3">
                                                    <div class="position-relative">
                                                        <img src="https://raw.githubusercontent.com/aaronstone1699/parkinson-s-diagnosis/refs/heads/master/images/test%20images/pd_raw_brain_mri_w_sn_5.jpg"
                                                            alt="Contoh DaTscan"
                                                            class="formdiagnosa-example-image rounded shadow-sm mb-2">
                                                        <div class="text-center mt-2">
                                                            <small class="text-muted">
                                                                <i class="fas fa-info-circle me-1"></i>
                                                                Contoh format gambar DaTscan yang dapat diunggah. Pastikan
                                                                gambar yang Anda unggah memiliki kualitas yang baik dan
                                                                jelas.
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Upload Section -->
                                    <div class="mt-4 formdiagnosa-upload-section">
                                        <div class="formdiagnosa-dropzone text-center p-5 border border-dashed rounded"
                                            id="drop-area-3">
                                            <input type="file" id="fileElem3" accept="image/*"
                                                onchange="handleFiles3(this.files)" style="display:none"
                                                name="fileModel3">
                                            <div id="preview-container-3" class="mb-3 formdiagnosa-preview-wrapper"
                                                style="display:none;">
                                                <img id="preview-image-3" src="" alt="Preview"
                                                    style="max-width: 100%; height: auto; object-fit: contain;">
                                            </div>
                                            <i class="fas fa-image fa-3x text-muted mb-3"></i>
                                            <p class="mb-2">Tarik dan letakkan gambar di sini</p>
                                            <button type="button" class="btn btn-warning text-black"
                                                onclick="document.getElementById('fileElem3').click()">
                                                <i class="fas fa-file-upload me-2"></i>
                                                Pilih berkas
                                            </button>
                                        </div>
                                        <p class="text-muted small text-center mt-2">
                                            Format: JPG, PNG | Ukuran Maks: 60 MB | Resolusi Min: 224px x 224px
                                        </p>
                                        <div class="text-center mt-3">
                                            <button type="button" class="btn btn-warning text-black" id="changeFileBtn3"
                                                style="display:none;" onclick="changeFile3()">Ganti berkas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="bg-warning">
                <h1 class="text-center py-5 text-bold text-black">Selesai!</h1>
                <div class="text-center pb-5">
                    <button type="submit" class="btn btn-custom btn-lg text-black">Kirim!</button>
                </div>
            </section>
        </div>
    </form>
@endsection
