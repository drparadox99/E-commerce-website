<?php
//AIWANSEDO et SIMMONET

    function connex($base,$param){
      include ($param);    
        #PDO Connection to the database
     try{
          echo "lolicta";
           $idcon = new PDO("mysql:host=$host;dbname=$base;", $user,$password);
      }catch(PDOException $e){
          die("La connection avec la base n'a pu être effectuée: " .$e->getMessage());
      }
      return $idcon;
    }
?>
