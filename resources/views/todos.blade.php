@extends('layout')

@section('content')

<div class="row">

<div class="col-lg-6 col-lg-offset-3">

<form action="/create/todos" method="post">
  {{csrf_field()}}
<input type="text" class = "form-control input-lg" name = "todo" placeholder="create a new todo">
</form>
</div>

</div>

<hr>
   @foreach($todos as $todo)
      {{$todo->todo}}
             <hr>
 @endforeach



@stop




