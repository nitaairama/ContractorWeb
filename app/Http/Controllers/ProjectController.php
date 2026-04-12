<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    // Halaman publik
    public function index()
    {
        // Menampilkan proyek terbaru di halaman home
        $data = Project::latest()->take(3)->get();
        return view('home', compact('data'));
    }

    public function about()
    {
        return view('about');
    }

    public function project()
    {
        $data = Project::latest()->get();
        return view('project', compact('data'));
    }

    public function detail($id)
    {
        $data = Project::findOrFail($id);
        return view('project_detail', compact('data'));
    }

    public function contact()
    {
        return view('contact');
    }

    // Halaman admin
    public function adminIndex()
    {
        $data = Project::latest()->get();
        return view('admin.index', compact('data'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title'       => 'required|max:255',
            'category'    => 'required',
            'client'      => 'required',
            'location'    => 'required',
            'start_date'  => 'required|date',
            'end_date'    => 'nullable|date|after_or_equal:start_date',
            'description' => 'required',
            'image'       => 'required|mimes:jpeg,png,jpg,webp|max:2048',
        ], [
            'required' => 'This field is required',
            'image.mimes' => 'Only JPEG, PNG, JPG, and WEBP images are allowed',
            'image.max' => 'Image size must be less than 2MB',
        ]);

        // Proses upload gambar
        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('images'), $filename);

        // Simpan ke database
        Project::create([
            'title'       => $request->title,
            'category'    => $request->category,
            'client'      => $request->client,
            'location'    => $request->location,
            'start_date'  => $request->start_date,
            'end_date'    => $request->end_date,
            'description' => $request->description,
            'image'       => $filename,
        ]);

        return redirect()->route('admin.index')->with('success', 'Project created successfully');
    }

    public function edit($id)
    {
        $data = Project::findOrFail($id);
        return view('admin.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Project::findOrFail($id);

        // Validation
        $request->validate([
            'title'       => 'required|max:255',
            'category'    => 'required|string',
            'client'      => 'required|string',
            'location'    => 'required|string',
            'start_date'  => 'required|date',
            'end_date'    => 'nullable|date|after_or_equal:start_date',
            'description' => 'required|string',
            'image'       => 'nullable|mimes:jpeg,png,jpg,webp|max:2048',
        ], [
            '*.required' => 'This field is required',
            'image.mimes' => 'Only JPEG, PNG, JPG, and WEBP images are allowed',
            'image.max' => 'Image size must be less than 2MB',
        ]);

        // Handle image baru jika ada
        if ($request->hasFile('image')) {

        // Hapus gambar lama
        if ($data->image && File::exists(public_path('images/' . $data->image))) {
            File::delete(public_path('images/' . $data->image));
        }

        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('images'), $filename);

        $data->image = $filename;
    }

    // Update data
    $data->update([
        'title'       => $request->title,
        'category'    => $request->category,
        'client'      => $request->client,
        'location'    => $request->location,
        'start_date'  => $request->start_date,
        'end_date'    => $request->end_date,
        'description' => $request->description,
    ]);

    return redirect()->route('admin.index')
        ->with('success', 'Project updated successfully');
}
    public function delete($id)
    {
        $data = Project::findOrFail($id);

        // Hapus file gambar fisik
        if (File::exists(public_path('images/' . $data->image))) {
            File::delete(public_path('images/' . $data->image));
        }

        $data->delete();

        return redirect()->route('admin.index')->with('success', 'Project deleted successfully');
    }
}