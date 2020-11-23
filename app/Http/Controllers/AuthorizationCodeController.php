<?php

namespace App\Http\Controllers;

use App\Models\AuthorizationCodeModel;
use Illuminate\Http\Request;

class AuthorizationCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AuthorizationCodeModel::all();
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
            'authorization_code',
            'description'
        ]);
        $ac= new AuthorizationCodeModel();
        $ac->authorization_code	= $request->authorization_code;
        $ac->description=$request->description;
        $ac->save();
        return response("succes", 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AuthorizationCodeModel  $authorizationCodeModel
     * @return \Illuminate\Http\Response
     */
    public function show(AuthorizationCodeModel $authorizationCodeModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AuthorizationCodeModel  $authorizationCodeModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AuthorizationCodeModel $authorizationCodeModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AuthorizationCodeModel  $authorizationCodeModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuthorizationCodeModel $authorizationCodeModel)
    {
        //
    }
}
