<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use App\Models\NavbarDropdown;
use App\Http\Requests\StoreNavbarDropdownRequest;
use App\Http\Requests\UpdateNavbarDropdownRequest;

class DropdownController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Navbar $navbar)
    {
        return view('admin.navbar.dropdown.create', compact('navbar'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNavbarDropdownRequest $request)
    {
        $data = request()->validate([
            'title' => 'string',
            'url' => 'string',
            'navbar_id' => 'string'
        ]);
        NavbarDropdown::create($data);
        return redirect(route('admin.navbar'));
    }

    /**
     * Display the specified resource.
     */
    public function show(NavbarDropdown $navbarDropdown)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Navbar $navbar, NavbarDropdown $dropdown)
    {
        return view('admin.navbar.dropdown.edit', compact('dropdown'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNavbarDropdownRequest $request, Navbar $navbar, NavbarDropdown $dropdown)
    {
        $data = request()->validate([
            'title' => 'string',
            'url' => 'string'
        ]);
        $dropdown->update($data);
        return redirect()->route('admin.navbar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Navbar $navbar,NavbarDropdown $dropdown)
    {
        $dropdown->delete();
        return redirect()->route('admin.navbar');
    }
}
