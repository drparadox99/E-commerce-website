<?php
session_start();
session_unset();     //Destruction de al sesseion
session_destroy();  //Destruction des sesseions
header( "Location: Page_d_Reseau_social.php");  //Redirection vers la page indiquée

 ?>?>
