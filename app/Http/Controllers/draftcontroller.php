<?php

namespace App\Http\Controllers;
use App\draft;
use Illuminate\Http\Request;

class draftcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $dat = new draft([
            'title'    =>  $request->get('title'),
            'org_name'  =>  $request->get('org_name'),
            'address'  =>  $request->get('address'),
            'phone'    =>  $request->get('phone'),
            'email'    =>  $request->get('email'),
            'submitted_by' =>  $request->get('submitted_by'),
            'summary'    =>  $request->get('summary'),
            'background'    =>  $request->get('background'),
            'activities'    =>  $request->get('activities'),
            'background'    =>  $request->get('background'),
            'budget'    =>  $request->get('budget')
            
        ]);
        $dat->save();
        return redirect()->route('home');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
