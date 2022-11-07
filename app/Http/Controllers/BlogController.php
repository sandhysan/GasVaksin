<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = Informasi::with('user')->get();
        return view('user.blog', ['blogs' => $blogs]);
    }

    public function detail($id){
        $blogs = Informasi::with('user')->get();
        $blog = Informasi::with('user')->where('id','=', $id)->first();
        return view('user.info', ['blogs' => $blogs, 'blog' => $blog]);
    }

}
