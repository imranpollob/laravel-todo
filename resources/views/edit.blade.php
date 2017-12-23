@extends('layout')

@section('content')

<h2 class="text-center display-3">ToDo's</h2>

<form action="{{ route('update', ['id'=>$todo->id]) }}" method="POST">
	{{ csrf_field() }}

	<input class="form-control form-control-lg" type="text" name="todo" value="{{$todo->todo}}" autofocus>
</form>


@stop