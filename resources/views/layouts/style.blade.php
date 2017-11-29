<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="description" content="Glitter">
    <meta charset="UTF-8">
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1"
    >
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
</head>
<body>


<div class="header">
    <div class="logo"><a href="#">glitter</a></div>
    <div class="menu"><a href="{{ route('home')}}">Log out</a></div>
</div>

<div class="publish"><div class="wrapper">
        <textarea placeholder="What's on your mind?"></textarea>
        <button type="submit">Send</button>
    </div>
</div>
<div class="content wrapper">
    <div class="content wrapper">
    @yield('content')
    </div>
</div>
<div class="navigation">
    <div class="wrapper">
        <a href="#">&larr;Previous Page</a>
        <a href="#">Next Page&rarr;</a>
    </div>
</div>

</body>
</html>