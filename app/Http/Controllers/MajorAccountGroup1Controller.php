<?php

namespace App\Http\Controllers;

use App\Models\MajorAccountGroupModel;
use Illuminate\Http\Request;

class MajorAccountGroup1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MajorAccountGroupModel::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'major_account_group_name' => 'required|string',

        ]);
        $major_account_group = new MajorAccountGroupModel();
        $major_account_group->major_account_name = $request->major_account_group_name;

        $major_account_group->save();

         return response('Successfuly added the data', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MajorAccountGroupModel  $majorAccountGroupModel
     * @return \Illuminate\Http\Response
     */
    public function show(MajorAccountGroupModel $majorAccountGroupModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MajorAccountGroupModel  $majorAccountGroupModel
     * @return \Illuminate\Http\Response
     */
    public function edit(MajorAccountGroupModel $majorAccountGroupModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MajorAccountGroupModel  $majorAccountGroupModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MajorAccountGroupModel $majorAccountGroupModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MajorAccountGroupModel  $majorAccountGroupModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(MajorAccountGroupModel $majorAccountGroupModel)
    {
        //
    }
}
