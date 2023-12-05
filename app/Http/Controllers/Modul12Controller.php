<?php

namespace App\Http\Controllers;

use App\Models\Modul_12;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreModul_12Request;
use App\Http\Requests\UpdateModul_12Request;

class Modul12Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $moduls_12 = Modul_12::all();

        $moduls_12 = Modul_12::simplePaginate(5);

        return view('moduls.modul_12.index', compact('moduls_12'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('manage access');

        return view('moduls.modul_12.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreModul_12Request $request)
    {
        $this->authorize('manage access');

        if ($request->hasFile('foto_modul_12')) {
            $destination_path = 'public/images/';
            $image = $request->file('foto_modul_12');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs($destination_path, $imageName);
        }

        Modul_12::create(array_merge($request->validated(), ['foto_modul_12' => $imageName]));

        return redirect()->route('moduls.modul_12.index')->with([
            'message' => 'User added successfully!',
            'status' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Modul_12 $modul_12)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Modul_12 $modul_12)
    {
        $this->authorize('manage access');

        return view('moduls.modul_12.edit', compact('modul_12'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateModul_12Request $request, Modul_12 $modul_12)
    {
        $this->authorize('manage access');

        if ($request->hasFile('foto_modul_12')) {
            // Delete the old image
            Storage::delete('public/images/' . $modul_12->foto_modul_12);

            // Save the new image
            $destination_path = 'public/images';
            $image = $request->file('foto_modul_12');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs($destination_path, $imageName);
        }

        $modul_12->update(array_merge($request->validated(), ['foto_modul_12' => $imageName]));

        return redirect()->route('moduls.modul_12.index')->with([
            'message' => 'User added successfully!',
            'status' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modul_12 $modul_12)
    {
        $this->authorize('manage access');

        // Delete the associated image file
        Storage::delete('public/images/' . $modul_12->foto_modul_12);

        // Delete the moduls_12 record
        $modul_12->delete();

        return redirect()->route('moduls.modul_12.index');
    }
}
