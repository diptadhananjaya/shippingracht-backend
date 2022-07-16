<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DetailArtikelController extends Controller
{
    public function index(Request $request, $id)
    {
        $data = Artikel::findOrFail($id);
        $date = $data->created_at->translatedFormat('d F Y');
        return view('pages.detail-artikel', compact('data', 'date'));
    }
}
