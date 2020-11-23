<?php

namespace App\Http\Controllers;

use App\Models\RemittanceModel;
use Illuminate\Http\Request;

class RemittanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RemittanceModel::all();
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
            'description'=>'required',
            'payee_id'=>'required',
            'payee_name'=>'required'
        ]);
        $remittance = new RemittanceModel();
        $remittance->description=$request->description;
        $remittance->payee_id = $request->payee_id;
        $remittance->payee_name=$request->payee_name;
        $remittance->save();
        
        return response('Successfuly Save',201);
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
