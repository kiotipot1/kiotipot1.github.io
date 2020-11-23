<?php

namespace App\Http\Controllers;

use App\Models\ProgramCodemodel;
use Illuminate\Http\Request;

class ProgramCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProgramCodemodel::all(); 
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
            
        'program_code_id',
    	'program_code',
    	'program_title'	
        ]);
        $pc= new ProgramCodemodel();
        $pc->program_code_id = $request->program_code_id;
        $pc->program_code = $request->program_code;
        $pc->program_title=$request->program_title;
        $pc->save();
            return response("success",201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProgramCodemodel  $programCodemodel
     * @return \Illuminate\Http\Response
     */
    public function show(ProgramCodemodel $programCodemodel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProgramCodemodel  $programCodemodel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProgramCodemodel $programCodemodel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProgramCodemodel  $programCodemodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProgramCodemodel $programCodemodel)
    {
        //
    }
}
