@extends('layouts.app')

@section('content')
@if(Auth::check())
<?php $user = Auth::user(); ?>
	<h1>{{ $user->name }}のタスクリスト一覧</h1>
	@if (count($tasks) > 0)
		<table class="table table-striped">
			<tr>
				<th>id</th>
				<th>タスク</th>
				<th>ステータス</th>
			</tr>
			@foreach($tasks as $task)
			<tr>
				<td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
				<td>{{ $task->content }}</td>
				<td>{{ $task->status }}</td>
			</tr>
			@endforeach
		</table>
	@endif
	
	{!! link_to_route('tasks.create', '新規タスクの投稿', null, ['class'=>'btn btn-primary'] ) !!}
@else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Tasklists</h1>
            {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
@endif

@endsection