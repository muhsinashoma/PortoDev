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



        //Category Edit

        $('.edit_category').click(function (e) {

            e.preventDefault();

            //Data will be recieved  by ajax() since it is a form a
            let id = $(this).attr('edit_id');   //  alert(id);

            $.ajax({
                url : 'post_category/' +id+ '/edit',
                success : function (data) {

                 alert(data.id);                      //return or received from CategoryController
                 // alert(data.cate_name);              //return or received from CategoryController


                //   alert(data.sub_category_id);

                    $('#edit_post_category form input[name="cate_name"]').val(data.cate_name);
                    $('#edit_post_category form input[name="checkbox"]').val(data.sub_category_id);


                    $('#edit_post_category').modal('show');
                }
                
            });
            

        });





        //Post Image Load

        $('#featured_image').change(function (e) {
            //To create image unique name
            let img_url =  URL.createObjectURL(e.target.files[0]);   //  alert(img_url);
            $('.post_img_load').attr('src',img_url);                 //To show this location

            //console.log('hi');
        });



        
        //Post Gallery Image Load
        $('#post_img_select_g').change(function (e) {

           // console.log(e);

            let img_gall = '';

            for(let i = 0; i<e.target.files.length; i++){

                let file_url = URL.createObjectURL(e.target.files[i]);

                 // console.log(file_url);                   //to show unique url

               // '<br>';

                 img_gall += '<img class="shadow" src="'+file_url+'">';   //to store into img_gall one by one

                //console.log(img_gall);
            }

            $('.post_gallery_img').html(img_gall);        //to show in that place

        });



        //Vedio Image Load

        $('#post_vedio_icon').change(function (e) {

            // console.log(e);
          //  alert('test');

            let vedio_gall = '';

            for(let i = 0; i<e.target.files.length; i++){

                let file_url = URL.createObjectURL(e.target.files[i]);

               //  console.log(file_url);                   //to show unique url

                // '<br>';

                vedio_gall += '<img class="shadow" src="'+file_url+'">';   //to store into img_gall one by one

               // console.log(vedio_gall);
            }

            $('.post_vedio_upload').html(vedio_gall);        //to show in that place

        });





        //Select Post Format and Receied Post Formate from post form

        $('#post_format').change(function () {

            let format = $(this).val();   //alert(format);

            if(format == 'Image'){
                 $('.single_image').show();
            }else{
                $('.single_image').hide();
            }

            if(format == 'Gallery'){
                $('.post_gallery').show();
            }else{
                $('.post_gallery').hide();
            }


            if(format == 'Video'){
                $('.post_video').show();
            }else{
                $('.post_video').hide();
            }

            if(format == 'Audio'){
                $('.post_audio').show();
            }else{
                $('.post_audio').hide();
            }


        });


       // $('a.comment_reply_btn_6').click(function (e) {
       //
       //     alert('abc');
       //
       //     e.preventDefault();
       //
       //     $('.post-leave-comment').toggle();
       // });



    });
})(jQuery);   //$ sign will be converted into jQuery


//
// function postReply (commentId) {
//     $("#comment_box_id_"+commentId).show();
// }
//
//
// function postHideReply (commentId) {
//     $("#comment_box_id_"+commentId).hide();
// }
//