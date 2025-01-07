<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="mycss/style.css" />
    <link rel="stylesheet" href="fonts/css/all.min.css" />

    <title>Page de Messages</title>
  </head>
  <body>

    <div class="container" style="background-color:" >

      <!-- Navigation section-->
      <?php
      include 'header.php';
      include 'RequetesSQL.php';
      if (isset($_POST['submit_message']) && isset($_GET['destination_source'])){
        enregistrerMessage();
      }

      $users = getTable("SELECT * FROM users");
      $messages = getTable("SELECT * FROM messages ");
      $conversations = changerCles($messages);

      //$tabConv = getConversationsById($_GET['destination_source']);
      //var_dump($tabConv);
      //die();
       ?>




   <div class="messaging">
     <div class="inbox_msg">

   	<div class="inbox_people" style="background-color:">
   	  <div class="headind_srch">
   		<div class="recent_heading">
   		  <h4>Recent</h4>
   		</div>
   		<div class="srch_bar">
   		  <div class="stylish-input-group">
   			<input type="text" class="search-bar"  placeholder="Search" >
   			</div>
   		</div>
   	  </div>
   	  <div class="inbox_chat scroll">
        <?php if (isset($users)) {?>
   		<!--<div class="chat_list active_chat"> -->
      <?php 	foreach ($users as $key => $user) {  ?>
        <a href="Page_d_Messages.php?destination_source=<?php echo $user['user_id'] ?>">
   		<div class="chat_list chat_list">
   		  <div class="chat_people">
   			<div class="chat_img rounded-circle"> <img src="<?php echo $user['user_img_profil']?>" alt="sunil"> </div>
   			<div class="chat_ib">
   			  <h5><?php echo $user['user_pseudonyme'] ?> <span class="chat_date"><?php echo @date_format(date_create($conversations[$user['user_id']]['message_date']),'M D')?> </span></h5>
   			  <p><i class="fas fa-home"></i> &nbsp<?php echo $user['user_ville']?></p>
   			</div>
   		  </div>
   		</div>
      </a>

    <?php }}?>
   	  </div>
   	</div>


   	<div class="mesgs">
   	  <div class="msg_history">
      <?php
      if (isset($_GET['destination_source'])){
      ?>
          <?php
          $tabConv = getConversationsById($_GET['destination_source']);
          //var_dump($tabConv);
          //die();
          if (isset($tabConv)){
            foreach ($tabConv as $key => $value){
              if($tabConv[$key]['message_source'] != $_SESSION['id_user'] ){
          ?>
          <div class="incoming_msg">
          <div class="incoming_msg_img"> <img src="<?php echo getUSerById($_GET['destination_source'],'user_img_profil','users')['user_img_profil'];?>" alt="sunil"> </div>
          <div class="received_msg">
          <div class="received_withd_msg">
            <p><?php echo $tabConv[$key]['message_contenu']  ?></p>
            <span class="time_date"> <?php echo date('h:i A', strtotime($tabConv[$key]['message_date']));?>    |    <?php echo date_format(date_create($tabConv[$key]['message_date']),'M D')?></span></div>
          </div>
        </div>

        <?php
        }else{
        ?>
        <div class="outgoing_msg">
          <div class="sent_msg">
          <p><?php echo $tabConv[$key]['message_contenu']  ?></p>
          <span class="time_date"> <?php echo date('h:i A', strtotime($tabConv[$key]['message_date']))?>     |  <?php echo date_format(date_create($tabConv[$key]['message_date']),'M D')?></span> </div>
        </div>
      <?php }}}} ?>


   	  </div>
      <form action="#" method="POST" class="register-form" >
   	  <div class="type_msg">
   		<div class="input_msg_write">
   		  <input type="text" class="write_msg" name="contenu_message" placeholder="Type a message" />
   		  <button type="Submit" name="submit_message" class="msg_send_btn" type="button"><i class="fa fa-paper-plane" aria-hidden="true" ></i></button>
   		</div>
   	  </div>
    </form>
   	</div>
     </div>
   </div>




























<!--fin du panel pour les vet -->


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
