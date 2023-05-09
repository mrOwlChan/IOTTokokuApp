<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mengarahkan ke halaman web: http://127.0.0.1:8000/login
        return view('auth.login');
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
        //
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

    // Proses Authenticate User
    public function authenticate(Request $request){
        // Proses validasi input data dari view('auth.login')
        $credentials = $request->validate([
            "email"     => ['required', 'email:rfc,dns'],
            "password"  => ['required']
        ]);

        // Proses login user dengan validasi jika proses validasi berhasil
        if(Auth::attempt($credentials)){
            $request->session()->regenerate(); // Untuk menghindari teknik hacking session fixation

            return redirect()->intended('/'); // Redirect ke URL tertentu melalui authentification middleware
        }

        // // Kembali ke halaman sebelumnya jika proses validasi gagal
        return back()->with('login_failed', "Login gagal! Pastikan data yang Anda input benar!");

    }

    public function logout(Request $request){
        // Logout
        Auth::logout();

        $request->session()->invalidate(); // Agar session sebelumnyatidak dapat dipakai kembali setelah logout

        $request->session()->regenerateToken(); // Membuat kembali token agar tidak dibajak

        // Redirect ke page home
        return redirect('/');
    }
}
