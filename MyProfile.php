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
	<link rel="stylesheet" type="text/css" href="c	ss/jquery.mCustomScrollbar.min.css">



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
							<span class="navbar-text" style="color:grey	">INCRAZE </span>
							<!-- basic navbar -->
							<ul class="navbar-nav ml-auto" >
								<li class="nav-item">
									<a class="nav-link" href="#">
										Page d'accueil<span class="caret"></span>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Creer Timeline</a>
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
						<div class="row">
							<div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="ui-block" >
									<div class="top-header" >
										<div class="top-header-thumb" >
											<img src="img/mc2.jpg" style="width:100%;height:350px" alt="nature">
										</div>
										<div class="profile-section"  >
											<div class="row">
												<div class="col col-lg-5 col-md-5 col-sm-12 col-12">
													<ul class="profile-menu">
														<li>
															<a href="02-ProfilePage.html" class="active">Timeline</a>
														</li>
														<li>
															<a href="05-ProfilePage-About.html">A propos de moi</a>
														</li>
														<li>
															<a href="06-ProfilePage.html">Amis</a>
														</li>
													</ul>
												</div>
												<div class="col col-lg-5 ml-auto col-md-5 col-sm-12 col-12">
													<ul class="profile-menu">
														<li>
															<a href="#">Photos</a>
														</li>
														<li>
															<a href="#">Projets</a>
														</li>
														<li style="">
															<a href="#">Contact</a>
														</li>
													</ul>
												</div>
											</div>

										</div>
										<div class="top-header-author">
											<a href="02-ProfilePage.html" class="author-thumb">
												<img src="img/mc2.jpg" width="180"  height="200" alt="author">
											</a>
											<div class="author-content">
												<a href="02-ProfilePage.html" class="h4 author-name">Drparadox99</a>
												<div class="country">Beauvais, Fr</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="container" style="background:">
								<div class="row">

											<div class="col-sm-3">
												<div class="ui-block">
													<div class="ui-block-title">
														<h6 class="title">Profile Intro</h6>
													</div>
													<div class="ui-block-content">
														<!-- W-Personal-Info -->
														<ul class="widget w-personal-info item-block">
															<li>
																<span class="title">About Me:</span>
																<span class="text">Hi, I’m James, I’m 36 and I work as a Digital Designer for the  “Daydreams” Agency in Pier 56.</span>
															</li>
															<li>
																<span class="title">Favourite TV Shows:</span>
																<span class="text">Breaking Good, RedDevil, People of Interest, The Running Dead, Found,  American Guy.</span>
															</li>
															<li>
																<span class="title">Favourite Music Bands / Artists:</span>
																<span class="text">Iron Maid, DC/AC, Megablow, The Ill, Kung Fighters, System of a Revenge.</span>
															</li>
														</ul>
														<!-- .. end W-Personal-Info -->
														<!-- W-Socials -->
														<div class="widget w-socials">
															<h6 class="title">Other Social Networks:</h6>
															<a href="#" class="social-item bg-facebook">
																<i class="fab fa-facebook-f" aria-hidden="true"></i>
																Facebook
															</a>
															<a href="#" class="social-item bg-twitter">
																<i class="fab fa-twitter" aria-hidden="true"></i>
																Twitter
															</a>
															<a href="#" class="social-item bg-dribbble">
																<i class="fab fa-dribbble" aria-hidden="true"></i>
																Dribbble
															</a>
														</div>
														<!-- ... end W-Socials -->
													</div>
												</div>

												<div class="ui-block">
													<div class="ui-block-title">
														<h6 class="title">Favourite Pages</h6>
													</div>

													<!-- W-Friend-Pages-Added -->

													<ul class="widget w-friend-pages-added notification-list friend-requests">
														<li class="inline-items">
															<div class="author-thumb">
																<img src="img/img.jpg" width="30" height="30" alt="author">
															</div>
															<div class="notification-event">
																<a href="#" class="h6 notification-friend">The Marina Bar</a>
																<span class="chat-message-item">Restaurant / Bar</span>
															</div>
															<span class="notification-icon" data-toggle="tooltip" data-placement="top" data-original-title="ADD TO YOUR FAVS">
																<a href="#">
																	<svg class="olymp-star-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-star-icon"></use></svg>
																</a>
															</span>
														</li>

														<li class="inline-items">
															<div class="author-thumb">
																<img src="img/img.jpg" alt="author"  width="30" height="30">
															</div>
															<div class="notification-event">
																<a href="#" class="h6 notification-friend">Tapronus Rock</a>
																<span class="chat-message-item">Rock Band</span>
															</div>
														</li>

														<li class="inline-items">
															<div class="author-thumb">
																<img src="img/img.jpg" alt="author"  width="30" height="30">
															</div>
															<div class="notification-event">
																<a href="#" class="h6 notification-friend">Pixel Digital Design</a>
																<span class="chat-message-item">Company</span>
															</div>
														</li>

														<li class="inline-items">
															<div class="author-thumb">
																<img src="img/img.jpg" alt="author"  width="30" height="30">
															</div>
															<div class="notification-event">
																<a href="#" class="h6 notification-friend">Thompson’s Custom Clothing Boutique</a>
																<span class="chat-message-item">Clothing Store</span>
															</div>
														</li>

														<li class="inline-items">
															<div class="author-thumb">
																<img src="img/img.jpg" alt="author"  width="30" height="30">
															</div>
															<div class="notification-event">
																<a href="#" class="h6 notification-friend">Crimson Agency</a>
																<span class="chat-message-item">Company</span>
															</div>
														</li>
													</ul>

													<!-- .. end W-Friend-Pages-Added -->
												</div>

											</div> <!-- end of boootstrap column-->

											<div class="col-sm-6">

												<!-- Comment Form  -->
												<div class="ui-block">
												<form class="comment-form inline-items">

													<div class="post__author author vcard inline-items">
														<img src="img/img.jpg" alt="author">

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
													<!-- Post -->
													<article class="hentry post">
															<div class="post__author author vcard inline-items">
																<img src="img/img.jpg" alt="author">
																<div class="author-date">
																	<a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a>
																	<div class="post__date">
																		<time class="published" datetime="2017-03-24T18:18">
																			19 hours ago
																		</time>
																	</div>
																</div>
															</div>
															<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
																pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
																mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
																accusantium doloremque.
															</p>
															<div class="post-additional-info inline-items" >
																<a href="#" class="post-add-icon inline-items">
																	<svg class="olymp-heart-icon">
																		<use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
																	</svg>
																	<span>8</span>
																</a>
																<ul class="friends-harmonic">
																	<li><a href="#"><img src="img/img.jpg" alt="friend"></a>	</li>
																	<li><a href="#"><img src="img/mc2.jpg" alt="friend"></a></li>
																	<li><a href="#"><img src="img/2.jpg" alt="friend"></a></li>
																	<li><a href="#"><img src="img/3.jpg" alt="friend"></a></li>
																</ul>
																<div class="names-people-likes">
																	<a href="#">Jenny</a>, <a href="#">Robert</a> and
																	<br>6 more liked this
																</div>
																<div class="comments-shared">
																	<a href="#" class="post-add-icon inline-items">
																		<svg class="olymp-speech-balloon-icon">
																			<use xlink:href="svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use>
																		</svg>
																		<span>17</span>
																	</a>
																	<a href="#" class="post-add-icon inline-items">
																		<svg class="olymp-share-icon">
																			<use xlink:href="svg-icons/sprites/icons.svg#olymp-share-icon"></use>
																		</svg>
																		<span>24</span>
																	</a>
																</div>
															</div>
														</article>
												</div>
												<!-- fin du premier post_-->
												<div class="ui-block">

													<!-- Post -->

													<article class="hentry post video" >
															<div class="post__author author vcard inline-items">
																<img src="img/img.jpg" alt="author">
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

															<p>If someone missed it, check out the new song by System of a Revenge! I thinks they are going back to their roots...</p>

															<div class="post-video">
																<div class="video-thumb">
																	<img src="img/img.jpg" alt="photo">
																	<a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video">
																	</a>
																</div>

																<div class="video-content">
																	<a href="#" class="h4 title">System of a Revenge - Nothing Else Matters (LIVE)</a>
																	<p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod tempo incididunt ut labore..</p>
																	<a href="#" class="link-site">YOUTUBE.COM</a>
																</div>
															</div>

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
																<img src="img/img.jpg" alt="author">

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
																<img src="img/img.jpg" alt="photo" style="width:100%; height:100%">
															</div>

															<ul class="children single-children">
																<li class="comment-item">
																	<div class="post__author author vcard inline-items">
																		<img src="img/img.jpg" alt="author">
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
																	<li><a href="#"><img src="img/img.jpg" alt="friend"></a></li>
																	<li><a href="#"><img src="img/img.jpg" alt="friend"></a></li>
																	<li><a href="#"><img src="img/img.jpg" alt="friend"></a></li>
																	<li><a href="#"><img src="img/img.jpg" alt="friend"></a></li>
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
										</div><!--- end of bootstrap column--->
											<div class="col-sm-3">
												<div class="ui-block">
													<div class="ui-block-title">
														<h6 class="title">Last Photos</h6>
													</div>
													<div class="ui-block-content">
														<!-- W-Latest-Photo -->
														<ul class="widget w-last-photo js-zoom-gallery">
															<li><a href="img/last-photo10-large.jpg"><img src="img/img.jpg" alt="photo"></a></li>
															<li><a href="img/last-phot11-large.jpg"><img src="img/img.jpg" alt="photo"></a></li>
															<li><a href="img/last-phot12-large.jpg"><img src="img/img.jpg" alt="photo"></a></li>
															<li><a href="img/last-phot13-large.jpg"><img src="img/img.jpg" alt="photo"></a></li>
															<li><a href="img/last-phot14-large.jpg"><img src="img/img.jpg" alt="photo"></a></li>
															<li>	<a href="img/last-phot15-large.jpg"><img src="img/img.jpg" alt="photo"></a>	</li>
															<li>	<a href="img/last-phot16-large.jpg"><img src="img/img.jpg" alt="photo"></a></li>
															<li><a href="img/last-phot17-large.jpg">	<img src="img/img.jpg" alt="photo">	</a>	</li>
															<li><a href="img/last-phot18-large.jpg"><img src="img/img.jpg" alt="photo"></a>	</li>
														</ul>
														<!-- .. end W-Latest-Photo -->
													</div>
												</div>
												<div class="ui-block">
													<div class="ui-block-title">
														<h6 class="title">Blog Posts</h6>
													</div>
													<!-- W-Blog-Posts -->
													<ul class="widget w-blog-posts">
														<li>
															<article class="hentry post">
																<a href="#" class="h4">My Perfect Vacations in South America and Europe</a>
																<p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod por incidid ut labore et.</p>
																<div class="post__date">
																	<time class="published" datetime="2017-03-24T18:18">
																		7 hours ago
																	</time>
																</div>
															</article>
														</li>
														<li>
															<article class="hentry post">
																<a href="#" class="h4">The Big Experience of Travelling Alone</a>
																<p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod por incidid ut labore et.</p>
																<div class="post__date">
																	<time class="published" datetime="2017-03-24T18:18">
																		March 18th, at 6:52pm
																	</time>
																</div>
															</article>
														</li>
													</ul>
													<!-- .. end W-Blog-Posts -->
												</div>

												<div class="ui-block">
													<div class="ui-block-title">
														<h6 class="title">Friends (86)</h6>
													</div>
													<div class="ui-block-content">
														<!-- W-Faved-Page -->
														<ul class="widget w-faved-page js-zoom-gallery">
															<li><a href="#">	<img src="img/img.jpg" alt="author"></a></li>
															<li><a href="#"><img src="img/img.jpg" alt="user"></a></li>
															<li><a href="#"><img src="img/img.jpg" alt="author"></a></li>
															<li><a href="#"><img src="img/img.jpg" alt="user"></a></li>
															<li><a href="#"><img src="img/img.jpg" alt="author"></a></li>
															<li><a href="#"><img src="img/img.jpg" alt="author"></a></li>
															<li><a href="#"><img src="img/img.jpg" alt="author"></a></li>
														<!-- .. end W-Faved-Page -->
													</div>
												</div>

											</div> <!--- end of bootstrap column--->


					</div>
			</div>
			<div class="chatbox-list">
				<div class="chatbox">
					<div class="chat-mg">
						<a href="#" title=""><img src="img/2.jpg" alt=""></a>
						<span>2</span>
					</div>
					<div class="conversation-box">
						<div class="con-title mg-3">
							<div class="chat-user-info">
								<img src="images/img.jpg" alt="">
								<h3>John Doe <span class="status-info"></span></h3>
							</div>
							<div class="st-icons">
								<a href="#" title=""><i class="la la-cog"></i></a>
								<a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
								<a href="#" title="" class="close-chat"><i class="la la-close"></i></a>
							</div>
						</div>
						<div class="chat-hist mCustomScrollbar" data-mcs-theme="dark">
							<div class="chat-msg" >
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
								<span>Sat, Aug 23, 1:10 PM</span>
							</div>
							<div class="date-nd">
								<span>Sunday, August 24</span>
							</div>
							<div class="chat-msg st2">
								<p>Cras ultricies ligula.</p>
								<span>5 minutes ago</span>
							</div>
							<div class="chat-msg">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
								<span>Sat, Aug 23, 1:10 PM</span>
							</div>
						</div><!--chat-list end-->
						<div class="typing-msg">
							<form>
								<textarea placeholder="Type a message here"></textarea>
								<button type="submit"><i class="fa fa-send"></i></button>
							</form>
							<ul class="ft-options">
								<li><a href="#" title=""><i class="la la-smile-o"></i></a></li>
								<li><a href="#" title=""><i class="la la-camera"></i></a></li>
								<li><a href="#" title=""><i class="fa fa-paperclip"></i></a></li>
							</ul>
						</div><!--typing-msg end-->
					</div><!--chat-history end-->
				</div>
				<div class="chatbox">
					<div class="chat-mg">
						<a href="#" title=""><img src="img/1.jpg" alt=""></a>
					</div>
					<div class="conversation-box">
						<div class="con-title mg-3">
							<div class="chat-user-info">
								<img src="img/1.jpg" alt="">
								<h3>John Doe <span class="status-info"></span></h3>
							</div>
							<div class="st-icons">
								<a href="#" title=""><i class="la la-cog"></i></a>
								<a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
								<a href="#" title="" class="close-chat"><i class="la la-close"></i></a>
							</div>
						</div>
						<div class="chat-hist mCustomScrollbar" data-mcs-theme="dark">
							<div class="chat-msg">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
								<span>Sat, Aug 23, 1:10 PM</span>
							</div>
							<div class="date-nd">
								<span>Sunday, August 24</span>
							</div>
							<div class="chat-msg st2">
								<p>Cras ultricies ligula.</p>
								<span>5 minutes ago</span>
							</div>
							<div class="chat-msg">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
								<span>Sat, Aug 23, 1:10 PM</span>
							</div>
						</div><!--chat-list end-->
						<div class="typing-msg">
							<form>
								<textarea placeholder="Type a message here"></textarea>
								<button type="submit"><i class="fa fa-send"></i></button>
							</form>
							<ul class="ft-options">
								<li><a href="#" title=""><i class="la la-smile-o"></i></a></li>
								<li><a href="#" title=""><i class="la la-camera"></i></a></li>
								<li><a href="#" title=""><i class="fa fa-paperclip"></i></a></li>
							</ul>
						</div><!--typing-msg end-->
					</div><!--chat-history end-->
				</div>
				<div class="chatbox">
					<div class="chat-mg bx">
						<a href="#" title=""><img src="img/3.jpg" alt=""></a>
						<span>2</span>
					</div>
					<div class="conversation-box">
						<div class="con-title">
							<h3>Messages</h3>
							<a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
						</div>
						<div class="chat-list">
							<div class="conv-list active">
								<div class="usrr-pic">
									<img src="images/img.jpg" alt="">
									<span class="active-status activee"></span>
								</div>
								<div class="usy-info">
									<h3>John Doe</h3>
									<span>Lorem ipsum dolor <img src="images/img.jpg" alt=""></span>
								</div>
								<div class="ct-time">
									<span>1:55 PM</span>
								</div>
								<span class="msg-numbers">2</span>
							</div>
							<div class="conv-list">
								<div class="usrr-pic">
									<img src="images/img.jpg" alt="">
								</div>
								<div class="usy-info">
									<h3>John Doe</h3>
									<span>Lorem ipsum dolor <img src="images/img.jpg" alt=""></span>
								</div>
								<div class="ct-time">
									<span>11:39 PM</span>
								</div>
							</div>
							<div class="conv-list">
								<div class="usrr-pic">
									<img src="images/img.jpg" alt="">
								</div>
								<div class="usy-info">
									<h3>John Doe</h3>
									<span>Lorem ipsum dolor <img src="images/img.jpg" alt=""></span>
								</div>
								<div class="ct-time">
									<span>0.28 AM</span>
								</div>
							</div>
						</div><!--chat-list end-->
					</div><!--conversation-box end-->
				</div>
			</div><!--chatbox-list end-->



<script type="text/javascript" src="js/libs/popper.js"></script>
<script type="text/javascript" src="js/libs/jquery.min.js"></script>
<script type="text/javascript" src="js/libs/bootstrap.min.js"></script>

<!--for chat box -->
<script type="text/javascript" src="js/libs/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="js/libs/script.js"></script>
</body>
</html>
