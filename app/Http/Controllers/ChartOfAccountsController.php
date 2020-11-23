<?php

namespace App\Http\Controllers;

use App\Models\ChartOfAccountsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartOfAccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return ChartOfAccountsModel::all();



        $chart_of_accounts = DB::table('chart_of_accounts')
            ->join('general_ledger_account', 'chart_of_accounts.general_ledger_account_id', '=', 'general_ledger_account.id')
            ->join('major_account_group', 'chart_of_accounts.major_account_group_id', '=', 'major_account_group.id')
            ->join('sub_major_account_group', 'chart_of_accounts.sub_major_account_group_id', '=', 'sub_major_account_group.id')
            ->select('chart_of_accounts.*', 'general_ledger_account.general_ledger_account_name', 'major_account_group.major_account_name', 'sub_major_account_group.sub_major_account_name')
            ->get();

            return $chart_of_accounts;
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
            'general_ledger_account' => 'required',
            'major_account_group' => 'required',
            'account_group' => 'required',
            'current_noncurrent' => 'required',
            'sub_major_account_group' => 'required',

        ]);
        $chart_of_account = new ChartOfAccountsModel();
        $chart_of_account->general_ledger_account_id = $request->general_ledger_account;
        $chart_of_account->account_group = $request->account_group;
        $chart_of_account->current_noncurrent = $request->current_noncurrent;
        $chart_of_account->major_account_group_id = $request->major_account_group;
        $chart_of_account->sub_major_account_group_id = $request->sub_major_account_group;
        $chart_of_account->save();
        return response('Successfuly added the data', 201);
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
