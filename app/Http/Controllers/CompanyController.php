<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        // Get all active companies
        $companies = Company::where('is_active', true)
                            ->orderBy('created_at', 'desc')
                            ->get();
        
        return view('companies', compact('companies'));
    }
}