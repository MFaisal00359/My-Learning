<?php

namespace App\Http\Controllers;

use App\Models\Modul_10;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostModul11Controller extends Controller
{
    public function index(): View
    {
        $moduls_10 = Modul_10::all();

        $moduls_10 = Modul_10::simplePaginate(5);

        return view('moduls_page.modul_10_page.index', compact('moduls_10'));
    }
}
