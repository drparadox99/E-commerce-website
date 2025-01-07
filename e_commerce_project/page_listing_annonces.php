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
        $idAnnonces = getAnnoncesByFavorisID($_SESSION['id_user']) ;
        $annonces = getTable("SELECT * FROM annonces");
        $annonces = filterAnnonces($annonces,$idAnnonces,'annocesFavoris');
      }else{
        $annonces = getTable("SELECT * FROM annonces");
        $annonces = array_reverse($annonces);
      }
      if(isset($_GET['supprimer_favori'])) {
        supprimerFavori($_SESSION['id_user'],$_GET['supprimer_favori'],'annonce');
      }
      if(isset($_GET['ajouter_annonce_favoris'])){
        ajouterAuFavoris($_SESSION['id_user'],$_GET['ajouter_annonce_favoris'],"annonce");
      }
       ?>


  <div class="container">
          <h2>Annonces</h2>

    <div class="row espacement">
      <div class="col-12" style="background-color:">

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">


      <?php
      $nbr_lignes = calculerNLignes(count($annonces),3);
      $index = 0;
      for($i=1; $i<=$nbr_lignes; $i++){ ?>

        <?php if (isset($annonces[$index]) ){ ?>

   <!---CArousel item ------------------------------------------------------------------------------->
   <?php if($i == 1)  {?>
          <div class="carousel-item active">
  <?php }else { ?>
        <div class="carousel-item">
  <?php }?>
   <!---Cart panel ------------------------------------------------------------------------------->
            <div class="slide_panel" >
               <div class="row" >
                <?php if (isset($annonces[$index]) ){ ?>

                 <div class="col-md-4 col-ms-6">
                   <div class="our-team">
                     <div class="pic">
                       <a href="Page_d_Annonce.php?aff_annonce=<?php echo $annonces[$index]['annonce_id'];?>"><img class="img_class" src="<?php echo explodeImages( $annonces[$index]['annonce_images'] ) ?>" alt=""></a>
                     </div>
                     <div class="team-content">
                       <h3 class="title"> <?php echo $annonces[$index]['annonce_type']?></h3>
                       <span class="post"><?php echo $annonces[$index]['annonce_disponibilite']?></span>
                     </div>
                     <ul class="social">
                       <li><a href="Page_d_Profil.php?id_user=<?php echo $annonces[$index]['annonce_user']?>" class="fa fa twitter">Voir Vendeur</a></li>
                       <?php if(!dejaFavoris($_SESSION['id_user'],$annonces[$index]['annonce_id'],'annonce')) {?>
                       <li><a href="page_listing_annonces.php?ajouter_annonce_favoris=<?php echo $annonces[$index]['annonce_id'];?>" class="fa fa facebook">Ajouter aux favoris</a></li>
                     <?php  }else{ ?>
                     <li><a href="page_listing_annonces.php?set_favoris=true&supprimer_favori=<?php echo $annonces[$index]['annonce_id']?>" class="fa fa facebook">Supprimer du favoris</a></li>
                     <?php }?>
                     </ul>
                   </div>
                 </div>
                 <?php $index++;}?>
               <?php if (isset($annonces[$index]) ){ ?>

                 <div class="col-md-4 col-ms-6">
                   <div class="our-team">
                     <div class="pic">
                      <a href="Page_d_Annonce.php?aff_annonce=<?php echo $annonces[$index]['annonce_id'];?>"><img class="img_class"src="<?php echo explodeImages( $annonces[$index]['annonce_images'] ) ?>" alt=""></a>
                     </div>
                     <div class="team-content">
                       <h3 class="title"><?php echo $annonces[$index]['annonce_type']?></h3>
                       <span class="post"><?php echo $annonces[$index]['annonce_disponibilite']?></span>
                     </div>
                     <ul class="social">
                       <li><a href="Page_d_Profil.php?id_user=<?php echo $annonces[$index]['annonce_user']?>" class="fa fa twitter">Voir Vendeur</a></li>
                       <?php if(!dejaFavoris($_SESSION['id_user'],$annonces[$index]['annonce_id'],'annonce')) {?>
                       <li><a href="" class="fa fa facebook">Ajouter aux favoris</a></li>
                     <?php  }else{ ?>
                       <li><a href="page_listing_annonces.php?set_favoris=true&supprimer_favori=<?php echo $annonces[$index]['annonce_id']?>" class="fa fa facebook">Supprimer du favoris</a></li>
                     <?php }?>
                     </ul>
                   </div>
                 </div>
                 <?php $index++;}?>
               <?php if (isset($annonces[$index]) ){ ?>
                 <div class="col-md-4 col-ms-6">
                   <div class="our-team">
                     <div class="pic">
                      <a href="Page_d_Annonce.php?aff_annonce=<?php echo $annonces[$index]['annonce_id'];?>"><img class="img_class" src="<?php echo explodeImages( $annonces[$index]['annonce_images'] ) ?>" alt=""></a>
                     </div>
                     <div class="team-content">
                       <h3 class="title"><?php echo $annonces[$index]['annonce_type']?></h3>
                       <span class="post"><?php echo $annonces[$index]['annonce_disponibilite']?></span>
                     </div>
                     <ul class="social">
                       <li><a href="Page_d_Profil.php?id_user=<?php echo $annonces[$index]['annonce_user']?>" class="fa fa twitter">Voir Vendeur</a></li>
                       <?php if(!dejaFavoris($_SESSION['id_user'],$annonces[$index]['annonce_id'],'annonce')) {?>
                       <li><a href="" class="fa fa facebook">Ajouter aux favoris</a></li>
                     <?php  }else{ ?>
                       <li><a href="page_listing_annonces.php?set_favoris=true&supprimer_favori=<?php echo $annonces[$index]['annonce_id']?>" class="fa fa facebook">Supprimer du favoris</a></li>
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
