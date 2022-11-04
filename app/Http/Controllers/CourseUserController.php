<?php

namespace App\Http\Controllers;

use App\Models\CourseUser;
use App\Http\Requests\StoreCourseUserRequest;
use App\Http\Requests\UpdateCourseUserRequest;

class CourseUserController extends Controller
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
     * @param  \App\Http\Requests\StoreCourseUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCourseUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseUser  $courseUser
     * @return \Illuminate\Http\Response
     */
    public function show(CourseUser $courseUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseUser  $courseUser
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseUser $courseUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCourseUserRequest  $request
     * @param  \App\Models\CourseUser  $courseUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCourseUserRequest $request, CourseUser $courseUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseUser  $courseUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseUser $courseUser)
    {
        //
    }
}
