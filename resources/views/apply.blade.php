@extends('layouts.app')

@section('content')
<div class="container">
    
   
        <h3 style="text-align:center;">Hey {{ Auth::user()->name }} , Please Fill The Fields And Submit The Data</h3>
 


@if(count($errors)>0)

@foreach($errors->all() as $error)
  <li class="alert alert-danger">{{ $error }}</li>
@endforeach

@endif

     
        {!! Form::open(['url' => 'save']) !!}
        <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class'=>'form-control', 'value'=>'', 'required'=>''])}}
        </div>
        <div class="form-group">
        {{Form::label('organisation', 'Organisation')}}
        {{Form::text('organisation', '', ['class'=>'form-control', 'placeholder'=>''])}}
        </div>
       
        <div class="form-group">
        {{Form::label('address', 'Address')}}
        {{Form::text('address', '', ['class'=>'form-control', 'placeholder'=>'', 'required'=>''])}}
        </div>
        <div class="form-group">
        {{Form::label('phone', 'Phone')}}
        {{Form::text('phone', '', ['class'=>'form-control', 'placeholder'=>'', 'required'=>''])}}
        </div>
     
    
        <div class="form-group">
        {{Form::label('summary', 'summary')}}
        {{Form::textarea('summary', '', ['class'=>'form-control', 'placeholder'=>'', 'required'=>''])}}
        </div>
        <div class="form-group">
        {{Form::label('Background', 'Background')}}
        {{Form::textarea('background', '', ['class'=>'form-control', 'placeholder'=>'', 'required'=>''])}}
        </div>
        <div class="form-group">
        {{Form::label('Activities', 'Activities')}}
        {{Form::textarea('activities', '', ['class'=>'form-control', 'placeholder'=>'' , 'required'=>''])}}
        </div>
        <div class="form-group">
        {{Form::label('Budget', 'Budget')}}
        {{Form::textarea('budget', '', ['class'=>'form-control', 'placeholder'=>'', 'required'=>''])}}
        </div>
    

        {{Form::submit('Save', ['class'=>'btn btn-primary btn-sm', 'name'=>'save'])}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary btn-sm', 'name'=>'publish'])}}
        
        {!! Form::close() !!}

</div>
@endsection
