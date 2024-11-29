<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '永續經營')</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7fafc;
            color: #1a202c;
        }
        header {
            text-align: center;
            background-color: orange;
            color: white;
            padding: 20px 0;
            font-size: 1.5rem;
        }
        footer {
            text-align: center;
            background-color: #333;
            color: white;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        table {
            width: 60%;
            margin: 20px auto;
            text-align: center;
            border-collapse: collapse;
        }
        table th, table td {
            border: 1px solid #ccc;
            padding: 10px;
        }
    </style>
</head>
<body>
    @include('header')
    <div class="content">
        @yield('content')
    </div>
    @include('footer')
</body>
</html>
