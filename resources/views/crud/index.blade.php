@extends('layouts.CRUD')
@section('title', '首頁')
@section('content')

    <div align="left" style="float:left"><a class="btn btn-primary" href="{{ route('crud.create') }}" style="font-size: 18px;font-family:Microsoft JhengHei;">新增授權</a></div>
    <div align="right"><a class="btn btn-primary" href="{{ route('company.index') }}"style="font-size: 18px;font-family:Microsoft JhengHei;">公司管理</a>
    <a class="btn btn-primary" href="{{ route('lisence.index') }}"style="font-size: 18px;font-family:Microsoft JhengHei;">授權項目管理</a></div>
    <br><br>
    <table class="table table-hover" style="font-size: 18px;font-family:Microsoft JhengHei;">
        <thead>
        <th>公司別</th>
        <th>部門別</th>
        <th>名稱</th>
        <th>IP</th>
        <th>授權項目</th>
        <th>備註</th>
        <th>更新時間</th>
        </thead>
        <tbody>
        @foreach ($crud_posts as $post)
            <tr onclick="window.location = '{{ route('crud.show', $post->id) }}'">
                <td>{{ $post->company }}</td>
                <td>{{ $post->company_2 }}</td>
                <td>{{ $post->name }}</td>
                <td>{{ $post->ip }}</td>
                <td>{{ $post->type }}</td>
                <td style="word-break: break-all;width:370px">{{ $post->comm }}</td>
                <td>{{ $post->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection