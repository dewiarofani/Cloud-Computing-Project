<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use App\Http\Requests\StoreAgamaRequest;
use App\Http\Requests\UpdateAgamaRequest;

class AgamaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('agama', [
            "title" => "Berdasarkan Agama",
            "posts" => Agama::all()/*$berdasarkan_agama*/
        ]);
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
    public function store(StoreAgamaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {   
        $dataagama = agama::paginate(10);
        return view('agama',[
            "title" => "Berdasarkan Agama",
            'agama' => $dataagama

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agama $agama)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAgamaRequest $request, Agama $agama)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agama $agama)
    {
        //
    }
}
