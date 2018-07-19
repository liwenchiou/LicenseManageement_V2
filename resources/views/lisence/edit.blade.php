@extends('layouts.CRUD')
@section('title', '編輯')
@section('content')
    {{--'lisence_en', 'lisence_cn', 'lisence_code','lisence_num'--}}
    <form action="{{ route('lisence.update', $lisence_post->id) }}" method="post" style="font-size: 18px;font-family:Microsoft JhengHei;">
        {{ method_field('put') }}
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">授權項目名稱(英)</label>
            <input type="text" class="form-control" name="lisence_en" value="{{ $lisence_post->lisence_en }}" style="font-size: 18px;font-family:Microsoft JhengHei;">
        </div>
        <div class="form-group">
            <label for="title">授權項目名稱(中)</label>
            <input type="text" class="form-control" name="lisence_cn" value="{{ $lisence_post->lisence_cn }}" style="font-size: 18px;font-family:Microsoft JhengHei;">
        </div>
        <div class="form-group">
            <label for="title">授權碼</label>
            <input type="text" class="form-control" name="lisence_code" value="{{ $lisence_post->lisence_code }}" style="font-size: 18px;font-family:Microsoft JhengHei;">
        </div>
        <div class="form-group">
            <label for="title">授權數量</label>
            <input type="text" class="form-control" name="lisence_num" value="{{ $lisence_post->lisence_num }}" style="font-size: 18px;font-family:Microsoft JhengHei;">
        </div>
        <div>
            <button type="submit" class="btn btn-primary" style="font-size: 18px;font-family:Microsoft JhengHei;">送出</button>
        </div>
    </form>
@endsection