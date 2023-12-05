<?php

namespace App\Http\Controllers;

use App\Models\Modul_10;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreModul_10Request;
use App\Http\Requests\UpdateModul_10Request;

class Modul10Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $moduls_10 = Modul_10::all();

        $moduls_10 = Modul_10::simplePaginate(5);

        return view('moduls.modul_10.index', compact('moduls_10'));
    }

    /**
     * Show the form for creating a Resource.
     */
    public function create()
    {
        $this->authorize('manage access');

        return view('moduls.modul_10.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreModul_10Request $request)
    {
        $this->authorize('manage access');

        if ($request->hasFile('foto_modul_10')) {
            $destination_path = 'public/images/';
            $image = $request->file('foto_modul_10');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs($destination_path, $imageName);
        }

        Modul_10::create(array_merge($request->validated(), ['foto_modul_10' => $imageName]));

        return redirect()->route('moduls.modul_10.index')->with([
            'message' => 'User added successfully!',
            'status' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Modul_10 $modul_10)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Modul_10 $modul_10)
    {
        $this->authorize('manage access');

        return view('moduls.modul_10.edit', compact('modul_10'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateModul_10Request $request, Modul_10 $modul_10)
    {
        $this->authorize('manage access');

        if ($request->hasFile('foto_modul_10')) {
            // Delete the old image
            Storage::delete('public/images/' . $modul_10->foto_modul_11);

            // Save the new image
            $destination_path = 'public/images';
            $image = $request->file('foto_modul_10');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs($destination_path, $imageName);
        }

        $modul_11->update(array_merge($request->validated(), ['foto_modul_10' => $imageName]));

        return redirect()->route('moduls.modul_11.index')->with([
            'message' => 'User added successfully!',
            'status' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modul_10 $modul_10)
    {
        $this->authorize('manage access');

        // Delete the associated image file
        Storage::delete('public/images/' . $modul_11->foto_modul_10);

        // Delete the moduls_10 record
        $modul_11->delete();

        return redirect()->route('moduls.modul_10.index');
    }
}
