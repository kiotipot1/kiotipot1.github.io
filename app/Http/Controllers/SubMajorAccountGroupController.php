<?php

namespace App\Http\Controllers;

use App\Models\SubMajorAccountGroupModel;
use Illuminate\Http\Request;

class SubMajorAccountGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SubMajorAccountGroupModel::all();
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
            'sub_major_account_group_name' => 'required',


        ]);
        $sub_major_account_group = new SubMajorAccountGroupModel();
        $sub_major_account_group->sub_major_account_name = $request->sub_major_account_group_name;
        $sub_major_account_group->save();

         return response('Successfuly added the data', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubMajorAccountGroupModel  $subMajorAccountGroupModel
     * @return \Illuminate\Http\Response
     */
    public function show(SubMajorAccountGroupModel $subMajorAccountGroupModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubMajorAccountGroupModel  $subMajorAccountGroupModel
     * @return \Illuminate\Http\Response
     */
    public function edit(SubMajorAccountGroupModel $subMajorAccountGroupModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubMajorAccountGroupModel  $subMajorAccountGroupModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubMajorAccountGroupModel $subMajorAccountGroupModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubMajorAccountGroupModel  $subMajorAccountGroupModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubMajorAccountGroupModel $subMajorAccountGroupModel)
    {
        //
    }
}
