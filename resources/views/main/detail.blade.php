@extends('common')
@section('content')
<div>
    <div>
        <ol id="breadTab" class="breadcrumb">
        </ol>
    </div>
    <table class="table table-bordered">
        <tr>
            <td style="width:10%;">名字</td>
            <td>{{ $people->name }}</td>
        </tr>
        <tr>
            <td>电话</td>
            <td>{{ $people->phone }}</td>
        </tr>
        <tr>
            <td>邮箱</td>
            <td>{{ $people->email }}</td>
        </tr>
        <tr>
            <td>地址</td>
            <td>{{ $people->address }}</td>
        </tr>
        <tr>
            <td>关系</td>
            <td>{{ $people->relation }}</td>
        </tr>
        <tr>
            <td>生日</td>
            <td>
                @if($people->birthday < \Carbon\Carbon::parse('2000/01/01'))
                    {{ $people->birthday->toDateString() }}
                @endif
            </td>

        </tr>
        <tr>
            <td>认识时间</td>
            <td>{{ $people->knowTime->toDateString() }}</td>
        </tr>
        <tr>
            <td>介绍</td>
            <td>{{ $people->intro }}</td>
        </tr>
    </table>
</div>
@endsection