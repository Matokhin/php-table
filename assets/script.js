$(document).ready(function() {
    $("#table").delegate("td:nth-child(8)", "click", function() {
        $(".hide_btn").click(function() {
            $.ajax({
                type: "POST",
                url:"/sql.php",
                data: {hide:hide},
                dataType: "json",
                success: function() {
                    console.log('test');
                }
            });
            });
        $(this).closest("tr").hide();
        });

    var i = $(".counter_input").val();
    $(".counter_minus").click(function(){
        // $.ajax({
        //     url: '/sql_quantity.php',
        //     type: 'POST',
        //     data: {increment: true},
        //     success: function() { }
        // });
        if (i <= 1) {return;};
        $(this).siblings(".counter_input").val(--i);

    });
    $(".counter_plus").click(function(){
        // $.ajax({
        //     url: '/sql_quantity.php',
        //     type: 'POST',
        //     data: {increment: true},
        //     success: function() {}
        // });
        $(this).siblings(".counter_input").val(++i);
    });

});



