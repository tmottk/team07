<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', '永續經營')</title>
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
        @yield('a')
    </body>
</html>