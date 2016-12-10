@extends('commPage\lanCommon')
@section('lan')
<div class="center-block" style="margin: 80px 0 0 50px;">
    <div>
    PHP基础<br/>
        <a class="btn btn-primary" href="{{ URL('lan/varLearn') }}">变量</a>
        <a class="btn btn-primary" href="#">表达式</a>
        <a class="btn btn-primary" href="#">字符串</a>
        <a class="btn btn-primary" href="#">控制结构</a>
    </div>
    <br/>
</div>
@endsection