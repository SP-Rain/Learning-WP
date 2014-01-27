<?php
/*
Template Name: Redirect
*/

$URL = get_post_meta($post->ID, 'redirect-url', true); 
header ("Location: $URL");

?>




