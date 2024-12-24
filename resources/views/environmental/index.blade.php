@extends('app')

@section('title', '資料表')

@section('content')
    <a href={{ route('environmentalvolunteers.create')}}>新增資料表 </a>
    <table border="1">
        <tr>
            <th>年份</th>
            <th>項目</th>
            <th>總人數</th>
            <th>男性人數</th>
            <th>女性人數</th>
            <th>操作1</th>
            <th>操作2</th>
            <th>操作3</th>
        </tr>
        @foreach ($environmentalvolunteers as $environmentalvolunteer)
            <tr>
                <td>{{$environmentalvolunteer ->year}}</td>
                <td>{{$environmentalvolunteer ->project}}</td>
                <td>{{$environmentalvolunteer ->total_volunteers}}</td>
                <td>{{$environmentalvolunteer ->male_volunteers}}</td>
                <td>{{$environmentalvolunteer->female_volunteers}}</td>
                <td><a href="{{ route('environmentalvolunteers.show', ['id' => $environmentalvolunteer->id]) }}">顯示</a></td>
                <td><a href="{{ route('environmentalvolunteers.edit', ['id' => $environmentalvolunteer->id]) }}">編輯</a></td>
                <td> 
                    <form action="{{ url('/environmentalvolunteers/delete', ['id' => $environmentalvolunteer->id]) }}" method="post">
                        <input class="btn btn-default" type="submit" value="刪除" />
                        @method('delete')
                        @csrf
                    </form>
                </td>     
            </tr>
        @endforeach
    </table>
@stop



