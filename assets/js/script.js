jQuery(document).ready(function($) {



    $('#product_info_submit').click(function(e){
        // e.preventDefault();
        
    })


   $('#part-group-create-new').click(function(e){
        e.preventDefault();

        var part_group_wrapper = $('#part-group-wrapper');
        var part_group_with_input_item = $('.part-group-with-input').length;

        

        // ajax on adding single product page
        $.ajax({
        url: generate_user_product_info.ajaxurl,
        type: 'post',
        data: {
            action: 'create_new_part_group',
            part_group_item_count: part_group_with_input_item + 1,
        
            },
            success: function(response){

                part_group_wrapper.append(response);

                console.log(part_group_with_input_item);
            },
            error: function(error){
                console.log(error);
            }
            
        });
    });
    
    $('#advantage-group-create-new').click(function(e){
        e.preventDefault();

        var advantage_group_wrapper = $('#advantage-group-wrapper');
      

        $.ajax({
        url: generate_user_product_info.ajaxurl,
        type: 'post',
        data: {
            action: 'create_new_advantage_group',
            },
            success: function(response){

                advantage_group_wrapper.append(response);

                
            },
            error: function(error){
                console.log(error);
            }
            
        });
    }); 
    
    $('.figure-add-new').click(function(e){
        e.preventDefault();

        var figure_group_wrapper = $('.figure-group-wrapper');
      

        $.ajax({
        url: generate_user_product_info.ajaxurl,
        type: 'post',
        data: {
            action: 'create_new_figure_group',
            },
            success: function(response){

                figure_group_wrapper.append(response);

                
            },
            error: function(error){
                console.log(error);
            }
            
        });
    });



});