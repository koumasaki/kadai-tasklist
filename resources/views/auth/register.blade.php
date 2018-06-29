@extends('layouts.app')

@section('content')
<h1>Sign up</h1>
@if (count($errors) > 0)
<p>入力内容に間違いがあります。</p>
@endif
<div class="row">
    <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
        {!! Form::open(['route' => 'signup.post']) !!}
        <div class="form-group @if(!empty($errors->first('name'))) has-error @endif">
            {!! Form::label('name', '氏名:') !!}
            {!! Form::text('name', old('name'), ['class'=>'form-control']) !!}
            <span class="help-block">{{$errors->first('name')}}</span>
        </div>
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
        <div class="form-group @if(!empty($errors->first('password_confirmation'))) has-error @endif">
            {!! Form::label('password_confirmation', 'パスワード(確認):') !!}
            {!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
            <span class="help-block">{{$errors->first('password_confirmation')}}</span>
        </div>
        {!! Form::submit('Sign up', ['class' => 'btn btn-primary btn-block']) !!}
        {!! Form::close() !!}
    </div>
</div>
@endsection