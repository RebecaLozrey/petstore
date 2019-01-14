<?php
/**
*Theme template for petstore
*/
?>
<h3 class='petstore-template'><?php print $text1;?></h3>
<p><?php print $text2;?></p>
<p><?php 
	$form = drupal_get_form('petstore_form');
	print drupal_render($form);
		if(isset($_POST['pet_name'])){
		$name = mysql_real_escape_string($_POST['pet_name']);
		echo "<pre>";
		print_r($name);
	}
	
	print_r($form['#method'].'<br>');
	print_r($form['#action'].'<br>');
	var_dump(isset($_POST['pet_name']));
	print_r('<br>');

function petstore_form_submit($form, &$form_state) {
	drupal_set_message(t('The form has been submitted.'));
	$form_state['rebuild'] = TRUE;
}
	print_r($form_state);


?></p>



