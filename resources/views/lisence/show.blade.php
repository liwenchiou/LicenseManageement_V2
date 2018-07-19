@extends('layouts.CRUD')
@section('title', '查看')
@section('content')
    <table class="table table-hover" style="font-size: 18px;font-family:Microsoft JhengHei;">
        <thead>
        <th>授權項目名稱(英)</th>
        <th>授權項目名稱(中)</th>
        <th>授權碼</th>
        <th>授權數量</th>
        <th>更新時間</th>
        </thead>
        <tbody>
            <tr>
                <td>{{ $lisence_post->lisence_en }}</td>
                <td>{{ $lisence_post->lisence_cn }}</td>
                <td>{{ $lisence_post->lisence_code }}</td>
                <td>{{ $lisence_post->lisence_num }}</td>
                <td>{{ $lisence_post->created_at }}</td>
            </tr>
        </tbody>
    </table>
    <a class="btn btn-primary" href="{{ route('lisence.edit', $lisence_post->id) }}" style="font-size: 18px;font-family:Microsoft JhengHei;">編輯</a>
    <button class="btn btn-danger" data-toggle="modal" data-target="#myModal" style="font-size: 18px;font-family:Microsoft JhengHei;">刪除</button>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4>是否刪除？</h4>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('lisence.destroy', $lisence_post->id) }}" method="post">
                        {{ method_field('delete') }}
                        {{ csrf_field() }}
                        <button type="button" class="btn btn-default" data-dismiss="modal" style="font-size: 18px;font-family:Microsoft JhengHei;">取消</button>
                        <button type="submmit" class="btn btn-danger" style="font-size: 18px;font-family:Microsoft JhengHei;">刪除</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection