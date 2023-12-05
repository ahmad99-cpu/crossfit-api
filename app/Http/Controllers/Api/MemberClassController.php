<?php

namespace App\Http\Controllers\Api;

use App\Models\memberClass;
use App\Http\Requests\StorememberClassRequest;
use App\Http\Requests\UpdatememberClassRequest;

class MemberClassController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \App\Http\Requests\StorememberClassRequest  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(StorememberClassRequest $request) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\memberClass  $memberClass
	 * @return \Illuminate\Http\Response
	 */
	public function show(memberClass $memberClass) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\memberClass  $memberClass
	 * @return \Illuminate\Http\Response
	 */
	public function edit(memberClass $memberClass) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Http\Requests\UpdatememberClassRequest  $request
	 * @param  \App\Models\memberClass  $memberClass
	 * @return \Illuminate\Http\Response
	 */
	public function update(UpdatememberClassRequest $request, memberClass $memberClass) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\memberClass  $memberClass
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(memberClass $memberClass) {
		//
	}
}
