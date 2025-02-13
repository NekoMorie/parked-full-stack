<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $tittle = 'Dashboard';
        $totalUsers = User::count();

        $totalForms = Form::count();

        return \view('backend/dashboard', \compact('user', 'tittle', 'totalUsers', 'totalForms'));
    }

    public function profile()
    {
        $user = Auth::user();
        $tittle = 'profile';


        return \view('backend/profile', \compact('user', 'tittle'));
    }
}
