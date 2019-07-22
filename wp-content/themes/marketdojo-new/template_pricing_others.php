<?php /* Template Name: Pricing Others */ ?>
<?php get_header(); ?>
<!-- cleint Sec Start -->
<?php include(TEMPLATEPATH . '/includes/clients.php'); ?>
<!-- body content start -->
<div class="body_content">


    <!-- pricing section start -->
    <section class="pricing_page_sec others_pricing_page_sec">
        <div class="container">
            <div class="plan_choose choose_plan_holder clear">
                <div class="plan_left">
                    <h2 class="title">Choose a plan that works for you</h2>
                </div>
                <div class="currency_boc currency_chooser clear">
                    <span class="title_choose">Choose your currency</span>
                    <div class="custom_select currencyHolder">
                        <span class="show selected_currency clear">
                            <span class="value_show currency" data-value="gbp"><i class="fa fa-gbp"></i> (GBP)</span>
                            <span class="icon_drop drop_ico"><i class="fa fa-caret-down"></i></span>
                        </span>
                        <div class="currency_list">
                            <ul class="show_list">
                                <li data-value="gbp"><span class="each_currency"><i class="fa fa-gbp"></i> (GBP)</span></li>
                                <li data-value="eur"><span class="each_currency"><i class="fa fa-euro"></i> (EUR)</span></li>
                                <li data-value="usd"><span class="each_currency"><i class="fa fa-usd"></i> (USD)</span></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            
            <div class="plan_box_holder pricing_table_main_holder others_pricing_table_main_holder clear">
                <div class="each_plan_box each_table">
                    <div class="each_table_cont blackBox">
                        <h2><?php the_field('box_1_name'); ?></h2>
                        <div class="billing_details">
                            <div class="content">
                                <div class="users">
                                    <span class="single"><?php the_field('box_1_no_of_user'); ?></span>
                                </div>
                                <span class="price"><?php the_field('box_1_default_price'); ?></span>
                                <span class="billDetails">
                                    <?php the_field('box_1_price_sub_heading'); ?>
                                </span>
                            </div>
                        </div>
                        <div class="options">
                            <ul>
                                <?php if( have_rows('box_1_content_listing') ): while ( have_rows('box_1_content_listing') ) : the_row(); ?>
                                <li><?php the_sub_field('content_line'); ?></li>
                                <?php endwhile;endif; ?>
                            </ul>
                        </div>
                        <div class="btn_holder">
                            <a data-fancybox href="#priceNewFormtwo" class="btn_pricing"><?php the_field('box_1_button_text'); ?></a>
                        </div>
					</div>
                </div>
                <div class="each_table">
                    <div class="each_table_cont blueBox">
                    <h2><?php the_field('box_2_name'); ?></h2>
                    <div class="fees billing_details">
                        <div class="cel content">
                            
                            <div class="user_stat users">
                                <span class="label">No. of Users</span>
                                <select name="" id="price-monthly-select">
                                <?php
                                $box_2_no_of_user=get_field('box_2_no_of_user');
                                if($box_2_no_of_user){
                                    for($i=0; $i<=$box_2_no_of_user;$i++ ){
                                ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option> 
                                <?php
                                    }
                                }
                                ?>
                                </select>
                            </div>
                            <span class="user_price price">
                                <i class="fa fa-gbp"></i><i class="fa fa-euro" style="display: none;"></i><i class="fa fa-usd" style="display: none;"></i><span id="price-monthly">500</span>/<em>month</em>
                            </span>
                            <span class="billDetails note">
                                (Alternatively <i class="fa fa-gbp"></i><i class="fa fa-euro" style="display: none;"></i><i class="fa fa-usd" style="display: none;"></i><span id="price-monthly-extra_user"><?php the_field('box_2_price_sub_heading_price'); ?></span> <span id="price-monthly-extra_user_text"><?php the_field('box_2_price_sub_heading_text'); ?></span>)
                            </span>
                        </div>
                    </div>
                    <div class="options">
                        <ul>
                            <?php if( have_rows('box_2_content_listing') ): while ( have_rows('box_2_content_listing') ) : the_row(); ?>
                            <li><?php the_sub_field('content_line'); ?></li>
                            <?php endwhile;endif; ?>
                        </ul>
                    </div>
                    <div class="btn_holder">
                        <a data-fancybox href="#priceNewFormthree" class="btn_pricing"><?php the_field('box_2_button_text'); ?></a>
                    </div>
               		</div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing section end -->


    <!-- practice event -->
    <section class="body_section practice_event_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <h2><span><?php the_field('section_2_heading'); ?></span></h2>
                    <?php the_field('section_2_description'); ?>
                    <a href="<?php the_field('section_2_button_link'); ?>" class="btn"><?php the_field('section_2_button_link_name'); ?></a>
                </div>
                <?php
                $section_2_Image = get_field('section_2_image');
                if ($section_2_Image) {
                    ?>
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <figure><img src="<?php echo $section_2_Image['url']; ?>" alt="<?php echo $section_2_Image['alt']; ?>"></figure>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
    <!-- pracdtce event -->

    <!-- compare table function -->
    <section class="compare_table_sec">
        <div class="container">
            <h3><?php the_field('section_3_heading'); ?></h3>
            <div class="table_holder_main">
                <table name="price_compare_table" id="price_compare_table" border="0" cellpadding="0" cellspacing="0">
                    <thead>
                        <tr>
                            <th><?php the_field('section_3_heading_1_'); ?></th>
                            <th class="green"><?php the_field('section_3_heading_2'); ?></th>
                            <th class="red"><?php the_field('section_3_heading_3'); ?></th>
                            <th class="yellow"><?php the_field('section_3_heading_4'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="heading">
                            <td><?php the_field('section_3_heading_5'); ?> (for <span id="user_no_table">1</span> users)</td>
                            <td><?php the_field('section_3_heading_6'); ?></td>
                            <td><i class="fa fa-gbp"></i><i class="fa fa-euro" style="display: none;"></i><i class="fa fa-usd" style="display: none;"></i><span id="price-annual_table">5000</span></td>
                            <td><?php the_field('section_3_heading_7'); ?></td>
                        </tr>
                        <tr class="heading">
                            <td>Billed Monthly (for <span id="user_no_table2">1</span> users)</td>
                            <td>-</td>
                            <td><i class="fa fa-gbp"></i><i class="fa fa-euro" style="display: none;"></i><i class="fa fa-usd" style="display: none;"></i><span id="price-monthly_table">500</span></td>
                            <td>-</td>
                        </tr>
                        <tr class="heading">
                            <td class="heading"><?php the_field('section3_repeater__heading_1'); ?></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <?php if (have_rows('section3_repeater')): ?>
                            <?php while (have_rows('section3_repeater')): the_row(); ?>
                                <tr>
                                    <td><?php the_sub_field('section3_capability_heading'); ?><span class="toolTip_holder">
                                    <span class="tool_tip_ico"><i class="fa fa-info"></i></span>
                                    <span class="details"><?php the_sub_field('tooltip'); ?></span>
                                </span></td>
                                    <?php
                                    $section3_coming_soon_check = get_sub_field('section3_coming_soon_check');
                                    if ($section3_coming_soon_check) {
                                        ?>
                                        <td><i class="fa fa-check"></i></td>
                                        <?php
                                    } else {
                                        ?>
                                        <td>-</td>
                                        <?php
                                    }
                                    ?>
                                    <?php
                                    $section3_pricing_check = get_sub_field('section3_pricing_check');
                                    if ($section3_pricing_check) {
                                        ?>
                                        <td><i class="fa fa-check"></i></td>
                                        <?php
                                    } else {
                                        ?>
                                        <td><?php the_sub_field('section3_pricing_check_name'); ?></td>
                                        <?php
                                    }
                                    ?>
                                    <?php
                                    $section3_call_us_check = get_sub_field('section3_call_us_check');
                                    if ($section3_call_us_check) {
                                        ?>
                                        <td><i class="fa fa-check"></i></td>
                                        <?php
                                    } else {
                                        ?>
                                        <td><?php the_sub_field('section3_pricing_call_us_name'); ?></td>
                                        <?php
                                    }
                                    ?>
                                </tr>
                            <?php endwhile; ?>
                        <?php endif; ?> 
                        <tr class="heading">
                            <td class="heading"><?php the_field('section3_repeater__heading_2'); ?></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <?php if (have_rows('section3_repeater_2')): ?>
                            <?php while (have_rows('section3_repeater_2')): the_row(); ?>
                                <tr>
                                    <td><?php the_sub_field('section3_capability_heading'); ?><span class="toolTip_holder">
                                    <span class="tool_tip_ico"><i class="fa fa-info"></i></span>
                                    <span class="details"><?php the_sub_field('tooltip'); ?></span>
                                </span></td>
                                    <?php
                                    $section3_coming_soon_check = get_sub_field('section3_coming_soon_check');
                                    if ($section3_coming_soon_check) {
                                        ?>
                                        <td><i class="fa fa-check"></i></td>
                                        <?php
                                    } else {
                                        ?>
                                        <td>-</td>
                                        <?php
                                    }
                                    ?>
                                    <?php
                                    $section3_pricing_check = get_sub_field('section3_pricing_check');
                                    if ($section3_pricing_check) {
                                        ?>
                                        <td><i class="fa fa-check"></i></td>
                                        <?php
                                    } else {
                                        ?>
                                        <td><?php the_sub_field('section3_pricing_check_name'); ?></td>
                                        <?php
                                    }
                                    ?>
                                    <?php
                                    $section3_call_us_check = get_sub_field('section3_call_us_check');
                                    if ($section3_call_us_check) {
                                        ?>
                                        <td><i class="fa fa-check"></i></td>
                                        <?php
                                    } else {
                                        ?>
                                        <td><?php the_sub_field('section3_pricing_call_us_name'); ?></td>
                                        <?php
                                    }
                                    ?>
                                </tr>
                            <?php endwhile; ?>
                        <?php endif; ?> 
                        <tr class="heading">
                            <td>&nbsp;</td>
                            <td><a href="#" class="btn_table green">coming soon</a></td>
                            <td><a href="#priceNewFormtwo" class="btn_table red">start today</a></td>
                            <td><a href="#priceNewFormthree" class="btn_table yellow">contact us</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- compare table function -->

    <!-- add ones section -->
    <section class="body_section add_ones_sec">
        <div class="container">
            <h2><span><?php the_field('section4_heading_'); ?></span></h2>
            <div class="add_ones_holder clear">
                <?php if (have_rows('section_4_contant')): ?>
                    <?php
                    while (have_rows('section_4_contant')): the_row();
                        $section4image = get_sub_field('section_4_image');
                        ?>
                        <div class="each_sec clear">
                            <span class="icon"><img src="<?php echo $section4image['url']; ?>" alt="<?php echo $section4image['alt']; ?>"></span>
                            <div class="content">
                                <h4> <?php the_sub_field('section_4_title'); ?></h4>
                                <?php the_sub_field('section_4_description'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?> 

            </div>
        </div>
    </section>
    <!-- add ones section -->

	<?php include(TEMPLATEPATH . '/includes/testimonials.php'); ?>

    <!-- faq section start -->
    <section class="body_section features_faq">
        <div class="container">
            <h2><span><?php the_field('additional_feature_title');?></span></h2>
            <div class="faq_holder">
                <?php $i = 0; ?>
            <?php
                while (have_rows('additional_feature')): the_row();
                  $i++;
                ?>
                <div class="rowFaq">
                <h3 <?php if($i==1){ ?> class="active"<?php } ?>><?php the_sub_field('additional_feature_title'); ?></h3>
                <div  class="content <?php if($i==1){ ?>active<?php } ?>">
                <?php the_sub_field('additional_feature_description'); ?>    
                </div>
							</div>
                <?php endwhile; ?>  
            </div>
            <div class="more_question">
            <?php the_field('additional_feature_more_question'); ?>    
            </div>
        </div>
    </section>
    <!-- faq section end -->

    <section class="body_section features_faq">
        <div class="container">
        <?php the_content(); ?>
         </div>
    </section>
    
    <?php get_footer(); ?>
    
    <div class="newpopupPrice" id="priceNewFormtwo">
    	<div class="inner">
    		<h4>GET IN TOUCH</h4>
    		<div id='crmWebToEntityForm'>
   <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>
   <form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads232068000024109046 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory1()' accept-charset='UTF-8'>

    <!-- Do not remove this code. -->
    <input type='text' style='display:none;' name='xnQsjsdp' value='b411564a9bf6bbf342771a2ea9228e454f451cae8cae747e4beee3a887708ccb'/>
    <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
    <input type='text' style='display:none;' name='xmIwtLD' value='b17d0acbd257ad6f84b364af65f891f08cc4d6a67e9b8f94bcf14cc7e5b2c633'/>
    <input type='text' style='display:none;'  name='actionType' value='TGVhZHM='/>

    <input type='text' style='display:none;' name='returnURL' value='https&#x3a;&#x2f;&#x2f;www.marketdojo.com&#x2f;pricing&#x2f;' /> 
     <!-- Do not remove this code. -->

   

    <div class="formRow">
        <label>First Name <span class="required">*</span></label>
        <div class="txtFld">
            <input type='text'  maxlength='40' name='First Name' />
        </div>
    </div>
    <div class="formRow">
        <label>Last Name<span class="required">*</span></label>
        <div class="txtFld">
            <input type='text'  maxlength='80' name='Last Name' />
        </div>
    </div>
    <div class="formRow">
        <label>Company<span class="required">*</span></label>
        <div class="txtFld"><input type='text'  maxlength='100' name='Company' /></div>
    </div>
    <div class="formRow">
        <label>Phone<span class="required">*</span></label>
        <div class="txtFld">
            <input type='text'  maxlength='30' name='Phone' />
        </div>
    </div>
    <div class="formRow">
        <label>Email <span class="required">*</span></label>
        <div class="txtFld"><input type='text'  maxlength='100' name='Email' /></div>
    </div>
    <div class="formRow">
        <label>I&#x27;m interested in<span class="required">*</span></label>
        <div class="txtFld">
            <select name='LEADCF15'>
                <option value='-None-'>-None-</option>
                <option value='eSourcing&#x2f;eAuctions'>eSourcing&#x2f;eAuctions</option>
                <option value='Supplier&#x20;Information&#x20;Management'>Supplier Information Management</option>
                <option value='Contracts&#x20;Management'>Contracts Management</option>
                <option value='Savings&#x20;Tracking'>Savings Tracking</option>
                <option value='Opportunity&#x20;Analysis'>Opportunity Analysis</option>
                <option value='Quick&#x20;Quotes'>Quick Quotes</option>
                <option value='Supplier&#x20;Collaboration'>Supplier Collaboration</option>
            </select>
        </div>
    </div>

    
    <select style='width:250px;display:none;' name='LEADCF11'>
        <option value='-None-'>-None-</option>
        <option value='Demo&#x20;form'>Demo form</option>
        <option value='Consultation&#x20;call&#x20;form'>Consultation call form</option>
        <option selected value='Landing&#x20;Page&#x20;form'>Landing Page form</option>
        <option value='Demo&#x20;Form&#x20;Spam'>Demo Form Spam</option>
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
    <input type='text' style='width:250px;display:none;'  maxlength='60' name='LEADCF1' value='Landing&#x20;Page&#x20;sign&#x20;up&#x20;form'></input>
    <div class="buttonRow">
        <input type='submit' value='Request a Demo' class="fill_btn" />
    </div>
    <input type='reset' style='font-size:12px;display:none;color:#131307' value='Reset' />
        
    <script>
       var mndFileds=new Array('First Name','Last Name','Company','Email','Phone');
       var fldLangVal=new Array('First Name','Last Name','Company','Email','Phone');
        var name='';
        var email='';

       function checkMandatory1() {
        for(i=0;i<mndFileds.length;i++) {
          var fieldObj=document.forms['WebToLeads232068000024109046'][mndFileds[i]];
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

    <div class="newpopupPrice" id="priceNewFormthree">
    	<div class="inner">
    		<h4>GET IN TOUCH</h4>
<div id='crmWebToEntityForm'>
   <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>
   <form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads232068000024109062 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory()' accept-charset='UTF-8'>

     <!-- Do not remove this code. -->
    <input type='text' style='display:none;' name='xnQsjsdp' value='b411564a9bf6bbf342771a2ea9228e454f451cae8cae747e4beee3a887708ccb'/>
    <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
    <input type='text' style='display:none;' name='xmIwtLD' value='b17d0acbd257ad6f84b364af65f891f046f9f531d927ede26eecb24a0fc1c8eb'/>
    <input type='text' style='display:none;'  name='actionType' value='TGVhZHM='/>

    <input type='text' style='display:none;' name='returnURL' value='https&#x3a;&#x2f;&#x2f;www.marketdojo.com&#x2f;pricing&#x2f;' /> 
     <!-- Do not remove this code. -->
   

    <div class="formRow">
        <label>First Name <span class="required">*</span></label>
        <div class="txtFld">
            <input type='text'  maxlength='40' name='First Name' />
        </div>
    </div>
    <div class="formRow">
        <label>Last Name<span class="required">*</span></label>
        <div class="txtFld">
            <input type='text'  maxlength='80' name='Last Name' />
        </div>
    </div>
    <div class="formRow">
        <label>Company<span class="required">*</span></label>
        <div class="txtFld"><input type='text'  maxlength='100' name='Company' /></div>
    </div>
    <div class="formRow">
        <label>Phone<span class="required">*</span></label>
        <div class="txtFld">
            <input type='text'  maxlength='30' name='Phone' />
        </div>
    </div>
    <div class="formRow">
        <label>Email <span class="required">*</span></label>
        <div class="txtFld"><input type='text'  maxlength='100' name='Email' /></div>
    </div>
    <div class="formRow">
        <label>I&#x27;m interested in<span class="required">*</span></label>
        <div class="txtFld">
            <select name='LEADCF15'>
                <option value='-None-'>-None-</option>
                <option value='eSourcing&#x2f;eAuctions'>eSourcing&#x2f;eAuctions</option>
                <option value='Supplier&#x20;Information&#x20;Management'>Supplier Information Management</option>
                <option value='Contracts&#x20;Management'>Contracts Management</option>
                <option value='Savings&#x20;Tracking'>Savings Tracking</option>
                <option value='Opportunity&#x20;Analysis'>Opportunity Analysis</option>
                <option value='Quick&#x20;Quotes'>Quick Quotes</option>
                <option value='Supplier&#x20;Collaboration'>Supplier Collaboration</option>
            </select>
        </div>
    </div>

    
    <select style='width:250px;display:none;' name='LEADCF11'>
        <option value='-None-'>-None-</option>
        <option value='Demo&#x20;form'>Demo form</option>
        <option selected value='Consultation&#x20;call&#x20;form'>Consultation call form</option>
        <option value='Landing&#x20;Page&#x20;form'>Landing Page form</option>
        <option value='Demo&#x20;Form&#x20;Spam'>Demo Form Spam</option>
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
    <input type='text' style='width:250px;display:none;'  maxlength='60' name='LEADCF1' value='Pricing&#x20;page&#x20;call&#x20;form'></input>
    <div class="buttonRow">
        <input type='submit' value='Request a Call' class="fill_btn" />
    </div>
    <input type='reset' style='font-size:12px;display:none;color:#131307' value='Reset' />
        
    <script>
       var mndFileds=new Array('First Name','Last Name','Company','Email','Phone');
       var fldLangVal=new Array('First Name','Last Name','Company','Email','Phone');
        var name='';
        var email='';

       function checkMandatory() {
        for(i=0;i<mndFileds.length;i++) {
          var fieldObj=document.forms['WebToLeads232068000024109062'][mndFileds[i]];
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
<script>
$(document).ready(function(){
	$('[data-fancybox]').fancybox({
		//protect: true
	});
});
</script>