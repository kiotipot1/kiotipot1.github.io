<?php

namespace App\Http\Controllers;

use App\Models\FundSourceModel;
use Illuminate\Http\Request;

class FundSourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FundSourceModel::all();
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
            'fund_source_id',	
            'fund_source'	,
            'fund_source_description'
         ]);
         $fs= new FundSourceModel();
         $fs->fund_source_id= $request->fund_source_id;
            $fs->fund_source= $request->fund_source;
            $fs->fund_source_description= $request->fund_source_description;
            $fs->save();

            return response("success",201);
         }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FundSourceModel  $fundSourceModel
     * @return \Illuminate\Http\Response
     */
    public function show(FundSourceModel $fundSourceModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FundSourceModel  $fundSourceModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FundSourceModel $fundSourceModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FundSourceModel  $fundSourceModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(FundSourceModel $fundSourceModel)
    {
        //
    }
}
