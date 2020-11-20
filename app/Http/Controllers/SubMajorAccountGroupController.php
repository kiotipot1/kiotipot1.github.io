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
        $sub_major_account_group->sub_major_account_group_name = $request->sub_majsub_major_account_group_nameor_account_group;

        $sub_major_account_group->save();

        response('Successfuly added the data', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
