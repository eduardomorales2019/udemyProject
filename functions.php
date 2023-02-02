
<?php

//  VARIANLE   declaration. ================================

// INCLUDE   Statements===================================

include(get_theme_file_path("./includes/front/enqueue.php")); 
include(get_theme_file_path("./includes/front/head.php")); 
include(get_theme_file_path("./includes/front/setup.php")); 
// HOOKS  ========================	we listen an event more taht 100 hooks

 add_action("wp_enqueue_scripts", "u_enqueue");
 add_action("wp_head", "u_head",5);
// loading files in gutebmber editor. this function is event run after the event is loaded. 
// for seeting uthe theme 
add_action("after_setup_theme", "u_setup_option"); 


