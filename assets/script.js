$(document).ready(function() {
    $("#table").delegate("td:nth-child(8)", "click", function() {
        $(".hide_btn").submit(function() {
            $.ajax({
                url:'/sql.php',
                type: 'POST',
                data: {increment: true},
                success: function() {
                    console.log('test');
                }
            });
            });
        $(this).closest("tr").hide();
        });

    var i = $(".counter_input").val();
    $(".counter_minus").click(function(){
        if (i <= 1) {return;};
        $(this).siblings(".counter_input").val(--i);

    });
    $(".counter_plus").click(function(){
        $(this).siblings(".counter_input").val(++i);
    });

});



