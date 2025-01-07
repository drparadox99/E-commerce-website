<?php
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Facebook</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="mycss/style_profile.css" />
    <link rel="stylesheet" href="Bootstrap/dist/css/bootstrap.min.css" />
    <style >
    .our-team{
      padding: 30px 0 40px;
      background: white;
      text-align: center;
      overflow: hidden;
      position: relative;
      border-radius: 20px;

    }

    .our-team .pic{
      display: inline-block;
      width: 130px;
      height: 130px;
      margin-bottom: 50px;
      /*background: #eb1768;*/
      z-index: 1;
      position:relative;
    }
    .our-team .pic:before{
      content: "";
      width: 100%;
      height: 0;
      border-radius: 50%;
      background: #eb1768;
      position: absolute;
      bottom: 135%;
      right: 0;
      left: 0;
      transform: scale(3);
      transition: all 0.3 linear 0s;

    }
    .img_class{
      height: 100%;
      width: 100%;
    }
    .our-team:hover .pic:before{
      height: 100%;
    }
    .our-team:hover .pic:after{
      content: "";
      width: 100%;
      height: 100%;
      border-radius: 50%;
      background: #ee4266;
      position: absolute;
      top:0;
      left: 0;
      z-index: -1;
    }
    .our-team .pic .img_class{
      width: 100%;
      height: auto;
      border-radius: 50%;
      transform: scale(1);
      transition: all 0.9 ease 0s;
    }
    .our-team:hover .pic .img_class{
      box-shadow: 0 0 0 14px #f7f5ec;
      transform: scale(0.7);
    }
    .our-team .team-content{
      margin-bottom: 30px;
    }
    .our-team .title{
      font-size:22px;
      font-weight: 700;
      color: #4e5052;
      letter-spacing: 1px;
      text-transform: capitalize;
      margin-bottom: 5px;
    }

    .our-team .post{
      display: block;
      font-size: 15px;
      color:#4e5052;
      text-transform: capitalize;
    }

    .our-team .social{
      width: 100%;
      padding: 0;
      margin: 0;
      background: #eb1768;
      position: absolute;
      bottom: -100px;
      left: 0;
      transition: all 0.5s ease 0s;
    }
    .our-team:hover .social{
      bottom:0;
    }
    .our-team .social li{
      display: inline-block;
    }
    .our-team .social li a{
      display: block;
      padding: 10px;
      font-size: 17px;
      color:white;
      transition: all 0.5s ease 0s;
    }

    .our-team .social li a:hover{
      color:#eb1768;
      background: #f7f5ec;
      text-decoration: none;
    }


    </style>
  </head>
  <body>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <div class="container">
      <div class="row">
        <div class="col-md-3 col-ms-6">
          <div class="our-team">
            <div class="pic">
              <img class="img_class" src="img/1.jpg" alt="">
            </div>
            <div class="team-content">
              <h3 class="title">sheya</h3>
              <span class="post">Web Designer</span>
            </div>
            <ul class="social">
              <li><a href="" class="fa fa facebook"></a></li>
              <li><a href="" class="fa fa twitter"></a></li>
              <li><a href="" class="fa fa google-plus"></a></li>
              <li><a href="" class="fa fa linkedin"></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-ms-6">
          <div class="our-team">
            <div class="pic">
              <img class="img_class"src="img/2.jpg" alt="">
            </div>
            <div class="team-content">
              <h3 class="title">Whiterson</h3>
              <span class="post">Web Developper</span>
            </div>
            <ul class="social">
              <li><a href="" class="fa fa facebook"></a></li>
              <li><a href="" class="fa fa twitter"></a></li>
              <li><a href="" class="fa fa google-plus"></a></li>
              <li><a href="" class="fa fa linkedin"></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-ms-6">
          <div class="our-team">
            <div class="pic">
              <img class="img_class" src="img/3.jpg" alt="">
            </div>
            <div class="team-content">
              <h3 class="title">Yu</h3>
              <span class="post">Web Developper</span>
            </div>
            <ul class="social">
              <li><a href="" class="fa fa facebook"></a></li>
              <li><a href="" class="fa fa twitter"></a></li>
              <li><a href="" class="fa fa google-plus"></a></li>
              <li><a href="" class="fa fa linkedin"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>





    <script src="myjs/myjs.js"></script>
  </body>
</html>
