<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa_link;
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

        Beasiswa_link::create($request->validated());

        return redirect()->route('beasiswa_links.index');
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

        $beasiswa_link->update($request->validated());

        return redirect()->route('beasiswa_links.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Beasiswa_link $beasiswa_link)
    {
        $this->authorize('manage access');

        $beasiswa_link->delete();

        return redirect()->route('beasiswa_links.index');
    }
}
