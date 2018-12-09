<!DOCTYPE html>
<html>
<head>
	<title>TodoList</title>
	<link rel="stylesheet" href="../css/app.css">
</head>
<body>
	<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../">TodoList</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="{{Request::is('/') ? 'active' : ''}}"><a href="../">Home</a></li>
            <li class="{{Request::is('todo/create') ? 'active' : ''}}"><a href="todo/create">Create Todo</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

	<div class="container">
		
			<a class="btn btn-default" href="../../public">Go Back</a>
			<h1><a href="todo/{{$todo->id}}}">{{$todo->title}}</a></h1>
			<div class="label label-danger">{{$todo->due}}</div>
			<hr>
			<p>{{$todo->body}}</p>
      <br><br>
      <a href="../../public/todo/{{$todo->id}}/edit" class="btn btn-default">Edit</a>
      {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method'=>'POST', 'class' => 'pull-right']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::bsSubmit('delete', ['class' => 'btn btn-danger']) }}
      {!! Form::close() !!}
		  
	</div>

	<footer id="footer" class="text-center">
		<p>copyright &copy; 2018 Todolist</p>
	</footer>
</body>
</html>

