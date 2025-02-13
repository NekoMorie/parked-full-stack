<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HistoryFormController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $tittle = 'History Form';
        $history = Form::all();
        $userHistory =  DB::table('form')
            ->join('users', 'form.user_id', '=', 'users.id')
            ->select('form.*', 'users.first_name', 'users.last_name', 'users.email') // Select necessary fields
            ->get();

        return \view('backend/story', \compact('user', 'tittle', 'userHistory'));
    }
}
