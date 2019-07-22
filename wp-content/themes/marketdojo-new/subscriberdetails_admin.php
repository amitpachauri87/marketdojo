<?php
	global $wpdb, $table_prefix;
    $tablename=$table_prefix . 'subscribers';
	$del_id=$_GET['del_id'];
	if($del_id){
		$wpdb->delete( $tablename, array( 'id' => $del_id ), array( '%d' ) );
		$url = get_bloginfo('url').'/wp-admin/admin.php?page=subscription_details&status=delete';
		wp_redirect( $url );
		exit;
	}
?>

<h1>Subscriptions Contacts</h1>

<form action="<?php echo get_bloginfo('url').'/wp-admin/admin.php?page=subscription_details';?>" method="post">
<input type="submit" name="export" value="Export CSV">
</form>

<?php if($_GET['status']=='delete'){ ?>
<p style="color: #32FF00">Contact Details Deleted Successfully.</p>
<?php } ?>
<!--PAGE STYLE-->
<style type="text/css">
h1{ border-bottom: 2px solid #4686c4;color: #4686c4; display: block; font-size: 23px;font-weight: 400;line-height: 1.2;
margin: 0.67em 0; padding-bottom: 10px;}
table tr th,table tr td{background:#d4d4d4;padding:7px 10px;text-transform:uppercase; text-align:left;}
table tr td{ background:#e6e6e7; text-transform:inherit;}
</style>
<?php $num = $wpdb->get_var("SELECT COUNT(*) FROM $tablename ORDER BY id DESC"); ?>
<h2>Total Contact : <?php echo $num; ?></h2>
<table style="width:100%; text-align:left;">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Country</th>
        <th>Action</th>
    </tr>
    
   	<?php
	$query="SELECT * FROM $tablename ORDER BY id DESC";
	$fivesdrafts = $wpdb->get_results($query);
	if ( $fivesdrafts )
	{
		foreach ( $fivesdrafts as $post )
		{
	?>
    <tr>
        <td>
        	<?php echo $post->name; ?>
        </td>
        <td>
        	<?php echo $post->email; ?> 
        </td>
        <td>
        	<?php echo $post->phone; ?>
        </td>
        <td>
        	<?php echo $post->country; ?>
        </td>
        <td>
        	<a href="admin.php?page=subscription_details&del_id=<?php echo $post->id; ?>">Delete</a> 
        </td>
    </tr>
    <?php
		}
	}
	?>
</table>