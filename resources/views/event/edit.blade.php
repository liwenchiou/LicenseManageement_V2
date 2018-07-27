<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<script>
    $('.date').datepicker({
        autoclose: true,
        dateFormat: "yy-mm-dd"
    });
</script>
<form action="{{ route('event.update', $event_post->id) }}" method="post" style="font-size: 18px;font-family:Microsoft JhengHei;">
    {{ method_field('put') }}
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">代辦事項</label>
        <input type="text" name="title" class="form-control" value="{{ $event_post->title }}"/>
    </div>
    <div class="form-group">
        <label for="title">開始日期</label>
        <input type="date" name="start_date" class="start_date" class="form-control" value="{{ $event_post->start_date }}"/>
    </div>
    <div class="form-group">
        <label for="title">結束日期</label>
        <input type="date" name="end_date" class="end_date" class="form-control" value="{{ $event_post->end_date }}"/>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary" style="font-size: 18px;font-family:Microsoft JhengHei;">送出</button>
    </div>
</form>