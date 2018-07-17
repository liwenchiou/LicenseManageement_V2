@extends('layouts.CRUD')
@section('title', '新增')
@section('content')
    <a class="btn btn-default" href="{{ route('crud.index') }}">返回</a>
    <form action="{{ route('crud.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">公司別</label>
            <input type="text" class="form-control" name="company">
        </div>
        <div class="form-group">
            <label for="title">部門別</label>
            <input type="text" class="form-control" name="company_2">
        </div>
        <div class="form-group">
            <label for="title">名稱</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="title">IP</label>
            <input type="text" class="form-control" name="ip">
        </div>
        <div class="form-group">
            <label for="title">授權項目</label>
            <input type="text" class="form-control" name="type">

        <button type="submit" class="btn btn-primary">送出</button>
    </form>
@endsection