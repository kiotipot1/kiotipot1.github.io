<?php

namespace App\Http\Controllers;

use App\Models\AllotmentClassModel;
use Illuminate\Http\Request;

class AllotmentClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AllotmentClassModel::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'allotment_id',
            	'uacs_code'	,
            'allotment_class'	
        ]);

        $ac= new AllotmentClassModel();
        $ac->allotment_id=$request->allotment_id;
        $ac->uacs_code=$request->uacs_code;
        $ac->allotment_class=$request->allotment_class;
        $ac->save();
        return response ("success",201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AllotmentClassModel  $allotmentClassModel
     * @return \Illuminate\Http\Response
     */
    public function show(AllotmentClassModel $allotmentClassModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AllotmentClassModel  $allotmentClassModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AllotmentClassModel $allotmentClassModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AllotmentClassModel  $allotmentClassModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(AllotmentClassModel $allotmentClassModel)
    {
        //
    }
}
