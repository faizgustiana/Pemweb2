<?php

namespace App\Http\Controllers;

use App\Models\Kampus;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class KampusController extends Controller
{
    // method untuk menampilkan data kampus
    public function index(){
        // tarik data kampus dari database
        $kampuses = Kampus::all();

        // panggil view dan kirim data kampus
        return view('admin.contents.kampus.index', [
            'kampuses' => $kampuses,
        ]);
    }

    // method untuk menampilkan form tambah kampus
    public function create(){
        // panggil view
        $kampus = new Kampus();
        return view('admin.contents.kampus.create',compact('kampus'));
    }

    // method untuk menyimpan data kampus
    public function store(Request $request)
    {
        // validasi data yang diterima
        $data = $request->validate([
            "nama" => 'required',
            "alamat" => 'required',
            "latitude" => 'required',
            "longitude" => 'required',
        ]);

        if (isset($request->id)) {  
            # update
            $kampus = Kampus::find($request->id);
            $kampus->update([
                "nama" => $request->nama,
                "alamat" => $request->alamat,
                "latitude" => $request->latitude,
                "longitude" => $request->longitude,
            ]);
        } else {
            Kampus::create($data);
        }

        return redirect()->route('kampus.index');
    }

    // method untuk menampilkan halaman edit
    public function edit($id){
        // cari data kampus berdasarkan id
        $kampus = Kampus::find($id);
        if (!$kampus) {
            return redirect()->back();
        }
        return view('admin.contents.kampus.edit', compact('kampus'));
    }

    // method untuk menyimpan hasil update
    // public function update($id, Request $request)
    // {
    //     // cari data kampus berdasarkan id
    //     $kampus = Kampus::find($id);

    //     // validasi data yang diterima
    //     $request->validate([
    //         'nama' => 'required|max:20',
    //         'alamat' => 'required|max:45',
    //         'latitude' => 'required|numeric',
    //         'longitude' => 'required|numeric',
    //     ]);

    //     // simpan perubahan
    //     $kampus->update([
    //         'nama' => $request->nama,
    //         'alamat' => $request->alamat,
    //         'latitude' => $request->latitude,
    //         'longitude' => $request->longitude,
    //     ]);

    //     // kembalikan ke halaman kampus
    //     return redirect('/admin/kampus')->with('message', 'Data kampus berhasil diedit!');
    // }

    // method untuk menghapus kampus
    public function destroy($id){
        // cari data kampus berdasarkan id
        $kampus = Kampus::find($id);

        // hapus kampus
        $kampus->delete();

        // kembalikan ke halaman kampus
        return redirect('/admin/kampus')->with('message', 'Data kampus berhasil dihapus!');
    }
}
