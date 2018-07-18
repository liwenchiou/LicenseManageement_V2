@extends('layouts.CRUD')
@section('title', '新增')
@section('content')
    <form action="{{ route('crud.store') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">公司別</label>
            <select name="company" class="form-control">
                @foreach($company_post as $post)
                    <option>{{$post->company_cn}}</option>
                @endforeach
                {{--<option>合鍋物</option>--}}
                {{--<option>萊特薇庭</option>--}}
                {{--<option>新天地-台中梧棲店</option>--}}
                {{--<option>新天地-台中北區店</option>--}}
                {{--<option>新天地-台中東區店</option>--}}
                {{--<option>新天地-總公司</option>--}}
                {{--<option>雅悅-松山會館</option>--}}
                {{--<option>新天地-彰化員林店</option>--}}
                {{--<option>雅悅-高雄會館</option>--}}
                {{--<option>雅悅-文華會館</option>--}}
                {{--<option>雅悅-台南會館</option>--}}
            </select>
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
            <select name="type" class="form-control">
                <option>Radmin 3 遠端連線_2lin</option>
                <option>Radmin 3 遠端連線_50lin</option>
                <option>Office 2016中小企業版(MAC)</option>
                <option>Adobe cc</option>
            </select>
        <button type="submit" class="btn btn-primary">送出</button>
        </div>
    </form>
@endsection