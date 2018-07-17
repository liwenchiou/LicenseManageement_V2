@extends('layouts.CRUD')
@section('title', '首頁')
@section('content')
    <a class="btn btn-primary" href="{{ route('crud.create') }}">新增</a>
    <table class="table table-hover">
        <thead>
        <th>公司別</th>
        <th>部門別</th>
        <th>名稱</th>
        <th>IP</th>
        <th>授權項目</th>
        <th>更新時間</th>
        </thead>
        <tbody>
        @foreach ($posts as $post)
            <tr onclick="window.location = '{{ route('crud.show', $post->id) }}'">
                <td>{{ $post->company }}</td>
                <td>{{ $post->company_2 }}</td>
                <td>{{ $post->name }}</td>
                <td>{{ $post->ip }}</td>
                <td>{{ $post->type }}</td>
                <td>{{ $post->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection