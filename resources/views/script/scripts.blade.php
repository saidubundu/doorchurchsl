@section('script')
    <script type="text/javascript">
        $('#draft-btn').click(function (e) {
            e.preventDefault();
            $('#published_at').val("");
            $('#post-form').submit();
        });

        $(function () {
            $('#published_at').datetimepicker({
                format: 'YY-MM-DD HH:mm:ss',
                showClear: true
            });
        });

        $('#excerpt').wysihtml5();
        $('#body').wysihtml5();
    </script>
@stop
