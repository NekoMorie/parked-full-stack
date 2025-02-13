@extends('frontend.layout.app')

@section('content')
    <section class="welcome-section py-5 fade-in-section">
        <div class="container">
            <!-- Welcome Card -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10">
                    <div class="welcome-card text-center">
                        <div class="welcome-icon">
                            <i class="fas fa-hand-holding-medical"></i>
                        </div>
                        <h1 class="welcome-title">Selamat Datang di ParkED!</h1>
                        <div class="row justify-content-center">
                            <div class="col-lg-9">
                                <p class="welcome-text">
                                    Anda akan diminta untuk melakukan beberapa tes yang dapat membantu mendeteksi potensi gejala Parkinson. 
                                    Tes ini meliputi perekaman suara, menggambar spiral, dan unggah citra otak. 
                                    Anda dapat memilih satu atau lebih tes sesuai kebutuhan. 
                                    Mohon ikuti petunjuk yang tersedia nantinya dengan seksama.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Disclaimer Card -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="disclaimer-card">
                        <div class="disclaimer-header">
                            <i class="fas fa-exclamation-triangle"></i>
                            <h2>DISCLAIMER</h2>
                        </div>
                        
                        <div class="disclaimer-body">
                            <div class="disclaimer-section">
                                <h3>Tujuan Penggunaan</h3>
                                <p>
                                    ParkED <strong>BUKAN</strong> merupakan alat diagnosis medis. ParkED adalah alat skrining awal yang dirancang 
                                    untuk membantu mendeteksi potensi gejala penyakit Parkinson. Alat ini tidak dimaksudkan untuk menggantikan 
                                    konsultasi, pemeriksaan, atau diagnosis dari tenaga medis profesional.
                                </p>
                            </div>

                            <div class="disclaimer-section">
                                <h3>Sifat Hasil</h3>
                                <p>
                                    Hasil yang diberikan oleh ParkED hanya bersifat indikatif dan tidak boleh dianggap sebagai diagnosis akhir 
                                    atau keputusan medis. Semua hasil skrining yang diperoleh dari alat ini harus ditindaklanjuti dengan 
                                    konsultasi kepada dokter atau tenaga medis yang berkualifikasi untuk evaluasi lebih lanjut.
                                </p>
                            </div>

                            <div class="disclaimer-section">
                                <h3>Tindak Lanjut</h3>
                                <p>
                                    Keputusan terkait diagnosis, pengobatan, atau tindakan medis lainnya harus selalu didasarkan pada pemeriksaan 
                                    medis komprehensif yang dilakukan oleh profesional kesehatan yang berwenang. Kami sangat menyarankan pengguna 
                                    untuk berkonsultasi dengan dokter spesialis terkait untuk pemeriksaan lebih lanjut, terutama jika hasil 
                                    skrining menunjukkan adanya potensi gejala.
                                </p>
                            </div>

                            <div class="disclaimer-agreement">
                                <p>
                                    Dengan menggunakan ParkED, Anda menyetujui dan memahami bahwa sistem ini hanya merupakan alat bantu 
                                    skrining awal dan bukan pengganti dari pemeriksaan medis profesional.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Next Steps Section -->
    <section class="next-steps-section fade-in-section">
        <div class="container-fluid px-0">
            <div class="next-steps-wrapper bg-warning py-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center">
                            <div class="next-steps-content">
                                <div class="section-icon mb-4">
                                    <i class="fas fa-question-circle"></i>
                                </div>
                                <h2 class="section-title mb-4">
                                    Apa yang harus dilakukan selanjutnya
                                    <span class="d-block mt-2">ketika penyakit Parkinson dicurigai?</span>
                                </h2>
                                <div class="action-button">
                                    <a href="/resources" class="btn btn-custom btn-lg">
                                        <i class="fas fa-book-medical me-2"></i>
                                        Baca Sumber Daya
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Test Section -->
    <section class="start-test-section py-5 fade-in-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="start-test-content">
                        <div class="section-icon mb-4">
                            <i class="fas fa-play-circle"></i>
                        </div>
                        <h2 class="section-title mb-4">Mari Mulai</h2>
                        <div class="action-button">
                            <a href="/form-diagnosa" class="btn btn-warning btn-lg start-test-btn">
                                <i class="fas fa-stethoscope me-2"></i>
                                Diagnosa Sekarang!
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
