<?php
global $user_ID;
$new_post = array(
'post_title' => $_REQUEST['subject'],
'post_content' => $_REQUEST['content'],
'post_status' => 'publish',
'post_date' => date('Y-m-d H:i:s'),
'post_author' => $user_ID,
'post_type' => 'show-news',
'post_category' => array(0)
);
$post_id = wp_insert_post($new_post);
?>