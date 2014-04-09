<?php

// The file must have the type-[data-type].php filename format


define	( "DEFAULT_TEXT_SIZE",	"");




// The function must have the nuts_type_[data-type]_field name format
function nuts_type_text_field ( $name, $value ) {

	global $nuts_options_array;
	
	if ( $nuts_options_array[$name]["size"] != "" ) $size = $nuts_options_array[$name]["size"];
		else $size = DEFAULT_TEXT_SIZE;

	echo '<div class="text">
			<input type="text" name="' . nuts_form_ref ( $name ) . '" id="' . $name . '" value="' . $value . '"';

	if ( $size > 0 ) echo ' maxlength="' . $size . '"';
			
	echo ' />
		</div>';

}



// Gives you the image object based on the option name
function nuts_get_text ( $name ) {

	return nuts_get_option ( $name );

}




// This is the function that returns the image in the size defined in its registered array
function nuts_text ( $name ) {

	echo nuts_get_text ( $name );
	
}



?>