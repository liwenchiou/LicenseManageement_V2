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
            {{--<tr onclick="window.location = '{{ route('crud.show', $post->id) }}'">--}}
            <tr>
                <td>{{ $post->company }}</td>
                <td>{{ $post->company_2 }}</td>
                <td>{{ $post->name }}</td>
                <td>{{ $post->ip }}</td>
                <td>{{ $post->type }}</td>
                <td>{{ $post->created_at }}</td>
                <td><a class="btn btn-primary" href="{{ route('crud.edit', $post->id) }}">編輯</a></td>
                <td><button class="btn btn-danger" data-toggle="modal" data-target="#myModal">刪除</button>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h4>是否刪除？</h4>
                            </div>
                            <div class="modal-footer">
                                <form action="{{ route('crud.destroy', $post->id) }}" method="post">
                                    {{ method_field('delete') }}
                                    {{ csrf_field() }}
                                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                                    <button type="submmit" class="btn btn-danger">刪除</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection