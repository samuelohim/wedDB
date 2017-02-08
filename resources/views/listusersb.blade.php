@extends ('layouts.main')

@section ('content')

	<table class="table table-striped table-hover ">
	  <thead>
	    <tr>
	      <th>id</th>
	      <th>Name</th>
	      <th>Email</th>
	      <th>Creation date</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach ($users as $user)

		    <tr class="active">
		      <td>{{$user->id}}</td>
		      <td>{{$user->name}}</td>
		      <td>{{$user->email}}</td>
		      <td>{{$user->created_date}}</td>
		    </tr>

		@endforeach
	  </tbody>
	</table> 


@endsection