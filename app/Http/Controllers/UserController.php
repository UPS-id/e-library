<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.user.index', [
            'title' => 'User',
            'users' => User::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'User | Create';
        return view('dashboard.user.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name" => "required|max:255",
            "username" => "required|max:255",
            "slug" => "required|unique:users",
            "email" => "required|email|unique:users",
            "role" => "required|in:admin,user",
            "password" => "required|min:8",
        ]);
        User::create($validatedData);
        $validatedData['password'] = Hash::make($validatedData['password']);
        return redirect('/dashboard/user')->with('success', 'New user has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $title = 'User | Edit';
        return view('dashboard.user.edit', compact('title', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:5',
            'role' => 'required'
        ];
        if (request('slug') != $user->slug) {
            $rules['slug'] = 'unique:users required';
        }
        if (request('email') != $user->email) {
            $rules['email'] = 'required|email|unique:users | email:dns';
        }
        if (request('username') != $user->username) {
            $rules['username'] = 'required|string|min:3|max:255 | unique:users';
        }
        $validatedData = $request->validate($rules);
        User::where('slug', $user->slug)->update($validatedData);
        return redirect('/dashboard/user')->with('success', 'Data berhasil diubah!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/dashboard/user')->with('success', 'User has been deleted!');
    }
}
