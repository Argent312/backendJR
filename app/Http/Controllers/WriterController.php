<?php

namespace App\Http\Controllers;
use App\Models\Writer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $writer = Writer::get();
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
    public function store(Request $request)
    {
        $writer = new Writer;
        $writer->name = $request->name;
        $writer->delet_at = $request->delet_at;
        
        $writer->saveOrFail();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $writer = DB::table('writers')->where('id', $id)->get(); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $writer = Writer::findOrFail($id);
        $writer->delete ();
    }
}
