<?php

namespace App\Http\Controllers;

use App\Models\Modul_12;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostModul12Controller extends Controller
{
    public function index(): View
    {
        $moduls_12 = Modul_12::all();

        $moduls_12 = Modul_12::simplePaginate(5);

        return view('moduls_page.modul_12_page.index', compact('moduls_12'));
    }
}
