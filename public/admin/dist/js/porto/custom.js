(function($){
    $(document).ready(function(){



        // Logout Features
        $(document).on('click','#logout_btn',function (e) {
           e.preventDefault();
           $('#logout_form').submit();
        });


        //Data Tables

        $(function () {
            $('#example1').DataTable()

        });

        //CK Editor

        $(function () {
           CKEDITOR.replace('editor1');
        });

        $(function () {
            ('.post_tag_select').select2();
        });



    });
})(jQuery);   //$ sign will be converted into jQuery
