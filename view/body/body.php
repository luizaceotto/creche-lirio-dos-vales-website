<?php
switch ($page){
        
    case "index":
        include_once($page.".html");
    break;
        
    case "index2":
        include_once($page.".html");
    break;
        
    case "empresa":
        include_once($page.".html");
    break;
        
    case "contato":
        include_once($page.".html");
    break;
        
    case "portfolio":
        include_once($page.".html");
    break;
    
    
    default:
        include_once($page.".php");
    break;
        
}
?>