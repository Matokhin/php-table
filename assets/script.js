$(document).ready(function() {
    $('#table').delegate('td:nth-child(8)', 'click', function() {
        var btn = $(this).children(".hide_btn");
        btn.click(function() {
            id = $(this).attr('data-id');
            $.ajax({
                url:'/sql.php',
                type: 'POST',
                data: {id: id},
                success: function() {}
            });
            $(this).closest('tr').hide();
        });

    });


    $('.counter').on('click', '.counter_minus', function(){
        var input = $(this).siblings('.counter_input');
        var i = $(input).val();
        id_minus = $(input).attr('data-id');
        if (i <= 1) {return;};
        $(input).val(--i);
        var count_minus = $(input).attr('value');
        $.ajax({
            url:'/sql_quantity.php',
            type:'POST',
            data: {count: count_minus, id_minus: id_minus},
            success: function() {}
        });


    });


    $('.counter').on('click', '.counter_plus', function(){
        var input = $(this).siblings('.counter_input');
        var i = $(input).val();
        id_plus = $(input).attr('data-id');
        $(input).val(++i);
        var count_plus = $(input).attr('value');
        $.ajax({
            url:'/sql_quantity.php',
            type: 'POST',
            data:  {count: count_plus, id_plus: id_plus},
            success: function() {}
        });


    });





});



