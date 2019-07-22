<?php global $flatsome_opt; ?>
<!-- footer start -->
<?php if(!is_page_template('template_landing3.php')){ ?>
<footer class="site_footer">
    <?php
	if(!is_page_template(array('template_product_new.php','template_category_product.php','template_innovation_product.php','template_sim_product.php','template_landing6.php'))){  //for template product
		$call_to_action_content = get_field( 'call_to_action_content' );
		$call_to_action_button_text = get_field( 'call_to_action_button_text' );
		$call_to_action_button_type_popup = get_field( 'call_to_action_button_type_popup' );
      	$call_to_action_popup_form = get_field( 'call_to_action_popup_form' );
		$call_to_action_button_link = get_field( 'call_to_action_button_link' );
		if ( $call_to_action_content ) {
    ?>
    <!-- get started section start -->
    <section class="get_started_section <?php if($postid=='567'){ echo ' purple'; }elseif($postid=='533'){ echo ' blue'; }elseif($postid=='690'){ echo ' green'; } ?>">
        <div class="container">
            <div class="row d-flex align-items-center">
                <?php
                if ( $call_to_action_button_text ) {
                    ?>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <?php
                    } else {
                        ?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php
                        }
                        ?>
                        <?php echo $call_to_action_content; ?>
                    </div>
                    <?php
                    if ( $call_to_action_button_text ) {
                        ?>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="btn_sec">
                            <?php if($call_to_action_button_type_popup){ ?>
							  <a data-fancybox href="#post-<?php echo $call_to_action_popup_form; ?>" class="btn">
								  <?php echo $call_to_action_button_text; ?>
							  </a>
							<?php }else{ ?>
							  <a href="<?php echo $call_to_action_button_link; ?>" class="btn">
								  <?php echo $call_to_action_button_text; ?>
							  </a>
							<?php } ?>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
		</div>
    </section>
    <!-- get started section end -->
    <?php
		}
	}
    ?>
    <?php if(is_front_page() || is_page_template('template_landing4.php')){ ?>
    <?php
    $section_7_background_image = get_field( 'section_7_background_image' );
    $section_7_left_box_heading = get_field( 'section_7_left_box_heading' );
    $section_7_left_box_sub_heading = get_field( 'section_7_left_box_sub_heading' );
    $section_7_right_box_heading = get_field( 'section_7_right_box_heading' );
    //if($section_5_content){
    ?>
    <!-- sign_up_form section start -->
    <section class="body_section sign_up_sec" style="background-image:url(<?php echo $section_7_background_image['url']; ?>)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12">
                    <h3>
                        <?php echo $section_7_left_box_heading; ?>
                    </h3>
                    <?php echo $section_7_left_box_sub_heading; ?>
                    <div class="form_holder">
                        <div id='crmWebToEntityForm'>
                        <form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads232068000028857021 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatoryhome()' accept-charset='UTF-8'>

                            <!-- Do not remove this code. -->
                            <input type='text' style='display:none;' name='xnQsjsdp' value='b411564a9bf6bbf342771a2ea9228e454f451cae8cae747e4beee3a887708ccb'/>
                            <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
                            <input type='text' style='display:none;' name='xmIwtLD' value='b17d0acbd257ad6f84b364af65f891f0121627e3766f11b9ea81845fc9392d5c'/>
                            <input type='text' style='display:none;'  name='actionType' value='TGVhZHM='/>

                            <input type='text' style='display:none;' name='returnURL' value='https://www.marketdojo.com/reverse-auction/?zohostatus=success' />
                            <!-- Do not remove this code. -->



                                <input type='text'  maxlength='40' name='First Name' placeholder="First Name" />
                                <input type='text'  maxlength='80' name='Last Name' placeholder="Last Name"  />
                                <input type='text'  maxlength='100' name='Company'  placeholder="Company"  />
                                <input type='text'  maxlength='30' name='Phone'  placeholder="Phone"  />
                                <input type='text'  maxlength='100' name='Email' placeholder="Email" />
                                <select name='LEADCF15'>
                                    <option value='-None-'>-I&#x27;m interested in-</option>
                                    <option value='eSourcing&#x2f;eAuctions'>eSourcing&#x2f;eAuctions</option>
                                    <option value='Supplier&#x20;Information&#x20;Management'>Supplier Information Management</option>
                                    <option value='Contracts&#x20;Management'>Contracts Management</option>
                                    <option value='Savings&#x20;Tracking'>Savings Tracking</option>
                                    <option value='Opportunity&#x20;Analysis'>Opportunity Analysis</option>
                                    <option value='Quick&#x20;Quotes'>Quick Quotes</option>
                                    <option value='Supplier&#x20;Collaboration'>Supplier Collaboration</option>
                                </select>

                                <select name='LEADCF13'>
                                    <option value='-None-'>-I would like-</option>
                                    <option value='A&#x20;demo'>A demo</option>
                                    <option value='A&#x20;call'>A call</option>
                                </select>

                                <select style='width:250px;display:none;' name='Lead Source'>
                                    <option value='-None-'>-None-</option>
                                    <option value='Advertisement'>Advertisement</option>
                                    <option value='Adwords'>Adwords</option>
                                    <option selected value='Web&#x20;Research'>Web Research</option>
                                    <option value='Online&#x20;Social&#x20;Networking'>Online Social Networking</option>
                                    <option value='Live&#x20;Chat'>Live Chat</option>
                                    <option value='Lecture&#x2f;Talk'>Lecture&#x2f;Talk</option>
                                    <option value='Professional&#x20;Org'>Professional Org</option>
                                    <option value='Public&#x20;Relations'>Public Relations</option>
                                    <option value='Seminar-Internal'>Seminar-Internal</option>
                                    <option value='Seminar&#x20;Partner'>Seminar Partner</option>
                                    <option value='Trade&#x20;Show'>Trade Show</option>
                                    <option value='Network&#x20;Event'>Network Event</option>
                                    <option value='Employee&#x20;Referral'>Employee Referral</option>
                                    <option value='External&#x20;Referral'>External Referral</option>
                                    <option value='Partner'>Partner</option>
                                    <option value='Agent'>Agent</option>
                                    <option value='Reseller'>Reseller</option>
                                    <option value='Cold&#x20;Call'>Cold Call</option>
                                    <option value='Registration'>Registration</option>
                                    <option value='Chat'>Chat</option>
                                    <option value='AR&#x20;Contact'>AR Contact</option>
                                    <option value='NM&#x20;Contact'>NM Contact</option>
                                    <option value='ND&#x20;Contact'>ND Contact</option>
                                    <option value='Existing&#x20;Customer'>Existing Customer</option>
                                    <option value='Gov&#x20;Website'>Gov Website</option>
                                    <option value='Google&#x20;AdWords'>Google AdWords</option>
                                    <option value='Facebook'>Facebook</option>
                                    <option value='Twitter'>Twitter</option>
                                </select>
                                <input type='text' style='width:250px;display:none;'  maxlength='60' name='LEADCF1' value='Homepage&#x20;Contact&#x20;Form' />

                                <select style='width:250px;display:none;' name='LEADCF11'>
                                    <option value='-None-'>-None-</option>
                                    <option value='Demo&#x20;form'>Demo form</option>
                                    <option value='Consultation&#x20;call&#x20;form'>Consultation call form</option>
                                <option selected value='Landing&#x20;Page&#x20;form'>Landing Page form</option>
                                    <option value='Demo&#x20;Form&#x20;Spam'>Demo Form Spam</option>
                                </select>
                                <input type='submit' value='Submit' class="btn" style="margin-bottom:6px;" />
                                <input type='reset' value='Reset' class="btn" style='width:250px;display:none;'/>

                            <script>
                            var mndFileds=new Array('First Name','Last Name','Company','Email','LEADCF13','Phone');
                            var fldLangVal=new Array('First Name','Last Name','Company','Email','I would like','Phone');
                                var name='';
                                var email='';

                            function checkMandatoryhome() {
                                for(i=0;i<mndFileds.length;i++) {
                                var fieldObj=document.forms['WebToLeads232068000028857021'][mndFileds[i]];
                                if(fieldObj) {
                                    if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length==0) {
                                    if(fieldObj.type =='file')
                                        {
                                        alert('Please select a file to upload.');
                                        fieldObj.focus();
                                        return false;
                                        }
                                    alert(fldLangVal[i] +' cannot be empty');
                                    fieldObj.focus();
                                    return false;
                                    }  else if(fieldObj.nodeName=='SELECT') {
                                    if(fieldObj.options[fieldObj.selectedIndex].value=='-None-') {
                                        alert(fldLangVal[i] +' cannot be none');
                                        fieldObj.focus();
                                        return false;
                                    }
                                    } else if(fieldObj.type =='checkbox'){
                                    if(fieldObj.checked == false){
                                        alert('Please accept  '+fldLangVal[i]);
                                        fieldObj.focus();
                                        return false;
                                    }
                                    }
                                    try {
                                        if(fieldObj.name == 'Last Name') {
                                        name = fieldObj.value;
                                        }
                                    } catch (e) {}
                                    }
                                }
                                }

                            </script>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12">
                    <h3 class="centeralign">
                        <?php echo $section_7_right_box_heading; ?>
                    </h3>
                    <div class="support_box_holder clear">
                        <?php
                    if( have_rows('section_7_right_box_listing') ): while ( have_rows('section_7_right_box_listing') ) : the_row();
                    $signimage=get_sub_field('signimage');
                    $signheading=get_sub_field('signheading');
                    $signcontent=get_sub_field('signcontent');
                ?>
                        <div class="each_box clear">
                            <?php
                            if ( $signimage ) {
                                ?>
                            <span class="ico">
                            <img src="<?php echo $signimage['url']; ?>" alt="<?php echo $signimage['alt']; ?>">
                        </span>

                            <?php
                            }
                            ?>
                            <div class="content">
                                <h4>
                                    <?php echo $signheading; ?>
                                </h4>
                                <?php echo $signcontent; ?>
                            </div>
                        </div>
                        <?php endwhile;endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sign_up_form section end -->
    <?php include(TEMPLATEPATH.'/includes/clients.php'); ?>
    <?php } ?>

    <section class="body_section footer_bottom_sec <?php if(is_page(array('1771'))){ ?>blackie_footer<?php } ?>" style="background-image:url(<?php bloginfo('template_directory') ?>/images/footer_bg.jpg);">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                        <?php if ( !function_exists('dynamic_sidebar')
                        || !dynamic_sidebar('Footer Column 1 Menu') ) : ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <?php if ( !function_exists('dynamic_sidebar')
                        || !dynamic_sidebar('Footer Column 2 Menu') ) : ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                    <?php if ( !function_exists('dynamic_sidebar')
                        || !dynamic_sidebar('Footer Column 3 Menu') ) : ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <?php if ( !function_exists('dynamic_sidebar')
                        || !dynamic_sidebar('Footer Column 4 Menu') ) : ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <h3>contact us</h3>
                        <?php if($flatsome_opt['phno']){ ?>
                        <p><i class="fa fa-phone"></i>
                            <a href="tel:<?= $flatsome_opt['phno']; ?>"><?= $flatsome_opt['phno']; ?></a>
                        </p>
                        <?php }
                            if($flatsome_opt['email']){ ?>
                        <p><i class="fa fa-envelope"></i>
                            <a href="mailto:<?= $flatsome_opt['email']; ?>"><?= $flatsome_opt['email']; ?></a>
                        </p>
                        <?php } ?>
                        <h3>social</h3>
                        <div class="social">
                            <ul class="clear">
                            <?php if($flatsome_opt['fb_url']){ ?>
                                <li class="fb"><a href="<?php echo $flatsome_opt['fb_url']; ?>"><i class="fa fa-facebook"></i></a>
                                </li>
                            <?php }
                             if($flatsome_opt['twitter_url']){ ?>
                                <li class="tw"><a href="<?php echo $flatsome_opt['twitter_url']; ?>"><i class="fa fa-twitter"></i></a>
                                </li>
                            <?php }
                             if($flatsome_opt['google_url']){ ?>
                                <li class="gplus"><a href="<?php echo $flatsome_opt['google_url']; ?>"><i class="fa fa-google-plus"></i></a>
                                </li>
                            <?php }
                             if($flatsome_opt['linkedin_url']){ ?>
                                <li class="linkedin"><a href="<?php echo $flatsome_opt['linkedin_url']; ?>"><i class="fa fa-linkedin"></i></a>
                                </li>
                            <?php }
                             if($flatsome_opt['rss_url']){ ?>
                                <li class="rss"><a href="<?php echo $flatsome_opt['rss_url']; ?>"><i class="fa fa-rss"></i></a>
                                </li>
                            <?php }
                             if($flatsome_opt['youtube_url']){ ?>
                                <li class="youtube"><a href="<?php echo $flatsome_opt['youtube_url']; ?>"><i class="fa fa-youtube"></i></a>
                                </li>
                            <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <p>
                    <?php echo $flatsome_opt['copyright']; ?>
                </p>
            </div>
        </div>
    </section>
</footer>
<!-- footer end -->
<?php } ?>
</div>
<?php if(is_single() && !is_singular('webinarhub')){ ?>
<div id="download_pdf_form" class="commonPopup" style="display:none;">
    <div class="popupContent">
        <div class="popupForm">
            <form id="subscription_form_download_new" onSubmit="return false">
                <input type="hidden" name="action" value="subscription_action">
                <input type="hidden" id="post_id_subscription" name="post_id_subscription" value="">
                <fieldset>
                        <div class="input formRow" id="login_email_wrapper">
                            <label for="login_email">Name</label>
                            <div class="inputBox">
                                <input type="text" placeholder="Name" id="dname" name="dname">
                            </div>
                        </div>
                        <div class="input formRow" id="login_email_wrapper">
                            <label for="login_email">Email</label>
                            <div class="inputBox">
                                <input type="text" placeholder="Email" id="demail" name="demail">
                            </div>
                        </div>
                        <div class="input formRow" id="login_email_wrapper">
                            <label for="login_email">Company Name</label>
                            <div class="inputBox">
                                <input type="text" placeholder="Company Name" id="dcompanyname" name="dcompanyname">
                            </div>
                        </div>
                        <?php /*<div class="input formRow" id="login_email_wrapper">
                            <label for="login_email">Job Title</label>
                            <div class="inputBox">
                                <input type="text" placeholder="Job Title" id="djobtitle" name="djobtitle">
                            </div>
                        </div>*/ ?>
                        <div class="input formRow" id="login_email_wrapper">
                            <label for="login_email">Phone</label>
                            <div class="inputBox">
                                <input type="text" placeholder="Phone" id="dphone" name="dphone">
                            </div>
                        </div>
                        <?php /*<div class="input formRow" id="login_email_wrapper">
                            <label for="login_email">Country</label>
                            <div class="inputBox">
                                <input type="text" placeholder="Country" id="dcountry" name="dcountry">
                            </div>
                        </div>*/ ?>
                </fieldset>
                <div class="submit formRow">
                    <input type="submit" class="btn btn2" value="Submit">
                </div>
            </form>
            <p id="status_subs"></p>
        </div>
    </div>
</div>
<a href="" download style="display:none" id="download_now"></a>
<?php }elseif(is_page_template(array('template_landing5.php')) || is_singular('webinarhub')){ ?>
<div id="video_play_form_popup" class="commonPopup" style="display:none;">
    <div class="popupContent">
        <div class="popupForm">
            <form id="video_play_form" onSubmit="return false">
                <input type="hidden" name="action" value="video_play_action">
                <input type="hidden" id="post_id" name="post_id" value="<?php the_ID(); ?>">
                <fieldset>
                        <div class="input formRow" id="login_email_wrapper">
                            <label for="login_email">Name</label>
                            <div class="inputBox">
                                <input type="text" placeholder="Name" id="dname" name="dname">
                            </div>
                        </div>
                        <div class="input formRow" id="login_email_wrapper">
                            <label for="login_email">Email</label>
                            <div class="inputBox">
                                <input type="text" placeholder="Email" id="demail" name="demail">
                            </div>
                        </div>
                        <div class="input formRow" id="login_email_wrapper">
                            <label for="login_email">Company Name</label>
                            <div class="inputBox">
                                <input type="text" placeholder="Company Name" id="dcompanyname" name="dcompanyname">
                            </div>
                        </div>
                        <?php /*<div class="input formRow" id="login_email_wrapper">
                            <label for="login_email">Job Title</label>
                            <div class="inputBox">
                                <input type="text" placeholder="Job Title" id="djobtitle" name="djobtitle">
                            </div>
                        </div>*/ ?>
                        <div class="input formRow" id="login_email_wrapper">
                            <label for="login_email">Phone</label>
                            <div class="inputBox">
                                <input type="text" placeholder="Phone" id="dphone" name="dphone">
                            </div>
                        </div>
                        <?php /*<div class="input formRow" id="login_email_wrapper">
                            <label for="login_email">Country</label>
                            <div class="inputBox">
                                <input type="text" placeholder="Country" id="dcountry" name="dcountry">
                            </div>
                        </div>*/ ?>
                </fieldset>
                <div class="submit formRow">
                    <input type="submit" class="btn btn2" value="Submit">
                </div>
            </form>
            <p id="status_subs"></p>
        </div>
    </div>
</div>
<?php } ?>

<?php if(get_field('show_in_this_page')){ ?>
<!-- ============ NEW POPUP FORM - 04-05-18 ============== -->
<div class="newPopUpWrapper" style="display:none;">
  <div class="newPopUpContent" style="background-image: url(<?php the_field('popup_image'); ?>);">
    <span class="newClose">x</span>
    <div class="leftNewForm">
      <h2><?php the_field('popup_heading'); ?></h2>
      <h3><?php the_field('popup_sub_heading'); ?></h3>
      <div class="newPopUpFormHolder">
        <?php the_field('popup_form'); ?>
      </div> <!-- newPopUpFormHolder -->
      <div class="splText">
        <p>
          <?php the_field('popup_bottom_text'); ?>
        </p>
      </div>
    </div> <!-- leftNewForm -->
  </div> <!-- newPopUpContent -->
</div> <!-- newPopUpWrapper -->
<?php } ?>
<?php wp_footer(); ?>
<?php
    if(is_page(1082)){
        include(TEMPLATEPATH.'/pricingpage_js.php');
    }elseif(is_page(2492)){
        include(TEMPLATEPATH.'/categorypricingpage_js.php');
    }elseif(is_page(2608)){
        include(TEMPLATEPATH.'/innovationpricingpage_js.php');
    }elseif(is_page(2610)){
        include(TEMPLATEPATH.'/simpricingpage_js.php');
    }
?>
<!--script-->
<script>
$(".download_button_subscription").click(function(){
    var postidnew=$(this).data('postidnew');
    $('#post_id_subscription').val(postidnew);
});
</script>
<script>
$(document).ready(function () {
    $('.homecounter').counterUp({
            delay: 10,
            time: 1600
    });
});
</script>

<script>
var ajaxUrl = "<?= admin_url('admin-ajax.php', null); ?>";
var page = 1; // What page we are on.
var ppp =8; // Post per page

jQuery("#more_posts").on("click",function(){ // When btn is pressed.
    var totalp=$('#total_post').val();
        var feature_type=$("#feature_type").val();
    jQuery("#more_posts").attr("disabled",true); // Disable the button, temp.
    jQuery.post(ajaxUrl, {
        action:"more_post_ajax",
        offset: (page * ppp),
        //offset: (page * ppp) + 1,
        fetype:feature_type,
        ppp: ppp,
        dataType:'html'
    }).done(function(posts){
        var tp=(page * ppp)+ppp;
        //alert(tp);
        page++;
        jQuery("#listing_post").append(posts);
        if(tp>=totalp){
            jQuery("#more_posts").slideUp(300);
            jQuery("#less_posts").slideDown(300);
            $(".resource_box.hide").slideDown(200);
            jQuery("#less_posts").addClass("active");
        }
        $(".resource_box.hide").slideDown(200);
        jQuery("#more_posts").attr("disabled",false);
        $('.read_more_features').on("click",function(event){
            var feature_id=$(this).data('feature_id');
            $.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>', // Let WordPress figure this url out...
                type: 'post',
                dataType: 'HTML', // Set this so we don't need to decode the response...
                data: 'action=get_feature&feature_id='+feature_id, // One-liner form data prep...
                beforeSend: function () {
                },
                error:  function () {
                },
                success: function (data) {
                    $('#feature_sec_new').html(data);
                }
            });
            if($("section").hasClass("pageTopBar")){

                    var getPos = $('.secondary_menu').offset().top - 105;
            }
            else{
                var getPos = $('.secondary_menu').offset().top - 30;
            }


            $('html, body').animate({scrollTop: getPos + 'px' }, 2000);
        });
    });

   });
</script>


<?php if(is_page_template(array('template_team.php'))){ ?>
<script type="text/javascript">
	var post_id = <?php echo $post->ID; ?>;
	var offset = 8;
	var ajax_url = '<?php echo admin_url('admin-ajax.php'); ?>';
	var more = true;
	var clicked = false;
  $('#load_more_team_pages').click(function(){
    if(clicked===false){
		clicked=true;
  	 $.post(
  		ajax_url, {
  			'action': 'show_more_team_pages',
  			'post_id': post_id,
  			'offset': offset
  		},
  		function (json) {
  			$('#list_team_pages').append(json['content']);
  			offset = json['offset'];
  			if (!json['more']) {
  				$('#load_more_team_pages').css('display', 'none');
				$('#show_less_team_pages').css('display', 'inline-block');
  			}
        	clicked=false;
  		},

  		'json'
  	);
  }
  });
  $('#show_less_team_pages').click(function(){
    offset = 8;
    more = true;
    $('.linkTopBoxNo8').nextAll('li').remove();
    $(this).css('display', 'none');
    $('#load_more_team_pages').css('display', 'inline-block');
  });
</script>
<?php } ?>


<script type="text/javascript">

    // this is the id of the form for news letter
    $("#newsletter").submit(function () {

        var url = "<?php echo get_template_directory_uri(); ?>/news_letter_email_check.php"; // the script where you handle the form input.
        var email = document.getElementById('news_email_id').value;

            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            if (!filter.test(email)) {
                $("#status").html("Please provide a valid email address");

                email.focus;
                return false;
            }
        $.ajax({
            type: "POST",
            url: url,
            data: $("#newsletter").serialize(), // serializes the form's elements.
            datatype: "HTML",
            success: function (data)
            {
                if (data == "Subscription Successful")
                {
                    $("#status").html("");
                    $("#status").html(data); // show response from the php script.
                    $('#email').val("");
                } else {
                    $('#email').val("");
                    $("#status").html("");
                    $("#status").html(data); // show response from the php script.
                }
            }
        });

        return false; // avoid to execute the actual submit of the form.
    });



</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('input').click(function () {
            $(this).next("p").html('');
        })
        $('textarea').click(function () {
            $(this).next("p").html('');
        })
        $('#commentformid').submit(function () {
            <?php if (!is_user_logged_in()) { ?>
            var name = document.getElementById('author').value;
            if (name == "")
            {
                $("#auth_error").html("Please insert name");

                return false;
            }

            var email = document.getElementById('auth_email').value;

            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            if (!filter.test(email)) {
                $("#auth_email_error").html("Please insert valid email");
                email.focus;
                return false;
            }
            var website = document.getElementById('auth_website').value;
            if (website == "")
            {
                $("#website_error").html("Please website name");

                return false;
            }
        <?php } ?>
            var description = document.getElementById('comment').value;
            if (description == "")
            {
                $("#comment_error").html("please enter comment");
                return false;
            }

        });
    });
</script>

<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59982d8edc9e1448" async="async"></script>

<script>
    <?php if(!is_page_template(array('template_team.php'))){ ?>
    setTimeout(function(){
        // init Isotope
        var $grid = $('.gridWrap').isotope({
          itemSelector: '.listitem',
          layoutMode: 'fitRows'
        });
        // filter functions
        var filterFns = {
        // show if number is greater than 50
          numberGreaterThan50: function() {
              var number = $(this).find('.number').text();
              return parseInt( number, 10 ) > 50;
          },
          // show if name ends with -ium
          ium: function() {
              var name = $(this).find('.name').text();
              return name.match( /ium$/ );
          }
        };
        // bind filter button click
        $('.filters-button-group').on( 'click', '.button', function() {
          var filterValue = $( this ).attr('data-filter');
          // use filterFn if matches value
          filterValue = filterFns[ filterValue ] || filterValue;
          $grid.isotope({ filter: filterValue });
        });
        // change is-checked class on buttons
        $('.button-group').each( function( i, buttonGroup ) {
          var $buttonGroup = $( buttonGroup );
          $buttonGroup.on( 'click', '.button', function() {
              $buttonGroup.find('.is-checked').removeClass('is-checked');
              $( this ).addClass('is-checked');
          });
        });
    }, 1000);
    <?php } ?>
    <?php if(is_page_template(array('template_team.php'))){ ?>
    setTimeout(function(){
        // init Isotope
        var $grid_2 = $('.whatsgoingon .gridWrap').isotope({
          itemSelector: '.whatsgoingon .listitem',
          layoutMode: 'fitRows'
        });
        // filter functions
        var filterFns_2 = {
        // show if number is greater than 50
          numberGreaterThan50: function() {
              var number = $(this).find('.number').text();
              return parseInt( number, 10 ) > 50;
          },
          // show if name ends with -ium
          ium: function() {
              var name = $(this).find('.name').text();
              return name.match( /ium$/ );
          }
        };
        // bind filter button click
        $('.whatsgoingon .filters-button-group').on( 'click', '.button', function() {
          var filterValue = $( this ).attr('data-filter');
          // use filterFn if matches value
          filterValue = filterFns_2[ filterValue ] || filterValue;
          $grid_2.isotope({ filter: filterValue });
        });
        // change is-checked class on buttons
        $('.whatsgoingon .button-group').each( function( i, buttonGroup ) {
          var $buttonGroup = $( buttonGroup );
          $buttonGroup.on( 'click', '.button', function() {
              $buttonGroup.find('.is-checked').removeClass('is-checked');
              $( this ).addClass('is-checked');
          });
        });
    }, 1000);

    setTimeout(function(){
        // init Isotope
        var $grid = $('.usefulllinks .gridWrap').isotope({
          itemSelector: '.usefulllinks .listitem',
          layoutMode: 'fitRows'
        });
        // filter functions
        var filterFns = {
        // show if number is greater than 50
          numberGreaterThan50: function() {
              var number = $(this).find('.number').text();
              return parseInt( number, 10 ) > 50;
          },
          // show if name ends with -ium
          ium: function() {
              var name = $(this).find('.name').text();
              return name.match( /ium$/ );
          }
        };
        // bind filter button click
        $('.usefulllinks .filters-button-group').on( 'click', '.button', function() {
          var filterValue = $( this ).attr('data-filter');
          // use filterFn if matches value
          filterValue = filterFns[ filterValue ] || filterValue;
          $grid.isotope({ filter: filterValue });
        });
        // change is-checked class on buttons
        $('.usefulllinks .button-group').each( function( i, buttonGroup ) {
          var $buttonGroup = $( buttonGroup );
          $buttonGroup.on( 'click', '.button', function() {
              $buttonGroup.find('.is-checked').removeClass('is-checked');
              $( this ).addClass('is-checked');
          });
        });
    }, 1000);
    <?php } ?>

    $(document).on('click','.contList', function(event) {
        event.preventDefault();
        var target = "#" + this.getAttribute('data-target');
        if($("section").hasClass("pageTopBar")){
          var hhtt = $('.pageTopBar').outerHeight();
          var mnh = hhtt + 160;
          $('html, body').animate({
              scrollTop: $(target).offset().top - mnh
          }, 1000);
        }
        else{
          $('html, body').animate({
              scrollTop: $(target).offset().top - 160
          }, 1000);
        }

    });

</script>

<script>
    $(document).ready(function(){
        $(".demoBTN_demo_pg").click(function(){
            $("body, html").animate({"scrollTop": "0px"}, 1000);
        });
    });
</script>

<script>
    $('.circleTabMenu .circleBtn:first-child').addClass('active');
    $('.circlePanCont').hide();
    $('.circlePanCont:first-child').show();
    $('.circleTabMenu .circleBtn').click(function(){
        var index = $(this).index();
        $('.circleTabMenu .circleBtn').removeClass('active');
        $(this).addClass('active');
        $('.circlePanCont').hide();
        $('.circlePanCont').eq(index).show();
        return false;
    });
    <?php if(is_page(293)){ ?>
    $('.circleTabMenu .circleBtn:first-child').click(function(){
        $('.newCircleWrap').removeClass('onDemand enterprise');
        $('.newCircleWrap').addClass('quickQuotes');
        $('.product_tree_main_box').removeClass('on_demand product_sourcing');
        $('.product_tree_main_box').addClass('quick_quotes');
        return false;
    });
    $('.circleTabMenu .circleBtn:nth-child(2)').click(function(){
        $('.newCircleWrap').removeClass('quickQuotes enterprise');
        $('.newCircleWrap').addClass('onDemand');
        $('.product_tree_main_box').removeClass('quick_quotes product_sourcing');
        $('.product_tree_main_box').addClass('on_demand');
        return false;
    });
    $('.circleTabMenu .circleBtn:last-Child').click(function(){
        $('.newCircleWrap').removeClass('quickQuotes onDemand');
        $('.newCircleWrap').addClass('enterprise');
        $('.product_tree_main_box').removeClass('quick_quotes on_demand');
        $('.product_tree_main_box').addClass('product_sourcing');
        return false;
    });
    <?php }elseif(is_page(643)){ ?>
    $('.circleTabMenu .circleBtn:first-child').click(function(){
        $('.product_tree_main_box').removeClass('supplier_portal_cat_back');
        $('.product_tree_main_box').addClass('invited_cat_back');
        return false;
    });
    $('.circleTabMenu .circleBtn:nth-child(2)').click(function(){
        $('.product_tree_main_box').removeClass('invited_cat_back');
        $('.product_tree_main_box').addClass('supplier_portal_cat_back');
        return false;
    });
    <?php } ?>
    $('.circleTabMenu .circleBtn').click(function(){
        var iconheading=$(this).data('heading');
        var icondescription=$(this).data('content');
        $('#heading_source').html(iconheading);
        $('#content_source').html(icondescription);
    });

    $('.circleTabWrap ul li').click(function(){

        var prod_id=$(this).data('prod_id');
        $.ajax({
            url: '<?php echo admin_url('admin-ajax.php', 'relative'); ?>', // Let WordPress figure this url out...
            type: 'post',
            dataType: 'HTML', // Set this so we don't need to decode the response...
            data: 'action=get_product&prod_id='+prod_id, // One-liner form data prep...
            beforeSend: function () {
            },
            error:  function () {
            },
            success: function (data) {
                $('#product_sec_new').html(data);
            }
        });
        if($("section").hasClass("pageTopBar")){

                var getPos = $('.secondary_menu').offset().top - 105;
        }
        else{
            var getPos = $('.secondary_menu').offset().top - 30;
        }


        $('html, body').animate({scrollTop: getPos + 'px' }, 2000);
    });

    $('.enterprice_product').click(function(){


       var prod_id=$(this).data('prod_id');
        $.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>', // Let WordPress figure this url out...
            type: 'post',
            dataType: 'HTML', // Set this so we don't need to decode the response...
            data: 'action=get_product&prod_id='+prod_id, // One-liner form data prep...
            beforeSend: function () {
            },
            error:  function () {
            },
            success: function (data) {
                $('#product_sec_new').html(data);
            }
        });

       // pageTopBar

        if($("section").hasClass("pageTopBar")){

                var getPos = $('.secondary_menu').offset().top - 105;
        }
        else{
            var getPos = $('.secondary_menu').offset().top - 30;
        }


        $('html, body').animate({scrollTop: getPos + 'px' }, 2000);
    });
</script>

<script>
    $('.read_more_features').on("click",function(event){
        var feature_id=$(this).data('feature_id');
        $.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>', // Let WordPress figure this url out...
            type: 'post',
            dataType: 'HTML', // Set this so we don't need to decode the response...
            data: 'action=get_feature&feature_id='+feature_id, // One-liner form data prep...
            beforeSend: function () {
            },
            error:  function () {
            },
            success: function (data) {
                $('#feature_sec_new').html(data);
            }
        });
        if($("section").hasClass("pageTopBar")){

                var getPos = $('.secondary_menu').offset().top - 105;
        }
        else{
            var getPos = $('.secondary_menu').offset().top - 30;
        }


        $('html, body').animate({scrollTop: getPos + 'px' }, 2000);
    });
</script>
<?php if(is_single() && !is_singular('webinarhub')){ ?>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        var is_sending = false,
                failure_message = 'Oops, looks like there was a problem. Please try again.';
        $('#subscription_form_download_new').submit(function () {
            $.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>', // Let WordPress figure this url out...
                type: 'post',
                dataType: 'JSON', // Set this so we don't need to decode the response...
                data: $("#subscription_form_download_new").serialize(), // One-liner form data prep...
                beforeSend: function () {
                    is_sending = true;
                    $("#status_subs").addClass("success");
                    $("#status_subs").html('Working..Please Wait!');

                },
                error: handleFormError,
                success: function (data) {
                    if (data.statuscont == 'success') {

                        document.getElementById("subscription_form_download_new").reset();
                        is_sending = false;
                        if(data.type == 'video'){
                          $('.download_button_subscription').hide();
                          $('.download_button_subscription').after(data.message);
                          $('[data-fancybox-close]')[0].click();
                        }else{
                          document.getElementById("download_now").href = data.message;
                          $('#download_now')[0].click();
                          $('[data-fancybox-close]')[0].click();
                        }

                    } else {
                        $("#status_subs").removeClass("success");
                        $("#status_subs").addClass("error");
                        document.getElementById("status_subs").innerHTML = data.message;
                        is_sending = false;
                    }
                }
            });
            function handleFormError() {
                is_sending = false; // Reset the is_sending var so they can try again...
                document.getElementById("status_subs").innerHTML = failure_message;
                $("#status_subs").removeClass("success");
                $("#status_subs").addClass("error");
            }
            function validateInputs() {
                var name = document.getElementById('dname').value,
                    email = document.getElementById('demail').value,
                    dcompanyname = document.getElementById('dcompanyname').value,
                    //djobtitle = document.getElementById('djobtitle').value,
                    phone = document.getElementById('dphone').value
                    //country = document.getElementById('dcountry').value
                if (!name || !email || !dcompanyname || !djobtitle || !phone || !country) {
                    document.getElementById("status_subs").innerHTML = "Before sending, please make sure to provide your details.";
                    $("#status_subs").removeClass("success");
                    $("#status_subs").addClass("error");
                    return false;
                }
                return true;
            }
        });
    });
</script>
<?php }elseif(is_page_template(array('template_landing5.php')) || is_singular('webinarhub')){ ?>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        var is_sending = false,
            failure_message = 'Oops, looks like there was a problem. Please try again.';
        $('#video_play_form').submit(function () {
            $.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>', // Let WordPress figure this url out...
                type: 'post',
                dataType: 'JSON', // Set this so we don't need to decode the response...
                data: $("#video_play_form").serialize(), // One-liner form data prep...
                beforeSend: function () {
                    is_sending = true;
                    $("#status_subs").addClass("success");
                    $("#status_subs").html('Working..Please Wait!');

                },
                error: handleFormError,
                success: function (data) {
                    if (data.statuscont == 'success') {
                        document.getElementById("video_play_form").reset();
                        is_sending = false;
                        $('#video_fig').html(data.message);
                        $('[data-fancybox-close]')[0].click();
                    } else {
                        $("#status_subs").removeClass("success");
                        $("#status_subs").addClass("error");
                        document.getElementById("status_subs").innerHTML = data.message;
                        is_sending = false;
                    }
                }
            });
            function handleFormError() {
                is_sending = false; // Reset the is_sending var so they can try again...
                document.getElementById("status_subs").innerHTML = failure_message;
                $("#status_subs").removeClass("success");
                $("#status_subs").addClass("error");
            }
            function validateInputs() {
                var name = document.getElementById('dname').value,
                    email = document.getElementById('demail').value,
                    dcompanyname = document.getElementById('dcompanyname').value,
                    //djobtitle = document.getElementById('djobtitle').value,
                    phone = document.getElementById('dphone').value
                    //country = document.getElementById('dcountry').value
                if (!name || !email || !dcompanyname || !phone) {
                    document.getElementById("status_subs").innerHTML = "Before sending, please make sure to provide your details.";
                    $("#status_subs").removeClass("success");
                    $("#status_subs").addClass("error");
                    return false;
                }
                return true;
            }
        });
    });
</script>
<?php } ?>

<?php if(is_page(array(1354,649,9033))){ ?>
<script>

    function myMap() {
        var address_new=$('#map').data('address');
        var latitude=$('#map').data('latitude');
        var lognitude=$('#map').data('lognitude');
        var url='https://maps.googleapis.com/maps/api/geocode/json';
        $.ajax({
            dataType: "json",
            url: url,
            data:"latlng="+latitude+","+lognitude+"&key=AIzaSyAsvRCOSU9xWnBeRrDyZquATkAfY0EU_lU",
            success: function (data) {
                //address_new=data.results[0].formatted_address;
                var myCenter = new google.maps.LatLng(latitude,lognitude);
                var mapCanvas = document.getElementById("map");
                var mapOptions = {center: myCenter, zoom: 10, zoomControl:false,scrollwheel:false , draggable:false};
                var map = new google.maps.Map(mapCanvas, mapOptions);
                var marker = new google.maps.Marker({position:myCenter});

                marker.setMap(map);

                var infowindow = new google.maps.InfoWindow({
                    pixelOffset: new google.maps.Size(00,20),
                    content: address_new

                });
                infowindow.open(map,marker);
            }
        });
    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?callback=myMap&key=AIzaSyAsvRCOSU9xWnBeRrDyZquATkAfY0EU_lU"></script>
<?php } ?>

<?php
if(!is_page(array(1547,1620,5,1771))){
    $page_id=get_the_ID();
    $query = new WP_Query( array(
                'post_type'=>'form_listing',
				'posts_per_page'=>-1,
                'meta_query'=>array(
                    'key'     => 'page_name',
                    'value'   => $page_id,
                    'compare' => '='
                )
            ) );
    if ( $query->have_posts() ) : while ( $query->have_posts() ): $query->the_post();
?>

<div class="newpopupPrice priceNewFormtwo" id="post-<?php the_ID(); ?>">
    <div class="inner">
            <h4><?php the_field('popup_heading'); ?></h4>
            <?php the_field('upload_form'); ?>
    </div>
</div>

<?php
    endwhile;endif;
    wp_reset_query();
}
?>
<?php if(isset($_GET['zohostatus']) && !empty($_GET['zohostatus']) && $_GET['zohostatus']=='success'){ ?>
<a href="#success_message_zoho" style="display:none;" data-fancybox id="success_zoho_click"></a>
<div id="success_message_zoho" class="commonPopup loginpopup">
  <div class="popupContent">
    <div class="popupForm">
      <h3><?php echo $flatsome_opt['popup_heading_text']; ?></h3>
      <p><?php echo $flatsome_opt['popup_content_line_1']; ?></p>
      <p><?php echo $flatsome_opt['popup_content_line_2']; ?></p>
    </div>
  </div>
</div><!--loginPopup-->
<!-- Google Code for Web Forms Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1010607908;
var google_conversion_label = "1szuCIG6iIQBEKTO8uED";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1010607908/?label=1szuCIG6iIQBEKTO8uED&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<script>
    $(document).ready(function(){
        $('#success_zoho_click').click();
    });
</script>
<?php } ?>
<script>
    $(document).ready(function(){
        $('[data-fancybox]').fancybox({
            //protect: true
        });
    });
</script>
<?php if(get_field('show_in_this_page')){ ?>
<script type="text/javascript">
  /*$(window).load(function() {
    setTimeout(function() {
        $(".newPopUpWrapper").show('fadeIn', {}, 300)
    }, 4000);
  });*/

  $(document).ready(function(){
    if (sessionStorage.getItem('firstVisit') == null){
      sessionStorage.setItem('firstVisit', '0');
    }
    if (sessionStorage.getItem('firstVisit') != "1"){
      setTimeout(function(){
        $(".newPopUpWrapper").fadeIn(300);
      },<?php the_field('popup_time'); ?>);
    }
    $('.newClose').click(function(){
      sessionStorage.setItem('firstVisit', '1');
      $(this).parent('.newPopUpContent').parent('.newPopUpWrapper').fadeOut(300);
    });
  });

</script>
<?php } ?>
<script>
  $('#level_1').on('change',function(){
  		var level_1_id=$(this).val();
      $.ajax({
          url: '<?php echo admin_url('admin-ajax.php'); ?>', // Let WordPress figure this url out...
          type: 'post',
          dataType: 'HTML', // Set this so we don't need to decode the response...
          data: 'action=get_child_category&term_id='+level_1_id+'&current_level=level_2', // One-liner form data prep...
          beforeSend: function () {
          },
          error:  function () {
          },
          success: function (data) {
              $('#level_2').html(data);
          }
      });
      $.ajax({
          url: '<?php echo admin_url('admin-ajax.php'); ?>', // Let WordPress figure this url out...
          type: 'post',
          dataType: 'HTML', // Set this so we don't need to decode the response...
          data: 'action=get_child_category&term_id='+level_1_id+'&current_level=level_3', // One-liner form data prep...
          beforeSend: function () {
          },
          error:  function () {
          },
          success: function (data) {
              $('#level_3').html(data);
          }
      });
  });

  $('#level_2').on('change',function(){
  		var level_2_id=$(this).val();
      $.ajax({
          url: '<?php echo admin_url('admin-ajax.php'); ?>', // Let WordPress figure this url out...
          type: 'post',
          dataType: 'HTML', // Set this so we don't need to decode the response...
          data: 'action=get_child_category&term_id='+level_2_id+'&current_level=level_4', // One-liner form data prep...
          beforeSend: function () {
          },
          error:  function () {
          },
          success: function (data) {
              $('#level_3').html(data);
              if(level_2_id=='blog_by_year'){
                $("#level_3 option").each(function(){
                    var text=$(this).text();
                    var trimText=$.trim(text);
                    if(text!='Year'){
                       $(this).val(trimText);
                    }
                });
              }
          }
      });
  });
</script>
<script>
    $(document).ready(function(){
        if($('#menu-language-menu ul li').hasClass('active')){
            var src = $('#menu-language-menu ul li.active a img').attr('src');
            $('#menu-language-menu li.current-menu-parent').children('a').children('img').attr('src',src);
        }
    });
</script>
</body>
</html>
