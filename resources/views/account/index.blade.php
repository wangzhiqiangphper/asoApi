@extends('app')
@section('content')
    @foreach($accounts as $account)
        <h1>{{ $account->id }}</h1>
        <p>账号: {{ $account->account }}</p>
        <p>密码: {{ $account->password }}</p>
        <p>udid: {{ $account->udid }}</p>
        <a href="{{ url('/account/edit',[$account->id]) }}">修改</a>
        <hr>
    @endforeach
@endsection