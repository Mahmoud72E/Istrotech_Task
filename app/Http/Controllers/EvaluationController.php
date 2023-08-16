<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\HalfYear;
use App\Models\Evaluation;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEvaluationRequest;
use App\Http\Requests\UpdateEvaluationRequest;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evaluations = Evaluation::all();
        return view('evaluations.index', compact('evaluations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::where('user_id', auth()->user()->id)->get();
        $halfYears = HalfYear::all();
        return view('evaluations.create', compact('employees', 'halfYears'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEvaluationRequest  $request
     */
    public function store(StoreEvaluationRequest $request)
    {
        $evaluation = Evaluation::create($request->all());
        return redirect()->route('evaluations.index')->with('success', 'Evaluation created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evaluation  $evaluation
     */
    public function show(Evaluation $evaluation)
    {
        return view('evaluations.show', compact('evaluation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evaluation  $evaluation
     */
    public function edit(Evaluation $evaluation)
    {
        $employees = Employee::all();
        $halfYears = HalfYear::all();
        return view('evaluations.edit', compact('evaluation', 'employees', 'halfYears'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEvaluationRequest  $request
     * @param  \App\Models\Evaluation  $evaluation
     */
    public function update(UpdateEvaluationRequest $request, Evaluation $evaluation)
    {
        $evaluation->update($request->all());
        return redirect()->route('evaluations.index')->with('success', 'Evaluation updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evaluation  $evaluation
     */
    public function destroy(Evaluation $evaluation)
    {
        $evaluation->delete();
        return redirect()->route('evaluations.index')->with('success', 'Evaluation deleted successfully.');
    }
}
