<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SoftSkill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SoftSkillController extends Controller
{
    public function index()
    {
        $softSkills = Auth::user()->softSkills;
        return view('admin.soft_skills.index', compact('softSkills'));
    }

    public function create()
    {
        return view('admin.soft_skills.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Auth::user()->softSkills()->create($request->all());

        return redirect()->route('admin.soft_skills.index')->with('success', 'Soft skill created successfully.');
    }

    public function edit(SoftSkill $softSkill)
    {
        if ($softSkill->user_id !== Auth::id()) {
            return redirect()->route('admin.soft_skills.index')->with('error', 'You are not authorized to edit this soft skill.');
        }

        return view('admin.soft_skills.edit', compact('softSkill'));
    }

    public function update(Request $request, SoftSkill $softSkill)
    {
        if ($softSkill->user_id !== Auth::id()) {
            return redirect()->route('admin.soft_skills.index')->with('error', 'You are not authorized to update this soft skill.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $softSkill->update($request->all());

        return redirect()->route('admin.soft_skills.index')->with('success', 'Soft skill updated successfully.');
    }

    public function destroy(SoftSkill $softSkill)
    {
        if ($softSkill->user_id !== Auth::id()) {
            return redirect()->route('admin.soft_skills.index')->with('error', 'You are not authorized to delete this soft skill.');
        }

        $softSkill->delete();

        return redirect()->route('admin.soft_skills.index')->with('success', 'Soft skill deleted successfully.');
    }
}