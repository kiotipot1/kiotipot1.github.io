<?php

namespace App\Http\Controllers;

use App\Models\GeneralLedgerAccountModel;
use Illuminate\Http\Request;

class GeneralLedgerAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return GeneralLedgerAccountModel::all();
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
            'general_ledger_account_name'=>'required',
        

        ]);
        $general_ledger_account=new GeneralLedgerAccountModel();
        $general_ledger_account->general_ledger_account_name = $request->general_ledger_account_name;
     
        $general_ledger_account->save();
        
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
