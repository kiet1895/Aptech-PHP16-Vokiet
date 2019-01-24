<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>trang chu</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<form role="form" method="POST" action="{{ route('user.store') }}">
    {{csrf_field()}}
    <label >ten</label>
    <input type="text" name="name">
    <label >Email</label>
    <input type="text" name="email">
    <button type="submit">Create</button>
</form>
<button type="button" class="btn btn-outline-danger"><a href="{{route('user.index') }}">Back</a></button>
</body>
</html>