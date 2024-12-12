@extends('app')

@section('title', '資料表')

@section('a')
    {!! Form::open(['url' => 'GenderStatistics/store']) !!}
    <div>
        {!! Form::label('year', '年份：') !!}
        {!! Form::text('year', null, ['class' => 'form-control']) !!}
    </div>
    <div>
        {!! Form::label('item', '專案名稱：') !!}
        {!! Form::text('item', null, ['class' => 'form-control']) !!}
    </div>
    <div>
        {!! Form::label('total_count', '總人數:') !!}
        {!! Form::text('total_count', null, ['class' => 'form-control']) !!}
    </div>
    <div>
        {!! Form::label('male_count', '男性人數:') !!}
        {!! Form::text('male_count', null, ['class' => 'form-control']) !!}
    </div>
    <div>
        {!! Form::label('female_count', '女性人數：') !!}
        {!! Form::text('female_count', null, ['class' => 'form-control']) !!}
    </div>
    <div>
        {!! Form::submit('新增調查資料', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop
