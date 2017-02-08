@extends ('layouts.main')

@section ('content')

	<div class="jumbotron">
		
		<h2>Create new User:</h2>
		<form class="form-horizontal" action = '/wedDB' method = 'POST'>
			{!! csrf_field() !!}
		  <fieldset>
		    <div class="form-group">
		      <label for="inputEmail" class="col-lg-2 control-label">Name</label>
		      <div class="col-lg-10">
		        <input class="form-control" name="name" placeholder="Name" type="text">
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
		      <div class="col-lg-10">
		        <input class="form-control" name="email" type = 'email' placeholder="Email">
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
		      <div class="col-lg-10">
		        <input class="form-control" id="inputPassword" placeholder="Password" type="password">
		      </div>
		    </div> 
		    <div class="form-group">
		      <div class="col-lg-10 col-lg-offset-2">
		        <button type="reset" class="btn btn-default">Cancel</button>
		        <button type="submit" class="btn btn-primary">Submit</button>
		      </div>
		    </div>
		  </fieldset>
		</form>
	</div>

@endsection