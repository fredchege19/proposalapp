@extends('admin.index')

@section('content')
<div class="panel-body">
    <div class="col">
          <div class="card">
            <div class="card-body">
              <b><h4 class="card-title" style="color:blue;">Accepted Proposals</h4></b>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    
                    <th scope="col">submitted by</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                  </tr>
                </thead>

       
@foreach($approveds as $approved)
@include('compo.approved')
@endforeach


</tbody>
              </table>
            </div>
          </div>
        </div>
	</div>
</div>
  		</div>
          @endsection