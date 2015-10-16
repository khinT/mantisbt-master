<?php
require("serials_api.php");
access_ensure_project_level( plugin_config_get('format_threshold')); 
html_page_top1( plugin_lang_get( 'plugin_format_title' ) );
html_page_top2();

?>
<br>
<p align="center">Configuration page to set up Serial Numbering format per Assembly.</p>
</br>
<div align="center">
<form method="post" action="<?php plugin_page('format_add.php')?>" enctype="multipart/form-data">
<table class="width75" cellspacing="1">
	<tr <?php echo helper_alternate_class() ?> valign="top">
		<td class="category">
			<?php echo plugin_lang_get( 'customer_name' ) ?>
		</td>
		<td>
			<input type="text" size="100" name="customer_name" value="" required/>
		</td>
	</tr>
	<tr <?php echo helper_alternate_class() ?> valign="top">
		<td class="category">
			<?php echo plugin_lang_get( 'assembly_number' ) ?>
		</td>
		<td>
			<input type="text" size="100" name="assembly_number" value="" required/>
		</td>
	</tr>
	<tr <?php echo helper_alternate_class() ?> valign="top">
		<td class="category">
			<?php echo plugin_lang_get( 'revision' ) ?>
		</td>
		<td>
			<input type="text" size="30" name="revision" value="" required/>
		</td>
	</tr>
	<tr <?php echo helper_alternate_class() ?> valign="top">
		<td class="category">
			<?php echo plugin_lang_get( 'format' ) ?>
		</td>
		<td>
			<input type="text" size="100" name="format" value="" required/>
		</td>
	</tr>
	<tr <?php echo helper_alternate_class() ?> valign="top">
		<td class="category">
			<?php echo plugin_lang_get( 'format_example' ) ?>
		</td>
		<td>
			<input type="text" size="100" name="format_example" value="" required/>
		</td>
	</tr>
</table>
</form>
</div>
<?php
html_page_bottom1( __FILE__ );