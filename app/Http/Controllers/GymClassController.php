<?php

namespace App\Http\Controllers;

use App\Models\gymClass;
use App\Http\Requests\StoregymClassRequest;
use App\Http\Requests\UpdategymClassRequest;

class GymClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoregymClassRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoregymClassRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gymClass  $gymClass
     * @return \Illuminate\Http\Response
     */
    public function show(gymClass $gymClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gymClass  $gymClass
     * @return \Illuminate\Http\Response
     */
    public function edit(gymClass $gymClass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdategymClassRequest  $request
     * @param  \App\Models\gymClass  $gymClass
     * @return \Illuminate\Http\Response
     */
    public function update(UpdategymClassRequest $request, gymClass $gymClass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gymClass  $gymClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(gymClass $gymClass)
    {
        //
    }
}
