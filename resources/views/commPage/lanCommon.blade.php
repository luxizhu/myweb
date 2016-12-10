@extends('common')
@section('content')
    <div class="pull-left" style="width:100%" id="lanNav">
        <ul class="nav nav-pills">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                选择
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" id="lanList">
                    <li><a href="#">PHP</a></li>
                    <li><a href="#">JAVA</a></li>
                    <li><a href="#">Python</a></li>
                    <li><a href="#">HTML</a></li>
                    <li><a href="#">JS</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="pull-left" style="width:80%;">
        @yield('lan')
    </div>
@endsection