<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;

class PortofolioController extends Controller
{
    // Menampilkan data di halaman publik
    public function index()
    {
        $data = Portofolio::all();
        return view('home', compact('data'));
    }

    // Menampilkan data di halaman admin
    public function adminIndex()
    {
        $data = Portofolio::all();
        return view('admin.index', compact('data'));
    }

    // Form tambah data
    public function create()
    {
        return view('admin.create');
    }

    // Simpan data ke database + upload gambar
    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'title' => 'required',
            'image' => 'required|image'
        ]);
        // Ambil file gambar
        $file = $request->file('image');
        // Buat nama unik untuk gambar
        $filename = time() . '_' . $file->getClientOriginalName();
        // Simpan ke folder public/iamges
        $file->move(public_path('images'), $filename);
        // Simpan data ke database
        Portofolio::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $filename
        ]);
    }

    // Form edit data
    public function edit($id)
    {
        $data = Portofolio::findorFail($id);
        return view('admin.edit', compact('data'));
    }

    // Update data
    public function update(Request $request, $id)
    {
        $data = Portofolio::find($id);

        // Jika update gambar baru
        if ($request->hasFile('image')) {
            $file  = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $data->image = $filename;
        }

        // Update field lainnya
        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();

        return redirect('admin/portofolio');
    }

    // Menghapus data
    public function delete($id)
    {
        $data = Portofolio::find($id);
        return redirect('admin/portofolio');
    }
}
