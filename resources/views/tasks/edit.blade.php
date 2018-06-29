@extends('layouts.app')

@section('content')
<h1>id：{{ $task->id }}のタスク編集ページ</h1>
@if (count($errors) > 0)
<p>入力内容に間違いがあります。</p>
@endif
<div class="row">
    <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
        {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        <div class="form-group @if(!empty($errors->first('content'))) has-error @endif">
            {!! Form::label('content', 'タスク:') !!}
            {!! Form::text('content', null, ['class'=>'form-control']) !!}
            <span class="help-block">{{$errors->first('content')}}</span>
        </div>
        <div class="form-group @if(!empty($errors->first('status'))) has-error @endif">
            {!! Form::label('status', 'ステータス:') !!}
            {!! Form::select('status', ['' => '--選択--', '未対応' => '未対応', '対応済み' => '対応済み'], null, ['class'=>'form-control']) !!}
            <span class="help-block">{{$errors->first('status')}}</span>
        </div>
        
        {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@endsection