<?php

$siteKey = "6Lf3_2QUAAAAAN_NN71rojGoYTfQUy796Bar2DQU";
$secretKey = "6Lf3_2QUAAAAAOkBWZ2c6Vxo2ICA04Pdo2iHU9bK";

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));


switch(THIS_PAGE){

    case "index.php":
        $title = "Bookthinkso Portal Page";
        $logo = "fa-home";
        $PageID = "Welcome";
    break;
    
    case "galleries.php":
        $title = "Bookthinkso Galleries";
        $logo = "";
        $PageID = "Galleries";
    break;
        
    case "about.php":
        $title = "About Bookthinkso";
        $logo = "";
        $PageID = "AboutUs";
    break;
        
    case "contact.php":
        $title = "Contact Bookthinkso";
        $logo = "";
        $PageID = "Contact";
    break;
    
   default:
        $title = THIS_PAGE;
        $logo = "";
        $PageID ="";
    break;
    
}

?>
