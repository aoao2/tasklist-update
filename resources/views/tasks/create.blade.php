@extends('layout.app')

@section('content')

    <h1>タスク新規作成ページ</h1>
    
    {!! Form::model($taskC, ['route' => 'task_l.store']) !!}
    
        {!! Form::label('content', 'タスク') !!}
        {!! Form::text('content') !!}
        {!! Form::select('status', ['済' => '済', '未' => '未', '保留' => '保留'], null, ['placeholder' => '']) !!}
        {!! Form::submit('投稿') !!}
    
    {!! Form::close() !!}

@endsection