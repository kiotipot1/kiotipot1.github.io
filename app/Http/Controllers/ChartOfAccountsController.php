<?php

namespace App\Http\Controllers;

use App\Models\ChartOfAccountsModel;
use Illuminate\Http\Request;

class ChartOfAccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ChartOfAccountsModel::all();
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
            'general_ledger_account_id'=>'required',
            'major_account_group_id'=>'required',
            'account_group'=>'required',
            'current_noncurrent'=>'required',
            'sub_major_account_group_id'=>'required',

        ]);
        $chart_of_account=new ChartOfAccountsModel();
        $chart_of_account->general_ledger_account_id = $request->general_ledger_account_id;
        $chart_of_account->acount_group = $request->major_acacount_groupcount_group;
        $chart_of_account->current_noncurrent = $request->current_noncurrent;
        $chart_of_account->major_account_group_id = $request->major_account_group;
        $chart_of_account->sub_major_account_group_id= $request->sub_major_account_group;
        $chart_of_account->save();
        
        response('Successfuly added the data',201);
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
