<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <title>Редактирование пользователя</title>
    </head>
    <body>
        <div class="content">
            <form class="form-horizontal" method="post" action="{{ route('edit_post', ['id' => $user->id]) }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                    <label for="first_name" class="col-md-4 control-label">Имя</label>
                    <div class="col-md-6">
                        <input id="first_name" class="form-control" name="first_name" value="{{ $user->first_name }}" required autofocus>
                        @if ($errors->has('first_name'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="last_name" class="col-md-4 control-label">Фамилия</label>
                    <div class="col-md-6">
                        <input id="last_name" class="form-control" name="last_name" value="{{ $user->last_name }}" autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="middle_name" class="col-md-4 control-label">Отчество</label>
                    <div class="col-md-6">
                        <input id="middle_name" class="form-control" name="middle_name" value="{{ $user->middle_name }}" autofocus>
                    </div>
                </div>
                @foreach(json_decode($user->phone) as $index => $phone)
                <div class="form-group">
                    <label for="phone" class="col-md-4 control-label">Телефон</label>
                    <div class="col-md-6">
                        <input id="phone" class="form-control" name="phone{{ $index }}" value="{{ $phone }}" autofocus>
                    </div>
                </div>
                @endforeach

                <button class="btn btn-primary">Добавить</button>
            </form>

        </div>
    </body>
</html>