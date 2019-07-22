<script>

    /* Common Part */
    $(".show_list li").bind("click", function() {
        var get = $(this).html();
        var currency = $(this).data("value");
        $(".value_show").data("value", currency);
        var sign = currency_signs[currency];
        if (sign === "fa-gbp") {
            $(".plan_box_holder").find(".fa-gbp").show();
            $(".plan_box_holder").find(".fa-euro").hide();
            $(".plan_box_holder").find(".fa-usd").hide();
            $(".plan_box_holder").find(".gbp").show();
            $(".plan_box_holder").find(".euro").hide();
            $(".plan_box_holder").find(".usd").hide();

            $(".compare_table_sec").find(".fa-gbp").show();
            $(".compare_table_sec").find(".fa-euro").hide();
            $(".compare_table_sec").find(".fa-usd").hide();
            $(".compare_table_sec").find(".gbp").show();
            $(".compare_table_sec").find(".euro").hide();
            $(".compare_table_sec").find(".usd").hide();
        }
        if (sign === "fa-euro") {
            $(".plan_box_holder").find(".fa-gbp").hide();
            $(".plan_box_holder").find(".fa-euro").show();
            $(".plan_box_holder").find(".fa-usd").hide();
            $(".plan_box_holder").find(".gbp").hide();
            $(".plan_box_holder").find(".euro").show();
            $(".plan_box_holder").find(".usd").hide();

            $(".compare_table_sec").find(".fa-gbp").hide();
            $(".compare_table_sec").find(".fa-euro").show();
            $(".compare_table_sec").find(".fa-usd").hide();
            $(".compare_table_sec").find(".gbp").hide();
            $(".compare_table_sec").find(".euro").show();
            $(".compare_table_sec").find(".usd").hide();
        }
        if (sign === "fa-usd") {
            $(".plan_box_holder").find(".fa-gbp").hide();
            $(".plan_box_holder").find(".fa-euro").hide();
            $(".plan_box_holder").find(".fa-usd").show();
            $(".plan_box_holder").find(".gbp").hide();
            $(".plan_box_holder").find(".euro").hide();
            $(".plan_box_holder").find(".usd").show();

            $(".compare_table_sec").find(".fa-gbp").hide();
            $(".compare_table_sec").find(".fa-euro").hide();
            $(".compare_table_sec").find(".fa-usd").show();
            $(".compare_table_sec").find(".gbp").hide();
            $(".compare_table_sec").find(".euro").hide();
            $(".compare_table_sec").find(".usd").show();
        }
        $('#price-monthly-select').trigger('change');
        $('#price-monthly-selectnew').trigger('change');
        $(".custom_select .value_show").html(get);
        $(".show_list").fadeOut(100);
        $('#price-monthly').text(prices[currency]);
        $('#price-annual_table').text(prices[currency]);
    });

    var prices = {
        "gbp":"<?php the_field('price_of_gbp',3170); ?>",
        "eur":"<?php the_field('price_of_euro',3170); ?>",
        "usd":"<?php the_field('price_of_usd',3170); ?>"
    };
    var currency_signs = { gbp: 'fa-gbp', eur: 'fa-euro', usd: 'fa-usd' };

</script>