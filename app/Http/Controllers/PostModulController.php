<?php

namespace App\Http\Controllers;

use App\Models\Modul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class PostModulController extends Controller
{
    public function index(): View
    {
        $moduls = Modul::all();

        return view('modul-page.index', compact('moduls'));
    }


    public function show(Modul $modul)
    {
        return view('modul-page.show', compact('modul'));
    }

    public function showFile(Modul $modul)
    {
        // Add authorization logic if needed

        $filePath = $modul->file_path;

        if ($filePath && Storage::exists($filePath)) {
            return response()->download(storage_path('app/' . $filePath));
        } else {
            // Handle file not found
            abort(404);
        }
    }
}
