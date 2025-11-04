<?php

namespace App\Http\Controllers;

use App\Models\ServiceDetails;
use App\Http\Requests\StoreServiceDetailsRequest;
use App\Http\Requests\UpdateServiceDetailsRequest;

class ServiceDetailsController extends Controller
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
    public function store(StoreServiceDetailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ServiceDetails $serviceDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ServiceDetails $serviceDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceDetailsRequest $request, ServiceDetails $serviceDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServiceDetails $serviceDetails)
    {
        //
    }
}
