
@extends('layout')



@section('content')

<div class="row" xmlns="http://www.w3.org/1999/html">

    <div class="col-lg-6 col-lg-offset-3">

        <form action="/create/todo" method="post">

            {{ csrf_field() }}

     <input type="text" class="form-control" name="todo" placeholder="Create a new todo">

    </form

    </div>



</div> <br>



  <hr>


   @foreach($todos as $todo)

      {{ $todo->todo }} <a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger btn-xs">Delete</a>


       <a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-info btn-xs">Update</a>


       @if(!$todo->completed)

        <a href="{{ route('todos.completed', ['id' => $todo->id])}}" class="btn btn-xs btn-success">Mark as Completed</a>

        @else

        <span class="text-success">Completed!</span>

       @endif

      <hr>
         @endforeach


@stop