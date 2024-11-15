<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SDG永續經營</title>
        <style>
            h1{
                background-color: orange;
                padding: 40px 0;
                text-align: center;
            }
            table {
                 width: 60%;
                 margin: 0 auto; 
                 text-align: center; 
            }
        </style>
    </head>    
    <body>
        <h1>人數統計表</h1>
        <table border="1">
            <tr>
                <th>年份</th>
                <th>項目</th>
                <th>總人數</th>
                <th>男性人數</th>
                <th>女性人數</th>
            </tr>
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