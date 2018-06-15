@extends('layouts.app')

@section('content')
<h1>新規タスク登録ページ</h1>
{!! Form::model($task, ['route' => 'tasks.store']) !!}
{!! Form::label('content', 'タスク:') !!}
{!! Form::text('content') !!}
{!! Form::label('status', 'ステータス:') !!}
{!! Form::select('status', ['' => '--選択--', '未対応' => '未対応', '対応済み' => '対応済み']) !!}

{!! Form::submit('登録') !!}
{!! Form::close() !!}

@endsection