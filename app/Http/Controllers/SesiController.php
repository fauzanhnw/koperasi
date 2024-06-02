<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sesi.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login(Request $request){

        $credentials = $request->only('no_anggota', 'password');

        if (Auth::guard('anggota')->attempt($credentials)) {
            $user = Auth::guard('anggota')->user();

            if ($user->status == 'Aktif') {
                if ($user->role == 'ketua') {
                    return redirect('/ketua/dashboard')->with([
                        'notifikasi' => 'Login berhasil !',
                        'type' => 'success'
                    ]);
                } elseif ($user->role == 'pengawas') {
                    return redirect('/pengawas/dashboard')->with([
                        'notifikasi' => 'Login berhasil !',
                        'type' => 'success'
                    ]);
                } elseif ($user->role == 'kabag') {
                    return redirect('/kabag/dashboard')->with([
                        'notifikasi' => 'Login berhasil !',
                        'type' => 'success'
                    ]);
                } elseif ($user->role == 'sdm') {
                    return redirect('/sdm/dashboard')->with([
                        'notifikasi' => 'Login berhasil !',
                        'type' => 'success'
                    ]);
                } elseif ($user->role == 'sekretaris') {
                    return redirect('/sekretaris/dashboard')->with([
                        'notifikasi' => 'Login berhasil !',
                        'type' => 'success'
                    ]);
                } elseif ($user->role == 'anggota') {
                    return redirect('/anggota/dashboard')->with([
                        'notifikasi' => 'Login berhasil !',
                        'type' => 'success'
                    ]);
                } elseif ($user->role == 'bendahara') {
                    return redirect('/bendahara/dashboard')->with([
                        'notifikasi' => 'Login berhasil !',
                        'type' => 'success'
                    ]);
                }
            } else {
                return redirect('sesi')->with([
                    'notifikasi' => 'Login gagal, E-Mail atau Password salah !',
                    'type' => 'error'
                ]);
            }
        } else {
            return redirect('sesi')->with([
                'notifikasi' => 'Login gagal, E-Mail atau Password salah !',
                'type' => 'error'
            ]);
        }

}
    public function logout(Request $request)
    {
        Auth::guard('anggota')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with([
            'notifikasi' => 'Logout berhasil !',
            'type' => 'success'
        ]);
    }

}
