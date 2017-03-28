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
        {!! Form::text('isPageTurning',$task->isPageTurning,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('task_isRealDownloadId','isRealDownloadId:') !!}
        {!! Form::text('isRealDownload',$task->isRealDownload,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('task_isLaunch','isLaunch:') !!}
        {!! Form::text('isLaunch',$task->isLaunch,['class'=>'form-control']) !!}
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