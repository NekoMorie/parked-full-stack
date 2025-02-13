<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $tittle = 'Profile User';
        // echo $user->tgl_ulangtahun->format('d-m-Y');
        // \dd($user);
        $user->formatted_tgl_ulangtahun = Carbon::parse($user->tgl_ulangtahun)->format('Y-m-d');
        return \view('frontend/user/profile', \compact('user', 'tittle'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        // \dd($request->confirmed);

        $request->validate([
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10048',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dateOfBirth' => 'required|date',
            'address' => 'required|string|max:255',
            'phoneNumber' => 'required|string|max:15',
            'occupation' => 'nullable|string|max:255',
            'password' => $user->password ? 'nullable|min:8' : 'required|min:8',
            'old_password' => $user->password ? 'required' : 'nullable',
        ],);
        // \dd($request);

        if ($request->hasFile('photo')) {
            if ($user->photo && $user->photo !== 'profile_photos/defaultUser.jpg') {
                Storage::disk('public')->delete($user->photo);
            }

            $user->photo = $request->file('photo')->store('profile_photos', 'public');
        }

        // Memeriksa apakah password baru diisi
        if ($request->filled('password')) {
            if ($user->password && $request->filled('old_password')) {
                if (!Hash::check($request->old_password, $user->password)) {
                    return back()->withErrors(['old_password' => 'Password lama tidak sesuai.']);
                }
            }

            $user->password = Hash::make($request->password);
        }

        // $user->id;
        $users = User::find($user->id);
        $users->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'tgl_ulangtahun' => $request->dateOfBirth,
            'address' => $request->address,
            'phone_number' => $request->phoneNumber,
            'occupation' => $request->occupation,
            'password' => $user->password,
            'photo' => $user->photo ?? null,
        ]);

        return redirect('/profile')->with('success', 'Profile updated successfully!');
    }


    public function history()
    {
        $user = Auth::user();
        $tittle = 'History User';
        $history = Form::all();

        return \view('frontend/user/history', \compact('user', 'tittle', 'history'));
    }
}
