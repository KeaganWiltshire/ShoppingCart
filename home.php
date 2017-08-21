<?php
/**
 * This will be the home page with a carousel slider. Login top row with carousel slide below.
 */

	$title = "Home Page";
	include('html/baseHeader.html');
	include('mainMenu.html');

	if(!isset($_SESSION)) session_start();
	$_SESSION['start'] = "Session started successfully";

?>

<div class="container" style="height: 80vh;">
	<div class="jumbotron" style="height:95%; min-height:350px; min-width: 400px;">
		<div id="myCarousel" class="carousel slide" style="height:100%;">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<!-- Carousel items -->
			<div class="carousel-inner" style="height:100%;">
				<div class="active item itemFill">
					<img src="images/home/home_background_1.JPG" class="img-responsive">
<!--					<div class="carousel-caption"><h3>First product image</h3>-->
<!--						<p> This is the text about it</p>-->
<!--					</div>-->
				</div>
				<div class="item itemFill">
					<img src="images/home/home_background_2.JPG" class="img-responsive">
<!--					<div class="carousel-caption"><h3>Second product image</h3>-->
<!--						<p> This is the text about it</p>-->
<!--					</div>-->
				</div>
				<div class="item itemFill">
					<img src="images/home/home_background_3.JPG" class="img-responsive">
<!--					<div class="carousel-caption"><h3>Third product image</h3>-->
<!--						<p> This is the text about it</p>-->
<!--					</div>-->
				</div>
			</div>
			<!-- Carousel nav -->
			<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>

			<!-- Login on top of carousel-->
			<div class="container carousel-login">
				<div class="container-fluid">
					<form method="post" action="login.php" name = "loginForm">
						<div class="row">
							<div class="col-sm-4 col-sm-offset-0" style="padding-top:2%;">
								Username: <input type="text" placeholder="Enter username" name="username"  required
								                 value="<?php if (isset($_COOKIE['username'])) echo $_COOKIE['username'];  ?>" > &nbsp;
							</div>
							<div class="col-sm-4 col-sm-offset-0" style="padding-top:2%;">
								Password : <input type="password" placeholder="Enter password" name="password" required> &nbsp;
							</div>
							<div class="col-sm-2 col-sm-offset-0" style="padding-top:2%;white-space:nowrap;">
								Remember: <input type="checkbox" name="remember" <?= isset($_COOKIE['username'])? "checked":'' ?> >
							</div>
							<div class="col-sm-2 col-sm-offset-0" style="padding-top:2%;">
								<input type="submit" value="Log in">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
 include_once ("html/indexFooter.html");