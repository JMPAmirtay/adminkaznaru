<?php

namespace App\Http\Controllers;

use App\Models\SecondSlide;
use App\Http\Requests\StoreSecondSlideRequest;
use App\Http\Requests\UpdateSecondSlideRequest;

class SecondSlideController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSecondSlideRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SecondSlide $secondSlide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SecondSlide $second)
    {
        return view('admin.slider.second.edit', compact('second'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSecondSlideRequest $request, SecondSlide $secondSlide)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SecondSlide $secondSlide)
    {
        //
    }
}
