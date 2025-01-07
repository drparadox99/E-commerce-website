<!DOCTYPE html>
<html lang="en">
<head>

	<title>Profile Page</title>

	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

<!--
	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap-grid.css"> -->
	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap.min.css">

	<!-- Main Styles CSS -->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<style media="screen">
		img{
		/**width: 40px;
		height: 40px;**/
		}
	</style>
</head>
<body>

				<nav class="navbar navbar-expand-md sticky-top navbar-dark bg-dark sticky-top"  >
					<!--The callapse button -->
					<button class="navbar-toggler" data-toggle="collapse" data-target="#collapsing_target" >
						<span class="navbar-toggler-icon"></span>
					</button>

					<!-- The target we want to collapse-->
					<div class="collapse navbar-collapse" id="collapsing_target" >
							<!--Header -->
							<a class="navbar-brand"href="#"><img src="img/img.jpg" style="height:40px;width:40px" alt=""></a>
							<span class="navbar-text" style="color:grey	">MyNewSite </span>
							<!-- basic navbar -->
							<ul class="navbar-nav ml-auto" >
								<li class="nav-item">
									<a class="nav-link" href="#">
										Page d'accueil<span class="caret"></span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Profil</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Consulter Messages</a>
								</li>
								<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">
											Paramètres
											<span class="caret"></span>
										</a>
										<div class="dropdown-menu" aria-label="dropdown_target">
											<ul class="navbar-na">
												<a class="dropdown-item" href="#">Python</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#">Java</a>
												<a class="dropdown-item" href="#">PHP</a>
											</ul>
										</div>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Se deconnecter</a>
								</li>
							</ul>
						</div>
					</nav>

		      <div class="container">
						<br>
            <div class="row">
              <div class="col-3">
								<div class="row myblock">
										<div class="col-sm-4">
													<img src="img/mc2.jpg" alt="" class="rounded-circle_rc">
										</div>
									<div class="col-sm-8 " style="background:">
										<div class="id_acceuil">
											<p>Mes Ami(e)s</p>
										</div>
									</div>
								</div>
								<div class="row myblock">
										<div class="col-sm-4">
													<img src="img/mc2.jpg" alt="" class="rounded-circle_rc">
										</div>
									<div class="col-sm-8 " style="background:">
										<div class="id_acceuil">
											<p>Messages</p>
										</div>
									</div>
								</div>
								<div class="row myblock">
										<div class="col-sm-4">
													<img src="img/mc2.jpg" alt="" class="rounded-circle_rc">
										</div>
									<div class="col-sm-8 " style="background:">
										<div class="id_acceuil">
											<p>Messenger</p>
										</div>
									</div>
								</div>
								<div class="row myblock">
										<div class="col-sm-4">
													<img src="img/mc2.jpg" alt="" class="rounded-circle_rc">
										</div>
									<div class="col-sm-8 " style="background:">
										<div class="id_acceuil">
											<p>Paramètres</p>
										</div>
									</div>
								</div>
								<div class="row myblock">
										<div class="col-sm-4">
													<img src="img/mc2.jpg" alt="" class="rounded-circle_rc">
										</div>
									<div class="col-sm-8 " style="background:">
										<div class="id_acceuil">
											<p>Publications</p>
										</div>
									</div>
								</div>
								<div class="row myblock">
										<div class="col-sm-4">
													<img src="img/mc2.jpg" alt="" class="rounded-circle_rc">
										</div>
									<div class="col-sm-8 " style="background:">
										<div class="id_acceuil">
											<p>Boutique</p>
										</div>
									</div>
								</div>
              </div>





              <div class="col-6">
								<!-- Comment Form  -->
								<div class="ui-block">
								<form class="comment-form inline-items">

									<div class="post__author author vcard inline-items">
										<img src="img/mc2.jpg" alt="author">

										<div class="form-group with-icon-right ">
											<textarea class="form-control" placeholder=""></textarea>
											<div class="add-options-message">
												<a href="#" class="options-message" data-toggle="modal" data-target="#update-header-photo">
													<svg class="olymp-camera-icon">
														<use xlink:href="svg-icons/sprites/icons.svg#olymp-camera-icon"></use>
													</svg>
												</a>
											</div>
										</div>
									</div>
									<button class="btn btn-md-2 btn-primary">Post Comment</button>
									<button class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Cancel</button>
								</form>
							</div>

							<div class="ui-block">

								<!-- Poste au dessus de la photo -->

								<article class="hentry post video">
										<div class="post__author author vcard inline-items"  >
											<img src="img/3.jpg" alt="author">
											<div class="author-date">
												<a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a> shared a
												<a href="#">link</a>
												<div class="post__date">
													<time class="published" datetime="2017-03-24T18:18">
														7 hours ago
													</time>
												</div>
											</div>
										</div>
										<!--Commentaire de la photo -->
										<p>If someone missed it, check out the new song by System of a Revenge! I thinks they are going back to their roots...</p>

										<!--la photo qui a été posté -->
										<div class="post-video">
											<div class="video-thumb">
												<img src="img/2.jpg" alt="photo">
												<a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video">
												</a>
											</div>

											<!--Name of image -->
											<div class="video-content" >
												<a href="#" class="h4 title">System of a Revenge - Nothing Else Matters (LIVE)</a>
												<p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod tempo incididunt ut labore..</p>
												<a href="#" class="link-site">YOUTUBE.COM</a>
											</div>
										</div>

										<!--dernière partie du poste montrant les personnes qui ont likés -->
										<div class="post-additional-info inline-items" >

											<a href="#" class="post-add-icon inline-items">
												<svg class="olymp-heart-icon">
													<use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
												</svg>
												<span>15</span>
											</a>
											<!-- les images des personnas qui ont commentés la photo -->
											<ul class="friends-harmonic">
												<li><a href="#"><img src="img/img.jpg" alt="friend"></a>	</li>
												<li><a href="#"><img src="img/mc2.jpg" alt="friend"></a></li>
												<li><a href="#"><img src="img/2.jpg" alt="friend"></a></li>
												<li><a href="#"><img src="img/3.jpg" alt="friend"></a></li>
											</ul>

											<div class="names-people-likes">
												<a href="#">Jenny</a>, <a href="#">Robert</a> and
												<br>13 more liked this
											</div>

											<div class="comments-shared">
												<a href="#" class="post-add-icon inline-items">
													<svg class="olymp-speech-balloon-icon">
														<use xlink:href="svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use>
													</svg>
													<span>1</span>
												</a>
												<a href="#" class="post-add-icon inline-items">
													<svg class="olymp-share-icon">
														<use xlink:href="svg-icons/sprites/icons.svg#olymp-share-icon"></use>
													</svg>
													<span>16</span>
												</a>
											</div>
										</div>

									</article>
							</div>

						<div class="ui-block">
							<!-- Post -->
							<article class="hentry post has-post-thumbnail shared-photo">
									<div class="post__author author vcard inline-items">
										<img src="img/3.jpg" alt="author">

										<div class="author-date">
											<a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a> shared
											<a href="#">Diana Jameson</a>’s <a href="#">photo</a>
											<div class="post__date">
												<time class="published" datetime="2017-03-24T18:18">
													7 hours ago
												</time>
											</div>
										</div>
									</div>

									<p>Hi! Everyone should check out these amazing photographs that my friend shot the past week. Here’s one of them...leave a kind comment!</p>

									<div class="post-thumb">
										<img src="img/3.jpg" alt="photo" style="width:100%; height:100%">
									</div>

									<ul class="children single-children">
										<li class="comment-item">
											<div class="post__author author vcard inline-items">
												<img src="img/3.jpg" alt="author">
												<div class="author-date">
													<a class="h6 post__author-name fn" href="#">Diana Jameson</a>
													<div class="post__date">
														<time class="published" datetime="2017-03-24T18:18">
															16 hours ago
														</time>
													</div>
												</div>
											</div>

											<p>Here’s the first photo of our incredible photoshoot from yesterday. If you like it please say so and tel me what you wanna see next!</p>
										</li>
									</ul>

									<div class="post-additional-info inline-items">

										<a href="#" class="post-add-icon inline-items">
											<svg class="olymp-heart-icon">
												<use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
											</svg>
											<span>15</span>
										</a>

										<ul class="friends-harmonic">
											<li><a href="#"><img src="img/img.jpg" alt="friend"></a>	</li>
											<li><a href="#"><img src="img/mc2.jpg" alt="friend"></a></li>
											<li><a href="#"><img src="img/2.jpg" alt="friend"></a></li>
											<li><a href="#"><img src="img/3.jpg" alt="friend"></a></li>
										</ul>

										<div class="names-people-likes">
											<a href="#">Diana</a>, <a href="#">Nicholas</a> and
											<br>13 more liked this
										</div>

										<div class="comments-shared">
											<a href="#" class="post-add-icon inline-items">
												<svg class="olymp-speech-balloon-icon">
													<use xlink:href="svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use>
												</svg>
												<span>0</span>
											</a>
											<a href="#" class="post-add-icon inline-items">
												<svg class="olymp-share-icon">
													<use xlink:href="svg-icons/sprites/icons.svg#olymp-share-icon"></use>
												</svg>
												<span>16</span>
											</a>
										</div>
									</div>
								</article>
							</div>
																				<!-- .. end Post -->

						</div> <!-- end of bootstrap column-->
              <div class="col-3">

              </div>

            </div>

          </div>



<script type="text/javascript" src="js/libs/popper.js"></script>
<script type="text/javascript" src="js/libs/jquery.min.js"></script>
<script type="text/javascript" src="js/libs/bootstrap.min.js"></script>

</body>
</html>
