@extends('layouts.CRUD')
@section('title', '首頁')
@section('content')
    {{--'lisence_en', 'lisence_cn', 'lisence_code','lisence_num'--}}
    <a class="btn btn-primary" href="{{ route('lisence.create') }}" style="font-size: 18px;font-family:Microsoft JhengHei;">新增授權項目</a>
    <br><br>
    <table class="table table-hover" style="font-size: 18px;font-family:Microsoft JhengHei;">
        <thead>
        <th>授權項目名稱(英)</th>
        <th>授權項目名稱(中)</th>
        <th>授權碼</th>
        <th>授權數量</th>
        <th>更新時間</th>
        </thead>
        <tbody>
        @foreach ($lisence_posts as $post)
            <tr onclick="window.location = '{{ route('lisence.show', $post->id) }}'">
                <td>{{ $post->lisence_en }}</td>
                <td>{{ $post->lisence_cn }}</td>
                <td>{{ $post->lisence_code }}</td>
                <td>{{ $post->lisence_num }}</td>
                <td>{{ $post->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection