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
    $(".counter div:first-child").click(function(){
        $.ajax({
            url: '/sql_quantity.php',
            type: 'POST',
            data: {increment: true},
            success: function() { }
        });
        if (i <= 1) {return;};
        $(".counter_input").val(--i);

    });
    $(".counter div:last-child").click(function(){
        $.ajax({
            url: '/sql_quantity.php',
            type: 'POST',
            data: {increment: true},
            success: function() {}
        });
        $(".counter_input").val(++i);
    });

});



