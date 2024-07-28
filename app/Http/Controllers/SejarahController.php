<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sejarah;


class SejarahController extends Controller
{
    public function index(Sejarah $sejarah) {
        return view('Code/Profil/sejarah', [
            "title" => "Sejarah",
            "sejarah" => $sejarah
        ]);
    }
}