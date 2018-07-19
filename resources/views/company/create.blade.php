@extends('layouts.CRUD')
@section('title', '新增')
@section('content')
    <form action="{{ route('company.store') }}" method="post" style="font-size: 18px;font-family:Microsoft JhengHei;">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">公司簡稱</label>
            <input type="text" class="form-control" name="company_en" style="font-size: 18px;font-family:Microsoft JhengHei;">
        </div>
        <div class="form-group">
            <label for="title">公司名稱</label>
            <input type="text" class="form-control" name="company_cn" style="font-size: 18px;font-family:Microsoft JhengHei;">
        </div>
        <div>
            <button type="submit" class="btn btn-primary" style="font-size: 18px;font-family:Microsoft JhengHei;">送出</button>
        </div>
    </form>
@endsection