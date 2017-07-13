@extends('layout.app')

@section('content')

    <h1>id: {{ $taskE->id }}のタスク編集ページ</h1>
    
    {!! Form::model($taskE, ['route' => ['task_l.update', $taskE->id], 'method' => 'put']) !!}
    
        {!! Form::label('content', 'タスク') !!}
        {!! Form::text('content') !!}
        {!! Form::submit('更新') !!}
    
    {!! Form::close() !!}

@endsection