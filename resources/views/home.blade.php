@extends('layouts.app')

@section('content')
<div class="container">
    
   
        <h3 style="text-align:center;">Hey {{ Auth::user()->name }} , Please Fill The Fields And Submit The Data</h3>
        @if(session()->has('notif'))
<div class="row">
<div class="alert alert-success">
<button type="button" class="close" data-dismis="alert" aria-hidden="true">&times;</button>
<strong>Notification: </strong>{{session()->get('notif')}}
</div>
</div>
        @endif
        {!! Form::open(['url' => 'save']) !!}
        <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class'=>'form-control', 'value'=>''])}}
        </div>
        <div class="form-group">
        {{Form::label('organisation', 'Organisation')}}
        {{Form::text('organisation', '', ['class'=>'form-control', 'placeholder'=>'', 'required'=>''])}}
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
        {{Form::text('email', '', ['class'=>'form-control', 'placeholder'=>''])}}
        </div>
        <div class="form-group">
        {{Form::label('submitted_by', 'Submitted by')}}
        {{Form::text('submitted_by', '', ['class'=>'form-control', 'placeholder'=>''])}}
        </div>
        <div class="form-group">
        {{Form::label('summary', 'summary')}}
        {{Form::textarea('summary', '', ['class'=>'form-control', 'placeholder'=>''])}}
        </div>
        <div class="form-group">
        {{Form::label('Background', 'Background')}}
        {{Form::textarea('background', '', ['class'=>'form-control', 'placeholder'=>''])}}
        </div>
        <div class="form-group">
        {{Form::label('Activities', 'Activities')}}
        {{Form::textarea('activities', '', ['class'=>'form-control', 'placeholder'=>''])}}
        </div>
        <div class="form-group">
        {{Form::label('Budget', 'Budget')}}
        {{Form::textarea('budget', '', ['class'=>'form-control', 'placeholder'=>''])}}
        </div>
    

       
        {{Form::submit('Save and Submit', ['class'=>'btn btn-primary'])}}
        
        {!! Form::close() !!}

</div>
@endsection
