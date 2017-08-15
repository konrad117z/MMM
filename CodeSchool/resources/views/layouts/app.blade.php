<!DOCTYPE html>
<html lang="pl">

<head>
    <title>
        f00dstr
    </title>
    <link href=" {{URL::asset('bootstrap.min.css')}} " rel="stylesheet">
    <link href=" {{URL::asset('style.css')}} " rel="stylesheet">
</head>

<nav>
    <div class="container-fluid ramka">
        <div class="row">
            <div class="col-4"><a href="/"><h1>f00dstr</h1></a> </div>
            <div class="col-8 "><div class="btn-group btn-group-justified">
                    <a href="/user" class="btn btn-primary">index user</a>
                    <a href="/user/create" class="btn btn-primary">add user</a>
                    <a href="#" class="btn btn-primary">Sony</a>
                    <a href="#" class="btn btn-primary">Apple</a>
                    <a href="#" class="btn btn-primary">Samsung</a>
                    <a href="#" class="btn btn-primary">Sony</a>
                </div>

            </div>
                {{--<ul class="nav navbar-nav">--}}
                    {{--<div class="dropdown">--}}
                        {{--<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">User operations--}}
                            {{--<span class="caret"></span></button>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--<li><a href="/user">index</a></li>--}}
                            {{--<li><a href="/user/create">add</a></li>--}}
                              {{--</ul>--}}

            </div>
        </div>
    </div>
<nav>
<body>
    {{--<ul>--}}
        {{--<ul>--}}
            {{--USERS--}}
            {{--<li><a href="/user">index</a></li>--}}
            {{--<li><a href="/user/create">add</a></li>--}}
        {{--</ul>--}}
        {{--<li><a href="/portfolio">add rating</a></li>--}}
        {{--<li><a href="/portfolio">add massage</a></li>--}}
    {{--</ul>--}}
{{--</body>--}}
    {{--</li>--}}
    {{--<li><div class="dropdown">--}}
            {{--<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Points operations--}}
                {{--<span class="caret"></span></button>--}}
            {{--<ul class="dropdown-menu">--}}
                {{--<li><a href="/point">index</a></li>--}}
                {{--<li><a href="/point/create">add</a></li>--}}
                {{--<li><a href="/point/edit">edit</a></li>--}}
                {{--<li><a href="/point/destroy">delete</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</li>--}}



    {{--<li><a href="/portfolio">add rating</a></li>--}}
    {{--<li><a href="/portfolio">add massage</a></li>--}}
{{--</ul>--}}

@if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
</nav>

<body>
@yield('main')
</body>
    <script src="{{URL::asset('bootstrap.min.js')}} "></script>

</html>