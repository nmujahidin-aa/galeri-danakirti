<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Log;
use App\Enums\RoleEnum;
use App\Models\User;
use Error;
class LoginController extends Controller
{
    private $view;
    public function __construct()
    {
        $this->view = "pages.auth.";
    }
    public function index(){
        if(Auth::check()){
            return redirect()->route('home.index');
        }
        return view($this->view."login");
    }

    public function post(LoginRequest $request)
    {
        try {

            $email = trim(htmlentities($request->input("email")));
            $password = trim(htmlentities($request->input("password")));


            $credentials = [
                'email' => $email,
                'password' => $password,
            ];

            if (Auth::attempt($credentials)) {
                $user = Auth::user();

                // Cek apakah user memiliki salah satu role yang diizinkan
                if (!$user->hasRole([
                    RoleEnum::ADMINISTRATOR
                ])) {
                    Auth::logout();
                    throw new Error("Anda tidak diperbolehkan mengakses menu ini");
                }

                alert()->html('Berhasil', 'Login berhasil', 'success');
                return redirect()->intended(route('dashboard.dashboard.index'));
            }

        } catch (\Throwable $e) {
            Log::emergency($e->getMessage());

            alert()->html('Gagal',$e->getMessage(),'error');
            return redirect()->back()->withInput();
        }
    }

}
