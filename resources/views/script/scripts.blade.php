@section('script')
    <script type="text/javascript">
        $('#draft-btn').click(function (e) {
            e.preventDefault();
            $('#published_at').val("");
            $('#post-form').submit();
        });

        $(function () {
            $('#published_at').datetimepicker({
                format: 'Y-MM-DD HH:mm:ss',
                showClear: true
            });
        });

        // CKEDITOR.replace( 'body', {
        //     filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
        //     filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
        // } );
        CKEDITOR.replace('excerpt');

        CKEDITOR.replace('body');

        // $('#excerpt').wysihtml5();
        // $('#body').wysihtml5({
        //    toolbar: {
        //        "color": true //Button to change color of font
        //    }
        // });
    </script>
@stop
