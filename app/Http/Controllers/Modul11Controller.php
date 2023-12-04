<?php

namespace App\Http\Controllers;

use App\Models\Modul_11;
use App\Http\Requests\StoreModul_11Request;
use App\Http\Requests\UpdateModul_11Request;

class Modul11Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $moduls_11 = Modul_11::all();

        $moduls_11 = Modul_11::simplePaginate(5);

        return view('moduls.modul_11.index', compact('moduls_11'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('manage access');

        return view('moduls.modul_11.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreModul_11Request $request)
    {
        $this->authorize('manage access');

        if ($request->hasFile('foto_modul_11')) {
            $destination_path = 'public/images/';
            $image = $request->file('foto_modul_11');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs($destination_path, $imageName);
        }

        Modul_11::create(array_merge($request->validated(), ['foto_modul_11' => $imageName]));

        return redirect()->route('moduls.modul_11.index')->with([
            'message' => 'User added successfully!',
            'status' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Modul_11 $modul_11)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Modul_11 $modul_11)
    {
        $this->authorize('manage access');

        return view('moduls.modul_11.index', compact('moduls_11'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateModul_11Request $request, Modul_11 $modul_11)
    {
        $this->authorize('manage access');

        if ($request->hasFile('foto_modul_11')) {
            // Delete the old image
            Storage::delete('public/images/' . $moduls_11->foto_modul_11);

            // Save the new image
            $destination_path = 'public/images';
            $image = $request->file('foto_modul_11');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs($destination_path, $imageName);
        }

        $moduls_11->update(array_merge($request->validated(), ['foto_modul_11' => $imageName]));

        return redirect()->route('moduls.modul_11.index')->with([
            'message' => 'User added successfully!',
            'status' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modul_11 $modul_11)
    {
        $this->authorize('manage access');

        // Delete the associated image file
        Storage::delete('public/images/' . $moduls_11->foto_modul_11);

        // Delete the moduls_11 record
        $moduls_11->delete();

        return redirect()->route('moduls.modul_11.index');
    }
}
