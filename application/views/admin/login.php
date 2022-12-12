<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" type="text/css" href="fa/css/font-awesome.min.css" media="all" />
	
	<style>
	*{
	margin:0;
	padding:0;
	font-family: 'Roboto Condensed', sans-serif;
	}
	#maindiv{
	width:1000px;
	height:800px;
	margin:0px auto;
	}
	#header{
	height:100px;
	}
	#content{
	width:1000px;
	height:600px;
	}
	#footer{
	width:1000px;
	height:100px;
	background:blue;
	}
	#content ul{
	list-style:none;
	padding:50px;
	background:pink;
	margin:0 auto;
	width:500px;
	}
	#content li{
	margin:10px;
	}
	#content input[type="text"],#content input[type="password"]{
	width:250px;
	font-size:18px;
	font-weight:bold;
	padding:7px 10px;
	}
	#content input[type="submit"]{
	font-size:18px;
	font-weight:bold;
	padding:7px 10px;
	}
	</style>
</head>
<body>
	<div id="maindiv">
		<div id="header"></div>
		<div id="content">
                    <?php
						$attributes = array('class' => 'login-form', 'id' => 'loginForm');
						echo form_open('login/loginprocess', $attributes);
					?>
					<ul>
						<li><?php echo validation_errors(); ?></li>
						<li><p style="color:green;"><?php echo $this->session->flashdata('msg'); ?></p></li>
						<li><h1>Admin Login Form</h1></li>
						<li><input type="text" name="uname" placeholder="UserName" /></li>
						<li><input type="password" name="pwd" placeholder=" Password" /></li>
						<li><input type="submit" value="Log In" /></li>
						<li>
							<br>
							<a style="background:red;color:#fff;padding:7px 10px;font-size:20px; font-weight:bold;" href="<?php echo site_url('user') ?>"><strong>Go To Front End</strong></a>
						</li>
					</ul>
				</form>
		</div>
	</div>
</body>
</html>