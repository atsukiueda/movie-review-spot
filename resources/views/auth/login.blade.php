@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="css/style.css">
<div class="login">
    <div class="text-center">
        <h1>ログイン</h1>
    </div>

    <div class="row">
        <div class="col-md-6 offset-md-3">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('ログイン', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection