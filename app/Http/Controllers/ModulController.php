<?php

namespace App\Http\Controllers;

use App\Models\Modul;
use App\Http\Requests\StoreModulRequest;
use App\Http\Requests\UpdateModulRequest;
use Illuminate\Support\Facades\Storage; // Import facades Storage

class ModulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $moduls = Modul::all();

        $moduls = Modul::simplePaginate(5);

        return view('moduls.index', compact('moduls'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('manage access');

        return view('moduls.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreModulRequest $request)
    {
        $this->authorize('manage access');

        if ($request->hasFile('file_modul')) {
            $destination_path = 'public/documents/';
            $document = $request->file('file_modul');
            $documentName = time() . '_' . $document->getClientOriginalName();
            $document->storeAs($destination_path, $documentName);
        }

        Beasiswa_link::create(array_merge($request->validated(), ['file_modul' => $documentName]));

        return redirect()->route('beasiswa_links.index')->with([
            'message' => 'Document added successfully!',
            'status' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Modul $modul)
    {
        // $this->authorize('manage access');

        return view('moduls.show', compact('modul'));
        // return view('modul-page', compact('modul'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Modul $modul)
    {
        $this->authorize('manage access');

        return view('moduls.edit', compact('modul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateModulRequest $request, Modul $modul)
    {
        $this->authorize('manage access');

        $validatedData = $request->validated();

        // Update file in storage
        if ($request->hasFile('file')) {
            // Delete the old file before updating
            Storage::disk('public')->delete($modul->file_path);

            $file = $request->file('file');
            $path = $file->store('modul_files', 'public');
            $validatedData['file_path'] = $path;
        }

        $modul->update($validatedData);

        return redirect()->route('moduls.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modul $modul)
    {
        $this->authorize('manage access');

        $modul->delete();

        return redirect()->route('moduls.index');
    }
}
