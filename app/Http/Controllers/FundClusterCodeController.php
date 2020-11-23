<?php

namespace App\Http\Controllers;

use App\Models\FundClusterCodeModel;
use Illuminate\Http\Request;

class FundClusterCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FundClusterCodeModel::all();
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

            'description' => 'required',
            'fund_cluster_code_id' => 'required',
        ]);
        $fc = new FundClusterCodeModel();
        $fc->fund_cluster_code = $request->fund_cluster_code_id;
        $fc->description = $request->description;
        $fc->save();
        return response("successfuly save", 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FundClusterCodeModel  $fundClusterCodeModel
     * @return \Illuminate\Http\Response
     */
    public function show(FundClusterCodeModel $fundClusterCodeModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FundClusterCodeModel  $fundClusterCodeModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FundClusterCodeModel $fundClusterCodeModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FundClusterCodeModel  $fundClusterCodeModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(FundClusterCodeModel $fundClusterCodeModel)
    {
        //
    }
}
