
@extends('layout')



@section('content')

<div class="row" xmlns="http://www.w3.org/1999/html">

    <div class="col-lg-12">

        <form action="{{ route('todos.save', ['id' => $todo->id ]) }}" method="post">

            {{ csrf_field() }}

     <input type="text" class="form-control" name="todo" value="{{ $todo->todo }}" placeholder="Create an update">

    </form

    </div>



</div> <br>
<hr>








@stop