<h1>Send Manual Email</h1>
<br/>
<br/>
<div class="wrap">
   <?php
  if(isset($_REQUEST['Send']) and $_REQUEST['Send']!="")
  {
	if($_REQUEST['address']=="")
	{
	   echo '<div id="message" class="updated below-h2"><p>Please Add Email Address.</p></div>';
	}
	else if($_REQUEST['content']=="")
	{
		echo '<div id="message" class="updated below-h2"><p>Please Add A Content.</p></div>';
	}
	else if($_REQUEST['subject']=="" )
	{
		echo '<div id="message" class="updated below-h2"><p>Please Add A Mail Title.</p></div>';
	}
	else
	{
		$to=$_REQUEST['address'];
		add_filter( 'wp_mail_content_type', 'set_html_content_type' );
		$headers = 'From: Healthy Roots <'.get_settings('admin_email').'>'."\r\n";
        $headers.= "Reply-To: noreply@healthyroots.com\r\n";
		$subject=$_REQUEST['subject'];
		$message=stripcslashes($_REQUEST['content']);
		//print_r($to);die;
	    if(wp_mail( $to, $subject, $message, $headers ))
	   {
		   echo '<div id="message" class="updated below-h2"><p>Your message was sent successfully. Thanks.</p></div>';
		   //include 'insert_for_home.php';
	   }
	   else
	   {
		   echo '<div id="message" class="updated below-h2"><p>Error occured.Please try again.</p></div>';
	   }
	}
  }
  ?>
 <form action="admin.php?page=send-manual-mail" method="post" enctype="multipart/form-data" name="myfrom">
  <label>
  Add Email Address ( Add multiple addresses separated by a comma. )
  </label>
   <br />
  <input type="text" name="address" size="50"/>
  <br />
  <label>
  Mail Subject
  </label>
   <br />
  <input type="text" name="subject" size="50"/>
    <br/>
   <label>
  Mail Content
  </label>
    <?php
     the_editor($id='');
    ?>
    <input type="submit" name="Send"  value="Send"/>
  </form>
</div>

