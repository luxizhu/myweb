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
    <i><strong>函数参数</strong></i>
    <pre>
        function x10 ($value){
            $value = $value*10;
            return $value;
        }
    </pre>
    <i><strong>全局变量</strong></i>
    可以在程序任何地方访问；为了修改一个全局变量，必须在要修改该变量的函数中将其显式的声明为全局变量。
    <pre>
        $somevar = 15;
        function addit(){
            global $somevar;
            $somevar++;
            //$GLOBALS["somevar"]++;
            echo "Somevar is $somevar";
        }
        addit();
    </pre>
    <i><strong>静态变量</strong><small>static</small></i>
    <pre>
        function keep_track(){
            static $count = 0;
            $count++;
            echo $count;
            echo "&lt;br/&gt;";
        }

        keep_track();
        keep_track();
        keep_track();
    </pre>
    输出结果
    <pre>
        1
        2
        3
    </pre>

@endsection