@extends('layouts.CRUD')
@section('title', '編輯')
@section('content')
    <form action="{{ route('company.update', $company_post->id) }}" method="post" style="font-size: 18px;font-family:Microsoft JhengHei;">
        {{ method_field('put') }}
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">公司簡稱</label>
            <input type="text" class="form-control" name="company_en" value="{{ $company_post->company_en }}" style="font-size: 18px;font-family:Microsoft JhengHei;">
        </div>
        <div class="form-group">
            <label for="title">公司名稱</label>
            <input type="text" class="form-control" name="company_cn" value="{{ $company_post->company_cn }}" style="font-size: 18px;font-family:Microsoft JhengHei;">
        </div>
        <div>

            <button type="submit" class="btn btn-primary" style="font-size: 18px;font-family:Microsoft JhengHei;">送出</button>
        </div>
    </form>
@endsection