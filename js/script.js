jQuery(document).ready(function($) {


    $('#product_info_submit').click(function(e){
        // e.preventDefault();
        
    })


   $('#part-group-create-new').click(function(e){
        e.preventDefault();

        


        // ajax on adding single product page
        $.ajax({
        url: generate_user_product_info.ajaxurl,
        type: 'post',
        data: {
            action: 'create_new_part_group',
        
            },
            success: function(response){

                alert(response);
            },
            error: function(error){
                console.log(error);
            }
            
        });
    });



});