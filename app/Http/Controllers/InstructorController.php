<?php

namespace App\Http\Controllers;

use App\Models\instructor;
use App\Http\Requests\StoreinstructorRequest;
use App\Http\Requests\UpdateinstructorRequest;

class InstructorController extends Controller
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
     * @param  \App\Http\Requests\StoreinstructorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreinstructorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function show(instructor $instructor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function edit(instructor $instructor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateinstructorRequest  $request
     * @param  \App\Models\instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateinstructorRequest $request, instructor $instructor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function destroy(instructor $instructor)
    {
        //
    }
}
