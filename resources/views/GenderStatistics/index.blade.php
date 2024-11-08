<html>
    <body>
        <h1>調查檔案</h1>
        <table border="1">
        @foreach ($GenderStatistics as $GenderStatistic)
            <tr>
                <td>{{$GenderStatistic ->year}}</td>
                <td>{{$GenderStatistic ->item}}</td>
                <td>{{$GenderStatistic ->total_count}}</td>
                <td>{{$GenderStatistic ->male_count}}</td>
                <td>{{$GenderStatistic ->female_count}}</td>
            </tr>
        @endforeach
        </table>
    </body>
</html>