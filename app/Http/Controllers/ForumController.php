<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiskusiModel;
use App\Models\ReplyModel;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    public function index()
    {
        $user = Auth::guard('user')->user();
        $diskusis = DiskusiModel::with('user')->get();
        return view('user/forum', compact('diskusis', 'user'));
    }

    public function store(Request $request)
    {
        $user = Auth::guard('user')->user();

        $request->validate([
            'topik' => 'required|string|max:255',
            'isi' => 'required|string',
        ]);

        DiskusiModel::create([
            'userID' => $user->id,
            'topik' => $request->topik,
            'isi' => $request->isi,
            'waktu' => now(),
        ]);

        return redirect()->route('user.forum-diskusi');
    }

    public function show($id)
    {
        $user = Auth::guard('user')->user();
        $diskusi = DiskusiModel::with('user')->findOrFail($id);
        $replies = ReplyModel::with('user')->where('diskusiID', $id)->paginate(5);
        return view('user/show', compact('diskusi', 'replies', 'user'));
    }


    public function store_reply(Request $request, $diskusiID)
    {
        $user = Auth::guard('user')->user();

        $request->validate([
            'isireply' => 'required|string',
        ]);

        ReplyModel::create([
            'userID' => $user->id,
            'diskusiID' => $diskusiID,
            'isireply' => $request->isireply,
        ]);

        return redirect()->route('user.forum-show', ['id' => $diskusiID]);
    }


}
