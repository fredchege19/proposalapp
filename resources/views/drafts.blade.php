@extends('layouts.app')

@section('content')
<div class="container">
    
   
        <h3 style="text-align:center; color:grey;">Welcome to your dashboard</h3><br>
        
<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link" id="pills-home-tab" href="/success" >Submitted</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="/drafts">Drafts</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/apply">New Proposal</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Approved</a>
  </li>
</ul> 

<hr>


        <table class="table">
  <thead class="thead-dark">
    <tr>
    
      <th scope="col">Title</th>
      <th scope="col">Submitted by</th>
      <th scope="col">Phone</th>
      <th scope="col"></th>
      <th scope="col">Budget</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

  @foreach($proops as $proop)
    <tr>
      
      <td>{{$proop -> title}}</td>
      <td>{{$proop -> submitted_by}}</td>
      <td>{{$proop -> phone}}</td>
      <td>{{$proop -> budget}}</td>
      <td><a type="button" class="btn btn-primary btn-sm" href="/viewd/{{$proop -> id}}">View Details</a>
      <td><a type="button" class="btn btn-primary btn-sm" href="/submit/{{$proop -> id}}">Submit</a>
  
</button></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div></div>

 
<hr>


      </div> <!-- /container -->
     
</div>
      
        <!-- <div class="video" style="margin-left:20% ">
        <iframe width="530"  height="330" src="https://www.youtube.com/embed/jOlwW8cZjWo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div> -->
@endsection
