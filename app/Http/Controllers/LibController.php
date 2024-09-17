<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lib;
class LibController extends Controller
{
    public function index(){
        $libs = Lib::all();
        return view('books', compact('libs'));
    }

    public function form()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'page_count'=>'required',
            'author_name'=>'required',
            'author_email'=>'required'
        ]);
        Lib::create($request->all());
        return redirect()->route('books');
    }
}
