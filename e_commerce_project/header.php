<?php
session_start();
include 'connection.php';
$db = connex("bdsite","connect.inc.php");

?>


<div class="row sticky-top" style="background-color:">
    <div class="col-12">
      <div class="row" style="background-color:">
        <div class="col-1">
          <!--<nav class="navbar navbar-expand-lg navbar-light bg-light">                 -->
          <a class="navbar-brand" href="Page_d_accueil.php"><img src="img/logo.png" id="imgLogo"  alt=""></a>
        </div>
        <div class="col-2">
          <div class="wrap" >
              <div class="menu" >
                  <div class="mini-menu" style="width:100%;height:100%;margin-top:0">
                    <ul>
                      <li class="sub">
                          <a href="#" class="list-group-item">Catégories</a>
                          <ul>
                             <li><a href="#">Membres</a></li>
                             <li><a href="#">Annonces</a></li>
                             <li><a href="#">Produit</a></li>
                          </ul>
                      </li>
                    </ul>
                </div>
            </div>
          </div>
        </div>

        <div class="col-2 ">
          <div class="active-cyan-3 active-cyan-4 mb-4">
            <input class="form-control" id="search_box"  style="height:14%" type="text" placeholder="Search" aria-label="Search">
          </div>
        </div>
        <div class="col-1  ">
          <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="">  <i class="fas fa-search"></i></div>
          </a>
        </div>

        <div class="col-1 offset-3" >
          <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class=""><i class="fas fa-bars"></i></div>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="Page_d_creation_annonce.php">Créer Annonce</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="Page_listing_utilisateurs.php">Membres</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="page_listing_annonces.php">Annonces</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="page_listing_annonces.php?set_favoris=true">Annonces Favoris </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="Page_listing_utilisateurs.php?set_favoris=true">Membres Favoris</a>
          </div>
        </div>
        <div class="col-1">
          <a class="nav-link dropdown" href="Page_d_Messages.php" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <div><i class="fas fa-envelope-open-text"></i></div>
          </a>
        </div>
        <div class="col-1">
          <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div ><i class="fas fa-user-tie"></i></div>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="Page_d_Profil.php?id_user=<?php echo $_SESSION['user_connecte']['user_id'];?>" >Profil</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="Logout.php">Se déconnecter</a>
            </div>
          </a>
        </div>
      </div>
      </div>
</div>
