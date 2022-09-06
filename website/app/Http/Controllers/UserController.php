<?php

namespace App\Http\Controllers;

use App\Models\User;
use DataTables;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('created_on', function ($row) {
                    if ($row->created_at) {
                        return $row->created_at->diffForHumans();
                    }

                    return '--';
                })
                ->addColumn('verified', function ($row) {
                    if ($row->email_verified_at) {
                        return '<span class="badge bg-success">Yes</span>';
                    }

                    return '<span class="badge bg-danger">No</span>';
                })
                ->addColumn('updated_on', function ($row) {
                    if ($row->updated_at) {
                        return $row->updated_at->diffForHumans();
                    }

                    return '--';
                })
                ->addColumn('action', function ($row) {
                    return '<a href="' . route("user.show", $row->id) . '" class="btn btn-success btn-sm"> <i class="fa fa-view"></i> View</a>';
                })
                ->rawColumns(['action', 'verified'])
                ->make(true);
        }

        return view('pages.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('pages.user.create');
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
     * @param  int  $id
     */
    public function show($id)
    {
        return view('pages.user.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        //
    }
}