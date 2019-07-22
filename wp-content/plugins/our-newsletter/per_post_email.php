<h1>Send Per Post News Letter</h1>
<br/>
<br/>
<div class="wrap">
  <?php
 // echo stripcslashes($_REQUEST['content']);
  if(isset($_REQUEST['Send']) and $_REQUEST['Send']!="")
  {
	if($_REQUEST['content']=="")
	{
		echo '<div id="message" class="updated below-h2"><p>Please Add A Content.</p></div>';
	}
	else if($_REQUEST['subject']=="" )
	{
		echo '<div id="message" class="updated below-h2"><p>Please Add A Mail Title.</p></div>';
	}
	else
	{
		$to=array();
		add_filter( 'wp_mail_content_type', 'set_html_content_type' );
		$headers = 'From: Gospel Alive <'.get_settings('admin_email').'>'."\r\n";
        $headers.= "Reply-To: noreply@gospelalive.com\r\n";
		$subject=$_REQUEST['subject'];
		$message=stripcslashes($_REQUEST['content']);
		$flag==0;
		foreach($add_list as $add_val)
		{
		 $json_ret=json_decode($add_val->details);
		 $to= $json_ret->email;
		 $unsub_url=site_url()."/unsubscribe-newsletter?do=".base64_encode($json_ret->email);
		 $msg=str_replace("@@@",$unsub_url,$message);	
				  if(wp_mail( $to, $subject, $msg, $headers ))
			   {
				   $flag=1;
				   
				   //include 'insert_for_home.php';
			   }
			  
		}
		if( $flag==1)
		{
			echo '<div id="message" class="updated below-h2"><p>Your message was sent successfully. Thanks.</p></div>';
		}
	}
  }
  ?>
  <form action="admin.php?page=per-post-email-menu" method="post" enctype="multipart/form-data" name="myfrom">
    <label> Mail Title </label>
    <br />
    <input type="text" name="subject" size="50"/>
    <br/>
    <label> Mail Content </label>
    <?php
    the_editor($id='<table width="100%" border="0" cellpadding="0" cellspacing="0" style="width:720px; margin:0 auto;">
  <tr>
    <td>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td style="height:30px; font-size:0; line-height:0;">&nbsp;</td>
    <td style="height:30px; font-size:0; line-height:0;">&nbsp;</td>
    <td style="height:30px; font-size:0; line-height:0;">&nbsp;</td>
  </tr>
  <tr>
    <td style="width:25px; font-size:0; line-height:0;">&nbsp;</td>
    <td align="center" valign="top" style="width:666px;"><img src="'.site_url().'/wp-content/uploads/2015/01/logo.png" alt=""></td>
    <td style="width:25px; font-size:0; line-height:0;">&nbsp;</td>
  </tr>
  <tr>
     <td style="height:30px; font-size:0; line-height:0;">&nbsp;</td>
     <td style="height:30px; font-size:0; line-height:0;">&nbsp;</td>
     <td style="height:30px; font-size:0; line-height:0;">&nbsp;</td>
  </tr>
</table>
</td>
  </tr>
  
  <tr>
    <td>
    	<table width="100%" border="0" cellpadding="0" cellspacing="0">
        	<tr>
            	<td>
                <table width="100%" border="0" cellpadding="0" cellspacing="0" style="background:#ffc068; border-collapse:collapse;">
  <tr>
    <td style="height:20px; font-size:0; line-height:0;">&nbsp;</td>
    <td style="height:20px; font-size:0; line-height:0;">&nbsp;</td>
    <td style="height:20px; font-size:0; line-height:0;">&nbsp;</td>
  </tr>
  <tr>
    <td style="width:21px; font-size:0; line-height:0;">&nbsp;</td>
    <td style="width:325px; font-size:36px; line-height:40px; font-weight:normal; font-family:Tahoma, Geneva, sans-serif; text-transform:uppercase; color:#021011;">The Ohin’s News</td>
    <td style="width:400px; font-size:0; line-height:0;">&nbsp;</td>
  </tr>
  <tr>
     <td style="height:17px; font-size:0; line-height:0;">&nbsp;</td>
     <td style="height:17px; font-size:0; line-height:0;">&nbsp;</td>
     <td style="height:17px; font-size:0; line-height:0;">&nbsp;</td>
  </tr>
</table>
				</td>
            </tr>
            
            <tr>
            <td style="height:17px; font-size:0; line-height:0;">
            <img src="'.site_url().'/wp-content/uploads/2015/01/banner.jpg" width="720" height="375" alt=""></td></tr>
            
            <tr>
            <td>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="height:25px; font-size:0; line-height:0; width:21px;">&nbsp;</td>
    <td style="height:25px; font-size:0; line-height:0; width:674px;">&nbsp;</td>
    <td style="height:25px; font-size:0; line-height:0; width:21px;">&nbsp;</td>
  </tr>
  <tr>
    <td style="width:21px; font-size:0; line-height:0;">&nbsp;</td>
    <td style="width:674px; font-size:24px; line-height:28px; font-weight:normal; color:#000000; font-family:Arial, Helvetica, sans-serif;">Anthony got saved - December 2010</td>
    <td style="width:21px; font-size:0; line-height:0;">&nbsp;</td>
  </tr>
  <tr>
    <td style="height:20px; font-size:0; line-height:0; width:21px;">&nbsp;</td>
    <td style="height:20px; font-size:0; line-height:0; width:674px;">&nbsp;</td>
    <td style="height:20px; font-size:0; line-height:0; width:21px;">&nbsp;</td>
  </tr>
  <tr>
    <td style="width:21px; font-size:0; line-height:0;">&nbsp;</td>
    <td style="width:674px; font-size:16px; line-height:24px; color:#454444; font-family:Arial, Helvetica, sans-serif; padding-bottom:12px;">We are delighted that Anthony (mentioned before, one of the five people who were very much on our hearts) rang David to say that he got saved. After meeting up with Anthony it was so clear and evident that his life has changed which was such a joy to see. He got baptized in February. It’s thrilling to see how God completely changed his life-style. He got freed from addictions and has got such a passion to share the good news</td>
    <td style="width:21px; font-size:0; line-height:0;">&nbsp;</td>
  </tr>
  <tr>
    <td style="width:21px; font-size:0; line-height:0;">&nbsp;</td>
    <td style="width:674px; font-size:0; line-height:0; text-align:center"><a href="#" style="border:none; outline:none; text-decoration:none; "><img src="'.site_url().'/wp-content/uploads/2015/01/bt-bck.jpg" width="112" height="34" border="0" alt=""></a></td>
    <td style="width:21px; font-size:0; line-height:0;">&nbsp;</td>
  </tr>
  
  <tr>
    <td style="width:21px; height:22px; font-size:0; line-height:0; border-bottom:1px solid #c7b49f;">&nbsp;</td>
    <td style="width:674px; height:22px; font-size:0; line-height:0; border-bottom:1px solid #c7b49f;">&nbsp;</td>
    <td style="width:21px; height:22px; font-size:0; line-height:0; border-bottom:1px solid #c7b49f;">&nbsp;</td>
  </tr>
</table>
			</td>
            </tr>
            
            
        </table>
    </td>
  </tr>
  
  <!--footer-->
  <tr>
    <td>
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td style="height:20px; font-size:0; line-height:0; width:90px;">&nbsp;</td>
        <td style="height:20px; width:495px; font-size:0; line-height:0;">&nbsp;</td>
        <td style="height:20px; font-size:0; line-height:0; width:90px;">&nbsp;</td>
      </tr>
      
      <tr>
         <td style="width:90px; font-size:0; line-height:0;">&nbsp;</td>
        <td style="width:495px; font-family:Arial, Helvetica, sans-serif; font-size:12px;
        line-height:16px; color:#454444; text-decoration:none; text-align:center">We hope you enjoy receiving our news and special offer emails from Gospel Alive Ministries, but if you would prefer not to receive these emails please click <a href="@@@" style="color:#806244; text-decoration:underline; font-weight:bold;">unsubscribe</a> </td>
        <td style="width:25px; font-size:0; line-height:0;">&nbsp;</td>
      </tr>
      
      <tr>
        <td style="height:15px; font-size:0; line-height:0; width:90px;">&nbsp;</td>
        <td style="height:15px; width:495px; font-size:0; line-height:0;">&nbsp;</td>
        <td style="height:15px; font-size:0; line-height:0; width:90px;">&nbsp;</td>
      </tr>
      
      <tr>
        <td style="font-size:0; line-height:0; width:90px;">&nbsp;</td>
        <td>
        
        
        
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
       <tr>
        <td style="height:30px; font-size:0; line-height:0; width:202px;">&nbsp;</td>
        <td style="height:30px; width:127px; font-size:0; line-height:0;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                
       <tr>       
        <td style="height:30px; font-size:0; line-height:0; width:30px;"><a href="#" target="_blank"><img src="'.site_url().'/wp-content/uploads/2015/01/instagram.jpg" alt="" style="border:none;"></a></td>
        <td style="height:30px; font-size:0; line-height:0; width:2px;">&nbsp;</td>
        <td style="height:30px; font-size:0; line-height:0; width:30px;"><a href="#" target="_blank"><img src="'.site_url().'/wp-content/uploads/2015/01/twitter.jpg" alt="" style="border:none;"></a></td>
        <td style="height:30px; font-size:0; line-height:0; width:2px;">&nbsp;</td>
        <td style="height:30px; font-size:0; line-height:0; width:30px;"><a href="#" target="_blank"><img src="'.site_url().'/wp-content/uploads/2015/01/facebook.jpg" alt="" style="border:none;"></a></td>
        <td style="height:30px; font-size:0; line-height:0; width:2px;">&nbsp;</td>
        <td style="height:30px; font-size:0; line-height:0; width:30px;"><a href="#" target="_blank"><img src="'.site_url().'/wp-content/uploads/2015/01/google-plus.jpg" alt="" style="border:none;"></a></td>
       </tr>
                
                
                
                
            </table>
        </td>
        <td style="height:30px; font-size:0; line-height:0; width:202px;">&nbsp;</td>
      </tr>
            </table>
        
        
        </td>
        <td style="font-size:0; line-height:0; width:90px;">&nbsp;</td>
      </tr>
      <tr>
        <td style="height:20px; font-size:0; line-height:0; width:90px;">&nbsp;</td>
        <td style="height:20px; width:495px; font-size:0; line-height:0;">&nbsp;</td>
        <td style="height:20px; font-size:0; line-height:0; width:90px;">&nbsp;</td>
      </tr>
      <tr>
        <td style="font-size:0; line-height:0; width:90px;">&nbsp;</td>
        <td>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
        <td style="font-size:0; line-height:0; width:48px;">&nbsp;</td>
        <td style="width:424px; font-size:0; line-height:0;">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:16px; color:#454444; text-align:center;"><span style="font-weight:bold;">Contact with us:</span> 104 Bunwell Street, Bunwell, Norfolk NR16 1AB</td>
        </tr>
        <tr>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:16px; color:#454444; text-align:center;">Landl: 01953 789 016 David: 079 85 93 18 33 Donna: 079 85 92 83 73</td>
        </tr>
        <tr>
            <td style="font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:16px; color:#454444; text-align:center;"><a href="mailto:ohins@btinternet.com" style="color:#454444; text-decoration:none;">ohins@btinternet.com</a></td>
        </tr>
        </table>
        </td>
        <td style="font-size:0; line-height:0; width:48px;">&nbsp;</td>
            </tr>
        </table>
        
        </td>
        <td style="font-size:0; line-height:0; width:90px;">&nbsp;</td>
      </tr>
      <tr>
        <td style="height:20px; font-size:0; line-height:0; width:90px;">&nbsp;</td>
        <td style="height:20px; width:495px; font-size:0; line-height:0;">&nbsp;</td>
        <td style="height:20px; font-size:0; line-height:0; width:90px;">&nbsp;</td>
      </tr>
	</table>
    
</td>
  </tr>
  <!--footer-->
  
</table>');
    ?>
    <input type="submit" name="Send"  value="Send"/>
  </form>
</div>
