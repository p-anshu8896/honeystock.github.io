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
	table a{
	background:#fff;
	padding:5px;
	margin:3px;
	font-weight:bold;
	float:left;
	display:block;
	box-shadow: 0px 14px 20px -9px rgba(0,0,0,0.75);
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
            <table>
            	<tr>
            		<th>#</th>
            		<th>Name</th>
            		<th>Mobile</th>
            		<th>Address</th>
            		<th>Thali</th>
            		<th>No.</th>
            		<th>date</th>
            		<th>status</th>
            		<th>action</th>
            	</tr>
				<?php foreach($data as $row): ?>
					  <tr>
						<td><?php echo $row['oid'] ?></td>
						<td><?php echo $row['name'] ?></td>
						<td><?php echo $row['mobile'] ?></td>
						<td><?php echo $row['address'] ?></td>
						<td><?php echo $row['honeyType'] ?></td>
						<td><?php echo $row['qnty'] ?></td>
						<td><?php echo $row['dt'] ?></td>
						<td><?php echo $row['status'] ?></td>
						<td>
						<?php if($row['status']=="complete"){ ?>
							Order Completed
						<?php }else{ ?>
							<a style="color:red;" onclick="return confirm('delete this order?');" href="<?php echo site_url('admin_area/deleteorder')."/".$row['oid']; ?>">Delete</a>
							<a style="color:black;" href="<?php echo site_url('admin_area/editorder')."/".$row['oid']; ?>">Update</a>
							<a onclick="return confirm('Are you sure order completed?');" href="<?php echo site_url('admin_area/changestatus')."/".$row['oid']; ?>" style="color:green;">Complete</a>
						<?php } ?>
						</td>
					  </tr>
				<?php endforeach; ?>
            </table>
		</div>
		<div id="footer"></div>
	</div>
	<script src="<?php echo base_url("skin/js/jquery.min.js"); ?>"></script>
</body>
</html>