<link rel="stylesheet" type="text/css" href="<?php echo MYPLUGINNAME_PATH; ?>css/datepicker.css" /> 
<script type="text/javascript" src="<?php echo MYPLUGINNAME_PATH; ?>js/datepicker.js"></script>
<h1>Add A New Mail Address</h1>
<br/>
<script type="text/javascript">
function validate()
{

	 if( (document.myForm.email.value == "") || !(ValidateEmail(document.myForm.email.value)))
   {
     alert( "Please Enter A valid Email!" );
     document.myForm.email.focus() ;
     return false;
   }
  
   return( true );
}
function ValidateEmail(email) {
        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        return expr.test(email);
    }
</script>
<div class="wrap">
  <?php
  if(isset($_REQUEST['Add']) and $_REQUEST['Add']!="")
  {
	 if(!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL) or $_REQUEST['email']=="")
	  {
	  echo '<div id="message" class="updated below-h2"><p>Please Enter A Valid Email.</p></div>';
	  }
		else
		{
		$email = trim($_REQUEST['email']);
		global $wpdb;
		$row=$wpdb->get_results("SELECT * FROM ".$wpdb->prefix."our_newsletter WHERE email='".$email."'");
			if(count($row)<=0)
			{
				$wpdb->query("INSERT INTO ".$wpdb->prefix."our_newsletter VALUES (NULL, '".$email."', '".date("Y-m-d H:i:s")."', 'Y')");
				echo '<div id="message" class="updated below-h2"><p>You Have Successfully Entered The Address.</p></div>';
			}
			else
			{
					echo '<div id="message" class="updated below-h2"><p>Email Address Already Exists.</p></div>';
			}
		}
	}
  ?>
  <form action="admin.php?page=add-a-new-address" method="post" enctype="multipart/form-data" name="myForm"  onsubmit="return(validate());">
    <label> Email Address <sup>*</sup></label>
    <br />
    <input type="text" name="email" size="50"/>
    <br/>
    <input type="submit" name="Add"  value="Add"/>
  </form>
</div>
