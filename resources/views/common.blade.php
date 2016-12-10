<!DOCTYPE html>
<html>
<head>
    <title>THIS IS WEB</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="../css/common.css" type="text/css" media="all"/>
    <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../js/common.js" type="text/javascript"></script>
    <script src="../js/jquery-3.1.0.min.js" type="text/javascript"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL('home') }}">首页</a>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">编程语言</a></li>
                <li><a href="#">读书笔记</a></li>
                <li><a href="#">我的百科</a></li>
                <li><a href="#">实践应用</a></li>
            </ul>
        </div>
    </div>
</nav>
<div id="content">
    <div class="pull-left" style="width:15%;">
        <ul class="nav nav-pills nav-stacked text-center">
            <li class="active"><a href="{{ URL('people') }}">联系</a></li>
            <li><a href="#">备用</a></li>
            <li><a href="#">备用</a></li>
            <li><a href="#">备用</a></li>
            <li><a href="#">备用</a></li>
        </ul>
    </div>
    <div class="pull-left" style="width:80%;">
        @yield('content')
    </div>
</div>
<div id="footer" class="center-block">
    <p>&copy;2016&nbsp;
    <span><a href="#">联系我们</a></span>
</p>
</div>
</body>
</html>