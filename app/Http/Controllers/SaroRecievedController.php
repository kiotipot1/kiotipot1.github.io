<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\SaroRecieveModel;
use Illuminate\Http\Request;

class SaroRecievedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $saro_recieved = DB::table('saro_recieved')
            ->join('fund_source', 'saro_recieved.fund_source_code', '=', 'fund_source.id')
            ->join('mfo_project_code', 'saro_recieved.mfo_code', '=', 'mfo_project_code.id')
           
            ->select('saro_recieved.*', 'fund_source.fund_source_description', 'mfo_project_code.mfo_code','fund_source.fund_source_code')
            ->get();

            return $saro_recieved;
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
            'date_issued',
            'saro_no',
            'fund_source_code',
            'mfo_code',
            'particulars',
            'object_code',
            'amount'
        ]);
        $sr= new SaroRecieveModel();
        $sr->date_issued = $request->date_issued;
        $sr->saro_no = $request->saro_no;
        $sr->fund_source_code = $request->fund_source_code;
        $sr->mfo_code=$request->mfo_code;
        $sr->particulars=$request->particulars;
        $sr->object_code = $request->object_code;
        $sr->amount=$request->amount;
        $sr->save();

        return response ("success",201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SaroRecieveModel  $saroRecieveModel
     * @return \Illuminate\Http\Response
     */
    public function show(SaroRecieveModel $saroRecieveModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SaroRecieveModel  $saroRecieveModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaroRecieveModel $saroRecieveModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SaroRecieveModel  $saroRecieveModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SaroRecieveModel $saroRecieveModel)
    {
        //
    }
}
