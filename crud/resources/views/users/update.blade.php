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
<table class="table">
    <thead>
      <tr>
          {{-- <th style="width:5%; text-align: center">STT</th>
          <th style="width:15%; text-align: center">Ten</th>
          <th style="width:15%; text-align: center">Email</th>
          <th style="width:20%; text-align: center">Thao tac</th> --}}
      </tr>
    </thead>
    <tbody>
      {{-- @foreach ($user as $item)// edit all row --}}
      <tr>
          <form action="{{route('user.update',[$user->id])}}" method="POST">
              {{csrf_field()}}
        <td><input name="name" type="text" value="{{$user->name}}"></td>
        <td><input name="email" type="text" value="{{$user->email}}"></td>
        <td>
            <input type="hidden" name="_method" value="POST">
          <button type="submit" class="btn btn-outline-primary">Update</button>
        </form>
        </td>
      </form>
      </tr>
      {{-- @endforeach --}}
    </tbody>
  </table>
<button type="button" class="btn btn-outline-danger"><a href="{{route('users.index') }}">Back</a></button>
</body>
</html>