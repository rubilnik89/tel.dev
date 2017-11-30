<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <title>Просмотр пользователя</title>
    </head>
    <body>
        <div class="content">
            <div>{{ $user->first_name }}</div>
            <div>{{ $user->last_name }}</div>
            <div>{{ $user->middle_name }}</div>
            @foreach(json_decode($user->phone) as $phone)
                <div>{{ $phone }}</div>
            @endforeach
        </div>
    </body>
</html>