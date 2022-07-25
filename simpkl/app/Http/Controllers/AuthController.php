<?php

namespace App\Http\Controllers;
use illuminate\Support\Str;
use App\Http\Controllers\Controller;



class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginProcess()
    {
        $guard = null;
        $userid = request('userid');

        if (Str::contains($userid, '@')) {
            $field = 'email';
            $guard = 'dataperusahaan';
        } else 
        // if (Str::contains($userid, '@')) {
        //     $field = 'email';
        // } else

        {
            $userid = str_replace(" ", "", $userid);
            $strlen = Str::length($userid);
            if ($strlen ==17) {
                $field = 'nip';
            } else if($strlen == 10) {
                $field = 'nim';
                $guard = 'mahasiswa';
            } else {
                $field = 'username';
            } 
            // if (Str::contains($userid, '@')) {
            //     $field = 'email';
            // } else 
        }

        $credential =[
            $field => request('userid'),
            'password' => request('password')
        ];

        $req_remember = request('remember');
        $remember = (isset($req_remember)) ? true : false;

        if($guard=='mahasiswa'){
            if(auth()->guard('mahasiswa')->attempt($credential, $remember)) {
                $user = auth()->user();
                return redirect('mahasiswa');
            } else {
                return view('auth.login', ['message' => 'Login Gagal']);
            }
        } 
        else if($guard=='dataperusahaan'){
            if(auth()->guard('dataperusahaan')->attempt($credential, $remember)) {
                $user = auth()->guard('dataperusahaan')->user();
                return $this->manageRedirect($user);
            } else {
                return view('auth.login', ['message' => 'Login Gagal']);
            }
        } 
        else{
            if(auth()->attempt($credential, $remember)) {
                $user = auth()->user();
                return $this->manageRedirect($user);
            } else {
                return view('auth.login', ['message' => 'Login Gagal']);
            }
        }
    }

    public function logout()
    {
        auth()->logout();
        auth()->guard('dataperusahaan')->logout();
        auth()->guard('mahasiswa')->logout();

        return redirect('login');
    }

    public function manageRedirect($user)
    {
        $list_role =  $user->role;
        $firstRole = $list_role->first();
        $url = $firstRole->module->url;
        return redirect($url);
    }

    
}
