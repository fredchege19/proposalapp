<?php

namespace App\Http\Controllers;
use App\info;

use Illuminate\Http\Request;

class savecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $props = info::where('new', 1)->get();
        return view('admin.body', compact('props'));
        
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
        $save = new Info([
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
            'budget'    =>  $request->get('budget'),
            
        ]);
        $save->save();
     
        return redirect()->route('success');
        
    }

    /**
     * Display the specified resource.
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $props = info::find($id);
        return view('admin.singleprop', compact('props'));
    }

    public function display($id)
    {
        $proops = info::find($id);
        return view('home', compact('proops'));
    }




    public function success()
    {
        
        return view('successful');
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
     $me=App\info::find($id);
      $me->accepted1 =1;
      $me->save();
        return view('/dashboard');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $upd = info::find($id);
        $upd->rejected = '1';
        $upd->new = '0';
        $upd->save();
        return redirect()->route('rejected');
        
       
        
    }
    public function decline($id)
    {
        //
    }
    
}
