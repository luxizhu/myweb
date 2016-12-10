@extends('common')
@section('content')
    <div id="content">
        <div class="pull-left" style="width:15%">
            <ul class="nav nav-pills">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    PHP
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
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
    </div>
@endsection