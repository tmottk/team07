@extends('app')

@section('title', '資料表')

@section('a')
    {!! Form::open(['url' => 'GenderStatistics/store']) !!}
    @include('GenderStatistics.form', ['submitButton' => '新增資料'])
    {!! Form::close() !!}
@stop
