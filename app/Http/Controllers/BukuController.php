<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function store(Request $request){
        Buku::create($request->all());
    }

    public function index(){
        return view("buku.index");
    }
}
