<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     * Index Method:
     * Explanation of the index method and its purpose to display a listing of the resource.
     */
    public function index()
    {
        $leads = Lead::all();
        return view('leads.index', compact('leads'));
    }

    /**
     * Show the form for creating a new resource.
     * Create Method:
     * Explanation of the create method to show the form for creating a new resource.
     */
    public function create()
    {
        return view('leads.create');
    }

    /**
     * Store a newly created resource in storage.
     * Store Method:
     * Explanation of the store method to save a new resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            // ... other validation rules
        ]);

        $lead = Lead::create($validatedData);
        return redirect()->route('leads.index');
    }

    /**
     * Display the specified resource.
     * Show Method:
     * Explanation of the show method to display the specified resource.
     */
    public function show(Lead $lead)
    {
        return view('leads.show', compact('lead'));
    }

    /**
     * Show the form for editing the specified resource.
     * Edit Method:
     * Explanation of the edit method to show the form for editing the specified resource.
     */
    public function edit(Lead $lead)
    {
        return view('leads.edit', compact('lead'));
    }

    /**
     * Update the specified resource in storage.
     * Update Method:
     * Explanation of the update method to update the specified resource in storage.
     */
    public function update(Request $request, Lead $lead)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            // ... other validation rules
        ]);

        $lead->update($validatedData);
        return redirect()->route('leads.index');
    }

    /**
     * Remove the specified resource from storage.
     * Destroy Method:
     * Explanation of the destroy method to remove the specified resource from storage.
     */
    public function destroy(Lead $lead)
    {
        $lead->delete();
        return redirect()->route('leads.index');
    }
}
