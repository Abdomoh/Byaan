<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::latest()->where('user_id',Auth::user()->id)->get();
        return view('admin.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        //dd($input);
        $validator = Validator::make($input, [
            'title' => 'required|string|unique:books,title',
            'other' => 'required|string',
            'edition' => 'required',
            'page_number' => 'required|string',
            'url' => 'image|mimes:jpeg,jpg,gif,png|max:10240',
            'pdf' => '|mimes:xls ,ppt,doc ,dotm,pdf,dotx ,|max:10240',
        ]);

        if ($validator->fails()) {
            $message = implode("\n", $validator->errors()->all());
            return back()->withErrors($message)->withInput();
        }
        $user = Book::create($input);
        $user['user_id'] = Auth::user()->id;
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


        if ($request->file('pdf')) {
            $image_name = md5($user->id . "app" . $user->id . rand(1, 1000));

            $image_ext = $request->file('pdf')->getClientOriginalExtension(); // example: png, jpg ... etc

            $image_full_name = $image_name . '.' . $image_ext;

            $uploads_folder =  getcwd() . '/pdf/';

            if (!file_exists($uploads_folder)) {
                mkdir($uploads_folder, 0777, true);
            }
            $request->file('pdf')->move($uploads_folder, $image_name  . '.' . $image_ext);
            $user->pdf = $image_full_name;
        }


        $user->save();
        //toastr()->success('تم تسجيل الدخول');
        session::flash('success', 'تمت   الاضافة  بنجاح ');
        return redirect('books');
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
        $book=Book::find($id);
        $book->delete();
        session::flash('error','تم الحزف بنجاح');
        return back();
    }
}
