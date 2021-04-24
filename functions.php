<?php

function Demo_child_assets(){
    wp_enqueue_style ("parent-style", get_parent_theme_file_uri( "/style.css"),array("cdnbootstrap"));   
    
}        
add_action( "wp_enqueue_scripts", "Demo_child_assets");



function style_deque(){
    wp_dequeue_style("demo-css-file");
    wp_deregister_style("demo-css-file");
    wp_dequeue_style("bload");
    wp_deregister_style( "bload");
    wp_enqueue_style("cdnbootstrap",get_theme_file_uri("//cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"));  
    wp_enqueue_style("demo_child_css", get_theme_file_uri("/assets/parent.css"));
}
add_action("wp_enqueue_scripts", "style_deque",11);



function today_date (){
    echo date("d-m-y");
}




?>