@extends('layouts.CRUD')
@section('title', '查看')
@section('content')
    <table class="table table-hover"style="font-size: 18px;font-family:Microsoft JhengHei;">
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
            <tr>
                <td>{{ $crud_post->company }}</td>
                <td>{{ $crud_post->company_2 }}</td>
                <td>{{ $crud_post->name }}</td>
                <td>{{ $crud_post->ip }}</td>
                <td>{{ $crud_post->type }}</td>
                <td>{{ $crud_post->comm }}</td>
                <td>{{ $crud_post->created_at }}</td>
            </tr>
        </tbody>
    </table>
    <a class="btn btn-primary" href="{{ route('crud.edit', $crud_post->id) }}">編輯</a>
    <button class="btn btn-danger" data-toggle="modal" data-target="#myModal">刪除</button>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4>是否刪除？</h4>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('crud.destroy', $crud_post->id) }}" method="post">
                        {{ method_field('delete') }}
                        {{ csrf_field() }}
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        <button type="submmit" class="btn btn-danger">刪除</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection