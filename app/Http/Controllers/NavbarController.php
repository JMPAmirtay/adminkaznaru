<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use App\Http\Requests\StoreNavbarRequest;
use App\Http\Requests\UpdateNavbarRequest;

class NavbarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $navbars = Navbar::all();
        return view('admin.navbar.index', compact('navbars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.navbar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNavbarRequest $request)
    {
        $data = request()->validate([
            'title' => 'string',
            'class' => 'string'
        ]);
        Navbar::create($data);
        return redirect(route('admin.navbar'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Navbar $navbar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Navbar $navbar)
    {
        return view('admin.navbar.edit', compact('navbar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNavbarRequest $request, Navbar $navbar)
    {
        $data = request()->validate([
            'title' => 'string'
        ]);
        $navbar->update($data);
        return redirect()->route('admin.navbar', $navbar->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Navbar $navbar)
    {
        $navbar->delete();
        return redirect()->route('admin.navbar');
    }
}
