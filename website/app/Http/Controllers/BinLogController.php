<?php

namespace App\Http\Controllers;

use App\Models\BinLog;
use Illuminate\Http\Request;

class BinLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('pages.bin-log.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        return 'saved';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BinLog  $binLog
     */
    public function show(BinLog $binLog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BinLog  $binLog
     */
    public function edit(BinLog $binLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BinLog  $binLog
     */
    public function update(Request $request, BinLog $binLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BinLog  $binLog
     */
    public function destroy(BinLog $binLog)
    {
        //
    }
}
