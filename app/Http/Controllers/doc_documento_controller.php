<?php

namespace App\Http\Controllers;

use App\Models\doc_documento;
use Illuminate\Http\Request;

class doc_documento_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       dd($request->all());// Imprime los datos ingresados en el formulario de create
    }

    /**
     * Display the specified resource.
     */
    public function show(doc_documento $doc_documento)
    {
        return view('show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(doc_documento $doc_documento)
    {
        return view('edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, doc_documento $doc_documento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(doc_documento $doc_documento)
    {
        //
    }
}
