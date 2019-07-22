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

            $(".complete_plans").find(".fa-gbp").show();
            $(".complete_plans").find(".fa-euro").hide();
            $(".complete_plans").find(".fa-usd").hide();
            $(".complete_plans").find(".gbp").show();
            $(".complete_plans").find(".euro").hide();
            $(".complete_plans").find(".usd").hide();
        }
        if (sign === "fa-euro") {
            $(".plan_box_holder").find(".fa-gbp").hide();
            $(".plan_box_holder").find(".fa-euro").show();
            $(".plan_box_holder").find(".fa-usd").hide();
            $(".plan_box_holder").find(".gbp").hide();
            $(".plan_box_holder").find(".euro").show();
            $(".plan_box_holder").find(".usd").hide();

            $(".complete_plans").find(".fa-gbp").hide();
            $(".complete_plans").find(".fa-euro").show();
            $(".complete_plans").find(".fa-usd").hide();
            $(".complete_plans").find(".gbp").hide();
            $(".complete_plans").find(".euro").show();
            $(".complete_plans").find(".usd").hide();
        }
        if (sign === "fa-usd") {
            $(".plan_box_holder").find(".fa-gbp").hide();
            $(".plan_box_holder").find(".fa-euro").hide();
            $(".plan_box_holder").find(".fa-usd").show();
            $(".plan_box_holder").find(".gbp").hide();
            $(".plan_box_holder").find(".euro").hide();
            $(".plan_box_holder").find(".usd").show();

            $(".complete_plans").find(".fa-gbp").hide();
            $(".complete_plans").find(".fa-euro").hide();
            $(".complete_plans").find(".fa-usd").show();
            $(".complete_plans").find(".gbp").hide();
            $(".complete_plans").find(".euro").hide();
            $(".complete_plans").find(".usd").show();
        }
        $('#price-monthly-select').trigger('change');
        $('#price-monthly-selectnew').trigger('change');
        $('#price-as_you_host').text(prices.as_you_host.credit[currency]);
        $(".custom_select .value_show").html(get);
        $(".show_list").fadeOut(100);
    });

    /*Common Part*/


    /*Pricing Others*/
    /* 1st Price Box */
    var pricesnew = {
        "monthlynew": {
            <?php if( have_rows('monthly_price_listing') ): while ( have_rows('monthly_price_listing') ) : the_row(); ?>
            "<?php the_sub_field('user_no'); ?>": { "gbp": <?php the_sub_field('gbp_price'); ?>, "eur": <?php the_sub_field('euro_price'); ?>, "usd": <?php the_sub_field('usd_price'); ?> },
            <?php endwhile;endif; ?>
        },
        "monthly-extra_user": {
            <?php if( have_rows('monthly_extra_user_listing') ): while ( have_rows('monthly_extra_user_listing') ) : the_row(); ?>
            "<?php the_sub_field('user_no'); ?>": { "gbp": <?php the_sub_field('gbp_price'); ?>, "eur": <?php the_sub_field('euro_price'); ?>, "usd": <?php the_sub_field('usd_price'); ?> },
            <?php endwhile;endif; ?>
        },
        "monthly-extra_user_text": {
            <?php if( have_rows('monthly_extra_user_text') ): while ( have_rows('monthly_extra_user_text') ) : the_row(); ?>
            "<?php the_sub_field('user_no'); ?>": "<?php the_sub_field('user_text'); ?>",
            <?php endwhile;endif; ?>
        },
        "as_you_host": {
            <?php if( have_rows('as_you_host') ): while ( have_rows('as_you_host') ) : the_row(); ?>
            "<?php the_sub_field('user_text'); ?>": { "gbp": <?php the_sub_field('gbp_price'); ?>, "eur": <?php the_sub_field('euro_price'); ?>, "usd": <?php the_sub_field('usd_price'); ?> },
            <?php endwhile;endif; ?>
        }
    };
    $('#price-monthly-selectnew').bind('change blur', function(e) {
        var currency = $('.value_show').data("value");
        var sign = currency_signs[currency];
        if (sign === "fa-gbp") {
            $(".plan_box_holder").find(".fa-gbp").show();
            $(".plan_box_holder").find(".fa-euro").hide();
            $(".plan_box_holder").find(".fa-usd").hide();
			
			$(".compare_table_sec").find(".fa-gbp").show();
            $(".compare_table_sec").find(".fa-euro").hide();
            $(".compare_table_sec").find(".fa-usd").hide();
        }
        if (sign === "fa-euro") {
            $(".plan_box_holder").find(".fa-gbp").hide();
            $(".plan_box_holder").find(".fa-euro").show();
            $(".plan_box_holder").find(".fa-usd").hide();
			
			$(".compare_table_sec").find(".fa-gbp").hide();
            $(".compare_table_sec").find(".fa-euro").show();
            $(".compare_table_sec").find(".fa-usd").hide();
        }
        if (sign === "fa-usd") {
            $(".plan_box_holder").find(".fa-gbp").hide();
            $(".plan_box_holder").find(".fa-euro").hide();
            $(".plan_box_holder").find(".fa-usd").show();
			
			$(".compare_table_sec").find(".fa-gbp").hide();
            $(".compare_table_sec").find(".fa-euro").hide();
            $(".compare_table_sec").find(".fa-usd").show();
        }
        var nb_user = $(e.target).val();
        var $word_user = $('#word-user');
        if (nb_user <= 1) {
            $word_user.text($word_user.attr('data-singular'));
        } else {
            $word_user.text($word_user.attr('data-plural'));
        }

        $('#price-monthlynew').text(pricesnew.monthlynew[nb_user][currency]);
    });

    /*Pricing Others*/

</script>