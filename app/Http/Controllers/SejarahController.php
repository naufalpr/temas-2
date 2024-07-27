<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sejarah;


class SejarahController extends Controller
{
    public function show(Sejarah $sejarah) {
        return view('Code/Profil/sejarah', [
            "title" => "Single News",
            "body" => $sejarah,
        ]);
    }
}
