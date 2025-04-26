<?php

namespace App\Http\Controllers;

use App\Models\RegisteredOne;
use Illuminate\Http\Request;

class RegisteredOneController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RegisteredOne $registeredOne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RegisteredOne $registeredOne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RegisteredOne $registeredOne)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RegisteredOne $rstudent)
    {
        $rstudent->delete();
        return redirect('/ShowStudent');
    }
}
