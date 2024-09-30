<?php

// app/Http/Controllers/EducationController.php
namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    public function index()
    {
        $educations = Auth::user()->educations;
        return view('admin.education.index', compact('educations'));
    }

    public function create()
    {
        return view('admin.education.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'institution' => 'required',
            'degree' => 'required',
            'field_of_study' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'description' => 'nullable'
        ]);

        $validatedData['user_id'] = Auth::id();
        Education::create($validatedData);

        return redirect()->route('admin.education.index')->with('success', 'Education added successfully.');
    }

    public function edit(Education $education)
    {
        if ($education->user_id !== Auth::id()) {
            return redirect()->route('admin.education.index')->with('error', 'You are not authorized to edit this education.');
        }

        return view('admin.education.edit', compact('education'));
    }

    public function update(Request $request, Education $education)
    {
        if ($education->user_id !== Auth::id()) {
            return redirect()->route('admin.education.index')->with('error', 'You are not authorized to update this education.');
        }

        $validatedData = $request->validate([
            'institution' => 'required',
            'degree' => 'required',
            'field_of_study' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'description' => 'nullable'
        ]);

        $education->update($validatedData);

        return redirect()->route('admin.education.index')->with('success', 'Education updated successfully.');
    }

    public function destroy(Education $education)
    {
        if ($education->user_id !== Auth::id()) {
            return redirect()->route('admin.education.index')->with('error', 'You are not authorized to delete this education.');
        }

        $education->delete();
        return redirect()->route('admin.education.index')->with('success', 'Education deleted successfully.');
    }
}