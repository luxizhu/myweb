@extends('common')
@section('content')
    <div class="pull-left" id="lanNav">
        <ul class="nav nav-pills">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                选择
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" id="lanList">
                    <li><a href="{{ URL('lan\php') }}">PHP</a></li>
                    <li><a href="{{ URL('lan\java') }}">JAVA</a></li>
                    <li><a href="{{ URL('lan\python') }}">Python</a></li>
                    <li><a href="{{ URL('lan\html') }}">HTML</a></li>
                    <li><a href="{{ URL('lan\js') }}">JS</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="pull-left" style="width:80%;">
        @yield('lan')
    </div>
@endsection