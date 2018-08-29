@extends('layouts.app')

@section('content')
<div class="container">
    
        <!-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

               <!--  <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
 -->
 <!-- 
                    You are logged in!
                </div>
            </div>
        </div> --> 
        <h3 style="text-align:center;">Hey {{ Auth::user()->name }} , fill in the details and submit the proposal</h3>
        <h1>Hello, we will cntact you shortly to let you know how you performed</h1>
       
</div>
@endsection
