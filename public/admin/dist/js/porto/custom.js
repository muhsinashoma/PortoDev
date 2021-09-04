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



    });
})(jQuery);   //$ sign will be converted into jQuery
