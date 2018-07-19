@extends('layouts.CRUD')
@section('title', '首頁')
@section('content')
    <a class="btn btn-primary" href="{{ route('company.create') }}" style="font-size: 18px;font-family:Microsoft JhengHei;">新增公司</a>
    <br><br>
    <table class="table table-hover" style="font-size: 18px;font-family:Microsoft JhengHei;">
        <thead>
        <th>公司簡稱</th>
        <th>公司名</th>
        <th>更新時間</th>
        </thead>
        <tbody style="font-size: 18px;font-family:Microsoft JhengHei;">
        @foreach ($company_posts as $post)
            <tr onclick="window.location = '{{ route('company.show', $post->id) }}'">
                <td>{{ $post->company_en }}</td>
                <td>{{ $post->company_cn }}</td>
                <td>{{ $post->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection