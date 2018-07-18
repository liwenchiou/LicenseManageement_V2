@extends('layouts.CRUD')
@section('title', '編輯')
@section('content')
    <form action="{{ route('crud.update', $post->id) }}" method="post">
        {{ method_field('put') }}
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">公司別</label>
            <input type="text" class="form-control" name="company" value="{{ $post->company }}">
        </div>
        <div class="form-group">
            <label for="title">部門別</label>
            <input type="text" class="form-control" name="company_2" value="{{ $post->company_2 }}">
        </div>
        <div class="form-group">
            <label for="title">名稱</label>
            <input type="text" class="form-control" name="name" value="{{ $post->name }}">
        </div>
        <div class="form-group">
            <label for="title">IP</label>
            <input type="text" class="form-control" name="ip" value="{{ $post->ip }}">
        </div>
        <div class="form-group">
            <label for="title">授權項目</label>
            <input type="text" class="form-control" name="type" value="{{ $post->type }}">

            <button type="submit" class="btn btn-primary">送出</button>
        </div>
    </form>
@endsection