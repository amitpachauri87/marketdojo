<?php

/*

 * Plugin Name:Our News Letter list

 * Description: Important addon for Our Newsletter plugin

 * Plugin URI: http://www.paulund.co.uk

 * Author: Paul Underwood

 * Author URI: http://www.paulund.co.uk

 * Version: 1.0

 * License: GPL2

 */

 

if(is_admin())

{

    new Paulund_Wp_List_Table();

}

 

/**

 * Paulund_Wp_List_Table class will create the page to load the table

 */

class Paulund_Wp_List_Table

{

    /**

     * Constructor will create the menu item

     */

    public function __construct()

    {

        add_action( 'admin_menu', array($this, 'add_menu_example_list_table_page' ));

		

    }

 

    /**

     * Menu item will allow us to load the page to display the table

     */

    public function add_menu_example_list_table_page()

    {

        add_menu_page( 'Our Newsletter Listings', 'Our Newsletter Listings', 'manage_options', 'user_list', array($this, 'list_table_page') );

		add_submenu_page( 'user_list', 'Send Newsletter','Send Newsletter','read', 'monthly-email-menu','monthly_email_newsletter_panel');

		add_submenu_page( null, 'Send Personal Email','Send Personal Email','read', 'personal-email-menu','personal_email_newsletter_panel');

		add_submenu_page( 'user_list', 'Add A New Mail Address','Add A New Mail Address','read', 'add-a-new-address','add_a_new_address_panel');

		add_submenu_page( 'user_list', 'Send Manual Email','Send Manual Email','read', 'send-manual-mail','send_manual_mail_panel');

    }

	

    /**

     * Display the list table page

     *

     * @return Void

     */

    public function list_table_page()

    {

	

	

        $exampleListTable = new Example_List_Table();

        $exampleListTable->prepare_items();

        ?>

            <div class="wrap">

            <script type="text/javascript">

			function changecat(id,usr)

			{

				if(confirm('Are you sure you want to change it?'))

				{

					window.location.href="admin.php?page=user_list&action=chng_cat&id="+id+"&user="+usr;

				}

			}

			</script>

            

                <div id="icon-users" class="icon32"></div>

                <h2>Our Newsletter Listings</h2>

                <?php $exampleListTable->display(); ?>

            </div>

        <?php

		

		

		

    }

	

	

}



// WP_List_Table is not loaded automatically so we need to load it in our application

if( ! class_exists( 'WP_List_Table' ) ) {

    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );

}

 

/**

 * Create a new table class that will extend the WP_List_Table

 */

class Example_List_Table extends WP_List_Table

{

    /**

     * Prepare the items for the table to process

     *

     * @return Void

     */

    public function prepare_items()

    {

		//print_r($_REQUEST);

		

		if($_REQUEST['action']=='chng_cat')

		{

			 global $wpdb;

			$q="UPDATE ".$wpdb->prefix."our_newsletter SET category = '".$_REQUEST['id']."' WHERE  id  = '".$_REQUEST['user']."'";

		     $wpdb->query($q);

			echo "<script>window.location.href='admin.php?page=user_list'</script>";

		}

		

		if($_REQUEST['action']=='delete')

		{

			 global $wpdb;

			$a="DELETE FROM ".$wpdb->prefix."our_newsletter WHERE id='".$_REQUEST['id']."'";

			$wpdb->query($a);

			echo "<script>window.location.href='admin.php?page=user_list'</script>";

		}

		if($_REQUEST['action']=='unpublish')

		{

			 global $wpdb;

			$q="UPDATE ".$wpdb->prefix."our_newsletter SET status = 'N' WHERE  id  = '".$_REQUEST['id']."'";

		     $wpdb->query($q);

			echo "<script>window.location.href='admin.php?page=user_list'</script>";

		}

		if($_REQUEST['action']=='publish')

		{

			 global $wpdb;

			 $q="UPDATE ".$wpdb->prefix."our_newsletter SET status = 'Y' WHERE  id  = '".$_REQUEST['id']."'";

		     $wpdb->query($q);

			echo "<script>window.location.href='admin.php?page=user_list'</script>";

		}

        $columns = $this->get_columns();

        $hidden = $this->get_hidden_columns();

        $sortable = $this->get_sortable_columns();

        $data = $this->table_data();

		//print_r($data);die;

        usort( $data, array( &$this, 'sort_data' ) );

        $perPage = 30;

        $currentPage = $this->get_pagenum();

        $totalItems = count($data);

        $this->set_pagination_args( array(

            'total_items' => $totalItems,

            'per_page'    => $perPage

        ) );

 

        $data = array_slice($data,(($currentPage-1)*$perPage),$perPage);



        $this->_column_headers = array($columns, $hidden, $sortable);

        $this->items = $data;

		

    }

 

    /**

     * Override the parent columns method. Defines the columns to use in your listing table

     *

     * @return Array

     */

    public function get_columns()

    {

        $columns = array(

            'id'         => 'ID',

            'name'         => 'Name',

			'email'      => 'Email',



            'sub_date'   => 'Subscription Date',

			'status'     => 'Active',

			'delete'     =>   'Delete'

        );

 

        return $columns;

    }

 

    /**

     * Define which columns are hidden

     *

     * @return Array

     */

    public function get_hidden_columns()

    {

        return array();

    }

 

    /**

     * Define the sortable columns

     *

     * @return Array

     */

    public function get_sortable_columns()

    {

        return array('id' => array('id', false));

    }

 

    /**

     * Get the table data

     *

     * @return Array

     */

    private function table_data()

    {

        $data = array();

		    global $wpdb;

    $all_student = $wpdb->get_results("select * from ".$wpdb->prefix."our_newsletter order by id desc");

	  

		//$all_student = $args->get_results();

		

		foreach($all_student as $get_user)

		{

		//echo  $get_user->subscriptiondate	;die;

		  

			if($get_user->status=='Y')

			{

				$stat='<a href="admin.php?page=user_list&action=unpublish&id='.$get_user->id.'">Unsubscribe</a>';

			}

			if($get_user->status=='N')

			{

				$stat='<a href="admin.php?page=user_list&action=publish&id='.$get_user->id.'">Subscribe</a>';

			}

		$jeson_detail=json_decode($get_user->email);

		//print_r($jeson_detail);

		$user_email='<a title="Click here to send email to '.$jeson_detail->email.'" href="admin.php?page=personal-email-menu&name='.$jeson_detail->first_name.'&email='.$jeson_detail->email.'">'.$jeson_detail->email.'</a>';

        $data[] = array(

                    'id'          => $get_user->id,

					'name'          => $get_user->news_name,

					'email'  =>$get_user->email,

               

                    'status' => $stat,

                    'sub_date'        => $get_user->subscriptiondate,

					'delete'	=> '<a href="admin.php?page=user_list&action=delete&id='.$get_user->id.'" onclick="return confirm(\'Are you sure to delete it\')">Delete</a>',

                    );

					

		}

		//print_r($data);die;

        return $data;

    }

 

    /**

     * Define what data to show on each column of the table

     *

     * @param  Array $item        Data

     * @param  String $column_name - Current column name

     *

     * @return Mixed

     */

    public function column_default( $item, $column_name )

    {

		//print_r($item);die;

        switch( $column_name ) {

            case 'id':

			case 'name':

			case 'email':

           

            case 'status':

            case 'sub_date':

			case 'delete':

                return $item[ $column_name ];

 

            default:

                return print_r( $item, true ) ;

        }

    }

 

    /**

     * Allows you to sort the data by the variables set in the $_GET

     *


     * @return Mixed

     */

    private function sort_data( $a, $b )

    {

        // Set defaults

        $orderby = 'id';

        $order = 'desc';

 

        // If orderby is set, use this as the sort column

        if(!empty($_GET['orderby']))

        {

            $orderby = $_GET['orderby'];

        }

 

        // If order is set use this as the order

        if(!empty($_GET['order']))

        {

            $order = $_GET['order'];

        }

 

 

        $result = strnatcmp( $a[$orderby], $b[$orderby] );

 

        if($order === 'asc')

        {

            return $result;

        }

 

        return -$result;

    }

}

?>