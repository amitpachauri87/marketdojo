
<h1>Send A Newsletter</h1>
<br/>
<br/>
<div class="wrap">
<?php
	//print_r($add_list);
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
		global $wpdb;
        $add_list = $wpdb->get_results("select * from ".$wpdb->prefix."our_newsletter where status='Y'");
		//print_r( $add_list);die;
		$to='';
		add_filter( 'wp_mail_content_type', 'set_html_content_type' );
		$headers = 'From: Healthy Roots <'.get_settings('admin_email').'>'."\r\n";
        $headers.= "Reply-To: noreply@healthyroots.com\r\n";
		$subject=$_REQUEST['subject'];
		$message=stripcslashes($_REQUEST['content']);
		$flag==0;
	
		foreach($add_list as $add_val)
		{
			
		 $json_ret=$add_val->email;
		 //echo $json_ret->email;
		 $to= $add_val->email;
		 $unsub_url=site_url()."/unsubscribe-newsletter?do=".base64_encode($json_ret);
		 $msg=str_replace("@@@",$unsub_url,$message);
		 ///echo $to.",". $subject."," .$msg.",". $headers;die;	
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
		//print_r($to);die;
	}
  }
  ?>
<form action="admin.php?page=monthly-email-menu" method="post" enctype="multipart/form-data" name="myfrom">

  <label>
  Mail Title
  </label>
  <br />
  <input type="text" name="subject" size="50"/>
  <br/>
   <label>
  Mail Content
  </label>
  <?php
the_editor($id='<a href="@@@">Unsubscribe</a>');
?>
  <input type="submit" name="Send" value="Send" />
</form>
</div>
