<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mengarahkan ke halaman web: http://127.0.0.1:8000/register
        return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Proses validasi data dari view('auth.register')
        $validData = $request->validate([
            'name'              => ['required', 'max:50', 'min:5'],
            'email'             => ['email:rfc,dns', 'unique:users'],
            'password'          => ['required', 'max:50', 'min:5'],
            'retype_password'   => ['required', 'same:password']
        ]);

        // Prose Encryption Password
        // $validatedData['password'] = bcrypt($validatedData['password']); // Menggunakan fungsi bcrypt() bawaan PHP
        $validData['password'] = Hash::make($validData['password']); //Menggunakan method static Hash::make() bawaan Laravel

        // Proses input ke table users di databese iottokoku menggunakan fitur eloquent ORM
        User::create([
            'name'      => $validData['name'],
            'email'     => $validData['email'],
            'password'  => $validData['password']
        ]);

        // redirect ke view('home.index') dengan pesan reg_success
        return redirect('/login')->with('reg_success', "Selamat! Proses registrasi akun Anda berhasil. Silahkan Login.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
