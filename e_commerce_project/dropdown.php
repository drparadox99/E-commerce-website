<!DOCTYPE html>
<html lang="en">
<head>

	<title>Profile Page</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">


	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css/custom.css">

<body>
	<div class="jumbotron" style="margin-bottom: 0px;">
		<h1>The Inside Man</h1>
		<p>Let's learn web Development</p>

	</div>


	<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
		<!--The callapse button -->
		<button class="navbar-toggler" data-toggle="collapse" data-target="#collapsing_target">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- The target we want to collapse-->
		<div class="collapse navbar-collapse" id="collapsing_target">
				<!--Header -->
				<a class="navbar-brand"href="#"><img src="img/img.jpg" style="height:40px;width:40px" alt=""></a>
				<span class="navbar-text">INCRAZE </span>
				<!-- basic navbar -->

				<ul class="navbar-nav">
					<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">
								Dropdown
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
						<a class="nav-link" href="#">Link 2</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link 3</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link 4</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link 5</a>
					</li>
				</ul>
			</div>
	</nav>


	<img src="img/img.jpg" alt="" class="img-fluid" style="height:1400px;width:800px"/>



	<script type="text/javascript" src="js/libs/popper	.js"></script>
	<script type="text/javascript" src="js/libs/jquery.min.js"></script>
	<script type="text/javascript" src="js/libs/bootstrap.min.js"></script>

</body>
</html>
