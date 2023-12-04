<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa_link;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostBeasiswaController extends Controller
{
    public function index(): View
    {
        $beasiswa_links = Beasiswa_link::all();

        return view('beasiswa-page.index', compact('beasiswa_links'));
    }


    public function show(Beasiswa_link $beasiswa_link)
    {
        return view('beasiswa-page.show', compact('beasiswa_link'));
    }
}
