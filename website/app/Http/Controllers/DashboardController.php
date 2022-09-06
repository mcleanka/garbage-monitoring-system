<?php

namespace App\Http\Controllers;

use App\Models\Bin;
use App\Models\BinLog;
use App\Models\Dashboard;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $activeBin = Bin::find(1);
        $bins = Bin::with('level')->get();

        $yearlyData = BinLog::get()
            ->groupBy(function ($row) {
                return Carbon::parse($row->created_at)->format('m');
            })->map(function ($row) {

            return $row->count();
        })
            ->sortKeys()
            ->values();

        return view('pages.dashboard.index', [
            "bins" => $bins,
            "activeBin" => $activeBin,
            "yearlyData" => $yearlyData,
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     */
    public function show($id)
    {
        return BinLog::get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dashboard  $dashboard
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dashboard  $dashboard
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}