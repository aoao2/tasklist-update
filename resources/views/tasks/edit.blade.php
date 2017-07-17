@extends('layout.app')

@section('content')

    <h1>id: {{ $taskE->id }}のタスク編集ページ</h1>
    
    {!! Form::model($taskE, ['route' => ['task_l.update', $taskE->id], 'method' => 'put']) !!}
    
        {!! Form::label('content', 'タスク') !!}
        {!! Form::text('content') !!}
        {!! Form::select('status', ['済' => '済', '未' => '未', '保留' => '保留']) !!}
        {!! Form::submit('更新') !!}
    
    {!! Form::close() !!}

@endsection