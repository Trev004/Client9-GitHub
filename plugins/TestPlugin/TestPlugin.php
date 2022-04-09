<?php 
/** 
 * Hello World 
 * 
 * @package HelloWorld 
 * @author Trevor Jacob
 * @copyright 2022 Trevor Jacob
 * @license GPL-2.0-or-later 
 * 
 * @wordpress-plugin 
 * Plugin Name: Hello World 
 * Plugin URI: https://tjacob.imgd.ca/DGL233/myblog/ 
 * Description: Prints "Hello World" in WordPress admin. 
 * Version: 0.0.1 
 * Author: Trevor Jacob 
 * Author URI: https://tjacob.imgd.ca/DGL233/myblog/portfolio/ 
 * Text Domain: hello-world 
 * License: GPL v2 or later 
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt */
?>
<?php
  function print_hello_world_title()  {
    echo "<h1>Hello World</h1>"; 
  }
  function hello_world_admin_menu()  {
    add_menu_page(
      'Hello World',// page title  
      'Hello World Menu Title',// menu title  
      'manage_options',// capability  
      'hello-world',// menu slug  
      'print_hello_world_title'  // callback function  
    );  
  }  
  add_action( 'admin_menu', 'hello_world_admin_menu' );

?>