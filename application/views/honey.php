<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>skin/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>skin/css/main.css">
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>skin/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>skin/js/main.js"></script>
	
	<title></title>
</head>
<body>
<header class="container">
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>skin/images/lg.png"  width="20%;"  alt=""/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
		  <li class="nav-item">
			 <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
		  </li>
		  <li class="nav-item">
			<?php echo anchor('user/about', 'ABOUT', 'class="nav-link"');?>
		  </li>
		  <li class="nav-item">
			 <a class="nav-link" href="#">Packaging</a>
		  </li>
		  <li class="nav-item">
			 <a class="nav-link">Qualitiy</a>
		  </li>
		   <li class="nav-item">
			 <a class="nav-link">Certification</a>
		  </li>
		   <li class="nav-item">
			 <a class="nav-link">Contact Us</a>
		  </li>
    </ul>
  </div>
</nav>

</header>
	<div class="container  mt-2">
		<div class="row py-5">
			<div class="col-md-6">
				<h1 class="text-warning">Honey For Your Health</h1>
				<p class="text-justify  font-weight-bold">Honey, sweet, viscous liquid food, dark golden in colour, produced in the honey sacs of various bees from the nectar of flowers. Flavour and colour are determined by the flowers from which the nectar is gathered. Some of the most commercially desirable honeys are produced from clover by the domestic honeybee.</p>
				<a href="#" class="btn btn-warning">Click For Order-Now</a>
			</div>
			<div class="col-md-6">
				<div class="img-thumbnail p-4 m-3 bg-warning">
					<?php echo validation_errors(); ?>
					<?php echo form_open('user/orderprocess'); ?>
						<h2><?php echo $this->session->flashdata('msg');?></h2>
						<div class="form-group">
							<input type="text" class="form-control" name="unm" placeholder="Enter Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="mob" placeholder="Mobile Number">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="address" placeholder="Address">
						</div>
						<div class="form-group">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<label class="input-group-text" for="inputGroupSelect01">Honey Type</label>
								</div>
								<select class="custom-select" id="inputGroupSelect01" name="honeytype">
									<option value="Small Bees Honey">Small Bees Honey</option>
									<option value="Medium Bees Honey">Medium Bees Honey</option>
									<option value="Big Bees Honey">Big Bees Honey</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<label class="input-group-text" for="inputGroupSelect01">Amount Of Honey</label>
								</div>
								<select class="custom-select" id="inputGroupSelect01" name="qty">
									<option value="250Gm">250Gm</option>
									<option value="500Gm">500Gm</option>
									<option value="1Kg">1Kg</option>
									<option value="2Kg">2Kg</option>
									<option value="5Kg">5Kg</option>
								</select>
							</div>
						</div>
						<input type="submit" class="btn btn-primary" value="Order Now">
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="text-center">
			<div class="row mb-2">
				<div class="col-md-12">
					<h1 class="text-center">OUR HIVE</h1>
				</div>
			</div>
				<div class="row  mb-4">
					<div class="col-md-4">
						<div class="card  border-0" style="width: 18rem;">
							  <img src="<?php echo base_url(); ?>skin/images/bee.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
									<h5 class="text-warning">Card title</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							  </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card  border-0" style="width: 18rem;">
							  <img src="<?php echo base_url(); ?>skin/images/man.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
									<h5 class="text-warning">Card title</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							  </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card border-0" style="width: 18rem;">
							  <img src="<?php echo base_url(); ?>skin/images/men1.jpg" class="card-img-top" alt="...">
							  <div class="card-body">
									<h5 class="text-warning">Card title</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content</p>
							  </div>
						</div>
					</div>
				</div>
		</div>
	</div> 
		<div class="container mb-4">
			<div class="row">
				<div class="col-md-6">
					<h1 class="text-warning">Fresh Florida Orange health benefits</h1>
					<p>Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-4">
					<img src="<?php echo base_url(); ?>skin/images/honey.jpg" alt="" />
				</div>
			</div>
		</div>
		
</body>
</html>