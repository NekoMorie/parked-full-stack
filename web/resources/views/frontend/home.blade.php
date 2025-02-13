@extends('frontend.layout.app')

@section('content')
    <div class="container my-5">
        <div class="row hero-section animate-on-scroll">
            <div class="col-md-6 hero-content">
                <h1 class="display-4 fw-bold">ParkED: Sistem Deteksi Dini Penyakit Parkinson Berbasis AI</h1>
                <p class="lead">Temukan cara untuk mengelola</p>
                <a class="btn btn-light btn-ripple" href="/patient-info">Diagnosa Sekarang</a>
            </div>
            <div class="col-md-6 hero-image"></div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6">
                <h2>Apa itu Parkinson?</h2>
                <h3>Memahami Penyakit Parkinson</h3>
                <p>Penyakit Parkinson adalah gangguan sistem saraf progresif yang mempengaruhi gerakan. Gejala dimulai
                    secara bertahap, terkadang dengan tremor yang hampir tidak terlihat pada satu tangan. Tremor adalah
                    gejala umum, tetapi gangguan ini juga sering menyebabkan kekakuan atau perlambatan gerakan. Pada
                    tahap awal penyakit Parkinson, wajah Anda mungkin menunjukkan sedikit atau tidak ada ekspresi.
                    Lengan Anda mungkin tidak berayun saat Anda berjalan. Suara Anda mungkin menjadi lembut atau pelo.
                    Gejala penyakit Parkinson memburuk seiring berjalannya waktu.</p>
            </div>
            <div class="col-md-6">
                <img src="assets/img/Image (2).png" alt="Neuron" class="img-fluid rounded" loading="lazy">
            </div>
        </div>

        <div class="predict-tool-section my-5 py-5 bg-warning animate-on-scroll">
            <div class="container">
                <h2 class="text-center mb-3 text-bold text-black section-title no-animation animate-on-scroll delay-1">Alat Prediksi
                    Kami</h2>
                <p class="text-center mb-5 animate-on-scroll delay-2">Platform kami menawarkan tiga fitur utama untuk membantu
                    memprediksi penyakit Parkinson</p>

                <div class="row justify-content-center animate-on-scroll delay-3">
                    <div class="col-lg-8">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col">
                                <div class="card h-100 bg-custom">
                                    <img src="assets/img/Spiral.png" class="card-img-top py-2 px-2" alt="Gambar Otak"
                                        loading="lazy">
                                    <div class="card-body">
                                        <h5 class="card-title">Skrining 1</h5>
                                        <p class="card-text">Analisis Gambar Spiral: Menggunakan pembelajaran mesin untuk menganalisis gambar spiral buatan tangan
                                            untuk deteksi dini penyakit Parkinson</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100 bg-custom">
                                    <img src="assets/img/Voice.png" class="card-img-top py-2 px-2" alt="Gambar Otak"
                                        loading="lazy">
                                    <div class="card-body">
                                        <h5 class="card-title">Skrining 2</h5>
                                        <p class="card-text">Analisis Suara: Menggunakan pembelajaran mesin untuk menganalisis
                                            pola suara untuk tanda-tanda awal penyakit Parkinson</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100 bg-custom">
                                    <img src="assets/img/CTscan.png" class="card-img-top py-2 px-2" alt="Gambar Otak"
                                        loading="lazy">
                                    <div class="card-body">
                                        <h5 class="card-title">Skrining 3</h5>
                                        <p class="card-text">Analisis CT Scan: Menggunakan pembelajaran mesin untuk menganalisis gambar CT scan otak untuk
                                            deteksi awal penyakit Parkinson</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5 animate-on-scroll">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                    <div class="rounded-image-container">
                        <img src="assets/img/AI-tools.jpg" alt="Gambar Neuron" class="neuron-image" loading="lazy">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <h2 class="mb-3 section-title">Bagaimana Cara Kerjanya?</h2>
                    <h3 class="mb-4">Memahami Alat Prediksi Parkinson</h3>
                    <p>Model pembelajaran mesin kami dilatih menggunakan kumpulan data pasien yang besar untuk mengidentifikasi pola dan
                        penanda yang menunjukkan penyakit Parkinson. Dengan menganalisis rekaman suara, sampel tulisan tangan,
                        dan pola cara berjalan, algoritma kami dapat mendeteksi perubahan halus yang mungkin menunjukkan tahap awal
                        penyakit. Keuntungan menggunakan pembelajaran mesin termasuk akurasi yang lebih tinggi, deteksi
                        dini, dan kemampuan untuk terus meningkat seiring bertambahnya data yang dikumpulkan.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
