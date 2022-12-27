<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Role;
use App\Models\User;

class SessionController extends Controller
{


    public function create()
    {
        return view('admin.users.login');
    }

    public function store()
    {
        if (!auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors(['massage' => 'الايميل او الباسورد غير صحيحين']);
        }
        if (auth::user()->type_id == 1) {
            session::flash('login', 'تم تسجيل الدخول بنجاح');
            return redirect('../students');
        } elseif (auth::user()->type_id == 2) {
            return redirect('../tetcher');
        } else {
            return redirect('../dashboard');
        }
    }


    public function destory()
    {
        auth()->logout();
        return redirect('../login');
    }
}
