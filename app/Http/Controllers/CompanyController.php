<?php

namespace App\Http\Controllers;

use App\Services\CompanyManager;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('companies');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add-company');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'email' => 'required|email|max:255',
            'logo' => 'max:1024',

        ]);

        $company = [
            'name' => $request->get('name'),
            'address' => $request->get('address'),
            'email' => $request->get('email'),
            'website' => $request->get('website'),
            'logo' => $request->get('logo')
        ];

        $stored = CompanyManager::addCompany($company);
        if ($stored) return to_route('companies');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
