@extends('layouts.app')

@section('content')
<div class="container">
    
   
        <h3 style="text-align:center; color:grey;">Welcome to your dashboard</h3><br>
        
      
     <ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link" href="/success" role="tab" aria-selected="true">Submitted</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/drafts">Drafts</a>
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
   
    </tr>
  </thead>
  <tbody align="center">
  <tr>
  
                    <th scope="row">Proposal Title</th>
                    <th scope="row">{{$prop->title}}</th>
                  </tr>
                  <tr>
                    <th scope="row">Address</th>
                    <th scope="row">{{$prop->address}}</th>
                  </tr>
                  <tr>
                    <th scope="row">Phone</th>
                    <th scope="row">{{$prop->phone}}</th>
                  </tr>
                  <tr>
                    <th scope="row">Email</th>
                    <th scope="row">{{$prop->email}}</th>
                  </tr>
                  <tr>
                    <th scope="row">Submitted by</th>
                    <th scope="row">{{$prop->submitted_by}}</th>
                  </tr>
                  <tr>
                    <th scope="row">Summary</th>
                    <th scope="row">{{$prop->summary}}</th>
                  </tr>
                  <tr>
                    <th scope="row">Background</th>
                    <th scope="row">{{$prop->background}}</th>
                  </tr>
                  <tr>
                    <th scope="row">Activities</th>
                    <th scope="row">{{$prop->activities}}</th>
                  </tr>
                  <tr>
                    <th scope="row">Budget</th>
                    <th scope="row">{{$prop->budget}}</th>
                  </tr>




</button></td>
    </tr>

  </tbody>
</table>
</div></div>

 
<hr>


      </div> <!-- /container -->
      
      
        <!-- <div class="video" style="margin-left:20% ">
        <iframe width="530"  height="330" src="https://www.youtube.com/embed/jOlwW8cZjWo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div> -->
@endsection
