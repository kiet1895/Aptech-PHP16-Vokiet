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
  <form action="#" method="POST">
    <table class="table">
      <thead>
        <tr>
            <th style="width:5%; text-align: center">STT</th>
            <th style="width:15%; text-align: center">Ten</th>
            <th style="width:15%; text-align: center">Email</th>
            <th style="width:15%; text-align: center">Ngay sinh</th>
            <th style="width:15%; text-align: center">SDT</th>
            <th style="width:15%; text-align: center">Dia chi</th> 
            <th style="width:20%; text-align: center">Thao tac</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto@gmail.com</td>
          <td>0123456</td>
          <td>26 Jacob stress</td>
          <td>Thornton</td>
          <td>
            <button name="btn-them" type="submit" class="btn btn-outline-primary">Thêm</button>
            <button name="btn-sua" type="submit" class="btn btn-outline-primary">Sửa</button>
            <button name="btn-xoa" type="submit" class="btn btn-outline-danger">Xóa</button>
          </td>
        </tr>
      </tbody>
    </table>
  </form>
</body>
</html>