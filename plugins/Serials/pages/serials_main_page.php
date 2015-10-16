<?php
require( "serials_api.php" );
require( "css_serials.php" );
access_ensure_global_level( plugin_config_get( 'serials_view_threshold' ) );
html_page_top1();
html_page_top2();
$minimum_level = access_get_global_level();
$t_where_clausole = "view_access <= $minimum_level";

?>
<div>
<?php
if ( access_has_project_level( DEVELOPER ) ) {
    global $g_config_page;
    print_bracket_link( $g_format_page, plugin_lang_get( 'format_title') );
}
?>
<table width="100%">
	<tr <?php echo helper_alternate_class() ?> valign="top">
		<td class="category">customer:</td>
		<td class="category">sales order:<input></td>
		<td class="category">search button</td>
	</tr>
	<tr <?php echo helper_alternate_class() ?> valign="top">
		<td class="category">Assembly Number:<select></td>
		<td class="category">Revision:<select></td>
		<td class="category">Print Button</td>
	</tr>
</table>
</div>
<div>
	<table>
	<tr>
		<td>Scanned List</td>
	</tr>
	<tr>
		<td><textarea rows="10" cols="100"></textarea></td>
	</tr>		
	</table>	
</div>
<div>
<table>
	<tr>
		<td>Error handling</td>
	</tr>
	<tr>
		<td>Scan:<input size="100"></td>
	</tr>
</table>	
</div>		
<?php
html_page_bottom1();
?>