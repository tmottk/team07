<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'sdg')</title>
    <style>
        header {
            background-color: #2c7f7b;
            color: white;
            padding: 40px 0;
            text-align: center;
        }

        header h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .container {
            width: 40%;
            margin: 0 auto;
            padding: 20px 0;
        }

        .intro {

            padding: 30px 0;
            margin-bottom: 30px;
            border-radius: 8px;

        }

        .intro img {
            float: center;
            display: block;
            margin: auto;
        }

        .intro h2 {
            text-align: center;
            font-size: 2rem;
            color: #2c7f7b;
            margin-bottom: 15px;
        }

        .intro p {
            font-size: 1.1rem;
            color: #555;
            text-align: center;
        }



        /* 詳細措施區域 */
        .details {
            padding: 30px 0;
        }

        .details h2 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 20px;
            color: #2c7f7b;
        }

        .details ul {
            list-style-type: disc;
            margin-left: 20px;
        }

        .details li {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 10px;
        }

        /* Call to action 區域 */
        .call-to-action {
            background-color: #2c7f7b;
            color: white;
            text-align: center;
            padding: 40px 20px;
            margin-top: 40px;
            border-radius: 8px;
        }

        .call-to-action h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .call-to-action p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .call-to-action button {
            padding: 10px 30px;
            font-size: 1rem;
            background-color: #fff;
            color: #2c7f7b;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .call-to-action button:hover {
            background-color: #d4e6e3;
        }

        /* Footer 樣式 */
        footer {
            background-color: #2c7f7b;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        footer p {
            font-size: 1rem;
        }

        .cont h2 {
            text-align: center;
            text-align: center;
            font-size: 2rem;
            color: #2c7f7b;
            margin-bottom: 15px;
        }

        .Target {
            align-items: center;
            width: 40%;
            margin: 0 auto;
            padding: 20px 0;
            text-align: center;
        }

        .Target img {
            max-width: 30%;
            height: auto;
        }

        .table {
            margin: auto;
            border-collapse: collapse;
            width: 50%;
            text-align: center;
        }

        .tables {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f9;
            color: #333;
        }

        .tables thead tr {
            background-color: #4caf50;
            color: #ffffff;
            text-align: left;
            font-weight: bold;
        }

        .tables th,.tables td {
            padding: 12px 15px;
            border: 1px solid #ddd;
        }

        .tables tbody tr {
            background-color: #d4edda;
            transition: all 0.3s ease;
        }

        .tables tbody tr:nth-of-type(even) {
            background-color: #c8e6c9;
        }

        .tables tbody tr:hover {
            background-color: #81c784;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <h1>SDG 1：終結貧窮</h1>
        </div>
    </header>

    <section class="intro">
        <div class="container">
            @yield('theme')
        </div>
    </section>

    <section class="cont">
        <div class="Target">
            @yield('a')
        </div>
    </section>

    <section class="details">
        <div class="container">
            @yield('b')
    </section>

    <section class="table">
        @yield('tab')
    </section>

    <section class="call-to-action">
        @include('heard')
    </section>

    <footer>
        @include('footer')
    </footer>
</body>

</html>
