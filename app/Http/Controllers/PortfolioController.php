<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        return view('admin.portfolios.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'stack' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'project_url' => 'nullable|url',
            'completion_date' => 'nullable|date',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('portfolio_images', 'public');
            $validatedData['image_path'] = $imagePath;
        }

        Portfolio::create($validatedData);

        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio created successfully.');
    }

    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolios.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'stack' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'project_url' => 'nullable|url',
            'completion_date' => 'nullable|date',
        ]);

        if ($request->hasFile('image')) {
            if ($portfolio->image_path) {
                Storage::disk('public')->delete($portfolio->image_path);
            }
            $imagePath = $request->file('image')->store('portfolio_images', 'public');
            $validatedData['image_path'] = $imagePath;
        }

        $portfolio->update($validatedData);

        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio updated successfully.');
    }

    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->image_path) {
            Storage::disk('public')->delete($portfolio->image_path);
        }
        $portfolio->delete();

        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio deleted successfully.');
    }
}