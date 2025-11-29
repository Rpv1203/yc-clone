<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    // List all companies
    public function index()
    {
        $companies = Company::orderBy('created_at', 'desc')->get();
        return view('admin.companies.index', compact('companies'));
    }

    // Show create form
    public function create()
    {
        return view('admin.companies.create');
    }

    // Store new company
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'website' => 'nullable|url',
            'batch' => 'nullable|string|max:50',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');

        Company::create($validated);

        return redirect()->route('admin.companies.index')
                        ->with('success', 'Company created successfully!');
    }

    // Show edit form
    public function edit(Company $company)
    {
        return view('admin.companies.edit', compact('company'));
    }

    // Update company
    public function update(Request $request, Company $company)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'website' => 'nullable|url',
            'batch' => 'nullable|string|max:50',
            'is_active' => 'boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');

        $company->update($validated);

        return redirect()->route('admin.companies.index')
                        ->with('success', 'Company updated successfully!');
    }

    // Delete company
    public function destroy(Company $company)
    {
        $company->delete();

        return redirect()->route('admin.companies.index')
                        ->with('success', 'Company deleted successfully!');
    }
}