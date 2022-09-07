<?php

namespace App\Http\Controllers;

use App\Mail\BinEmail;
use App\Models\Bin;
use App\Models\BinLog;
use App\Models\User;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;

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
    /* public function store(Request $request)
    {

    } */

    /**
     * Save a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function save(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'bin_id' => 'required',
            'percentage' => 'required',
        ]);

        if (!$validator->fails()) {

            $status = "Full"; // red
            $percentage = $request->percentage ?? 0;

            $level = 100 - $percentage;

            if ($level <= 0) {
                $status = "Empty"; // green
            } elseif ($level > 0 && $level < 49.9) {
                $status = "Almost Empty"; // blue
            } elseif ($level > 50 && $level < 99.9) {
                $status = "Almost Full"; // orange
            }

            $log = BinLog::create([
                'status' => $status,
                'bin_id' => $request->bin_id,
                'percentage' => $level,
            ]);

            if ($level >= 80) {
                $users = User::all();

                foreach ($users as $key => $user) {
                    Mail::to($user->email)
                        ->later(now()->addMinutes(1), new BinEmail([
                            "bin" => Bin::find($request->bin_id),
                            'level' => $level,
                            'status' => $status,
                        ]));
                }

                #TODO:: send notification

            }

            return response()->json([
                "status" => ($log->id && true),
                "message" => "Bin Log saved successfully!!!",
            ], 200);
        } else {
            return response()->json([
                "status" => false,
                "message" => $validator->errors(),
            ], 200);
        }
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
