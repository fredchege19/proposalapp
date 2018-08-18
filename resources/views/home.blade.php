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
        {!! Form::open(['url' => 'foo/bar']) !!}
        <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>''])}}
        </div>
        <div class="form-group">
        {{Form::label('organisation_name', 'Organisation name')}}
        {{Form::text('organisation_name', '', ['class'=>'form-control', 'placeholder'=>''])}}
        </div>
        <div class="form-group">
        {{Form::label('address', 'Address')}}
        {{Form::text('address', '', ['class'=>'form-control', 'placeholder'=>''])}}
        </div>
        <div class="form-group">
        {{Form::label('phone', 'Phone')}}
        {{Form::text('phone', '', ['class'=>'form-control', 'placeholder'=>''])}}
        </div>
        <div class="form-group">
        {{Form::label('email', 'Email')}}
        {{Form::text('phone', '', ['class'=>'form-control', 'placeholder'=>''])}}
        </div>
        <div class="form-group">
        {{Form::label('submitted_by', 'Submitted by')}}
        {{Form::text('submitted_by', '', ['class'=>'form-control', 'placeholder'=>''])}}
        </div>

        {{Form::submit('Save As Draft', ['class'=>'btn btn-primary'])}}
        {{Form::submit('submit', ['class'=>'btn btn-primary'])}}
        
        {!! Form::close() !!}

</div>
@endsection
