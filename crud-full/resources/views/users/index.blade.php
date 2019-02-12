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
          <th style="width:5%; text-align: center">STT</th>
          <th style="width:15%; text-align: center">Ten</th>
          <th style="width:15%; text-align: center">Email</th>
          {{-- <th style="width:15%; text-align: center">Ngay sinh</th> --}}
          {{-- <th style="width:15%; text-align: center">Dia chi</th>  --}}
          <th style="width:20%; text-align: center">Thao tac</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($user as $item)
      <tr>
      <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>
        <button name="btn-them" type="submit" class="btn btn-outline-primary"><a href="{{ route('users.nguoidung')}}">Them</a></button>
          <button name="btn-sua" type="submit" class="btn btn-outline-primary"><a href="{{ route('user.edit',[$item->id])}}">Sửa</a></button>
          <button name="btn-xoa" type="submit" class="btn btn-outline-danger"><a href="{{ route('user.destroy',[$item->id])}}">Xóa</a></button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>