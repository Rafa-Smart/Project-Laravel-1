<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function store(Request $request)
    {
        Buku::create($request->all());
        return redirect("data");
    }

    public function tampilCreate(){
        return view('buku.form');
    }

    public function index()
    {
        $data = Buku::get();
        return view("templates.layout", compact('data'));
    }

    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required|numeric',
        ]);

        $buku = Buku::findOrFail($id);
        $buku->update($request->all());

        return redirect('data');
    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect("data");
    }

}
