<?php

namespace App\Http\Controllers;

use App\Models\HalfYear;
use App\Http\Requests\StoreHalfYearRequest;
use App\Http\Requests\UpdateHalfYearRequest;

class HalfYearController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $halfYears = HalfYear::all();
        return view('half_years.index', compact('halfYears'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('half_years.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHalfYearRequest  $request
     */
    public function store(StoreHalfYearRequest $request)
    {
        $halfYear = HalfYear::create($request->all());
        return redirect()->route('half_years.index')->with('success', 'Half-Year created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HalfYear  $halfYear
     */
    public function show(HalfYear $halfYear)
    {
        return view('half_years.show', compact('halfYear'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HalfYear  $halfYear
     */
    public function edit(HalfYear $halfYear)
    {
        return view('half_years.edit', compact('halfYear'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHalfYearRequest  $request
     * @param  \App\Models\HalfYear  $halfYear
     */
    public function update(UpdateHalfYearRequest $request, HalfYear $halfYear)
    {
        $halfYear->update($request->all());
        return redirect()->route('half_years.index')->with('success', 'Half-Year updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HalfYear  $halfYear
     */
    public function destroy(HalfYear $halfYear)
    {
        $halfYear->delete();
        return redirect()->route('half_years.index')->with('success', 'Half-Year deleted successfully.');
    }
}
