<?php

namespace App\Http\Controllers;

use App\Models\Konseling_link;
use App\Http\Requests\StoreKonseling_linkRequest;
use App\Http\Requests\UpdateKonseling_linkRequest;

class KonselingLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $konseling_links = Konseling_link::all();

        $konseling_links = Konseling_link::simplePaginate(5);

        return view('konseling_links.index', compact('konseling_links'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('manage access');

        return view('konseling_links.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKonseling_linkRequest $request)
    {
        $this->authorize('manage access');

        Konseling_link::create($request->validated());

        return redirect()->route('konseling_links.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Konseling_link $konseling_link)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Konseling_link $konseling_link)
    {
        $this->authorize('manage access');

        return view('konseling_links.edit', compact('konseling_link'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKonseling_linkRequest $request, Konseling_link $konseling_link)
    {
        $this->authorize('manage access');

        $konseling_link->update($request->validated());

        return redirect()->route('konseling_links.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Konseling_link $konseling_link)
    {
        $this->authorize('manage access');

        $konseling_link->delete();

        return redirect()->route('konseling_links.index');
    }
}
