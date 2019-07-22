<h1>Send Personal Email</h1>
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
		$to=$_REQUEST['email'];
		add_filter( 'wp_mail_content_type', 'set_html_content_type' );
		$headers = 'From: My Name <'.get_settings('admin_email').'>'."\r\n";
        $headers.= "Reply-To: noreply@gospelalive.com\r\n";

		//$headers = 'From:Gospel Alive <'.get_settings('admin_email').'>';
		$subject=$_REQUEST['subject'];
		$message=stripcslashes($_REQUEST['content']);
		//print_r($to);die;
	    if(wp_mail( $to, $subject, $message, $headers ))
	   {
		   echo '<div id="message" class="updated below-h2"><p>Your message was sent successfully. Thanks.</p></div>';
		   include 'insert_for_home.php';
	   }
	   else
	   {
		   echo '<div id="message" class="updated below-h2"><p>Error occured.Please try again.</p></div>';
	   }
	}
  }
  ?>
<form action="admin.php?page=personal-email-menu&name=<?php echo $_REQUEST['name'];?>&email=<?php echo $_REQUEST['email'];?>" method="post" enctype="multipart/form-data" name="myfrom">
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
    the_editor($id="Hi,".ucfirst($_REQUEST['name']));
    ?>
    <input type="submit" name="Send"  value="Send"/>
  </form>

</div>
