<?php

function u_enqueue()
{

	// REGISTER A FILE, tell word press that file exist 
	wp_register_style("u_font_rubik_and_pacifico", "https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:wght@300;400;500;700&display=swap");

	wp_register_style("u_boostrap_icons", get_theme_file_uri("assets/bootstrap-icons/bootstrap-icons.css"));

	wp_register_style("u_theme", get_theme_file_uri( "assets/public/index.css"));

	wp_enqueue_style("u_font_rubik_and_pacifico"); 
	wp_enqueue_style("u_boostrap_icons"); 
	wp_enqueue_style("u_theme"); 
	

}

