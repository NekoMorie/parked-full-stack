<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $tittle = 'HOME';
        return \view('frontend/home', \compact('user', 'tittle'));
    }
    public function Resources()
    {
        $user = Auth::user();
        $tittle = 'Resources';
        return \view('frontend/Resources', \compact('user', 'tittle'));
    }
    public function ResourcesDetail($encriptid)
    {

        $id = Crypt::decrypt($encriptid);
        // echo $id;
        // \dd($id);
        // $id = 1;
        $user = Auth::user();
        $tittle = 'Resources Detail';
        if ($id == 1) {
            $data = [
                "judul" => "Fisioterapi untuk Penyakit Parkinson",
                "gambar" => "assets/img/physiotherapy.png",
                "isi" => "
                    <h2>Apa itu Fisioterapi?</h2>
                    <p>Fisioterapi adalah komponen penting dalam mengelola penyakit Parkinson. Ini melibatkan metode fisik untuk 
                        meningkatkan gerakan, fungsi, dan kesejahteraan secara keseluruhan. Bagi pasien Parkinson, fisioterapi bertujuan untuk 
                        mempertahankan dan meningkatkan mobilitas, keseimbangan, dan kualitas hidup.</p>

                    <h3>Teknik Utama Fisioterapi untuk Parkinson:</h3>
                    <ul>
                        <li><strong>Latihan Berjalan:</strong> Meningkatkan pola berjalan dan mengurangi risiko jatuh.</li>
                        <li><strong>Latihan Keseimbangan:</strong> Meningkatkan stabilitas dan mencegah jatuh.</li>
                        <li><strong>Peregangan:</strong> Mempertahankan fleksibilitas dan mengurangi kekakuan otot.</li>
                        <li><strong>Latihan Kekuatan:</strong> Membangun kekuatan otot dan memperbaiki postur.</li>
                        <li><strong>Latihan Aerobik:</strong> Meningkatkan kesehatan kardiovaskular dan tingkat energi.</li>
                        <li><strong>Latihan Motorik Halus:</strong> Meningkatkan ketangkasan tangan untuk tugas sehari-hari.</li>
                    </ul>

                    <h3>Proses Fisioterapi:</h3>
                    <ol>
                        <li><strong>Penilaian:</strong> Mengevaluasi kondisi dan kebutuhan spesifik pasien.</li>
                        <li><strong>Penetapan Tujuan:</strong> Menetapkan tujuan yang realistis dan dapat dicapai.</li>
                        <li><strong>Rencana Perawatan:</strong> Merancang program terapi yang dipersonalisasi.</li>
                        <li><strong>Sesi Rutin:</strong> Menerapkan latihan dan teknik di bawah bimbingan.</li>
                        <li><strong>Program Latihan di Rumah:</strong> Memberikan latihan untuk praktik berkelanjutan di rumah.</li>
                        <li><strong>Pemantauan Kemajuan:</strong> Evaluasi rutin untuk menyesuaikan rencana perawatan sesuai kebutuhan.</li>
                    </ol>

                    <p>Fisioterapi untuk Parkinson adalah proses berkelanjutan yang sering membutuhkan komitmen jangka panjang. 
                        Ini paling efektif ketika dimulai sejak dini dan dipertahankan secara konsisten sepanjang perjalanan penyakit.</p>
                "
            ];
        } else if ($id == 2) {
            $data = [
                "judul" => "Terapi Wicara untuk Penyakit Parkinson",
                "gambar" => "assets/img/speech-therapy.png",
                "isi" => "
                    <h2>Apa itu Terapi Wicara?</h2>
                    <p>Terapi wicara adalah komponen penting dalam mengelola kesulitan komunikasi dan menelan yang terkait dengan 
                        penyakit Parkinson. Ini melibatkan kerja sama dengan ahli patologi wicara-bahasa untuk meningkatkan kemampuan 
                        bicara, kualitas suara, dan fungsi menelan. Bagi pasien Parkinson, terapi wicara bertujuan untuk mempertahankan 
                        dan meningkatkan kemampuan komunikasi dan menelan yang aman.</p>

                    <h3>Teknik Utama Terapi Wicara untuk Parkinson:</h3>
                    <ul>
                        <li><strong>Pengobatan Suara Lee Silverman (LSVT LOUD):</strong> Fokus pada peningkatan kekerasan suara dan 
                            memperbaiki kejelasan bicara.</li>
                        <li><strong>Latihan Artikulasi:</strong> Meningkatkan kejelasan bicara dan pengucapan.</li>
                        <li><strong>Teknik Dukungan Pernapasan:</strong> Meningkatkan kontrol napas untuk produksi suara yang lebih baik.</li>
                        <li><strong>Latihan Menelan:</strong> Memperkuat otot yang terlibat dalam menelan untuk mencegah aspirasi.</li>
                        <li><strong>Latihan Wajah:</strong> Meningkatkan kekuatan otot wajah untuk ekspresi dan bicara yang lebih baik.</li>
                        <li><strong>Latihan Nada dan Intonasi:</strong> Membantu mempertahankan pola bicara alami dan ekspresif.</li>
                    </ul>

                    <h3>Proses Terapi Wicara:</h3>
                    <ol>
                        <li><strong>Penilaian Awal:</strong> Mengevaluasi kemampuan bicara, suara, dan menelan pasien.</li>
                        <li><strong>Penetapan Tujuan:</strong> Menetapkan tujuan realistis untuk perbaikan.</li>
                        <li><strong>Rencana Perawatan:</strong> Merancang program terapi yang dipersonalisasi.</li>
                        <li><strong>Sesi Rutin:</strong> Menerapkan latihan dan teknik di bawah bimbingan.</li>
                        <li><strong>Latihan di Rumah:</strong> Memberikan latihan untuk praktik berkelanjutan di rumah.</li>
                        <li><strong>Pemantauan Kemajuan:</strong> Evaluasi rutin untuk menyesuaikan rencana perawatan sesuai kebutuhan.</li>
                    </ol>

                    <p>Terapi wicara untuk Parkinson adalah proses berkelanjutan yang dapat secara signifikan meningkatkan kualitas 
                        hidup dan mempertahankan kemampuan komunikasi. Ini paling efektif ketika dimulai sejak dini dan dipertahankan 
                        secara konsisten sepanjang perjalanan penyakit.</p>
                "
            ];
        } else if ($id == 3) {
            $data = [
                "judul" => "Psychotherapy for Parkinson's Disease",
                "gambar" => "assets/img/psychoteraphy.jpg",
                "isi" => "
                <h2>What is Psychotherapy?</h2>
                <p>Psychotherapy is an essential component in managing the mental and emotional aspects of Parkinson's disease. It involves talking with a mental health professional to address psychological challenges, improve coping skills, and enhance overall well-being. For Parkinson's patients, psychotherapy aims to manage depression, anxiety, and other emotional difficulties associated with the condition.</p>
                
                <h3>Key Psychotherapy Approaches for Parkinson's:</h3>
                <ul>
                    <li><strong>Cognitive Behavioral Therapy (CBT):</strong> Helps change negative thought patterns and behaviors.</li>
                    <li><strong>Mindfulness-Based Therapy:</strong> Promotes present-moment awareness and stress reduction.</li>
                    <li><strong>Acceptance and Commitment Therapy (ACT):</strong> Focuses on accepting challenges and committing to personal values.</li>
                    <li><strong>Supportive Psychotherapy:</strong> Provides emotional support and validation.</li>
                    <li><strong>Family Therapy:</strong> Addresses relationship dynamics and improves family support.</li>
                    <li><strong>Group Therapy:</strong> Offers peer support and shared experiences.</li>
                </ul>
                
                <h3>The Psychotherapy Process:</h3>
                <ol>
                    <li><strong>Initial Assessment:</strong> Evaluating the patient's psychological needs and concerns.</li>
                    <li><strong>Goal Setting:</strong> Establishing realistic therapeutic objectives.</li>
                    <li><strong>Treatment Plan:</strong> Designing a personalized therapy approach.</li>
                    <li><strong>Regular Sessions:</strong> Engaging in ongoing therapeutic conversations and exercises.</li>
                    <li><strong>Coping Strategies:</strong> Developing techniques for managing stress and emotions.</li>
                    <li><strong>Progress Evaluation:</strong> Regular reviews to adjust the treatment plan as needed.</li>
                </ol>
                
                <p>Psychotherapy for Parkinson's is an ongoing process that can significantly improve quality of life. It's most effective when integrated with medical treatment and started early in the disease progression.</p>
                    "
            ];
        } else if ($id == 4) {
            $data = [
                "judul" => "Deep Brain Stimulation for Parkinson's Disease",
                "gambar" => "assets/img/DBS.jpg",
                "isi" => "
                <h2>What is Deep Brain Stimulation?</h2>
                <p>Deep Brain Stimulation (DBS) is a surgical procedure used to treat various neurological symptoms of Parkinson's disease. It involves implanting electrodes in specific areas of the brain and connecting them to a small electrical device called a neurostimulator. This device sends electrical pulses to the brain to help control movement symptoms.</p>
                
                <h3>Key Aspects of Deep Brain Stimulation:</h3>
                <ul>
                    <li><strong>Target Areas:</strong> Usually the subthalamic nucleus or globus pallidus interna.</li>
                    <li><strong>Symptom Management:</strong> Helps control tremors, rigidity, and bradykinesia.</li>
                    <li><strong>Medication Reduction:</strong> Often allows for a decrease in Parkinson's medications.</li>
                    <li><strong>Adjustable Treatment:</strong> Stimulation can be adjusted as the disease progresses.</li>
                    <li><strong>Reversible Procedure:</strong> The device can be turned off or removed if necessary.</li>
                    <li><strong>Bilateral Application:</strong> Often performed on both sides of the brain.</li>
                </ul>
                
                <h3>The DBS Process:</h3>
                <ol>
                    <li><strong>Patient Selection:</strong> Determining if DBS is appropriate for the individual.</li>
                    <li><strong>Pre-surgical Evaluation:</strong> Comprehensive neurological and psychological assessments.</li>
                    <li><strong>Surgery:</strong> Implantation of electrodes and neurostimulator.</li>
                    <li><strong>Recovery:</strong> Initial healing period after surgery.</li>
                    <li><strong>Programming:</strong> Adjusting the device settings for optimal symptom control.</li>
                    <li><strong>Ongoing Management:</strong> Regular check-ups and adjustments as needed.</li>
                </ol>
                
                <p>Deep Brain Stimulation can significantly improve quality of life for many Parkinson's patients, especially those who have had an inconsistent response to medication. However, it's not suitable for everyone, and a thorough evaluation is necessary to determine if it's the right treatment option.</p>
                    "

            ];
        } else if ($id == 5) {
            $data = [
                "judul" => "Gamma Knife Surgery for Parkinson's Disease",
                "gambar" => "assets/img/gamma-knife-surgery.jpg",
                "isi" => "
                <h2>What is Gamma Knife Surgery?</h2>
                <p>Gamma Knife Surgery, also known as stereotactic radiosurgery, is a non-invasive treatment option for various neurological conditions, including certain symptoms of Parkinson's disease. It uses highly focused beams of gamma radiation to target specific areas of the brain without the need for traditional open surgery.</p>
                
                <h3>Key Aspects of Gamma Knife Surgery:</h3>
                <ul>
                    <li><strong>Non-Invasive:</strong> No incisions are made; treatment is delivered through the skull.</li>
                    <li><strong>Precise Targeting:</strong> Allows for accurate treatment of small brain areas.</li>
                    <li><strong>Single Session:</strong> Usually completed in one treatment session.</li>
                    <li><strong>Minimal Side Effects:</strong> Fewer complications compared to traditional brain surgery.</li>
                    <li><strong>Outpatient Procedure:</strong> Patients typically go home the same day.</li>
                    <li><strong>Tremor Management:</strong> Particularly effective for treating tremors in Parkinson's patients.</li>
                </ul>
                
                <h3>The Gamma Knife Surgery Process:</h3>
                <ol>
                    <li><strong>Patient Evaluation:</strong> Determining if Gamma Knife is suitable for the individual.</li>
                    <li><strong>Treatment Planning:</strong> Detailed imaging and planning of the radiation delivery.</li>
                    <li><strong>Frame Placement:</strong> A lightweight frame is attached to the patient's head for precision.</li>
                    <li><strong>Radiation Delivery:</strong> The patient lies still while radiation is delivered to the target area.</li>
                    <li><strong>Recovery:</strong> Brief observation period after the procedure.</li>
                    <li><strong>Follow-up:</strong> Regular check-ups to monitor the treatment's effectiveness.</li>
                </ol>
                
                <p>Gamma Knife Surgery can be an effective option for managing certain Parkinson's symptoms, particularly tremors, in cases where medication is not providing adequate relief. However, it's not suitable for all Parkinson's symptoms or all patients. A thorough evaluation by a specialist is necessary to determine if it's an appropriate treatment option.</p>
                    "

            ];
        }

        return \view('frontend.ResourceDetail', \compact('user', 'tittle', 'data'));
    }
    public function information()
    {
        $user = Auth::user();
        $tittle = 'Information';
        return \view('frontend.Information', \compact('user', 'tittle'));
    }
}
