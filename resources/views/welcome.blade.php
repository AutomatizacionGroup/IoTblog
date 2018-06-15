<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>List of Tasks</h2>
    <ul>
    @foreach ($tasks as $task)
    <li>{{$task->body}}</li>
    @endforeach
    </ul>
</body>
</html>