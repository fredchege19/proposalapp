<?php

namespace App\Http\Controllers;
use App\info;
Use App\Mail\Accepted;
use Illuminate\Http\Request;
use lluminate\Database\Query\Builder;
use App\Http\Controllers\Auth;
class acceptedcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accepteds = info::where('accepted1', 1)->get();
        return view('admin.level1', compact('accepteds'));
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
        
    }
    public function gonethrough()
    {
        $approveds = info::where('accepted2', 1)->get();
        return view('admin.accepted', compact('approveds'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $accepted = info::find($id);
        return view('admin.singleprop1', compact('accepted'));
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

    public function approved($id){
        $approved = info::find($id);
        return view('admin.singleprop2', compact('approved'));

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $upd = info::find($id);
        $upd->accepted1 = '1';
        $upd->new = '0';
        $upd->save();
        return redirect()->route('level1');
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
        return redirect()->route('dashboard');
    }
    public function accepted($id)
    {
        $upd = info::find($id);
        $upd->accepted2 = '1';
        $upd->accepted1 = '0';
        $upd->new = '0';
        $upd->save();
        \Mail::to($upd)->send(new Accepted);
        return redirect()->route('approved');
    }
    public function deleted()
    {
        $rejects = info::where('rejected', 1)->get();
        return view('admin.rejected', compact('rejects'));
    }
    public function singlereject($id)
    {
        $rejects = info::find($id);
        return view('admin.singleprop3', compact('rejects'));
    }

}

