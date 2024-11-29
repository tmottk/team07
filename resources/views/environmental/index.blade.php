@extends('app')

@section('title', '資料表')

@section('a')
    <table border="1">
        <tr>
            <th>年份</th>
            <th>項目</th>
            <th>總人數</th>
            <th>男性人數</th>
            <th>女性人數</th>
        </tr>
        @foreach ($environmentalvolunteers as $environmentalvolunteer)
            <tr>
                <td>{{$environmentalvolunteer ->year}}</td>
                <td>{{$environmentalvolunteer ->project}}</td>
                <td>{{$environmentalvolunteer ->total_volunteers}}</td>
                <td>{{$environmentalvolunteer ->male_volunteers}}</td>
                <td>{{$environmentalvolunteer->female_volunteers}}</td>
            </tr>
        @endforeach
    </table>


