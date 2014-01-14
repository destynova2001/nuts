<?php 

// Read the logo set up in Theme Options and return its URL or the IMG object



// This is the function that displays the theme logo
function nuts_logo ( $print = "img" ) {

	if ( $print == "img" ) {
		$value = "Image object";
	}
	
	elseif ( $print == "url" ) {
		$value = "Image URL";
	}
	
	else {
		$value = "Invalid parameter: " . $print;
	}
	
	return $value;
	
}

add_action ( 'after_setup_theme', 'nuts_logo' );




// Now set up the settings for the Theme Options page
$nuts_logo_array = array (
	"name" 			=> "logo",
	"title" 		=> "Theme Logo",
	"description" 	=> "Please upload your website's logo here.",
	"option_group"	=> "",
	"type" 			=> "image",
	"default"		=> ""
);
nuts_register_option ( $nuts_logo_array );


?>