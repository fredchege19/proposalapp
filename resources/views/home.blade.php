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
        <form METHOD="POST" action="/users/{id}/proposal"> 
        {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Title of the proposal">
  </div>

  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Select Category</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option value="web design">Web Design</option>
      <option value="graphic design">Graphic Design</option>
      <option value="mobile application">Mobile Application</option>
      <option value="logo design">Logo Design</option>
     
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Short Proposal Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">Proposal</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>

  <select class="form-control form-control-lg">
  <option>Priority</option>
  <option value="high">High</option>
  <option value="medium">Medium</option>
  <option value="low">Low</option>
</select>
<br>
<button type="submit" class="btn btn-primary mb-2">Submit</button>


</form>

</div>
@endsection
