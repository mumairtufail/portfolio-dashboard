<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TechnicalSkill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TechnicalSkillController extends Controller
{
    public function index()
    {
        $technicalSkills = Auth::user()->technicalSkills;
        return view('admin.technical_skills.index', compact('technicalSkills'));
    }

    public function create()
    {
        return view('admin.technical_skills.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Auth::user()->technicalSkills()->create($request->all());

        return redirect()->route('admin.technical_skills.index')->with('success', 'Technical skill created successfully.');
    }

    public function edit(TechnicalSkill $technicalSkill)
    {
        if ($technicalSkill->user_id !== Auth::id()) {
            return redirect()->route('admin.technical_skills.index')->with('error', 'You are not authorized to edit this technical skill.');
        }

        return view('admin.technical_skills.edit', compact('technicalSkill'));
    }

    public function update(Request $request, TechnicalSkill $technicalSkill)
    {
        if ($technicalSkill->user_id !== Auth::id()) {
            return redirect()->route('admin.technical_skills.index')->with('error', 'You are not authorized to update this technical skill.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $technicalSkill->update($request->all());

        return redirect()->route('admin.technical_skills.index')->with('success', 'Technical skill updated successfully.');
    }

    public function destroy(TechnicalSkill $technicalSkill)
    {
        if ($technicalSkill->user_id !== Auth::id()) {
            return redirect()->route('admin.technical_skills.index')->with('error', 'You are not authorized to delete this technical skill.');
        }

        $technicalSkill->delete();

        return redirect()->route('admin.technical_skills.index')->with('success', 'Technical skill deleted successfully.');
    }
}