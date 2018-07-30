@extends('layouts.CRUD')
@section('style')
    {{--<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <style>
        .fc-today {
            background: #ff9682 !important;
        }
    </style>
@endsection
@section('content')
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $('.date').datepicker({
        autoclose: true,
        dateFormat: "yy-mm-dd"
    });
</script>
<table action="{{ route('event.update', $event_post->id) }}" method="post" style="font-size: 18px;font-family:Microsoft JhengHei;">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">代辦事項:{{ $event_post->title }}</label>
    </div>
    <br>
    <div class="form-group">
        <label for="title">開始日期:{{ $event_post->start_date }}</label>
    </div>
    <br>
    <div class="form-group">
        <label for="title">結束日期:{{ $event_post->end_date }}</label>
    </div>
    <br><br>
    <div class="form-group">
        <a class="btn btn-primary" href="{{ route('event.edit', $event_post->id) }}">編輯</a>
        <button class="btn btn-danger" data-toggle="modal" data-target="#myModal">刪除</button>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h4>是否刪除？</h4>
                    </div>
                    <div class="modal-footer">
                        <form action="{{ route('event.destroy', $event_post->id) }}" method="post">
                            {{ method_field('delete') }}
                            {{ csrf_field() }}
                            <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                            <button type="submmit" class="btn btn-danger">刪除</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</table>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/locale-all.js"></script>
@endsection