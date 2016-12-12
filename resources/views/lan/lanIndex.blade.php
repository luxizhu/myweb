@extends('commPage\lanCommon')
@section('lan')
    <div class="pull-left text-success btn btn-primary">
        <span>{{ $course }}</span>
    </div>
    @if($course=='php')
        <div class="center-block" style="margin: 80px 0 0 50px;">
            <div>
                PHP基础<br/>
                <a class="btn btn-primary" href="{{ URL('php/varLearn') }}">变量</a>
                <a class="btn btn-primary" href="#">表达式</a>
                <a class="btn btn-primary" href="#">字符串</a>
                <a class="btn btn-primary" href="#">控制结构</a>
            </div>
            <br/>
        </div>
    @elseif($course=='java')
        <div class="center-block" style="margin: 80px 0 0 50px;">
            <div>
                JAVA编程思想<br/>
                <a class="btn btn-primary" href="{{ URL('java/varLearn') }}">变量</a>
                <a class="btn btn-primary" href="#">表达式</a>
                <a class="btn btn-primary" href="#">字符串</a>
                <a class="btn btn-primary" href="#">控制结构</a>
            </div>
        </div>
    @elseif($course=='python')
        <div class="center-block" style="margin: 80px 0 0 50px;">
            python
        </div>
    @else
        <div class="center-block" style="margin: 80px 0 0 50px;">
            null
        </div>
    @endif
@endsection
