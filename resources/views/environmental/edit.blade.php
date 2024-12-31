@extends('app')

@section('title', '資料表')

@section('content')

編輯特定一筆資料表單

{!! Form::model($environmentalvolunteer, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\EnvironmentalVolunteersController@update', $environmentalvolunteer->id]]) !!}
    @include('environmental.form', ['submitButtonText'=>"修改東東資料"])
{!! Form::close() !!}

@endsection