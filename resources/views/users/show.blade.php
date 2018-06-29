@extends('layouts.app')

@section('content')
<h1>{{ $user->name }} の登録情報</h1>
<table class="table">
    <tr>
        <th>名前：</th>
        <td>{{ $user->name }}</td>
    </tr>
    <tr>
        <th>ステータス：</th>
        <td>{{ $user->email }}</td>
    </tr>
</table>

{!! Form::model($user, ['route' => ['user.destroy', $user->id], 'method' => 'delete']) !!}
    {!! Form::submit('削除', ['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}
@endsection