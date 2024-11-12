<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SDG永續經營</title>
    </head>    
    <body>
        <h1>sdg</h1>
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