<!--  Special file and optional, every code here will be execute  on every oage request   FUNCTIONSSSS ALWAYS-->
<!-- functuins is first that template...  -->
<?php

//  VARIANLE   declaration. ================================

// INCLUDE   Statements===================================

include(get_theme_file_path("./includes/front/enqueue.php")); 
// HOOKS  ========================	we listen an event more taht 100 hooks

//  add_action("wp_enqueue_scripts", "u_enqueue");
add_action("wp_enqueue_scripts", "u_enqueue");
// 
