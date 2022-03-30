<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mahasiswa;

class SearchController extends Controller
{
    public function search(Request $request) {
        $keyword = $request->cari;

        $mahasiswa = Mahasiswa::where('nama', 'like', '%' . $keyword . '%')->paginate(3);
        return view('mahasiswa.index',[
            'mahasiswa' => $mahasiswa
        ]);
    }
}
