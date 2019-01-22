<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel</title>
</head>
<body>
    <form action="{{asset('sing-up-success')}}" method="POST">
        {{csrf_field()}}
        <input name="email" type="text">
        <input name="password" type="password">
        <button type="submit">click me</button>
        {{-- migration them bang
            seeder theem du lieu tuj dong
            --}}
    </form>
</body>
</html>