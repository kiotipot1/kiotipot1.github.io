<?php

namespace App\Http\Controllers;

use App\Models\ProjectCodeModel;
use Illuminate\Http\Request;

class ProjectCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProjectCodeModel::all();
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
            'id',
            'mfo_id',
            'mfo_code',
            'mfo_shortname',
            'mfo_description'
        ]);
        $pc = new ProjectCodeModel();
        $pc->id = $request->id;
        $pc->mfo_id=$request->mfo_id;
        $pc->mfo_code=$request->mfo_code;
        $pc->mfo_shortname=$request->mfo_shortname;
        $pc->mfo_description=$request->mfo_description;
        $pc->save();

        return response('success',201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectCodeModel  $projectCodeModel
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectCodeModel $projectCodeModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProjectCodeModel  $projectCodeModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectCodeModel $projectCodeModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectCodeModel  $projectCodeModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectCodeModel $projectCodeModel)
    {
        //
    }
}
