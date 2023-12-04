<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa_link;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreBeasiswa_linkRequest;
use App\Http\Requests\UpdateBeasiswa_linkRequest;

class BeasiswaLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beasiswa_links = Beasiswa_link::all();

        $beasiswa_links = Beasiswa_link::simplePaginate(5);

        return view('beasiswa_links.index', compact('beasiswa_links'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('manage access');

        return view('beasiswa_links.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBeasiswa_linkRequest $request)
    {
        $this->authorize('manage access');

        if ($request->hasFile('foto_beasiswa')) {
            $destination_path = 'public/images/';
            $image = $request->file('foto_beasiswa');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs($destination_path, $imageName);
        }

        Beasiswa_link::create(array_merge($request->validated(), ['foto_beasiswa' => $imageName]));

        return redirect()->route('beasiswa_links.index')->with([
            'message' => 'User added successfully!',
            'status' => 'success'
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(Beasiswa_link $beasiswa_link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Beasiswa_link $beasiswa_link)
    {
        $this->authorize('manage access');

        return view('beasiswa_links.edit', compact('beasiswa_link'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBeasiswa_linkRequest $request, Beasiswa_link $beasiswa_link)
    {
        $this->authorize('manage access');

        if ($request->hasFile('foto_beasiswa')) {
            // Delete the old image
            Storage::delete('public/images/' . $beasiswa_link->foto_beasiswa);

            // Save the new image
            $destination_path = 'public/images';
            $image = $request->file('foto_beasiswa');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs($destination_path, $imageName);
        }

        $beasiswa_link->update(array_merge($request->validated(), ['foto_beasiswa' => $imageName]));

        return redirect()->route('beasiswa_links.index')->with('success', 'Post image berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Beasiswa_link $beasiswa_link)
    {
        $this->authorize('manage access');

        // Delete the associated image file
        Storage::delete('public/images/' . $beasiswa_link->foto_beasiswa);

        // Delete the Beasiswa_link record
        $beasiswa_link->delete();

        return redirect()->route('beasiswa_links.index');
    }
}
