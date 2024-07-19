<?php

namespace App\Http\Controllers;

use App\Models\FilmModel;
use App\Models\UlasanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FilmController extends Controller
{
    public function form_film()
    {
        return view('admin/form_film');
    }

    public function table_film(Request $request)
    {
        $search = $request->input('search');
        $category = $request->input('category');

        $query = FilmModel::query();

        if ($search) {
            $query->where('judul', 'like', '%' . $search . '%')
                ->orWhere('deskripsi', 'like', '%' . $search . '%')
                ->orWhere('kategori', 'like', '%' . $search . '%')
                ->orWhere('director', 'like', '%' . $search . '%')
                ->orWhere('producer', 'like', '%' . $search . '%')
                ->orWhere('negara', 'like', '%' . $search . '%');
        }

        if ($category) {
            $query->where('kategori', 'like', '%' . $category . '%');
        }

        $films = $query->paginate(5);

        return view('admin.table_film', compact('films', 'search', 'category'));
    }

    public function proses_post_film(Request $request)
    {
        // Validasi data yang dikirimkan dari form
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string|max:255',
            'director' => 'required|string|max:255',
            'producer' => 'required|string|max:255',
            'negara' => 'required|string|max:255',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:10240',
        ]);

        // Simpan file poster ke dalam direktori yang sesuai
        $posterPath = $request->file('poster')->store('posters', 'public');

        // Buat dan simpan data film baru ke dalam database
        $film = new FilmModel();
        $film->judul = $validatedData['judul'];
        $film->deskripsi = $validatedData['deskripsi'];
        $film->kategori = $validatedData['kategori'];
        $film->director = $validatedData['director'];
        $film->producer = $validatedData['producer'];
        $film->negara = $validatedData['negara'];
        $film->poster = $posterPath;
        $film->save();

        // Redirect dengan pesan sukses jika data berhasil disimpan
        return redirect()->route('admin.table-film')->with('success', 'Data film berhasil ditambahkan.');
    }

    // Fungsi untuk menampilkan form edit
    public function form_edit_film($id)
    {
        $film = FilmModel::find($id);
        return view('admin/form_edit_film', compact('film'));
    }

    // Fungsi untuk memperbarui data film
    public function proses_update_film(Request $request, $id)
    {
        $film = FilmModel::find($id);
        $film->judul = $request->input('judul');
        $film->deskripsi = $request->input('deskripsi');
        $film->kategori = $request->input('kategori');
        $film->director = $request->input('director');
        $film->producer = $request->input('producer');
        $film->negara = $request->input('negara');

        if ($request->hasFile('poster')) {
            $path = $request->file('poster')->store('public');
            $film->poster = $path;
        }

        $film->save();
        return redirect()->route('admin.table-film')->with('success', 'Film updated successfully');
    }

    // Fungsi untuk menghapus film
    public function proses_delete_film($id)
    {
        $film = FilmModel::find($id);
        $film->delete();
        return redirect()->route('admin.table-film')->with('success', 'Film deleted successfully');
    }
    public function detail_film($id)
    {
        $film = FilmModel::findOrFail($id);
        $ulasans = UlasanModel::where('film_id', $id)->get();
        $averageRating = $ulasans->avg('rating');
        if (Auth::guard('user')->check()) {
            // Jika user terautentikasi
            $user = Auth::guard('user')->user();
            // Mendapatkan pengguna yang terautentikasi
            return view('user.detail_film', compact('film', 'ulasans', 'user', 'averageRating'));
        } else {
            // Jika tidak terautentikasi, redirect ke halaman login
            return redirect()->route('login-user');
        }
    }

    //fungsi untuk menampilkan form compare
    public function form_compare(Request $request)
    {
        $search = $request->input('search');
        $films = FilmModel::query();

        if ($search) {
            $films->where('judul', 'like', '%' . $search . '%');
        }

        if ($request->ajax()) {
            return response()->json([
                'films' => $films->get()
            ]);
        }

        if (Auth::guard('user')->check()) {
            $user = Auth::guard('user')->user();
            return view('user.form_compare', compact('user'));
        } else {
            return redirect()->route('login-user');
        }
    }
    public function compareProcess(Request $request)
    {
        $film1Id = $request->input('film1');
        $film2Id = $request->input('film2');

        $film1 = FilmModel::find($film1Id);
        $film2 = FilmModel::find($film2Id);

        // Jika salah satu film tidak ditemukan, kembalikan error atau redirect
        if (!$film1 || !$film2) {
            return redirect()->back()->with('error', 'Salah satu film tidak ditemukan.');
        }

        $ulasan1 = UlasanModel::where('film_id', $film1Id)->get();
        $ulasan2 = UlasanModel::where('film_id', $film2Id)->get();

        // Mengambil user yang sedang login
        $user = Auth::guard('user')->user();

        // Hitung rata-rata rating untuk setiap film
        $film1AverageRating = $film1->averageRating();
        $film2AverageRating = $film2->averageRating();

        return view('user.result', compact('film1', 'film2', 'ulasan1', 'ulasan2', 'user', 'film1AverageRating', 'film2AverageRating'));
    }
}
