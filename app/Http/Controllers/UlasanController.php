<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Ulasan;
use App\Models\UlasanModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UlasanController extends Controller
{
    public function store(Request $request, $filmId)
    {
        if (Auth::guard('user')->check()) {
            // Jika user terautentikasi
            $user = Auth::guard('user')->user();
            Log::info('User ID: ' . $user->id);
            $request->validate([
                'rating' => 'required|integer|min:1|max:10',
                'nilai_cerita' => 'required|integer|min:1|max:10',
                'nilai_audio' => 'required|integer|min:1|max:10',
                'nilai_karakter' => 'required|integer|min:1|max:10',
                'cinematography' => 'required|integer|min:1|max:10',
                'ending' => 'required|integer|min:1|max:10',
                'ulasan' => 'required|string|max:1000',
            ]);

            UlasanModel::create([
                'user_id' => $user->id,
                'film_id' => $filmId,
                'rating' => $request->rating,
                'nilai_cerita' => $request->nilai_cerita,
                'nilai_audio' => $request->nilai_audio,
                'nilai_karakter' => $request->nilai_karakter,
                'cinematography' => $request->cinematography,
                'ending' => $request->ending,
                'ulasan' => $request->ulasan,
            ]);

            return redirect()->route('user.detail-film', $filmId);
        } else {
            return redirect()->route('login-user');
        }
    }
}
