@extends('app')

@section('title', '資料表')

@section('a')
    @include('message.list')
    {!! Form::model($GenderStatistic, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\GenderStatistic@update', $GenderStatistic->id]]) !!}
    @include('GenderStatistics.form', ['submitButton' => '更新資料'])
    {!! Form::close() !!}
@stop
