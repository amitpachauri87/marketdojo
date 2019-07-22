<?php
	require_once('../../../wp-load.php');

	global $wpdb, $table_prefix;
	
	$email = trim($_POST["email"]);
	
	
	$date = current_time( 'mysql' );
	define('NEWS_LETTER_TABLE', $table_prefix . 'our_newsletter');
	
	$meta = $wpdb->get_results("SELECT * FROM `".NEWS_LETTER_TABLE."` WHERE email='".$email."'",OBJECT);
	if (empty($email)) {

        echo $msg = "<strong>Email is required</strong>";

    } elseif (!is_email($email)) {

        echo $msg = "<strong>Invalid email format</strong>";
    }
	
	elseif($meta == NULL && $msg == NULL){
		$args = array(
			'email' => $email,
			
			'subscriptiondate' => $date,
			'status' => "Y"
		);
		$format = array( 
			'%s',
			'%s',
			'%s' 
			);
		$deta = $wpdb->insert(NEWS_LETTER_TABLE, $args, $format);
		echo $msg = "<strong>Subscription Successful</strong>"; 
	} 
	else{
		echo $msg = "<strong>You're Already Subscribed!</strong>";
	}
	//return $msg;
	//echo json_encode($msg);
	
	
	
	
	
?>
