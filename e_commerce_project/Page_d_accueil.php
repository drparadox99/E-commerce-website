
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="mycss/style.css" />
    <link rel="stylesheet" href="fonts/css/all.min.css" />

    <title>Page d'accueil</title>
  </head>
  <body>

    <div class="container"  >
      <?php
      include 'header.php';
      include 'RequetesSQL.php';
      $annonces = getTable("SELECT * FROM annonces");
      //array_slice($a, -3, 3, true);
      $nouvelles_annonces = "";

      if(count($annonces)>=10 ){
        $nouvelles_annonces = array_reverse($annonces);
        $nouvelles_annonces = array_slice($nouvelles_annonces, -10,10);     // retourne "d"
      }

       ?>
     <div class="row espacement" style="background-color:" >
        <div class="col-10">
          <img src="img/imgs_internes/img_page_accueil.jpg"  id="" style="height:500px;width:100%" alt="" />

        </div>
        <div class="col-2">

          <a href="Page_d_creation_annonce.php"><button type="button" name="user_Submit_register" class="btn btn-primary">Créer annonce</button></a>
        </div>
     </div>


     <!-- liste déroulante-->

     <div class="row">
       <div class="wrap" >
           <div class="menu" >
               <div class="mini-menu" style="width:100%;height:100%;margin-top:0">
                 <ul>
                   <li class="sub">
                       <a href="#" class="list-group-item">Catégories</a>
                       <ul>
                          <li class="sub"><a href="#">Membres</a>
                            <ul>
                               <li><a href="#"><p class="prod_desc2">Jackets</p></a></li>
                               <li><a href="#"><p class="prod_desc2">Blazers</p></a></li>
                               <li><a href="#"><p class="prod_desc2">Suits</p></a></li>
                               <li><a href="#"><p class="prod_desc2">Trousers</p></a></li>
                               <li><a href="#"><p class="prod_desc2">Jenas</p></a></li>
                               <li><a href="#"><p class="prod_desc2">Shirts</p></a></li>
                            </ul>
                          </li>
                          <li><a href="#">Annonces</a></li>
                          <li><a href="#">Produit</a></li>
                       </ul>
                   </li>
                 </ul>
             </div>
         </div>
       </div>
     </div>

     <div class="row">
       <div class="col-3 offset-4 ">
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
     </div>




     <?php
     if($nouvelles_annonces){ ?>

       <div class="row espacement">
         <div class="col-12" style="background-color:">
           <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
           <div class="carousel-inner">
<!---CArousel item ------------------------------------------------------------------------------->
             <div class="carousel-item active">
<!---Cart panel ------------------------------------------------------------------------------->
               <div class="slide_panel" >
                  <div class="row" >
                    <?php for($i=1; $i<=4; $i++){?>
                          <div class="col-md-2 cart_interval cart_interval_border ">
                            <div class="row" >
                              <div class="col-2" >

                                <img src="<?php echo getUSerById($nouvelles_annonces[$i]['annonce_user'],"","")['user_img_profil']?>"  class="profile"/>
                              </div>
                              <div class="col-5" >
                                <div class="profil_info">
                                  <p class="nom_profil_cart"><?php echo getUSerById($nouvelles_annonces[$i]['annonce_user'],"","")['user_pseudonyme']?></p>
                                </div>
                              </div>

                              <div class="col-4" style="background-color:">
                                <!--<i class="fas fa-heartbeat"></i> -->
                              </div>
                            </div>
                            <a href="Page_d_Annonce.php?aff_annonce=<?php echo $nouvelles_annonces[$i]['annonce_id'];?>">
                            <div class="row" style="background-color:">
                              <img src="<?php echo explodeImages($nouvelles_annonces[$i]['annonce_images'])?>"  id="cart_img"  alt="">
                            </div>
                            </a>
                            <div class="row bottom_card" >
                              <div class="col-6 info_produit"  style="background-color:">
                                <div class="row">
                                  <div class="col-12">
                                    <p class='prod_desc'><?php echo $nouvelles_annonces[$i]['annonce_type']?></p>
                                  </div>
                                  <div class="col-12">
                                    <p class='prod_desc'><?php echo $nouvelles_annonces[$i]['annonce_taille']?></p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-6 info_produit" style="background-color:" >
                                <div class="row">
                                  <div class="col-12">
                                    <p class='prod_desc'><?php echo $nouvelles_annonces[$i]['annonce_marque']?></p>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-12">
                                    <p class='prod_desc'><?php echo $nouvelles_annonces[$i]['annonce_service']?></p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <?php } ?>

                    <div class="col-md-2 cart_interval_border">
                      <div class="row" style="background-color:">
                        <div class="col-2" style="background-color:">
                          <img src="<?php echo getUSerById($nouvelles_annonces[$i]['annonce_user'],"","")['user_img_profil']?>"  class="profile"/>
                        </div>
                        <div class="col-7" style="background-color:">
                          <div class="profil_info">
                            <p class="nom_profil_cart"><?php echo getUSerById($nouvelles_annonces[$i]['annonce_user'],"","")['user_pseudonyme']?></p>
                          </div>
                        </div>
                        <div class="col-3">
                          <!--<i class="fas fa-heartbeat"></i> -->
                        </div>
                      </div>
                      <a href="Page_d_Annonce.php?aff_annonce=<?php echo $nouvelles_annonces[$i]['annonce_id'];?>">
                      <div class="row" style="background-color:">
                        <img src="<?php echo explodeImages($nouvelles_annonces[$i]['annonce_images'])?>"  id="cart_img"  alt="">
                      </div>
                      </a>
                      <div class="row bottom_card" >
                        <div class="col-6 info_produit"  style="background-color:">
                          <div class="row">
                            <div class="col-12">
                              <p class='prod_desc'><?php echo $nouvelles_annonces[$i]['annonce_type']?></p>
                            </div>
                            <div class="col-12">
                              <p class='prod_desc'><?php echo $nouvelles_annonces[$i]['annonce_taille']?></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-6 info_produit" style="background-color:" >
                          <div class="row">
                            <div class="col-12">
                              <p class='prod_desc'><?php echo $nouvelles_annonces[$i]['annonce_marque']?></p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-12">
                              <p class='prod_desc'><?php echo $nouvelles_annonces[$i]['annonce_service']?></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                       </div>
                     </div>
             </div>

<!---Cart panel ------------------------------------------------------------------------------->
        <div class="carousel-item">
             <div class="slide_panel" >
<!---CArousel item ------------------------------------------------------------------------------->
                  <div class="row" >
                    <?php
                    for($i=1; $i<=4; $i++){ ?>
                            <div class="col-md-2 cart_interval cart_interval_border">
                              <div class="row" style="background-color:">
                                <div class="col-2" style="background-color:">
                                  <img src="<?php echo getUSerById($nouvelles_annonces[$i]['annonce_user'],"","")['user_img_profil']?>"  class="profile"/>
                                </div>
                                <div class="col-5" style="background-color:">
                                  <div class="profil_info">
                                    <p class="nom_profil_cart"><?php echo getUSerById($nouvelles_annonces[$i]['annonce_user'],"","")['user_pseudonyme']?></p>
                                  </div>
                                </div>
                                <div class="col-4" style="background-color:">
                                  <!--<i class="fas fa-heartbeat"></i> -->
                                </div>
                              </div>
                              <a href="Page_d_Annonce.php?aff_annonce=<?php echo $nouvelles_annonces[$i]['annonce_id'];?>">
                              <div class="row" style="background-color:">
                                <img src="<?php echo explodeImages($nouvelles_annonces[$i]['annonce_images'])?>"  id="cart_img"  alt="">
                              </div>
                              </a>
                              <div class="row bottom_card" >
                                <div class="col-6 info_produit"  style="background-color:">
                                  <div class="row">
                                    <div class="col-12">
                                      <p class='prod_desc'><?php echo $nouvelles_annonces[$i]['annonce_type']?></p>
                                    </div>
                                    <div class="col-12">
                                      <p class='prod_desc'><?php echo $nouvelles_annonces[$i]['annonce_taille']?></p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-6 info_produit" style="background-color:" >
                                  <div class="row">
                                    <div class="col-12">
                                      <p class='prod_desc'><?php echo $nouvelles_annonces[$i]['annonce_marque']?></p>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-12">
                                      <p class='prod_desc'><?php echo $nouvelles_annonces[$i]['annonce_service']?></p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                          <?php } ?>
                            <div class="col-md-2  cart_interval_border">
                              <div class="row" style="background-color:">
                                <div class="col-2" style="background-color:">
                                  <img src="<?php echo getUSerById($nouvelles_annonces[$i]['annonce_user'],"","")['user_img_profil']?>"  class="profile"/>
                                </div>
                                <div class="col-7" style="background-color:">
                                  <div class="profil_info">
                                    <p class="nom_profil_cart"><?php echo getUSerById($nouvelles_annonces[$i]['annonce_user'],"","")['user_pseudonyme']?></p>
                                  </div>
                                </div>
                                <div class="col-3">
                                  <!--<i class="fas fa-heartbeat"></i>-->
                                </div>
                              </div>
                              <a href="Page_d_Annonce.php?aff_annonce=<?php echo $nouvelles_annonces[$i]['annonce_id'];?>">
                              <div class="row" style="background-color:">
                                <img src="<?php echo explodeImages($nouvelles_annonces[$i]['annonce_images'])?>"  id="cart_img"  alt="">
                              </div>
                              </a>
                              <div class="row bottom_card" >
                                <div class="col-6 info_produit"  style="background-color:">
                                  <div class="row">
                                    <div class="col-12">
                                      <p class='prod_desc'><?php echo $nouvelles_annonces[$i]['annonce_type']?></p>
                                    </div>
                                    <div class="col-12">
                                      <p class='prod_desc'><?php echo $nouvelles_annonces[$i]['annonce_taille']?></p>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-6 info_produit" style="background-color:" >
                                  <div class="row">
                                    <div class="col-12">
                                      <p class='prod_desc'><?php echo $nouvelles_annonces[$i]['annonce_marque']?></p>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-12">
                                      <p class='prod_desc'><?php echo $nouvelles_annonces[$i]['annonce_service']?></p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                       </div>
<!---cart item ------------------------------------------------------------------------------->
               </div>
             </div>
<!---Carousel item ------------------------------------------------------------------------------->
           </div>
           <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="sr-only">Précécdent</span>
           </a>
           <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="sr-only">Suviant</span>
           </a>
         </div>

           </div>
        </div>
      <?php } ?>
<!--fin du panel pour les vet -->


<?php
$nbr_lignes = calculerNLignes(count($annonces),5);
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
                  <a href="Page_d_Annonce.php?aff_annonce=<?php echo $annonces[$index]['annonce_id'];?>">
                  <div class="row" style="background-color:">
                    <img src="<?php echo explodeImages($annonces[$index]['annonce_images'])?>"  id="cart_img"  alt="">
                  </div>
                  </a>
                  <div class="row bottom_card" >
                    <div class="col-6 info_produit_profil"  style="background-color:">
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
                  <a href="Page_d_Annonce.php?aff_annonce=<?php echo $annonces[$index]['annonce_id'];?>">
                  <div class="row" style="background-color:">
                    <img src="<?php echo explodeImages($annonces[$index]['annonce_images'])?>"  id="cart_img"  alt="">
                  </div>
                 </a>
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
                  <a href="Page_d_Annonce.php?aff_annonce=<?php echo $annonces[$index]['annonce_id'];?>">
                  <div class="row" style="background-color:">
                    <img src="<?php echo explodeImages($annonces[$index]['annonce_images'])?>"  id="cart_img"  alt="">
                  </div>
                  </a>
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
                  <a href="Page_d_Annonce.php?aff_annonce=<?php echo $annonces[$index]['annonce_id'];?>">
                  <div class="row" style="background-color:">
                    <img src="<?php echo explodeImages($annonces[$index]['annonce_images'])?>"  id="cart_img"  alt="">
                  </div>
                  </a>
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
<?php } ?>













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
