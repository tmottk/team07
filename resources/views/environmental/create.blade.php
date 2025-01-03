@extends('app')

@section('title', '資料表')

@section('content')

新增表單
@include('message.list')


{!! Form::open(['url' => 'environmentalvolunteers/store']) !!}
    @include('environmental.form', ['submitButtonText'=>'新增東東資料'])
{!! Form::close()  !!}

@endsection