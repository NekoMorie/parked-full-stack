<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Spatie\FlareClient\Api;

class FormController extends Controller
{

    public function pastientUpload(Request $request)
    {
        $request->validate([
            'fileModel1' => 'nullable|image|mimes:jpg,png|max:61440',
            'fileModel2' => 'nullable|mimes:wav|max:61440',
            'fileModel3' => 'nullable|image|mimes:jpg,png|max:61440',
            'audioUpload' => 'nullable|mimes:,wav|max:61440'
        ]);

        // \dd($request);
        if (!$request->hasFile('fileModel1') && !$request->hasFile('fileModel2') && !$request->input('recordedAudio') && !$request->hasFile('fileModel3')) {
            session()->flash('gagal', 'Anda harus mengunggah minimal satu file!');
            return redirect()->back();
        }

        $uploadedData = [
            'vm-url' => null,
            'hw-url' => null,
            'ni-url' => null,
        ];

        if ($request->hasFile('fileModel1')) {
            $fileModel1 = $request->file('fileModel1')->store('file_modul1', 'public');
            $uploadedData['hw-url'] = url('storage/' . $fileModel1);
        }

        if ($request->hasFile('fileModel2')) {
            $audioPath = $request->file('fileModel2')->store('file_modul2', 'public');
            $uploadedData['vm-url'] = url('storage/' . $audioPath);
        } elseif ($request->input('recordedAudio')) {
            $audioData = $request->input('recordedAudio');
            $audioData = str_replace('data:audio/wav;base64,', '', $audioData);
            $audioData = base64_decode($audioData);
            $audioPath = 'audios/recorded-' . time() . '.wav';
            Storage::disk('public')->put($audioPath, $audioData);
            $uploadedData['vm-url'] = url('storage/' . $audioPath);
        }

        if ($request->hasFile('fileModel3')) {
            $fileModel3 = $request->file('fileModel3')->store('file_modul3', 'public');
            $uploadedData['ni-url'] = url('storage/' . $fileModel3);
        }

        $uploadedData['hw-url'] = 'https://github.com/andyathsid/parked-ml-dev/blob/main/hand-writing-detection/data/raw/NewHandPD/HealthySpiral/sp1-H1.jpg?raw=true';
        // $uploadedData['vm-url'] = 'https://drive.google.com/uc?export=download&id=1LXfVMjs16Mb4JTbTAStBUxtqrOB5G6Zf';
        $uploadedData['vm-url'] = 'https://github.com/andyathsid/parked-ml-backend/blob/dev-alt/voice-measurements-detection-service/data/raw/FB1cdaopmoe67M2605161917.wav?raw=true';
        // Kirim POST request
        $response = Http::post('https://6suy7b2n3j.execute-api.ap-southeast-1.amazonaws.com/test/detect', $uploadedData);

        if ($response->successful()) {
            $apiResponse = $response->json();
            // \dd();
            // if ($request->fileModel3 != NULL) {
            return response()->json([
                'success' => true,
                'data' => $apiResponse,
                'upload' => $uploadedData
            ]);
            DB::table('form')->insert([
                'user_id' => auth()->id(),
                'file_diagnosa1' => $fileModel1 ?? null,
                'file_diagnosa2' => $audioPath ?? null,
                'file_diagnosa3' => $fileModel3 ?? null,
                'hasil_diagnosa1' => $apiResponse['hw-result'] ?? null,
                'hasil_diagnosa2' => $apiResponse['vm-result'] ?? null,
                'hasil_diagnosa3' => $apiResponse['ni-result'] ?? null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            session(['apiResponse' => $apiResponse]);

            return redirect()->route('result')->with('success', 'Data berhasil diproses!');
        } else {
            return redirect()->route('form-diagnosa')->with('gagal', 'Data yang dikirim Gagal Di proses!');
        }
    }
    public function hasil()
    {
        $user = Auth::user();
        $tittle = 'Hasil Diagnosa';

        // Ambil apiResponse dari session
        $apiResponse = session('apiResponse');

        if (!$apiResponse) {
            return redirect()->route('form-diagnosa')->with('gagal', 'Tidak ada data untuk ditampilkan.');
        }

        return view('frontend.resultDiagnosa', compact('user', 'tittle', 'apiResponse'));
    }
}
