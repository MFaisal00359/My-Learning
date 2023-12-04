<?php

namespace App\Http\Controllers;

use App\Models\Konseling_link;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostKonselingController extends Controller
{
    public function index(): View
    {
        $konseling_links = Konseling_link::all();

        return view('konseling-page.index', compact('konseling_links'));
    }

    public function show(Konseling_link $konseling_link)
    {
        return view('konseling-page.show', compact('konseling_link'));
    }
}
