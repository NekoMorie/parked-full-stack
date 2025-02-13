<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $tittle = 'Info';

        return \view('frontend/InfoPatien', \compact('user', 'tittle'));
    }
    public function DiagnosaForm()
    {
        $user = Auth::user();
        $tittle = 'Form Diagnosa';
        $user->formatted_tgl_ulangtahun = Carbon::parse($user->tgl_ulangtahun)->format('Y-m-d');

        return \view('frontend/FormDiagnosa', \compact('user', 'tittle'));
    }
}
