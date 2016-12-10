@extends('common')
@section('content')
    <a class="btn btn-primary" href="{{ URL('lan') }}">返回</a><br/>
    <i><strong>变量</strong><small>variable</small></i>
    是可以在不同时刻存储不同值得符号。
    <br/>
    <i><strong>局部变量</strong></i>
    在函数中声明的变量，即它只能在函数中调用。
    <pre>
        $x = 4;
        function assignx (){
            $x = 0;
            printf("$x inside function is %d &lt;br/&gt;", $x);
        }
        assignx();
        printf("$x outside of function is %d &lt;br/&gt;", $x);
    </pre>
    执行的结果
    <pre>
        $x inside function is 0;
        $x outside of function is 4;
    </pre>

@endsection