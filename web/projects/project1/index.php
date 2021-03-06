<?php

?>
<!-- credit to https://bootsnipp.com/snippets/j6QAx for the template -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Hipster Tees</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="browse.css">
</head>
<body>
<form action='viewCart.php' method='post'>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Hipster 
					<b>Tees</b>
					<span id='view-cart-btn'>
							<input id='viewCart' name='viewCart' type='submit' class="btn btn-primary" value="View Cart">
					</span>
				</h2>
				<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>   
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<div class="item carousel-item active">
						<div class="row">
							<div class="col-sm-3">
								<div class="thumb-wrapper">
									<div class="img-box">
										<img src="moonT.jpg" class="img-responsive img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Moon Phases</h4>
										<p class="item-price"><strike>$40.00</strike> <span>$30.00</span></p>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<a href="#" class="btn btn-primary" id='moonT' name='moonT'>Add to Cart</a>
										<!-- <input id='moonT' name='moonT' type='submit' class="btn btn-primary" value="Add to Cart"> -->

									</div>						
								</div>
							</div>
							<div class="col-sm-3">
								<div class="thumb-wrapper">
									<div class="img-box">
										<img src="beeT.jpg" class="img-responsive img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Bee Happy</h4>
										<p class="item-price"><strike>$25.00</strike> <span>$23.99</span></p>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<a href="#" class="btn btn-primary" id='beeT' name='beeT'>Add to Cart</a>
										<!-- <input id='beeT' name='beeT' type='submit' name='submit' class="btn btn-primary" value="Add to Cart"> -->

									</div>						
								</div>
							</div>		
							<div class="col-sm-3">
								<div class="thumb-wrapper">
									<div class="img-box">
										<img src="everyoneT.jpg" class="img-responsive img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Everyone</h4>
										<p class="item-price"><strike>$15.00</strike> <span>$10.00</span></p>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<a href="#" class="btn btn-primary" id='everyoneT' name='everyoneT'>Add to Cart</a>
										<!-- <input id='everyoneT' name='everyoneT' type='submit' name='submit' class="btn btn-primary" value="Add to Cart"> -->

									</div>						
								</div>
							</div>								
							<div class="col-sm-3">
								<div class="thumb-wrapper">
									<div class="img-box">
										<img src="lionT.jpg" class="img-responsive img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Fierce</h4>
										<p class="item-price"><strike>$15.00</strike> <span>$10.00</span></p>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<a href="#" class="btn btn-primary" id='lionT' name='lionT'>Add to Cart</a>
										<!-- <input id='lionT' name='lionT' type='submit' name='submit' class="btn btn-primary" value="Add to Cart"> -->

									</div>						
								</div>
							</div>
						</div>
					</div>
					<div class="item carousel-item">
						<div class="row">
							<div class="col-sm-3">
								<div class="thumb-wrapper">
									<div class="img-box">
										<img src="peachyT.jpg" class="img-responsive img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Just Peachy</h4>
										<p class="item-price"><strike>$29.00</strike> <span>$20.00</span></p>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<a href="#" class="btn btn-primary" id='peachyT' name='peachyT'>Add to Cart</a>
										<!-- <input id='peachyT' name='peachyT' type='submit' name='submit' class="btn btn-primary" value="Add to Cart"> -->
									</div>						
								</div>
							</div>
							<div class="col-sm-3">
								<div class="thumb-wrapper">
									<div class="img-box">
										<img src="pinkT.jpg" class="img-responsive img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Pink Mountain</h4>
										<p class="item-price"><strike>$10.00</strike> <span>$8.00</span></p>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<a href="#" class="btn btn-primary" id='pinkT' name='pinkT'>Add to Cart</a>
										<!-- <input id='pinkT' name='pinkT' type='submit' name='submit' class="btn btn-primary" value="Add to Cart"> -->
									</div>						
								</div>
							</div>
							<div class="col-sm-3">
								<div class="thumb-wrapper">
									<div class="img-box">
										<img src="plantT.jpg" class="img-responsive img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Plant Parenthood</h4>
										<p class="item-price"><strike>$19.00</strike> <span>$15.00</span></p>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<a href="#" class="btn btn-primary" id='plantT' name='plantT'>Add to Cart</a>
										<!-- <input id='plantT' name='plantT' type='submit' name='submit' class="btn btn-primary" value="Add to Cart"> -->
									</div>						
								</div>
							</div>
							<div class="col-sm-3">
								<div class="thumb-wrapper">
									<div class="img-box">
										<img src="saltyT.jpg" class="img-responsive img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Don't Be Salty</h4>
										<p class="item-price"><strike>$35.00</strike> <span>$25.00</span></p>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<a href="#" class="btn btn-primary" id='saltyT' name='saltyT'>Add to Cart</a>
										<!-- <input id='saltyT' name='saltyT' type='submit' name='submit' class="btn btn-primary" value="Add to Cart"> -->
									</div>						
								</div>
							</div>						
						</div>
					</div>
					<div class="item carousel-item">
						<div class="row">
							<div class="col-sm-3">
								<div class="thumb-wrapper">
									<div class="img-box">
										<img src="skullT.jpg" class="img-responsive img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Floral Skull</h4>
										<p class="item-price"><strike>$39.00</strike> <span>$30.00</span></p>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<a href="#" class="btn btn-primary" id='skullT' name='skullT'>Add to Cart</a>
										<!-- <input id='skullT' name='skullT' type='submit' name='submit' class="btn btn-primary" value="Add to Cart"> -->
									</div>						
								</div>
							</div>
							<div class="col-sm-3">
								<div class="thumb-wrapper">
									<div class="img-box">
										<img src="strawberryT.jpg" class="img-responsive img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Sweet Strawberry</h4>
										<p class="item-price"><strike>$15.00</strike> <span>$10.00</span></p>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<a href="#" class="btn btn-primary" id='strawberryT' name='strawberryT'>Add to Cart</a>
										<!-- <input id='strawberryT' name='strawberryT' type='submit' name='submit' class="btn btn-primary" value="Add to Cart"> -->

									</div>						
								</div>
							</div>
							<div class="col-sm-3">
								<div class="thumb-wrapper">
									<div class="img-box">
										<img src="whalesT.jpg" class="img-responsive img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Save the Whales</h4>
										<p class="item-price"><strike>$30.00</strike> <span>$25.00</span></p>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<a href="#" class="btn btn-primary" id='whaleT' name='whaleT'>Add to Cart</a>
										<!-- <input id='whaleT' name='whaleT' type='submit' name='submit' class="btn btn-primary" value="Add to Cart"> -->

									</div>						
								</div>
							</div>	
							<div class="col-sm-3">
								<div class="thumb-wrapper">
									<div class="img-box">
										<img src="donutsT.jpg" class="img-responsive img-fluid" alt="">
									</div>
									<div class="thumb-content">
										<h4>Donuts</h4>
										<p class="item-price"><strike>$30.00</strike> <span>$20.00</span></p>
										<div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<a href="#" class="btn btn-primary" id='donutsT' name='donutsT'>Add to Cart</a>
										<!-- <input id='donutsT' name='donutsT' type='submit' name='submit' class="btn btn-primary" value="Add to Cart"> -->

									</div>						
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Carousel controls -->
				<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
			</div>
		</div>
	</div>
</form>


<?php include 'addProduct.php'; ?>
</body>
<!-- <script src='browse.js'></script> -->
</html>                                		                            