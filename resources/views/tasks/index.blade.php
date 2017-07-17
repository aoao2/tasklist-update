@extends('layout.app')

@section('content')

    <h1>タスク一覧</h1>
    
    @if (count($taskA) > 0)
        <ul>
            @foreach ($taskA as $eachtask)
                <li>{!! link_to_route('task_l.show', $eachtask->id, ['id' => $eachtask->id]) !!}：{{ $eachtask->content }} > {{ $eachtask->status }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! link_to_route('task_l.create', '新規タスクの作成') !!}

@endsection