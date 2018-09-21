<?php

namespace App\Http\Controllers;
use App\info;
use Auth;
use Illuminate\Support\Facades\DB;
use App\User;
Use App\Mail\rejected;
Use App\Mail\Submitted;


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
        $props = info::where([['new',  1],
  ['draft',  0]])->get();

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
      
if ($request->has('save'))
{
    $save = new Info([
            
        'user_Id'    =>  $request->get(Auth::user()->id),
        'title'    =>  $request->get('title'),
        'org_name'  =>  $request->get('org_name'),
        'address'  =>  $request->get('address'),
        'phone'    =>  $request->get('phone'),
        'submitted_by'=>Auth::user()->name,
        'email'=>Auth::user()->email,
        'summary'    =>  $request->get('summary'),
        'background'    =>  $request->get('background'),
        'activities'    =>  $request->get('activities'),
        'background'    =>  $request->get('background'),
        'budget'    =>  $request->get('budget'),
        'drafts'    =>  1,
        
    ]);
    
    $user = Auth::user();
    $save->draft =1;
    $user->posts()->save($save);
    return redirect()->route('success', Auth::user()->id);
}
else if ($request->has('publish'))
{
    $validatedData = $request->validate([
    'title'    =>  'required|max:255',
    'address'  =>  'required',
    'phone' => 'required|regex:/(0)[0-9]{9}/',
    'summary'    =>  'required|max:355',
    'background'    =>  'required|max:355',
    'activities'    =>  'required|max:355',
    'background'    =>  'required|max:355',
    'budget'    =>  'required|max:355',
    
    ]); 

    $save = new Info([
            
        'user_Id'    =>  $request->get(Auth::user()->id),
        'title'    =>  $request->get('title'),
        'org_name'  =>  $request->get('org_name'),
        'address'  =>  $request->get('address'),
        'phone'    =>  $request->get('phone'),
        'submitted_by'=>Auth::user()->name,
        'email'=>Auth::user()->email,
        'summary'    =>  $request->get('summary'),
        'background'    =>  $request->get('background'),
        'activities'    =>  $request->get('activities'),
        'background'    =>  $request->get('background'),
        'budget'    =>  $request->get('budget'),
        'drafts'    =>  1,
        
    ]);
   $emal=Auth::user()->email;
    $user = Auth::user();
    $save->draft =0;
    $user->posts()->save($save);
    \Mail::to($emal)->send(new Submitted);
    return redirect()->route('success', Auth::user()->id);

    

}
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
    public function pop($id)
    {
        $props = info::find($id);
        return view('pop', compact('props'));
    }

    public function display($id)
    {
        $proops = info::find($id);
        return view('apply', compact('proops'));
    }




    public function success()
    {
        
        $proops = info::where([['draft',  0],
  ['user_id',  Auth::user()->id]])->get();


        return view('home', compact('proops'));
        
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
        \Mail::to($upd)->send(new rejected);
        return redirect()->route('rejected');

    }
    public function submit($id)
    {
        $upd = info::find($id);
        $upd->draft = '0';
     $upd->save();
     return redirect()->route('home');

    }

    public function newme()
    {
        return view('layouts.new_acc');

    } 
    public function view($id)
    {
        $prop = info::find($id);
        return view('singleprop', compact('prop'));

    }  

    public function draftview($id)
    {
        $prop = info::find($id);
        return view('singledraft', compact('prop'));

    }  
    
    public function verified()
    {
        return view('layouts.verified');
    }


    public function drafts()
    {

   $proops = info::where('draft',  1)->get();
   return view('drafts', compact('proops'));
            
            }

        
        
  
}
