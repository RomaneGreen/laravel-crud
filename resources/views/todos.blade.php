@extends('layout')

@section('content')

<div class="row">

<div class="col-lg-12 col-lg-offset-3">

<form action="/create/todos" method="post">
  {{csrf_field()}}
<input type="text" class = "form-control input-lg" name = "todo" placeholder="create a new todo">
</form>
</div>

</div>

<hr>
   @foreach($todos as $todo)
   {{$todo->todo}}  <a class ="btn btn-danger" href="{{ route('todo.delete',['id' => $todo->id]) }}">x </a>
   <a class ="btn btn-info btn-xs" href="{{ route('todo.update',['id' => $todo->id]) }}">update </a>
             <hr>
 @endforeach



@stop





