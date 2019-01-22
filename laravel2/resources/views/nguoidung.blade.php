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
        {{-- @foreach ($line as $item)
        <h1>{{$item->name}}</h1>
        <h3>{{$item->email}}</h3>
    @endforeach --}}
    @foreach ($line as $item)
        
    <form action="{{ url($item->id.'/edit') }}" method="POST">
        @endforeach
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <table class="table">
      <thead>
        <tr>
            <th style="width:5%; text-align: center">STT</th>
            <th style="width:15%; text-align: center">Ten</th>
            <th style="width:15%; text-align: center">Email</th>
            {{-- <th style="width:15%; text-align: center">Ngay sinh</th> --}}
            <th style="width:15%; text-align: center">SDT</th>
            {{-- <th style="width:15%; text-align: center">Dia chi</th>  --}}
            <th style="width:20%; text-align: center">Thao tac</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($line as $item)
        <tr>
        <th scope="row">{{$item->id}}</th>
          <td>{{$item->name}}</td>
          <td>{{$item->email}}</td>
          <td>{{$item->sdt}}</td>
          <td>
            <button name="_method" value="DELETE" type="submit" class="btn btn-outline-primary">Thêm</button>
            <button name="btn-sua" type="submit" class="btn btn-outline-primary">Sửa</button>
            <button name="btn-xoa" type="submit" class="btn btn-outline-danger">Xóa</button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </form>
</body>
</html>