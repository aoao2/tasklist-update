@extends('layout.app')

@section('content')
    @if (Auth::check())
        <h1><p>{{ $user->name }} のタスク一覧</p></h1>
        <div class="row">
            <div class="col-xs-12">
                <table class="table">
                    <tr>
                        <th>#</th>
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
            </div>
            {!! Form::open(['route' => 'tasks.create', 'method' => 'get']) !!}
                {!! Form::submit('新規タスクの作成', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    @else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to Tasklist</h1>
            {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
    @endif
@endsection