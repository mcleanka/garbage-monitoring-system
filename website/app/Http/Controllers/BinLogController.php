<?php

namespace App\Http\Controllers;

use App\Models\Bin;
use App\Models\BinLog;
use DataTables;
use Illuminate\Http\Request;

class BinLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = BinLog::latest()->with("bin")->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('date', function ($row) {
                    return $row->created_at->diffForHumans();
                })
                ->addColumn('action', function ($row) {
                    return '<a href="' . route("bin-log.show", $row->id) . '" class="btn btn-success btn-sm"> <i class="fa fa-view"></i> View</a>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

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
        // bin_id
        // status
        // percentage
        BinLog::create($request->all());

        return 'saved';
    }

    /**
     * Display the specified resource.
     *
     */
    public function show($id)
    {
        $bin = Bin::with('level')->find($id);
        $log = $bin->level->first() ?? [];

        return response()->json(
            [
                "name" => $bin->name,
                "log" => [
                    "distance" => $log->percentage ?? 0,
                    "time" => $log->created_at->format('H:i a') ?? now(),
                ],
            ], 200);
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
