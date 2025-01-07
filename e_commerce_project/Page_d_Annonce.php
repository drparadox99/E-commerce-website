<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="mycss/style.css" />
    <link rel="stylesheet" href="fonts/css/all.min.css" />

    <title>Page d'annonces</title>
  </head>
  <body>

    <div class="container" style="background-color:" >

      <!-- Navigation section-->
      <?php
      include 'header.php';
      include 'RequetesSQL.php';
      $id_utilisateur = $_SESSION['id_user'];
      if(isset($_GET['aff_annonce'])){
        $id_annonce = $_GET['aff_annonce'];

      $annonce = getAnnonce($id_annonce);
    //  $annonces = getAnnoncesById($id_utilisateur);
      $imagesAnnonce = explode("@%&",$annonce['annonce_images'] );
      $annonces = getTable("SELECT * FROM annonces");
      shuffle($annonces);
      }
        if(isset($_GET['ajouter_annonce_favoris'])){
          //echo (dejaFavoris($_SESSION['id_user'],$annonce['annonce_id'],"annonce") );
          //die();
          ajouterAuFavoris($_SESSION['id_user'],$annonce['annonce_id'],"annonce");

        }
      //echo count($annonces['annonce_id']);
       ?>

<?php if(isset($_GET['aff_annonce'])){?>

     <!--Fragmentation et --->
     <div class="row espacement" style="" >
         <div class="col-8" style="height:450px">
           <div class="row">
             <div class="col-6">
               <img src="<?php echo $imagesAnnonce[0]; ?> " class="img-thumbnail" style="width:100%;height:450px" >
             </div>
             <div class="col-6" style="height:450px">
               <div class="row" style="height:40% " >
                 <img src="<?php echo $imagesAnnonce[0]; ?>" class="img-thumbnail" style="width:100%;height:100%" >
               </div>
               <div class="row" style="height:270px" >
                 <div class="col-6" style="height:100%">
                   <img src="<?php echo $imagesAnnonce[1]; ?>" class="img-thumbnail" style="width:109%;height:100%;margin-left:0px" >
                 </div>
                 <div class="col-6">
                   <img src="<?php echo $imagesAnnonce[2]; ?>" class="img-thumbnail" style="width:145%;height:100%" >
                 </div>
               </div>
             </div>
           </div>
         </div>


         <div class="col-4 desc_panel" style="">
           <div class="row">
             <h2>Description</h2>
           </div>
           <div class="row">
               <div class="col-4"  >
                 <p> MARQUE<p>
               </div>
               <div class="col-7 offset-1">
                    <p><?php echo $annonce['annonce_marque']?></p>
               </div>
             </div>
           <div class="row">
               <div class="col-4">
                 <p> TAILLE<p>
               </div>
               <div class="col-7 offset-1">
                    <p><?php echo $annonce['annonce_taille']?></p>
               </div>
             </div>
           <div class="row">
               <div class="col-4">
                 <p> COULEUR<p>
               </div>
               <div class="col-7 offset-1">
                    <p><?php echo $annonce['annonce_couleur']?></p>
               </div>
             </div>
           <div class="row">
               <div class="col-4">
                 <p>TYPE<p>
               </div>
               <div class="col-7 offset-1">
                    <p><?php echo $annonce['annonce_type']?></p>
               </div>
             </div>
           <div class="row">
               <div class="col-4">
                 <p> ETAT <p>
               </div>
               <div class="col-7 offset-1">
                    <p><?php echo $annonce['annonce_etat']?></p>
               </div>
             </div>
           <div class="row">
               <div class="col-4">
                 <p> SERVICE<p>
               </div>
               <div class="col-7 offset-1">
                    <p><?php echo $annonce['annonce_service']?></p>
               </div>
             </div>
           <div class="row">
               <div class="col-4">
                 <p> CIBLE<p>
               </div>
               <div class="col-7 offset-1">
                    <p><?php echo $annonce['annonce_cible']?></p>
               </div>
             </div>
           <div class="row">
               <div class="col-4">
                 <p> ETOILES<p>
               </div>
               <div class="col-7 offset-1">
                    <p>*****</p>
               </div>
             </div>
           <div class="row">
               <div class="col-4">
                 <p>Membre<p>
               </div>
               <div class="col-7 offset-1">
                    <div class="col-2" style="background-color:">
                      <a href="Page_d_Profil.php?visiteur=<?php echo getUSerById($annonce['annonce_user'],"","")['user_id'] ?>"><img src="<?php echo getUSerById($annonce['annonce_user'],"","")['user_img_profil']?>"  class="profile"/></a>
                    </div>
               </div>
             </div>
           <div class="row">
               <div class="col-4">
                 <p>Ajouter<p>
               </div>
               <div class="col-7 offset-1">
                    <div class="col-2" style="background-color:">
                      <a href="Page_d_Annonce.php?aff_annonce=<?php echo $annonce['annonce_id'];?>?&ajouter_annonce_favoris=true"><?php if(!dejaFavoris($_SESSION['id_user'],$annonce['annonce_id'],"annonce")) {?><i class="fas fa-star" style="color:grey"></i>
                      <?php }else{?> <i class="fas fa-star" ></i>  <?php }?>
                      </a>
                    </div>
               </div>
             </div>



           </div>
         </div>


   <!--  Catégorie section et panel de produit -->
   <div class="row">
     <div class="col-3">
       <div class="row">
         <div class="wrap">
             <div class="menu">
                 <div class="mini-menu">
                     <ul>
                 <li class="sub">
                     <a href="#" class="list-group-item">WOMAN</a>
                     <ul>
                        <li><a href="#"><p class="prod_desc2">Jackets</p></a></li>
                        <li><a href="#"><p class="prod_desc2">Blazers</p></a></li>
                        <li><a href="#"><p class="prod_desc2">Suits</p></a></li>
                        <li><a href="#"><p class="prod_desc2">Trousers</p></a></li>
                        <li><a href="#"><p class="prod_desc2">Jenas</p></a></li>
                        <li><a href="#"><p class="prod_desc2">Shirts</p></a></li>
                     </ul>
                 </li>
                 <li class="sub">
                     <a href="#" class="list-group-item">MAN</a>
                     <ul>
                       <li><a href="#"><p class="prod_desc2">Jackets</p></a></li>
                       <li><a href="#"><p class="prod_desc2">Blazers</p></a></li>
                       <li><a href="#"><p class="prod_desc2">Suits</p></a></li>
                       <li><a href="#"><p class="prod_desc2">Trousers</p></a></li>
                       <li><a href="#"><p class="prod_desc2">Jenas</p></a></li>
                       <li><a href="#"><p class="prod_desc2">Shirts</p></a></li>
                     </ul>
                 </li>
                 <li class="sub">
                     <a href="#" class="list-group-item">KIDS</a>
                     <ul>
                       <li><a href="#"><p class="prod_desc2">Jackets</p></a></li>
                       <li><a href="#"><p class="prod_desc2">Blazers</p></a></li>
                       <li><a href="#"><p class="prod_desc2">Suits</p></a></li>
                       <li><a href="#"><p class="prod_desc2">Trousers</p></a></li>
                       <li><a href="#"><p class="prod_desc2">Jenas</p></a></li>
                       <li><a href="#"><p class="prod_desc2">Shirts</p></a></li>
                     </ul>
                 </li>
                 <li class="sub">
                     <a href="#" class="list-group-item">Shoes&Bags</a>
                     <ul>
                       <li><a href="#"><p class="prod_desc2">Jackets</p></a></li>
                       <li><a href="#"><p class="prod_desc2">Blazers</p></a></li>
                       <li><a href="#"><p class="prod_desc2">Suits</p></a></li>
                       <li><a href="#"><p class="prod_desc2">Trousers</p></a></li>
                       <li><a href="#"><p class="prod_desc2">Jenas</p></a></li>
                       <li><a href="#"><p class="prod_desc2">Shirts</p></a></li>
                     </ul>
                 </li>
             </ul>
               </div>
             </div>
         </div>
       </div>
     </div>



     <!--Carousel panel -->
     <div class="col-9 "  style="background-color:">
       <!-- Carousel des produits-->


      <?php
      $nbr_lignes = calculerNLignes(count($annonces),4);
      $index = 0;
      for($i=1; $i<=$nbr_lignes; $i++){ ?>

                 <div class="row">
                   <?php if (isset($annonces[$index]) ){ ?>
                      <div class="col-md-3 cart_interval_profil espacement cart_interval_border" style="background-color:">
                        <div class="row" style="background-color:">
                          <div class="col-2" style="background-color:">
                            <img src="<?php echo getUSerById($annonces[$i]['annonce_user'],"","")['user_img_profil']?>"  class="profile"/>
                          </div>
                          <div class="col-7" style="background-color:">
                            <div class="profil_info">
                              <p class="nom_profil_cart"><?php echo getUSerById($annonces[$i]['annonce_user'],"","")['user_pseudonyme']?></p>
                            </div>
                          </div>
                          <div class="col-3">
                            <!--<i class="fas fa-heartbeat"></i>-->
                          </div>
                        </div>
                        <div class="row" style="background-color:">
                          <a href="Page_d_Annonce.php?aff_annonce=<?php echo $annonces[$index]['annonce_id'];?>"><img src="<?php echo explodeImages($annonces[$index]['annonce_images'])?>"  id="cart_img"  alt=""></a>
                        </div>
                        <div class="row bottom_card" >
                          <div class="col-6 info_produit_profil">
                            <div class="row">
                              <div class="col-12">
                                <p class='prod_desc'> <?php echo $annonces[$index]['annonce_type']?> </p>
                              </div>
                              <div class="col-12">
                                <p class='prod_desc'><?php echo $annonces[$index]['annonce_taille']?></p>
                              </div>
                            </div>
                          </div>
                          <div class="col-6 info_produit_profil" style="background-color:" >
                            <div class="row">
                              <div class="col-12">
                                <p class='prod_desc'><?php echo $annonces[$index]['annonce_marque']?></p>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-12">
                                <p class='prod_desc'><?php echo $annonces[$index]['annonce_service']?></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php $index++;}?>
                      <?php if (isset($annonces[$index]) ){ ?>
                      <div class="col-md-3 cart_interval_profil espacement cart_interval_border">
                        <div class="row" style="background-color:">
                          <div class="col-2" style="background-color:">
                            <img src="<?php echo getUSerById($annonces[$i]['annonce_user'],"","")['user_img_profil']?>"  class="profile"/>
                          </div>
                          <div class="col-7" style="background-color:">
                            <div class="profil_info">
                              <p class="nom_profil_cart"><?php echo getUSerById($annonces[$i]['annonce_user'],"","")['user_pseudonyme']?></p>
                            </div>
                          </div>
                          <div class="col-3">
                            <!--<i class="fas fa-heartbeat"></i>-->
                          </div>
                        </div>
                        <div class="row" style="background-color:">
                          <a href="Page_d_Annonce.php?aff_annonce=<?php echo $annonces[$index]['annonce_id'];?>"><img src="<?php echo explodeImages($annonces[$index]['annonce_images'])?>"  id="cart_img"  alt=""></a>
                        </div>
                        <div class="row bottom_card" >
                          <div class="col-6 info_produit_profil"  style="background-color:">
                            <div class="row">
                              <div class="col-12">
                                <p class='prod_desc'> <?php echo $annonces[$index]['annonce_type'];?> </p>
                              </div>
                              <div class="col-12">
                                <p class='prod_desc'><?php echo $annonces[$index]['annonce_taille'];?></p>
                              </div>
                            </div>
                          </div>
                          <div class="col-6 info_produit_profil" style="background-color:" >
                            <div class="row">
                              <div class="col-12">
                                <p class='prod_desc'><?php echo $annonces[$index]['annonce_marque'];?></p>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-12">
                                <p class='prod_desc'><?php echo $annonces[$index]['annonce_service'];?></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php $index++;}?>

                      <?php if (isset($annonces[$index]) ){ ?>
                      <div class="col-md-3 cart_interval_profil espacement cart_interval_border">
                        <div class="row" style="background-color:">
                          <div class="col-2" style="background-color:">
                            <img src="<?php echo getUSerById($annonces[$i]['annonce_user'],"","")['user_img_profil']?>"  class="profile"/>
                          </div>
                          <div class="col-7" style="background-color:">
                            <div class="profil_info">
                              <p class="nom_profil_cart"><?php echo getUSerById($annonces[$i]['annonce_user'],"","")['user_pseudonyme']?></p>
                            </div>
                          </div>
                          <div class="col-3">
                            <!--<i class="fas fa-heartbeat"></i>-->
                          </div>
                        </div>
                        <div class="row" style="background-color:">
                          <a href="Page_d_Annonce.php?aff_annonce=<?php echo $annonces[$index]['annonce_id'];?>"><img src="<?php echo explodeImages($annonces[$index]['annonce_images'])?>"  id="cart_img"  alt=""></a>

                        </div>
                        <div class="row bottom_card" >
                          <div class="col-6 info_produit_profil"  style="background-color:">
                            <div class="row">
                              <div class="col-12">
                                <p class='prod_desc'><?php echo $annonces[$index]['annonce_type'];?> </p>
                              </div>
                              <div class="col-12">
                                <p class='prod_desc'><?php echo $annonces[$index]['annonce_taille'];?> </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-6 info_produit_profil" style="background-color:" >
                            <div class="row">
                              <div class="col-12">
                                <p class='prod_desc'><?php echo $annonces[$index]['annonce_marque'];?> </p>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-12">
                                <p class='prod_desc'><?php echo $annonces[$index]['annonce_service'];?> </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php $index++;}?>
                      <?php if (isset($annonces[$index]) ){ ?>
                      <div class="col-md-3 cart_interval_profil espacement cart_interval_border ">
                        <div class="row" style="background-color:">
                          <div class="col-2" style="background-color:">
                            <img src="<?php echo getUSerById($annonces[$i]['annonce_user'],"","")['user_img_profil']?>"  class="profile"/>
                          </div>
                          <div class="col-7" style="background-color:">
                            <div class="profil_info">
                              <p class="nom_profil_cart"><?php echo getUSerById($annonces[$i]['annonce_user'],"","")['user_pseudonyme']?></p>
                            </div>
                          </div>
                          <div class="col-3">
                            <!--<i class="fas fa-heartbeat"></i>-->
                          </div>
                        </div>
                        <div class="row" style="background-color:">
                        <a href="Page_d_Annonce.php?aff_annonce=<?php echo $annonces[$index]['annonce_id'];?>"><img src="<?php echo explodeImages($annonces[$index]['annonce_images'])?>"  id="cart_img"  alt=""></a>

                        </div>
                        <div class="row bottom_card" >
                          <div class="col-6 info_produit_profil"  style="background-color:">
                            <div class="row">
                              <div class="col-12">
                                <p class='prod_desc'><?php echo $annonces[$index]['annonce_type'];?> </p>
                              </div>
                              <div class="col-12">
                                <p class='prod_desc'><?php echo $annonces[$index]['annonce_taille'];?> </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-6 info_produit_profil" style="background-color:" >
                            <div class="row">
                              <div class="col-12">
                                <p class='prod_desc'><?php echo $annonces[$index]['annonce_marque'];?> </p>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-12">
                                <p class='prod_desc'><?php echo $annonces[$index]['annonce_service'];?> </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php $index++;}?>
                 </div>
      <?php }} ?>

      </div>
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
