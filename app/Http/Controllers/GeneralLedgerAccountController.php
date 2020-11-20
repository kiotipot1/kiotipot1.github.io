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
            'general_ledger_account_name' => 'required',

        ]);
        $general_ledger_account = new GeneralLedgerAccountModel();
        $general_ledger_account->general_ledger_account_name = $request->general_ledger_account_name;
        $general_ledger_account->save();

        return response('Successfuly added the data', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GeneralLedgerAccountModel  $generalLedgerAccountModel
     * @return \Illuminate\Http\Response
     */
    public function show(GeneralLedgerAccountModel $generalLedgerAccountModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GeneralLedgerAccountModel  $generalLedgerAccountModel
     * @return \Illuminate\Http\Response
     */
    public function edit(GeneralLedgerAccountModel $generalLedgerAccountModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GeneralLedgerAccountModel  $generalLedgerAccountModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GeneralLedgerAccountModel $generalLedgerAccountModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GeneralLedgerAccountModel  $generalLedgerAccountModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(GeneralLedgerAccountModel $generalLedgerAccountModel)
    {
        //
    }
}
