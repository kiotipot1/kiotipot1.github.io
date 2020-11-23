<?php

namespace App\Http\Controllers;

use App\Models\FundCategoryModel;
use Illuminate\Http\Request;

class FundCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FundCategoryModel::all();
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
            'fund_category_id',
            'description',
            'fund_category_code',
            'nsac'
        ]);
        $fc=new FundCategoryModel();
        $fc->fund_category_id= $request->fund_category_id;
        $fc->description=$request->description;
        $fc->fund_category_code=$request->fund_category_code;
        $fc->nsac=$request->nsac;
        $fc->save();

        return response("success",201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FundCategoryModel  $fundCategoryModel
     * @return \Illuminate\Http\Response
     */
    public function show(FundCategoryModel $fundCategoryModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FundCategoryModel  $fundCategoryModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FundCategoryModel $fundCategoryModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FundCategoryModel  $fundCategoryModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(FundCategoryModel $fundCategoryModel)
    {
        //
    }
}
