<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
	<style>
	*{
	margin:0;
	padding:0;
	font-family: 'Roboto Condensed', sans-serif;
	}
	#maindiv{
	width:1000px;
	min-height:800px;
	margin:0px auto;
	}
	#header{
	height:100px;
	}
	#content{
	width:1000px;
	min-height:600px;
	background:yellow;
	}
	#footer{
	width:1000px;
	height:100px;
	background:blue;
	}
	#logo{
	width:400px;
	height:100px;
	float:left;
	background:aqua;
	}
	#menu{
	width:600px;
	height:100px;
	float:left;
	background:pink;
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
	#nav{
	list-style:none;
	float:right;
	margin-top:30px;
	}
	#nav>li{
	float:left;
	margin-left:1px;
	position:relative;
	}
	#nav>li>a{
	text-decoration:none;
	color:#fff;
	background:#000;
	font-weight:bold;
	padding:7px 10px;
	transition:0.5s;
	}
	#nav>li>a:hover{
	background:green;
	border-bottom:4px solid red;
	}
	table {
    border-collapse: collapse;
    width: 100%;
	border:1px solid red;
	}

	th, td {
		text-align: left;
		padding: 8px;
	}

	tr:nth-child(even){background-color: #f2f2f2}

	th {
		background-color: #4CAF50;
		color: white;
	}
	table a{
		text-decoration:none;
		font-weight:bold;
		background:#fff;
		padding:4px 5px;
		border-radius:3px;
	}
	</style>
</head>
<body>
	<div id="maindiv">
		<div id="header">
			<div id="logo"><h1>Admin Area</h1></div>
			<div id="menu">
				<ul id="nav">
					<li><a href="#">Home</a></li>
					<li><a href="#">Career</a></li>
					<li><a href="<?php echo site_url('admin_area/logout')?>">Logout</a></li>
				</ul>
			</div>
		</div>
		<div id="content">
			<p style="color:green;"><?php echo $this->session->flashdata('msg'); ?></p>
			<?php 
			//print_r($data);
			//echo $data[0]['name']
			?>
			<?php echo $this->session->flashdata('errors') ?>
                    <?php
						$attributes = array('class' => 'edit-form', 'id' => 'editForm');
						echo form_open('admin_area/editprocess', $attributes);
					?>
            <table>
				<tr>
					<td>Name</td>
					<td>
						<input type="text" name="name" id="name" placeholder="Enter Name" value="<?php echo $data[0]['name'] ?>">
					</td>
				</tr>
				<input type="hidden" name="oid" value="<?php echo $data[0]['oid'] ?>" />
				<tr>
					<td>Mobile</td>
					<td>
						<input type="text" name="mob" id="mob" placeholder="Enter Mobile" value="<?php echo $data[0]['mobile'] ?>">
					</td>
				</tr>
				<tr>
					<td>Address</td>
					<td>
						<input type="text" name="address" id="address" placeholder="Enter address" value="<?php echo $data[0]['address'] ?>">
					</td>
				</tr>
				<tr>
					<td>Order Honey Type</td>
					<td>
						<select class="form-control" name="honeytype">
						<option <?php if($data[0]['honeyType'] == 'Small Bees Honey'){ echo ' selected="selected"'; } ?> value="Simple Thali">Small Bees Honey</option>
						<option <?php if($data[0]['honeyType'] == 'Medium Bees Honey'){ echo ' selected="selected"'; } ?> value="Delux Thali">Medium Bees Honey</option>
						<option <?php if($data[0]['honeyType'] == 'Big Bees Honey'){ echo ' selected="selected"'; } ?> value="Big Bees Honey">Big Bees Honey</option>
					  </select>
					</td>
				</tr>
				<tr>
					<td>Number of Thali</td>
					<td>
						<select class="form-control" name="qty">
						<option value="250Gm" <?php if($data[0]['qnty'] == '250Gm'){ echo ' selected="selected"'; } ?> >250Gm</option>
						<option value="500Gm" <?php if($data[0]['qnty'] == '500Gm'){ echo ' selected="selected"'; } ?>>500Gm</option>
						<option value="1Kg" <?php if($data[0]['qnty'] == '1Kg'){ echo ' selected="selected"'; } ?>>1Kg</option>
						<option value="2Kg" <?php if($data[0]['qnty'] == '2Kg'){ echo ' selected="selected"'; } ?>>2Kg</option>
						<option value="5Kg" <?php if($data[0]['qnty'] == '5Kg'){ echo ' selected="selected"'; } ?>>5Kg</option>
					  </select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Update" /></td>
				</tr>
            </table>
			</form>
		</div>
		<div id="footer"></div>
	</div>
	<script src="<?php echo base_url("skin/js/jquery.min.js"); ?>"></script>
</body>
</html>