<?php

// The file must have the type-[data-type].php filename format




// The function must have the nuts_type_[data-type]_field name format
function nuts_type_select_field ( $name, $id ) {

	global $nuts_options_array;
	
	if ( $id == '' ) $id = $nuts_options_array[$name]["default"];
	
	echo '<select name="' . nuts_form_ref ( $name ) . '" id="' . $name . '" autocomplete="off">';

	foreach ( $nuts_options_array[$name]["values"] as $key => $value ) {
		echo '<option value="' . $key . '"';
		
		if ( $key == $id ) echo ' selected';
		
		echo '>' . $value . '</option>';
		echo $key . ' ' . $id;

	}
	
	echo '</select>';

}



// Gets the value of the saved option
function nuts_get_select ( $name, $key = false ) {

	global $nuts_options_array;

	$id = nuts_get_option ( $name );

	if ( $key ) return $id;
		else return $nuts_options_array[$name]["values"][$id];

}




// This is the function that prints the value
function nuts_select ( $name, $key = false ) {

	echo nuts_get_select ( $name, $key );
	
}



?>