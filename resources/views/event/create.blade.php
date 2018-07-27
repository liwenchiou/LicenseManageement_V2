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