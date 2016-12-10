<!DOCTYPE html>
<html>
<head>
    <title>THIS IS WEB</title>

    <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}"  type="text/css" media="all"/>
    <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap-theme.css') }}"  type="text/css" media="all"/>
    <link rel="stylesheet" href="{{ URL::asset('css/common.css') }}"  type="text/css" media="all"/>
    <script type="text/javascript" src="{{ URL::asset('js/jquery-3.1.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/common.js') }}"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navList">
    <div class="container-fluid" >
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL('main') }}">首页</a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ URL('main'.'\lan') }}">编程语言</a></li>
                <li><a href="{{ URL('main'.'\read') }}">读书笔记</a></li>
                <li><a href="{{ URL('main'.'\know') }}">我的百科</a></li>
                <li><a href="{{ URL('main'.'\use') }}">实践应用</a></li>
            </ul>
        </div>
    </div>
</nav>
<div id="content">
    @yield('content')
</div>
<div id="footer" class="center-block">
    <p>&copy;2016&nbsp;
    <span><a href="#">联系我们</a></span>
</p>
</div>
</body>
</html>