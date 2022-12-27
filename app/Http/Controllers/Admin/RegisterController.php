<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Role;
use App\Models\Type;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $types = Type::all();
        return view('admin.users.register', compact('types'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        //dd($input);
        $validator = Validator::make($input, [
            'name' => 'required|string',
            'email' => 'required|unique:users,email',
            'type_id' => 'required',
            'password' => 'required|string|confirmed',
            'url' => 'image|mimes:jpeg,jpg,gif,png|max:10240',
        ]);

        if ($validator->fails()) {
            $message = implode("\n", $validator->errors()->all());
            return back()->withErrors($message)->withInput();
        }
        $user = User::create($input);
        $token = uniqid(base64_encode(Str::random(40)));
        $user->remember_token = $token;
        $user->password = Hash::make($request->password);
        $user->type_id = $request->type_id;

        if ($request->file('url')) {
            $image_name = md5($user->id . "app" . $user->id . rand(1, 1000));

            $image_ext = $request->file('url')->getClientOriginalExtension(); // example: png, jpg ... etc

            $image_full_name = $image_name . '.' . $image_ext;

            $uploads_folder =  getcwd() . '/uploads/';

            if (!file_exists($uploads_folder)) {
                mkdir($uploads_folder, 0777, true);
            }
            $request->file('url')->move($uploads_folder, $image_name  . '.' . $image_ext);
            $user->url = $image_full_name;
        }
        $user->save();
        //toastr()->success('تم تسجيل الدخول');
        session::flash('success', 'تم  التسجيل بنجاح ');
        $user->roles()->attach(Role::where('name', 'user')->first());
        auth()->login($user);
        return redirect('login');
    }
}
