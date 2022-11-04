<?php

namespace App\Http\Controllers;

use App\Models\MockTestItem;
use App\Http\Requests\StoreMockTestItemRequest;
use App\Http\Requests\UpdateMockTestItemRequest;

class MockTestItemController extends Controller
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
     * @param  \App\Http\Requests\StoreMockTestItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMockTestItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MockTestItem  $mockTestItem
     * @return \Illuminate\Http\Response
     */
    public function show(MockTestItem $mockTestItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MockTestItem  $mockTestItem
     * @return \Illuminate\Http\Response
     */
    public function edit(MockTestItem $mockTestItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMockTestItemRequest  $request
     * @param  \App\Models\MockTestItem  $mockTestItem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMockTestItemRequest $request, MockTestItem $mockTestItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MockTestItem  $mockTestItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(MockTestItem $mockTestItem)
    {
        //
    }
}
