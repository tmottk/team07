@extends('app')

@section('title', '資料表')

@section('content')

新增表單

{!! Form::open(['url' => 'environmentalvolunteers/store']) !!}
  <div class="form-group">
    {!! Form::label('year','年份') !!}
    {!! Form::text('year', null, ['class' =>'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('project','項目') !!}
    {!! Form::text('project', null, ['class' =>'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('total_volunteers','總人數') !!}
    {!! Form::text('total_volunteers', null, ['class' =>'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('male_volunteers','男性人數') !!}
    {!! Form::text('male_volunteers', null, ['class' =>'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('female_volunteers','女性人數') !!}
    {!! Form::text('female_volunteers', null, ['class' =>'form-control']) !!}
  </div>
   <div Class="fomr-group">
  {!! Form::submit("新增表單",['class'=>'btn btn-primary form-control']) !!}
   </div>
{!! Form::close()!!}

@endsection