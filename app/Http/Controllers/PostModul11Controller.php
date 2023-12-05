<?php

namespace App\Http\Controllers;

use App\Models\Modul_11;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostModul11Controller extends Controller
{
    public function index(): View
    {
        $moduls_11 = Modul_11::all();

        $moduls_11 = Modul_11::simplePaginate(5);

        return view('moduls_page.modul_11_page.index', compact('moduls_11'));
    }
}
