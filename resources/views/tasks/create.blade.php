@extends('layouts.app')

@section('content')
<h1>新規タスク登録ページ</h1>
<div class="row">
    <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-md-6">
        {!! Form::model($task, ['route' => 'tasks.store']) !!}
        <div class="form-group">
            {!! Form::label('content', 'タスク:') !!}
            {!! Form::text('content', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::select('status', ['' => '--選択--', '未対応' => '未対応', '対応済み' => '対応済み'], null, ['class'=>'form-control']) !!}
        </div>
        {!! Form::submit('登録', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@endsection