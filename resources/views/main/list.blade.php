@extends('common')
@section('content')
<table class="table table-hover">
    <caption class="text-center">所有人</caption>
    <thead>
        <tr>
            <th style="width:15%;">名字</th>
            <th style="width:15%;">电话</th>
            <th style="width:10%;">邮箱</th>
            <th style="width:10%;">地址</th>
            <th style="width:10%;">关系</th>
            <th style="width:15%;">生日</th>
            <th style="width:15%;">认识时间</th>
            <th style="width:15%;">查看</th>
        </tr>
    </thead>
    <tbody>
    @foreach($peoples as $people)
        <tr>
            <td>{{ $people->name }}</td>
            <td>{{ $people->phone }}</td>
            <td>{{ $people->email }}</td>
            <td>{{ $people->address }}</td>
            <td>{{ $people->relation }}</td>
            <td>
                @if($people->birthday < \Carbon\Carbon::parse('2000/01/01'))
                {{ $people->birthday->toDateString() }}
                @endif
            </td>
            <td>{{ $people->knowTime->toDateString() }}</td>
            <td><a href="{{ URL('people/'.$people->id) }}">查看</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection