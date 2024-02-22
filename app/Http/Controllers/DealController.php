<?php

namespace App\Http\Controllers;

use App\Models\Deal;
use Illuminate\Http\Request;

class DealController extends Controller
{
    public function index()
    {
        $deals = Deal::all();
        return view('deals.index', compact('deals'));
    }

    public function create()
    {
        // Logic for displaying the form to create a new deal
        return view('deals.create');
    }

    public function show(Deal $deal)
{
    // Retrieve the deal details
    $deal = Deal::findOrFail($deal->id);

    // Return the view to display the deal details
    return view('deals.show', compact('deal'));
}


    public function edit($id)
    {
        $deal = Deal::findOrFail($id);
        return view('deals.edit', compact('deal'));
    }

    public function update(Request $request, $id)
    {
        $deal = Deal::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'amount' => 'required',
            'closing_date' => 'required',
        ]);

        $deal->update([
            'name' => $request->input('name'),
            'amount' => $request->input('amount'),
            'closing_date' => $request->input('closing_date'),
        ]);

        return redirect()->route('deals.index')->with('success', 'Deal updated successfully.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'amount' => 'required',
            'closing_date' => 'required',
        ]);
    
        $deal = new Deal();
        $deal->name = $request->input('name', ''); // Set default value if 'name' is not provided
        $deal->amount = $request->input('amount');
        $deal->closing_date = $request->input('closing_date');
        $deal->save();
    
        return redirect()->route('deals.index');
    }
}
