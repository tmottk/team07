@extends('app')

@section('title', '資料表')

@section('tab')
        <h1>人數統計表</h1>
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
            <tr>
                <td>{{$GenderStatistic ->year}}</td>
                <td>{{$GenderStatistic ->item}}</td>
                <td>{{$GenderStatistic ->total_count}}</td>
                <td>{{$GenderStatistic ->male_count}}</td>
                <td>{{$GenderStatistic ->female_count}}</td>
                <td><a href="{{ route('GenderStatistics.show', ['id' => $GenderStatistic->id]) }}">顯示</a></td>
                <td><a href="{{ route('GenderStatistics.edit', ['id' => $GenderStatistic->id]) }}">編輯</a></td>
                <td>
                    <form action="{{ url('/GenderStatistics/delete', ['id' => $GenderStatistic->id]) }}" method="post">
                        <input class="btn btn-default" type="submit" value="刪除" />
                        @method('delete')
                        @csrf
                    </form>
                </td>
            </tr>
        </table>
@stop