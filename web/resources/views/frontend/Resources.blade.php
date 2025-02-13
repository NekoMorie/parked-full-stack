@extends ("frontend.layout.app")

@section('content')
    <section class="bg-warning">
        <h1 class="text-center py-5 sect-2 resource-text-bold-1 resource-fade-in">Apa yang harus dilakukan selanjutnya <br> ketika penyakit Parkinson <br>dicurigai?</h1>
    </section>


    <section>
        <div class="container mt-5">
            <h2 class="text-center mb-4 text-bold resource-fade-in">Terapi</h2>
            <p class="text-center mb-4 resource-fade-in">Jika Anda memiliki Parkinson, ada beberapa terapi yang bisa Anda coba,
                tetapi ingat harus dengan arahan ahli.</p>

            <div class="row mb-1">
                <div class="col-md-4 mb-4 text-decoration-none resource-fade-in" style="animation-delay: 0.2s;">
                    <a href="{{ route('detail', ['id' => encrypt(1)]) }}" class="resource-card-link h-100">
                        <div class="card h-100 resource-card">
                            <div class="row g-0 h-100">
                                <div class="col-4 col-md-5" style="max-width: 120px;">
                                    <img src="assets/img/physiotherapy.png"
                                        class="img-fluid rounded-start h-100 w-100 object-fit-cover" alt="Fisioterapi">
                                </div>
                                <div class="col-8 col-md-7">
                                    <div class="card-body text-black d-flex flex-column h-100">
                                        <h5 class="card-title">Fisioterapi</h5>
                                        <p class="card-text text-justify flex-grow-1">Terapi untuk mengatasi kekakuan otot dan sendi, meningkatkan kemampuan gerak dan keseimbangan tubuh.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4 resource-fade-in" style="animation-delay: 0.4s;">
                    <a href="{{ route('detail', ['id' => encrypt(2)]) }}" class="resource-card-link h-100">
                        <div class="card h-100 resource-card">
                            <div class="row g-0 h-100">
                                <div class="col-4 col-md-5" style="max-width: 120px;">
                                    <img src="assets/img/speech-therapy.png"
                                        class="img-fluid rounded-start h-100 w-100 object-fit-cover" alt="Terapi wicara">
                                </div>
                                <div class="col-8 col-md-7">
                                    <div class="card-body text-black d-flex flex-column h-100">
                                        <h5 class="card-title">Terapi Wicara</h5>
                                        <p class="card-text text-justify flex-grow-1">Membantu pasien yang mengalami kesulitan berbicara, menelan, dan mengontrol produksi air liur.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 mb-4 resource-fade-in" style="animation-delay: 0.6s;">
                    <a href="{{ route('detail', ['id' => encrypt(3)]) }}" class="resource-card-link h-100">
                        <div class="card h-100 resource-card">
                            <div class="row g-0 h-100">
                                <div class="col-4 col-md-5" style="max-width: 120px;">
                                    <img src="assets/img/psychoteraphy.jpg"
                                        class="img-fluid rounded-start h-100 w-100 object-fit-cover" alt="Psikoterapi">
                                </div>
                                <div class="col-8 col-md-7">
                                    <div class="card-body text-black d-flex flex-column h-100">
                                        <h5 class="card-title">Psikoterapi</h5>
                                        <p class="card-text text-justify flex-grow-1">Dukungan mental oleh psikolog untuk mengatasi depresi dan kecemasan yang mungkin muncul.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <h2 class="text-center mb-4 text-bold resource-fade-in" style="animation-delay: 0.8s;">Operasi</h2>
            <p class="text-center mb-4 resource-fade-in" style="animation-delay: 0.8s;">Ada 2 operasi medis yang
                dapat Anda lakukan, konsultasikan dengan dokter Anda untuk konsultasi lebih lanjut.</p>

            <div class="row">
                <div class="col-md-6 mb-4 px-3 resource-fade-in" style="animation-delay: 1s;">
                    <a href="{{ route('detail', ['id' => encrypt(4)]) }}" class="resource-card-link">
                        <div class="card h-90 resource-card">
                            <div class="row g-0">
                                <div class="col-4 col-md-4" style="max-width: 120px;">
                                    <img src="assets/img/DBS.jpg"
                                        class="img-fluid rounded-start h-100 w-100 object-fit-cover"
                                        alt="Stimulasi otak dalam">
                                </div>
                                <div class="col-8 col-md-8">
                                    <div class="card-body text-black">
                                        <h5 class="card-title">Stimulasi Otak Dalam (DBS)</h5>
                                        <p class="card-text">Stimulasi Otak Dalam (DBS) melibatkan pemasangan elektroda di
                                            area otak tertentu yang terkena aktivitas saraf abnormal, seperti pada penyakit
                                            Parkinson. <br>Elektroda mengirimkan impuls listrik untuk memodifikasi aktivitas ini,
                                            mengurangi gejala seperti tremor dan kekakuan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 mb-4 px-3 resource-fade-in" style="animation-delay: 1.2s;">
                    <a href="{{ route('detail', ['id' => encrypt(5)]) }}" class="resource-card-link">
                        <div class="card h-90 resource-card">
                            <div class="row g-0">
                                <div class="col-4 col-md-4" style="max-width: 120px;">
                                    <img src="assets/img/gamma-knife-surgery.jpg"
                                        class="img-fluid rounded-start h-100 w-100 object-fit-cover"
                                        alt="Operasi pisau gamma">
                                </div>
                                <div class="col-8 col-md-8">
                                    <div class="card-body text-black">
                                        <h5 class="card-title">Operasi Pisau Gamma</h5>
                                        <p class="card-text">Operasi pisau gamma dilakukan ketika pasien tidak
                                            memenuhi syarat untuk DBS. Prosedur ini menggunakan radiasi gamma yang difokuskan
                                            secara tepat pada area otak yang bermasalah, misalnya pada pasien dengan
                                            tremor esensial atau penyakit Parkinson yang tidak merespons pengobatan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
