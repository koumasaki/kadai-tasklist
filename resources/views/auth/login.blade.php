@extends('layouts.app')

@section('content')
<h1>Login</h1>
@if (count($errors) > 0)
<p>入力内容に間違いがあります。</p>
@endif
<div class="row">
    <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
        {!! Form::open(['route' => 'login.post']) !!}
        <div class="form-group @if(!empty($errors->first('email'))) has-error @endif">
            {!! Form::label('email', 'Eメール:') !!}
            {!! Form::text('email', old('email'), ['class'=>'form-control']) !!}
            <span class="help-block">{{$errors->first('email')}}</span>
        </div>
        <div class="form-group @if(!empty($errors->first('password'))) has-error @endif">
            {!! Form::label('password', 'パスワード:') !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
            <span class="help-block">{{$errors->first('password')}}</span>
        </div>
        {!! Form::submit('Login', ['class' => 'btn btn-primary btn-block']) !!}
        {!! link_to_route('signup.get', '登録がまだの方はSign up now!') !!}
        {!! Form::close() !!}
    </div>
</div>
@endsection