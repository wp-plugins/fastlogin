<?php                                                                                                                                                                                       
/*                                                                                                                                                                                          
Plugin Name: fastlogin                                                                                                                                                                 
Description: This plugin help to enter login page with Ctrl+Shift+l combination.                                                                                                                
Author: zencoders.ru                                                                                                                                                                        
Version: 0.1                                                                                                                                                                                
Author URI: http://zencoders.ru                                                                                                                                                             
*/                                                                                                                                                                                          
  
function fastlogin(){                     
  echo("<link rel=\"alternate\" id=\"logon-link\" title=\"".__('Log in')."\" href=\"/wp-admin\" />");                                                                 
  echo("\n");                                                                                                                                                                               
  echo("<script>");                                                                                                                                                                         
  echo('document.onkeydown = NavigateThrough;                                                                                                                                               
    function NavigateThrough (event) {                                                                                                                                                      
      if (!document.getElementById) return;                                                                                                                                                 
      if (window.event) event = window.event;                                                                                                                                               
      if (event.ctrlKey && event.shiftKey) {                                                                                                                                                
        var link = null;                                                                                                                                                                    
        var href = null;                                                                                                                                                                    
        switch (event.keyCode ? event.keyCode: event.which ? event.which: null) {                                                                                                           
          case 0x4C:                                                                                                                                                                        
            link = document.getElementById ("logon-link");                                                                                                                                  
          break;                                                                                                                                                                            
        }                                                                                                                                                                                   
        if (link && link.href) document.location = link.href;                                                                                                                               
        if (href) document.location = href;                                                                                                                                                 
      }                                                                                                                                                                                     
    }                                                                                                                                                                                       
    ');                                                                                                                                                                                     
    echo("</script>");                                                                                                                                                                      
}                                                                                                                                                                                           
add_action('wp_head', 'fastlogin');                                                                                                                                                    
?>