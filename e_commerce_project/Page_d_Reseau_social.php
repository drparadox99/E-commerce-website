

<?php
  session_start();  
  include 'connection.php';
  $db = connex("bdsite","connect.inc.php");
  include 'RequetesSQL.php';




  if(isset($_POST['submit_register'])) s_inscrire();
  if(isset($_POST['submit_login'])) se_connecter();



?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="mycss/style.css" />
    <link rel="stylesheet" href="fonts/css/all.min.css" />

    <title>Bootstrap registration</title>
  </head>
  <body>

    <div class="container" >
      <div class="row" >
        <div class="col-md-7" style="background-color:" >
          <div class="row" style="background-color:">
            <div class="col-5">
              <img src="img/imgs_internes/14.jpg" alt="" style="width:150px ; height:200px">
            </div>
            <div class="col-5">
              <img src="img/imgs_internes/11.png" alt="" style="width:150px ; height:200px">
            </div>
          </div>
          <div class="row" >
            <div class=" col-md-9">
                      <h1 class="title-left">Clothes Troc</h1>
                      <p class="text-left">
                        Un site de mise en relation entre des personnes qui sont géographiquement proches.
                        Cette mise en relation permet différents types de services:
                        En effet, il existe trois types de services :  </p>
                      <p> L'échange de vêtements  </p>
                      <p> Le don de vêtements  </p>
                      <p> La vente de vêtements </p>

              </div>
              <!--<div class=" col-md-3 " style="background-color:green;"></div> -->

          </div>


        </div>
        <div class="col-md-5"  >
          <div class="row">
            <div class="col-6">
              <h3 id="titre_inscrption">S'Inscire</h3>
              <h3 id="titre_connection">Se Connecter</h3> -
            </div>
            <div class="col-6" >
                <!--<i class="fas fa-sign-in-alt" id="vers_connexion"></i>
                <i class="fas fa-user-plus" id="vers_inscription"></i>  -->
            </div>

          </div>
          <hr>
          <div class="form_inscription" id="form_inscription" >
            <form action="#" method="POST" class="register-form" >
            <div class="row">
              <div class="col-lg-11">
                <input type="text" name="user_email_register" class="form-control" placeholder="E-mail">
              </div>
              <div class="col-lg-1" ><i class="fa fa-at"></i></div>
            </div>
            <div class="row">
              <div class="col-lg-11">
                <input type="text" name="user_nom_register" class="form-control" placeholder="Nom">
              </div>
              <div class="col-lg-1" ><i class="fa fa-user icon"></i></div>
            </div>
            <div class="row">
              <div class="col-lg-11">
                <input type="text" name="user_prenom_register" class="form-control" placeholder="Prenom">
              </div>
              <div class="col-lg-1" ><i class="fa fa-user icon"></i></div>
            </div>
            <div class="row">
              <div class="col-lg-11">
                <input type="text" name="user_passowrd_register" class="form-control" placeholder="Password">
              </div>
                <div class="col-lg-1" ><i class="fa fa-unlock-alt"></i></div>
            </div>
            <div class="row">
              <div class="col-xs-4 col-sm-4"></div>
              <div class="col-xs-4 col-sm-4" ><button type="Submit" id="" name="submit_register" class="btn btn-primary myBtn">Valider</button></div>
              <div class="col-xs-4  col-sm-4" ></div>
          </div>
          <hr/>
            <div class="row" >
              <div class="col-4 offset-1"></div>
              <!-- <div class="col-4" ><a href="" id="" name="">S'Inscrire</a></div> -->
              <p id="vers_connexion">Se Connecter</p>

          </div>

          </form>
         </div>

         <div class="form_connexion" id="form_connexion">
           <form action="#" method="POST" class="login-form">
           <div class="row">
             <div class="col-md-11">
               <input type="text" name="user_email_login" class="form-control" placeholder="E-mail">
             </div>
             <div class="col-lg-1"><i class="fa fa-at"></i></div>
           </div>
           <div class="row">
             <div class="col-md-11">
               <input type="text" name="user_password_login" class="form-control" placeholder="Password">
             </div>
             <div class="col-lg-1"><i class="fa fa-unlock-alt"></i></div>
           </div>
           <div class="row">
             <div class="col-xs-4 col-sm-4" ></div>
             <div class="col-xs-4 col-sm-4" ><button type="Submit" id="" name="submit_login" class="btn btn-primary myBtn">Valider</button></div>
             <div class="col-xs-4 col-sm-4" ></div>
         </div>
         <hr/>
         <div class="row">
             <div class="col-4 offset-1" ></div>
             <!-- <div class="col-4" ><a href="" id="" name="">Se Connecter</a></div> -->
             <p id="vers_inscription">S'Inscrire</p>
         </div>
         </form>
        </div>
      </div>
      </div>
    </div>

    <script src="js/libs/jquery.min.js"></script>
    <script src="myjs/myjs.js"></script>
  </body>
</html>
