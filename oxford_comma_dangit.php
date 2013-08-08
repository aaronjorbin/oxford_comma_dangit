<?php
/*
Plugin Name: Oxford Comma Dangit
Version: 0.1-alpha
Description: Oxford Commas are beautiful, clafying, and neccessary.  
Author: jorbin 
Author URI: http://aaron.jorb.in 
Plugin URI: http://github.com/aaronjorbin/oxford_comma_dangit 
Text Domain: oxford_comma_dangit
Domain Path: /languages
*/


add_filter('the_content', 'oxford_comma_dangit');

/**
	Takes the content and adds oxford commas

	@see http://www.youtube.com/watch?v=P_i1xk07o4g

*/

function oxford_comma_dangit($content){
	/* @TODO:  magic to add the oxford comma when it is needed */
	return $content;	
}
