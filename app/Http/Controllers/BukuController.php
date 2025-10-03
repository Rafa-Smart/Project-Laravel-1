<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBukuRequest;
use Exception;
use PDOException;
use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BukuController extends Controller
{
    public function store(StoreBukuRequest $request)
    {

        // ini kita buat transaksi
        DB::beginTransaction();
        try {
            Buku::create($request->all());
            DB::commit();
             return redirect('buku')->with('success', 'pesan');
            } catch (Exception | PDOException $e) {
                DB::rollBack();
                return redirect('buku')->with('error', $request->error());
        }

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

        return redirect('buku');
    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect("buku");
    }

}
