
@include('admin.index')
<!doctype html>
<html lang="en">

<div class="panel-body">
    <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">information</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Proposal Title</th>
                    <th scope="row">{{$accepted->title}}</th>
                  </tr>
                  <tr>
                    <th scope="row">Address</th>
                    <th scope="row">{{$accepted->address}}</th>
                  </tr>
                  <tr>
                    <th scope="row">Phone</th>
                    <th scope="row">{{$accepted->phone}}</th>
                  </tr>
                  <tr>
                    <th scope="row">Email</th>
                    <th scope="row">{{$accepted->email}}</th>
                  </tr>
                  <tr>
                    <th scope="row">Submitted by</th>
                    <th scope="row">{{$accepted->submitted_by}}</th>
                  </tr>
                  <tr>
                    <th scope="row">Summary</th>
                    <th scope="row">{{$accepted->summary}}</th>
                  </tr>
                  <tr>
                    <th scope="row">Background</th>
                    <th scope="row">{{$accepted->background}}</th>
                  </tr>
                  <tr>
                    <th scope="row">Activities</th>
                    <th scope="row">{{$accepted->activities}}</th>
                  </tr>
                  <tr>
                    <th scope="row">Budget</th>
                    <th scope="row">{{$accepted->budget}}</th>
                  </tr>
                 
                
                </tbody>


</tbody>
              </table>
            </div>
          </div>
        </div>
	</div>
  <form method="post" action="">
   {{csrf_field()}}
   
   <div class="form-group">
   <a href="/acceptdestroy/{{$accepted->id}}" class="btn btn-danger">Decline</a>
   <a href="/propaccept/{{$accepted->id}}" class="btn btn-success">Accept</a>
    
   </div>
   </form>
  
  <br><br>
</div>

  		</div>
     
<script>
   $(function () {
  	$('.navbar-toggle-sidebar').click(function () {
  		$('.navbar-nav').toggleClass('slide-in');
  		$('.side-body').toggleClass('body-slide-in');
  		$('#search').removeClass('in').addClass('collapse').slideUp(200);
  	});

  	$('#search-trigger').click(function () {
  		$('.navbar-nav').removeClass('slide-in');
  		$('.side-body').removeClass('body-slide-in');
  		$('.search-input').focus();
  	});
  });
</script>
</body>

   

</html>

              