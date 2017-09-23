@extends('layout.app')

@section('content')

    <h1>タスク{{ $task->id }} の詳細ページ</h1>
    <div class="row">
            <div class="col-xs-12">
                <table class="table">
                    <tr>
                        <th>タスク</th>
                        <th>ステータス</th>
                        <th>登録日時</th>
                    </tr>
                    <tr>
                        <td>{{ $task->content }}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->created_at }}</td>
                    </tr>
                </table>
            </div>
            <div class="col-xs-6">
            {!! Form::open(['route' => ['tasks.edit', 'id' => $task->id], 'method' => 'get']) !!}
                {!! Form::submit('タスクの編集', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
            </div>
            <div class="col-xs-5 col-offset-xs-1">
                @if (Auth::user()->id == $task->user_id)
                    {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                @endif
            </div>
        </div>
@endsection