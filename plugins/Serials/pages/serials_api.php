<?php
	$g_mantis_serials_customer       = plugin_table('customer');
	$g_mantis_serials_assembly       = plugin_table('assembly');
	$g_mantis_serials_format         = plugin_table('revision');
	$g_mantis_serials_sales_order    = plugin_table('sales_order');
	$g_mantis_serials_serial         = plugin_table('serial');	
	#----------------------------------
	# serials page definitions

	$g_serials_menu_page                = plugin_page( 'serials_menu_page.php' );
	$g_format_page                 		= plugin_page( 'format.php' );
	$g_config_page                 		= plugin_page( 'config.php' );
	$g_config_edit_page                 = plugin_page( 'config_edit.php' );
		#----------------------------------

	###########################################################################
	# serials API
	###########################################################################

	# function serials_add   ( $p_project_id, $p_poster_id, $p_question, $p_answere );
	# function serials_delete( $p_id );
	# function serials_update( $p_id, $p_question, $p_answere );
	# function serials_select( $p_id );

	function format_add_query( $p_serial, $p_sales_order, $p_assembly_id, $p_user_id){
		$g_mantis_serials_serial         = plugin_table('serial');	
		
		$query = "INSERT
				INTO $g_mantis_serials_serial
	    		( id, serial, sales_order, assembly_id, user_id, entry_time )
				VALUES
				( null, '$p_serial', '$p_sales_order', $p_assembly_id, '$p_user_id', NOW() )";
	    return db_query_bound( $query );
		
	}
	
	function serial_select_query($p_assembly_id, $p_sales_order){}
	