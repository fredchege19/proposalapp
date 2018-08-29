@extends('admin.index')

@section('content')
<div class="panel-body">
    <div class="col">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title" style="color:red;">Rejected Proposals</h4>
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

       
@foreach($rejects as $reject)
@include('compo.rejected')
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