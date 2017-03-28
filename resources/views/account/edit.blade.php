@extends('app')
@section('content')
    <h1>修改account数据:{{ $account->id }}</h1>
    {!! Form::model($account,['url'=>'/account/update']) !!}
    {!! Form::hidden('id',$account->id) !!}
    <div class="form-group">
        {!! Form::label('account','账号:') !!}
        {!! Form::text('account',$account->account,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password','密码:') !!}
        {!! Form::text('password',$account->password,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('country','国家:') !!}
        {!! Form::text('country',$account->country,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('q1','问题1:') !!}
        {!! Form::text('q1',$account->q1,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('q2','问题2:') !!}
        {!! Form::text('q2',$account->q2,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('q3','问题3:') !!}
        {!! Form::text('q3',$account->q3,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('a1','回答1:') !!}
        {!! Form::text('a1',$account->a1,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('a2','回答2:') !!}
        {!! Form::text('a2',$account->a2,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('a3','回答3:') !!}
        {!! Form::text('a3',$account->a3,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('udid','udid:') !!}
        {!! Form::text('udid',$account->udid,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('serial','序列号:') !!}
        {!! Form::text('serial',$account->serialNumber,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('device','设备:') !!}
        {!! Form::select('device', [$account->deviceType] + ['iphone', 'android'], array('class' => 'form-control')) !!}
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
