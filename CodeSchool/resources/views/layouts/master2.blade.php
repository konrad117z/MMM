<!DOCTYPE html>
<html>
<head>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href=" {{URL::asset('bootstrap.min.css')}} " rel="stylesheet">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>

</head>
<nav>
    <div class="container">
        <div class="content">
            <div class="btn-group btn-group-justified">
                <a href="/markets" class="btn btn-default">index</a>
                <a href="#" class="btn btn-default">Samsung</a>
                <a href="#" class="btn btn-default">Sony</a>
            </div>
        </div>
    </div>

</nav>
<body>
{{--<div class="container">--}}
    {{--<div class="content">--}}
 @yield('main')
    {{--</div>--}}
{{--</div>--}}
</body>
</html>
