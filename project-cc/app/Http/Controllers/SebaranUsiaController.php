<?php

namespace App\Http\Controllers;

use App\Models\SebaranUsia;
use App\Http\Requests\StoreSebaranUsiaRequest;
use App\Http\Requests\UpdateSebaranUsiaRequest;

class SebaranUsiaController extends Controller
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
    public function store(StoreSebaranUsiaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SebaranUsia $sebaranUsia)
    {
        $datausia = sebaranusia::paginate(10);
        return view('usiadanjeniskelamin',[
            "title" => "Berdasarkan Usia dan Jenis Kelamin",
            'usia' => $datausia

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SebaranUsia $sebaranUsia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSebaranUsiaRequest $request, SebaranUsia $sebaranUsia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SebaranUsia $sebaranUsia)
    {
        //
    }
}
