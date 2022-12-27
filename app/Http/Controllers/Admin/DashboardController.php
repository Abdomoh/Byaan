<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\User;
use App\Models\Zoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{

    public function index()
    {
        $zooms = Zoom::query()->orderBy('created_at', 'desc')->get();
        return view('super-admin.zoom.index', compact('zooms'));
    }


    public function getBooks()
    {
        $books = Book::query()->orderBy('created_at', 'desc')->get();
        return view('super-admin.books', compact('books'));
    }

    public function getStudents()
    {
        $students = User::where('type_id', 1)->orderBy('created_at', 'desc')->get();
        return view('super-admin.students', compact('students'));
    }

    public function getTetcher()
    {
        $tetchers = User::where('type_id', 2)->orderBy('created_at', 'desc')->get();
        return view('super-admin.tetcher', compact('tetchers'));
    }

    public function create()
    {

        return view('super-admin.zoom.create');
    }
    public function store(Request $request)
    {

        $input = $request->all();
        //dd($input);
        $validator = Validator::make($input, [
            'title' => 'required|string|unique:zooms,title',
            'date' => 'required|string',
            'time' => 'required',
            'url' => 'required|string',
        ]);

        if ($validator->fails()) {
            $message = implode("\n", $validator->errors()->all());
            return back()->withErrors($message)->withInput();
        }
        $zooms = Zoom::create($input);
        $zooms['user_id'] = Auth::user()->id;

        $zooms->save();
        session::flash('success', 'تمت   الاضافة  الدرس  بنجاح ');
        return redirect('zooms');
    }
}
