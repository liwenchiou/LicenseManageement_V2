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
<script>
    $('.date').datepicker({
        autoclose: true,
        dateFormat: "yy-mm-dd"
    });
</script>
<form action="{{ route('event.store') }}" method="post" style="font-size: 18px;font-family:Microsoft JhengHei;">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">代辦事項</label>
        <input type="text" name="title" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="title">開始日期</label>
        <input type="date" name="start_date" class="start_date" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="title">結束日期</label>
        <input type="date" name="end_date" class="end_date" class="form-control"/>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary" style="font-size: 18px;font-family:Microsoft JhengHei;">新增</button>
    </div>
</form>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/locale-all.js"></script>
@endsection