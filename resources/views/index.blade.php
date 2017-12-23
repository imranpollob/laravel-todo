@extends('layout')

@section('content')

<form action="/create" method="POST">
	{{ csrf_field() }}

	<input class="form-control form-control-lg" type="text" name="todo" placeholder="Create New ToDo" autofocus>
</form>

<br>

@if(!empty($todos))
<ul class="list-group">
	@foreach($todos as $todo)

	<li class="list-group-item">

		@if(!$todo->is_completed)
		{{ $todo->todo }}
		@else
		<strike>{{ $todo->todo }}</strike>
		@endif

		<div class="float-right">

			@if(!$todo->is_completed)
			<a href="/{{$todo->id}}/completed" class="btn btn-outline-success btn-sm">
				<i class="fa fa-check" aria-hidden="true"></i>
			</a>
			@else
			<a href="/{{$todo->id}}/incomplete" class="btn btn-outline-secondary btn-sm">
				<i class="fa fa-undo" aria-hidden="true"></i>
			</a>
			@endif

			<a href="/{{$todo->id}}/edit" class="btn btn-outline-primary btn-sm">
				<i class="fa fa-pencil" aria-hidden="true"></i>
			</a>

			<a href="/{{$todo->id}}/delete" class="btn btn-outline-danger btn-sm">
				<i class="fa fa-trash" aria-hidden="true"></i>
			</a>


		</div>
	</li>


	@endforeach
</ul>
@endif

<br>

{{ $todos->links() }}

@stop