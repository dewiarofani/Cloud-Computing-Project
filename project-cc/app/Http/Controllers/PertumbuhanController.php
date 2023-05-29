<?php

namespace App\Http\Controllers;

use App\Models\Pertumbuhan;
use App\Http\Requests\StorePertumbuhanRequest;
use App\Http\Requests\UpdatePertumbuhanRequest;

class PertumbuhanController extends Controller
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
    public function store(StorePertumbuhanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pertumbuhan $pertumbuhan)
    {
        $datapertumbuhan = pertumbuhan::paginate(10);
        return view('pertumbuhan',[
            "title" => "Laju Pertumbuhan Penduduk Kota Surakarta",
            'pertumbuhan' => $datapertumbuhan

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pertumbuhan $pertumbuhan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePertumbuhanRequest $request, Pertumbuhan $pertumbuhan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pertumbuhan $pertumbuhan)
    {
        //
    }
}
