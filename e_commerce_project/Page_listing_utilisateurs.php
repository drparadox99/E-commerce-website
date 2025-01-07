<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="mycss/style.css" />
    <link rel="stylesheet" href="fonts/css/all.min.css" />

    <title>Page Utilisateurs</title>
  </head>
  <body>

    <div class="container" style="background-color:" >


      <!-- Navigation section-->
<?php
      include 'header.php';
      include 'RequetesSQL.php';
      if(isset($_GET['set_favoris'])) {
        $idUsers = getAnnoncesByFavorisID($_SESSION['id_user']) ;
        $users = getTable("SELECT * FROM users");
        $users = filterAnnonces($users,$idUsers,'usersFavoris');
      }else{
      $users = getTable("SELECT * FROM users");
      $users = array_reverse($users);
    }
    if(isset($_GET['supprimer_favori'])) {
      supprimerFavori($_SESSION['id_user'],$_GET['supprimer_favori'],'user');
    }
    if(isset($_GET['ajouter_user_favoris'])){
      ajouterAuFavoris($_SESSION['id_user'],$_GET['ajouter_user_favoris'],"user");
    }
?>


  <div class="container">
      <h2>Membres</h2>

    <div class="row espacement">
      <div class="col-12" style="background-color:">

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">


      <?php
      $nbr_lignes = calculerNLignes(count($users),3);
      $index = 0;
      for($i=1; $i<=$nbr_lignes; $i++){ ?>

        <?php if (isset($users[$index]) ){ ?>

   <!---CArousel item ------------------------------------------------------------------------------->
   <?php if($i == 1){ ?>
          <div class="carousel-item active">
  <?php }else{?>
        <div class="carousel-item">
  <?php }?>
   <!---Cart panel ------------------------------------------------------------------------------->
            <div class="slide_panel" >
               <div class="row" >
                <?php if (isset($users[$index]) ){ ?>
                 <div class="col-md-4 col-ms-6">
                   <div class="our-team">
                     <div class="pic">
                       <a href=""><img class="img_class" src="<?php echo $users[$index]['user_img_profil']?>" alt=""></a>
                     </div>
                     <div class="team-content">
                       <h3 class="title"> <?php echo $users[$index]['user_pseudonyme']?></h3>
                       <span class="post"><?php echo $users[$index]['user_message_profil']?></span>
                     </div>
                     <ul class="social">
                       <li><a href="" class="fa fa twitter">Voir annonces</a></li>
                       <?php if(!dejaFavoris($_SESSION['id_user'],$users[$index]['user_id'],'user')) {?>
                       <li><a href="Page_listing_utilisateurs.php?ajouter_user_favoris=<?php echo $users[$index]['user_id'];?>" class="fa fa facebook">Ajouter aux favoris</a></li>
                     <?php  }else{ ?>
                     <li><a href="Page_listing_utilisateurs.php?set_favoris=true&supprimer_favori=<?php echo $users[$index]['user_id']?>" class="fa fa facebook">Supprimer du favoris</a></li>
                     <?php }?>
                     </ul>
                   </div>
                 </div>
                 <?php $index++;}?>
               <?php if (isset($users[$index]) ){ ?>

                 <div class="col-md-4 col-ms-6">
                   <div class="our-team">
                     <div class="pic">
                      <a href=""><img class="img_class"src="<?php echo $users[$index]['user_img_profil']?>" alt=""></a>
                     </div>
                     <div class="team-content">
                       <h3 class="title"> <?php echo $users[$index]['user_pseudonyme']?>  </h3>
                       <span class="post"><?php echo $users[$index]['user_message_profil']?></span>
                     </div>
                     <ul class="social">
                       <li><a href="" class="fa fa twitter">Voir annonces</a></li>
                       <?php if(!dejaFavoris($_SESSION['id_user'],$users[$index]['user_id'],'user')) {?>
                       <li><a href="Page_listing_utilisateurs.php?ajouter_user_favoris=<?php echo $users[$index]['user_id'];?>" class="fa fa facebook">Ajouter aux favoris</a></li>
                     <?php  }else{ ?>
                     <li><a href="Page_listing_utilisateurs.php?set_favoris=true&supprimer_favori=<?php echo $users[$index]['user_id']?>" class="fa fa facebook">Supprimer du favoris</a></li>
                     <?php }?>
                     </ul>
                   </div>
                 </div>
                 <?php $index++;}?>
               <?php if (isset($users[$index]) ){ ?>
                 <div class="col-md-4 col-ms-6">
                   <div class="our-team">
                     <div class="pic">
                      <a href=""><img class="img_class" src="<?php echo $users[$index]['user_img_profil']?>" alt=""></a>
                     </div>
                     <div class="team-content">
                       <h3 class="title"> <?php echo $users[$index]['user_pseudonyme']?></h3>
                       <span class="post"><?php echo $users[$index]['user_message_profil']?></span>
                     </div>
                     <ul class="social">
                       <li><a href="" class="fa fa twitter">Voir annonces</a></li>
                       <?php if(!dejaFavoris($_SESSION['id_user'],$users[$index]['user_id'],'user')) {?>
                       <li><a href="Page_listing_utilisateurs.php?ajouter_user_favoris=<?php echo $users[$index]['user_id'];?>" class="fa fa facebook">Ajouter aux favoris</a></li>
                     <?php  }else{ ?>
                     <li><a href="Page_listing_utilisateurs.php?set_favoris=true&supprimer_favori=<?php echo $users[$index]['user_id']?>" class="fa fa facebook">Supprimer du favoris</a></li>
                     <?php }?>
                     </ul>
                   </div>
                 </div>
                 <?php $index++;}?>
                </div>
            </div>
          </div>
        <?php }}?>



   <!---Carousel item ------------------------------------------------------------------------------->
        </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
              <span class="sr-only">Précécdent</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Suviant</span>
            </a>
      </div>
    </div>
  </div>
   <!--fin du panel pour les vet -->
  </div>


<?php
include 'footer.php';
 ?>







    </div>
    <script type="text/javascript" src="js/libs/popper.js"></script>
    <script type="text/javascript" src="js/libs/jquery.min.js"></script>
    <script type="text/javascript" src="js/libs/bootstrap.min.js"></script>

    <script src="js/libs/jquery.min.js"></script>
    <script src="myjs/myjs.js"></script>
  </body>
</html>
