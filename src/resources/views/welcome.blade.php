<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>
<body>
<form method="post" action="{{ route('post') }}">
    <textarea name="msg"></textarea><br>
    {{ csrf_field() }}
    <input type="submit">
</form>
</body>
</html>
