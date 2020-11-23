<?php

namespace App\Http\Controllers;

use App\Models\FinanceSourceCodeModel;
use Illuminate\Http\Request;

class FinanceSourceCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FinanceSourceCodeModel::all();
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
            'financing_source_code',
            'description'
        ]);
        $fcc = new FinanceSourceCodeModel();
        $fcc->finance_source_code = $request->financing_source_code;
        $fcc->description = $request->description;
        $fcc->save();

        return response("Success Add Data", 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FinanceSourceCodeModel  $financeSourceCodeModel
     * @return \Illuminate\Http\Response
     */
    public function show(FinanceSourceCodeModel $financeSourceCodeModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FinanceSourceCodeModel  $financeSourceCodeModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FinanceSourceCodeModel $financeSourceCodeModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FinanceSourceCodeModel  $financeSourceCodeModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(FinanceSourceCodeModel $financeSourceCodeModel)
    {
        //
    }
}
