  <?php
include 'connection.php';
$db = connex("bdsite","connect.inc.php");
include 'RequetesSQL.php';


if(isset($_POST['user_Submit_register'])){
  s_inscrire_final();
}


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

    <title>Page d'Informations Personnelles</title>
  </head>
  <body>

    <div class="container" style="background-color:" >



     <div class="row espacement desc_panel" style="" >
       <div class="col-12">
         <h2>Informations Personnelles</h2>
       </div>
       <div class="col-12" style="background-color:">
         <div class="form-register" id="form-register" >
        <form enctype="multipart/form-data" action="Page_d_inscription_finale.php" method="POST" class="register-form" >
           <div class="row">
             <div class="col-10" style="background-color:">
               <input type="text" name="user_Pseudonyme" class="form-control" placeholder="Pseudonyme" >
             </div>
             <div class="col-2 ajust" style=""><i class="fas fa-user-circle"></i></div>
           </div>
           <div class="row">
             <div class="col-10" style="background-color:">
               <input type="text" name="user_Date_de_naissance" class="form-control" placeholder="Date de naissance ( YYYY-MM-JJ )" >
             </div>
             <div class="col-2 ajust" style=""><i class="fas fa-home"></i></div>
           </div>
           <div class="row">
             <div class="col-10">
               <select class="form-control" name="user_Gendre" id="gendre">
                 <option value="Gendre_info" selected="selected"></option>
                 <option value="Femelle">Masculin</option>
                 <option value="Male">Féminin</option>
                 <option value="Indetermine">Indéterminé</option>
               </select>
             </div>
             <div class="col-2 ajust"><i class="fas fa-transgender-alt"></i></div>
           </div>
           <div class="row">
             <div class="col-10" style="background-color:">
               <input type="text" name="user_Metier" class="form-control" placeholder="Metier" >
             </div>
              <div class="col-2 ajust"><i class="fas fa-briefcase"></i></div>
           </div>
           <div class="row">
             <div class="col-10" style="background-color:">
               <input type="text" name="user_Ville" class="form-control" placeholder="Ville" >
             </div>
                <div class="col-2 ajust" style=""><i class="fas fa-home"></i></div>
           </div>
           <div class="row">
             <div class="col-10" style="background-color:">
               <input type="text" name="user_Adresse" class="form-control" placeholder="Adresse" >
             </div>
             <div class="col-2 ajust" style=""><i class="fas fa-map-marker-alt"></i></div>
           </div>

           <div class="row">
             <div class="col-10" style="background-color:">
               <input type="text" name="user_Region" class="form-control" placeholder="Region" >
             </div>
             <div class="col-2 ajust" style=""><i class="fas fa-street-view"></i></div>
           </div>
           <div class="row">
             <div class="col-10" style="background-color:">
               <input type="text" name="user_Téléphone" class="form-control" placeholder="Téléphone" >
             </div>
             <div class="col-2 ajust" style=""><i class="fas fa-phone-alt"></i></div>
           </div>
           <div class="row">
             <div class="col-10">
               <textarea  rows="3" name="user_Message" class="form-control" cols="55"  placeholder="  Message profil..." id="message_textarea"></textarea>
             </div>
             <div class="col-2 ajust"><i class="fas fa-comments"></i></div>
           </div>

           <div class="row" style="background-color:">
             <div class="col-4 offset-5" style="background-color:">
               <input type="file" name="user_Image" multiple="multiple"  id="file1" accept="image/*" capture style="display:none"/>
               <div id="upfile1" style="cursor:pointer"><i class="fas fa-camera" style="font-size:30px;margin-bottom:10px;"></i></div>
             </div>
           </div>
           <div class="row">
             <div class="col-3 offset-5" ><button type="Submit" name="user_Submit_register" class="btn btn-primary">Enregistrer</button></div>
           </div>

         </form>
        </div>

       </div>

     </div>
<!--fin du panel pour les vet -->


      <div class="footer" >
          <div class="row">
            <div class="col-3 offset-3">
              <h6 class="text-uppercase font-weight-bold">A PROPOS NOUS</h6>
            </div>
            <div class="col-3">
              <h6 class="text-uppercase font-weight-bold">CONTACT</h6>
            </div>
            <div class="col-3">
              <h6 class="text-uppercase font-weight-bold">FOLLOW US</h6>
            </div>
          </div>

          <div class="row">
            <div class="col-3">
              <a href="Page_d_accueil.html"><img src="img/logo.png" id="imgLogo" alt=""></a>
            </div>
            <div class="col-3 ">
              <p><a class="dark-grey-text" href="#!">Qui sommes-nous</a></p>
            </div>
            <div class="col-3 ">
              <p><a class="dark-grey-text" href="#!">FAQ</a></p>
              <p><a class="dark-grey-text" href="#!">Aide</a></p>
              <p><a class="dark-grey-text" href="#!">Contacez-nous</a></p>
            </div>
            <div class="col-3">
              <div class="row">
                <div class="col-3 offset-3">
                  <i class="fab fa-facebook-f white-text mr-4"> </i>
                </div>
              </div>
              <div class="row">
                <div class="col-3 offset-3">
                  <i class="fab fa-twitter white-text mr-4"> </i>
                </div>
              </div>
              <div class="row">
                <div class="col-3 offset-3">
                  <i class="fab fa-google-plus-g white-text mr-4"> </i>
                </div>
              </div>
              <div class="row">
                <div class="col-3 offset-3">
                    <i class="fab fa-linkedin-in white-text mr-4"> </i>
                </div>
              </div>
            </div>
          </div>
          <!-- Copyright -->
          <div class="row">
            <div class="col-3 offset-4">
              <div class="footer-copyright text-center text-black-50 py-3">© 2019 Copyright:
                <a class="dark-grey-text" href="#">Clothes Troc</a>
              </div>
            </div>
          </div>
      </div>







    </div>
    <script type="text/javascript" src="js/libs/popper.js"></script>
    <script type="text/javascript" src="js/libs/jquery.min.js"></script>
    <script type="text/javascript" src="js/libs/bootstrap.min.js"></script>

    <script src="js/libs/jquery.min.js"></script>
    <script src="myjs/myjs.js"></script>
  </body>
</html>
