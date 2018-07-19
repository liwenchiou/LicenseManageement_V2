@extends('layouts.CRUD')
@section('title', '查看')
@section('content')
    <table class="table table-hover" style="font-size: 18px;font-family:Microsoft JhengHei;">
        <thead>
        <th>公司簡稱</th>
        <th>公司名稱</th>
        <th>更新時間</th>
        </thead>
        <tbody>
            <tr>
                <td>{{ $company_post->company_en }}</td>
                <td>{{ $company_post->company_cn }}</td>
                <td>{{ $company_post->created_at }}</td>
            </tr>
        </tbody>
    </table>
    <a class="btn btn-primary" href="{{ route('company.edit', $company_post->id) }}" style="font-size: 18px;font-family:Microsoft JhengHei;">編輯</a>
    <button class="btn btn-danger" data-toggle="modal" data-target="#myModal" style="font-size: 18px;font-family:Microsoft JhengHei;">刪除</button>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4>是否刪除？</h4>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('company.destroy', $company_post->id) }}" method="post">
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