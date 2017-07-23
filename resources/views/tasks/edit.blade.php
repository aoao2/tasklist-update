@extends('layout.app')

@section('content')

    <h1>id: {{ $taskE->id }}のタスク編集ページ</h1>
    
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6">
            {!! Form::model($taskE, ['route' => ['task_l.update', $taskE->id], 'method' => 'put']) !!}
            
                <div class="form-group">
                    {!! Form::label('content', 'タスク：') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('status', 'ステータス：') !!}
                    {!! Form::select('status', ['済' => '済', '未' => '未', '保留' => '保留']) !!}
                </div>
                {!! Form::submit('更新') !!}
            
            {!! Form::close() !!}
        </div>
        <div class="col-sm-2 col-sm-offset-2 col-md-2 col-md-offset-2 col-lg-3 col-lg-offset-3"></div>
    </div>

@endsection