<?php

namespace App\Http\Controllers;

use App\Models\Barangay;
use Illuminate\Http\Request;

class BarangayController extends Controller
{
    public function index()
    {
        $barangays = Barangay::all();
        return inertia('Barangay/Index', compact('barangays'));
    }

    public function create()
    {
        return inertia('Barangay/Create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'string|nullable',
        ]);

        Barangay::create($validatedData);

        return redirect()->route('barangays.index')->with('success', 'Barangay added successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
