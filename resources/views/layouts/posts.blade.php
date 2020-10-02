<html>
<head>
    <title>@yield('title')</title>
    <style>
        .container{
            max-width: 960px;
            margin: auto;
            background: #cccccc;
            padding: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2> @yield('title')</h2>
    @yield('content')
</div>
</body>
</html>
