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
		<h1>Create Todo</h1>
	  {!! Form::open(['action' => 'TodosController@store']) !!}
    {{ Form::bsText('title') }}
    {{ Form::bsTextArea('body') }}
    {{ Form::bsText('due') }}
    {{ Form::bsSubmit('submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}

		
	</div>

	<footer id="footer" class="text-center">
		<p>copyright &copy; 2018 Todolist</p>
	</footer>
</body>
</html>

