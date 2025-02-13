<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserManagementController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $tittle = 'User Management';
        $users = User::all();

        return \view('backend/UserManagement/index', \compact('user', 'tittle', 'users'));
    }

    public function tambah()
    {
        $user = Auth::user();
        $tittle = 'Add User';

        return \view('backend/UserManagement/add', \compact('user', 'tittle'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'role' => 'required|string',
            'profilePhoto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ] + ($request->filled('password') ? ['password' => 'min:8|confirmed'] : []));
        if ($request->hasFile('profilePhoto')) {
            $photoPath = $request->file('profilePhoto')->store('profile_photos', 'public');
        } else {
            $photoPath = 'profile_photos/defaultUser.jpg';
        }

        if ($request->password == null) {
            $pw = '$def4ult';
        } else {
            $pw = $request->password;
        }
        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'role' => $request->role,
            'email_verified' => now(),
            'photo' => $photoPath,
            'password' => Hash::make($pw),
        ]);

        return redirect()->route('UserManagement')->with('success', 'User created successfully.');
    }
    public function edit($id)
    {
        $user = Auth::user();
        $tittle = 'Edit User';
        $users = User::find($id);
        return \view('backend/UserManagement/edit', \compact('user', 'tittle', 'users'));
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'role' => 'required|string',
            'profilePhoto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->updated_at = now()->setTimezone('Asia/Jakarta');


        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        if ($request->hasFile('profilePhoto')) {

            if ($user->photo && $user->photo !== 'profile_photos/defaultUser.jpg') {
                Storage::disk('public')->delete($user->photo);
            }

            $user->photo = $request->file('profilePhoto')->store('profile_photos', 'public');
        }


        $user->save();

        return redirect()->route('UserManagement')->with('success', 'User updated successfully.');
    }


    public function destroy($id)
    {
        $user = User::find($id);

        if ($user) {
            if ($user->photo && $user->photo !== 'profile_photos/defaultUser.jpg') {
                Storage::disk('public')->delete($user->photo);
            }

            $user->delete();
            return redirect()->route('UserManagement')->with('success', 'User deleted successfully.');
        }
    }
}
