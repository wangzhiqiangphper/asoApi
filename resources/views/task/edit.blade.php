@extends('app')
@section('content')
    <h1>修改task数据:{{ $task->id }}</h1>
    {!! Form::model($task,['url'=>'/task/update']) !!}
    {!! Form::hidden('id',$task->id) !!}
    <div class="form-group">
        {!! Form::label('task_keyword','关键词:') !!}
        {!! Form::text('keyword',$task->keyword,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('task_appId','appId:') !!}
        {!! Form::text('appId',$task->appId,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('task_country','国家:') !!}
        {!! Form::text('country',$task->country,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('task_isPageTurning','isPageTurning:') !!}
        {!! Form::select('isPageTurning', [$task->isPageTurning] + [0,1], array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('task_isRealDownloadId','isRealDownload:') !!}
        {!! Form::select('isPageTurning', [$task->isRealDownload] + [0,1], array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('task_isLaunch','isLaunch:') !!}
        {!! Form::select('isPageTurning', [$task->isLaunch] + [0,1], array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('修改',['class'=>'btn btn-success form-control']) !!}
    </div>
    {!! Form::close() !!}
    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection