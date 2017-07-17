@extends('layout.app')

@section('content')

    <h1>id = {{ $taskI->id }} のタスク詳細ページ</h1>
    
    <p>{{ $taskI->content }}：{{ $taskI->status }}</p>
    
    {!! link_to_route('task_l.edit', 'このタスクを編集', ['id' => $taskI->id]) !!}
    
    {!! Form::model($taskI, ['route' => ['task_l.destroy', $taskI->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection