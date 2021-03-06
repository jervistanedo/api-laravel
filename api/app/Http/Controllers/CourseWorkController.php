<?php

namespace App\Http\Controllers;

use App\Models\CourseWork;
use Illuminate\Http\Request;

class CourseWorkController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return CourseWork::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseWork  $courseWork
     * @return \Illuminate\Http\Response
     */
    public function show(CourseWork $courseWork)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseWork  $courseWork
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseWork $courseWork)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseWork  $courseWork
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseWork $courseWork)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseWork  $courseWork
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseWork $courseWork)
    {
        //
    }
}
