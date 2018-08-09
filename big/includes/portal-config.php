<?php

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));


switch(THIS_PAGE){

    case "index.php":
        $title = "Weiyan Rui: WEB120 Portal Page";
        $logo = "fa-home";
        $PageID = "Welcome";
    break;
    
    case "flexbox.php":
        $title = "Weiyan Rui's Flexbox Research";
        $logo = "";
        $PageID = "Flexbox Research";
    break;
        
    case "galleries.php":
        $title = "Weiyan Rui's Galleries Research";
        $logo = "";
        $PageID = "Galleries Research";
    break;
        
    case "map.php":
        $title = "Weiyan Rui: Google Map";
        $logo = "";
        $PageID = "Google Map";
    break;
    
    case "youtube.php":
        $title = "Weiyan Rui: Youtube Video";
        $logo = "";
        $PageID = "Youtube";
    break;
    
     case "calendar.php":
        $title = "Weiyan Rui's Event Calendar";
        $logo = "";
        $PageID = "Event Calendar";
    break;
        
     case "parallax.php":
        $title = "Weiyan Rui's Parallax Research";
        $logo = "";
        $PageID = "Parallax Research";
    break;
        
    case "shoppingcarts.php":
        $title = "Weiyan Rui's Shopping Carts Research";
        $logo = "";
        $PageID = "Shoppingcarts Research";
    break;
    
    case "Site vs App.php":
        $title = "Weiyan Rui's Site vs App Research";
        $logo = "";
        $PageID = "Sitevsapp Research";
    break;
        
    case "webcam.php":
        $title = "Weiyan Rui's Web cams examples";
        $logo = "";
        $PageID = "Webcam";
    break;
        
 

    default:
        $title = THIS_PAGE;
        $logo = "";
        $PageID ="";
    break;
    
}

?>
