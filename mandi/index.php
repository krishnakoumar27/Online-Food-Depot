<?php
$db_host = "localhost";
$db_name = "id5007680_fcisih";
$db_pass = "fcisih";
$connection = mysqli_connect($db_host,$db_name,$db_pass);
if(!$connection){
  echo ("Failed to connect");
}
$db_select = mysqli_select_db($connection,$db_name);
if(!$db_select){
  echo ("Failed to select");
}
if(isset($_POST['username'])){
$username = $_POST['username'];
//$password = $_POST['password'];
$query = "SELECT * from `mandilogin` where username = '$username'";
$result = mysqli_query($connection,$query);
if(mysqli_num_rows($result)){
  session_start();
  $_SESSION['mandi'] = 'true';
  header('location:details.php');
}
else {
  $msg = "Login Failed...!!!";
  echo '<script type="text/javascript">alert("INFO:  ' . $msg . '");</script>';
}
  }
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<!-- Mirrored from fcidepotonline.gov.in/mandi/login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Mar 2018 04:09:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" /><!-- /Added by HTTrack -->
<head>


<link rel="stylesheet" href="../css/sweetalert2.css">

<script src="../js/jquery-1.10.2.min.js"></script>
<script src="../js/sweetalert2.min.js"></script>
<script src="../js/pop-up.js"></script>
<input type="hidden" id="isFirstTime" value="true">
<script>
	$( document ).ready(function() {
		var title = "null"
		var msg = "null"
		var url = "null"
		var isPopUpTrue = "null"
		var url1 = "null"
		var qrcodeUrl = "index.html"
		var qrcodeUrl2 = "null"
		var btnText = "null"
		var btnText1 = "null"
		var error = "null"

		if($('#isFirstTime').val()== 'true'){
			$('#isFirstTime').val('false')
			if(btnText=="null"){
				btnText = "Print";
			}
			if(msg!="null" && title!="null")
				swal(title, msg, "success");
			if(msg=="null" && title!="null")
				swal(title," ", "success");
			if(msg!="null" && title =="null"){
				swal({
					  title: "",
					  type: "success",
					  html:	msg,
					});
			}
			if(error!="null" && title =="null"){
				swal("", error, "warning");
			}
			if(msg!="null" && title =="null" && url!="null"){
				swal({
					title: "",
					text: msg,
					type: "success",
					showCancelButton: true,
					cancelButtonText: 'Ok',
					confirmButtonColor: '#4c9ed9',
					confirmButtonText: btnText,
					closeOnConfirm: true

				},
				function(){
					//popcontact(url)
					//return;
					 if(isPopUpTrue == null || isPopUpTrue){
						popcontact(url)
					 }else{
							window.location = url;
							 setTimeout(function(){
									window.location = url.split("?")[0]
							}, 2000);
						}
				});

			}
			//target='_blank'
			if(title !="null" && url!="null" && url1!="null"){
				swal({
					  title: title,
					  type: "success",
					  html:
					  "<a href="+url1+" class='btn btn-success' target='_blank'><a><a style='margin-left: 50px!important;' href="+url+" target='_blank' class='btn btn-success'><a>",
					});
			}

			if(title !="null" && url=="null" && url1!="null"){
				swal({
					  title: title,
					  type: "success",
					  html:
					  "<a href="+url1+" class='btn btn-success' target='_blank'></a>",
					});
			}

			if(msg !="null" && qrcodeUrl2!="null"){
				swal({
					  type: "success",
					 /*  html:"<img src = "+qrcodeUrl+"> <br />"+ msg, */
					  html:msg,
					  showCancelButton: true,
					  cancelButtonText: 'Ok',
					  confirmButtonColor: '#4c9ed9',
					  confirmButtonText: btnText,
					  closeOnConfirm: true
					},
					function(){
						//popcontact(url)
						//return;
						 if(isPopUpTrue == null || isPopUpTrue){
							popcontact(qrcodeUrl2)
						 }else{
								window.location = qrcodeUrl2;
								 setTimeout(function(){
										window.location = qrcodeUrl2.split("?")[0]
								}, 2000);
							}
					});
			}

			if(error !="null" && title != "null"){
				swal({
					  title: title,
					  type: "error",
					  text:error,
					});
			}
		}
	});


</script>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<title>FCI Depot Online System - Login Page</title>
	<link href="../images/favicon.ico"
		rel="shortcut icon" type="image/x-icon" />
	<link href="../css/bootstrap.css"
		rel="stylesheet" type="text/css" />
	<link href="../css/site.css" rel="stylesheet"
		type="text/css" />
	<link href="../css/nav5e1f.css?v=2" rel="stylesheet"
		type="text/css" />
	<link href="../css/login.css"
		rel="stylesheet" type="text/css" />
	<link href="../css/about.css" rel="stylesheet"/>

	<style>
	/* html, body {
		height: 100%;
	} */

	#wrap {
		min-height: 100%;
		height: auto;
		/* Negative indent footer by its height */
		margin: 0 auto -60px;
		/* Pad bottom by footer height */
		padding: 0 0 60px;
	}

	label {
		margin-left: 0px !important;
	}
		#welcomeDiv {
			float:right;
			position:absolute;
			margin-top:0px;
			right:0;
			top:0;
			margin-right: 25px;
		}

		#RolesDiv {
			float: right;
			margin-top: -10px;
			position:relative;
			color: #027385;
		}

		#Logout	{
			margin-left: 50px;
			position:relative;
			margin-right: 10px;
		}

		a.fill-div {
		    display: block;
		    height: 100%;
		    width: 100%;
		    text-decoration: none;
		    z-index: 999999999 !important;
		}

		#footer p {
		color : #428BCA;
		}

		/* body{
		margin: -10px !important;
		} */
		.mob_Title{
			margin-top:-10px !important;
			background-size: 100% 75%  !important ;
			background-repeat: no-repeat   !important;
			height: 185px  !important;
		}

		.web_Title{
			margin-top:-10px !important;
			background-size: 100% 100%  !important ;
			background-repeat: no-repeat   !important;
			height: 260px  !important;
		}

	</style>
   	<script>
	$(function(){
		$("#aboutSpan").addClass('hidden');
		if($('#description').is(':visible')) {
			$('#title').removeClass("mob_Title");
			$('#title').addClass("web_Title").css('background', 'url("../images/BannerForTab2.jpg")scroll 0 0 #Fff');
		} else{
			$('#title').removeClass("web_Title");
			$('#title').addClass("mob_Title").css('background', 'url("../images/BannerForTab2.jpg")scroll 0 0 #Fff');
		}
	});

	}
	</script>
</head>
<body>
	<div id="wrap">
	    <div id="header">
	<div id="logo" class="hidden">
		<!--  <img src="images/DepoSoft2.png" height="100px" width="100px" style="margin-bottom: 7px"/> -->
	</div>
	<div id="title">
		<p class="site-title" align="center">
			<!--  FCI Depot Online System --></p>
			<div id="welcomeDiv">
				<a href="#about" ><span id="aboutSpan"><b>About</b></span></a>

			</div>
	</div>
</div>
		<div id="contentliquid">
			<div class="container">
				<h3>Sign into the Depot Online System with Mandi Id:</h3>

				<form action="" method="post">
							<label for="username" class="control-label">Mandi ID:</label>
							<input class="form-control" type="text"
								name="username" required></input>
					<br />
						<input type="submit"  value="SUBMIT"></input>
          </form>
			</div>
		</div>

		<div id="footer">
	<p class="borderline">
	</p>
	<center>
	<p>
		� 2017 Food Corporation of India, Govt. of India. All rights
		reserved. </br> 16-20, Barakhamba Lane, New-Delhi-110001, India , Phone:
		011-43527462
	</p>
	</center>
	<div class="row"
		style="margin-right: 2em; position: absolute; bottom: 0px; right: 0px; margin-bottom: 1em;">
		<a target="_blank" href="https://www.facebook.com/FoodCorporation/"
			class="btn-social social_width btn-outline fb"
			style="background: #3A5897;"> <i class="fa fa-fw"></i>
		</a> &nbsp; <a target="_blank" href="https://twitter.com/FCI_India"
			class="btn-social social_width btn-outline twiter"
			style="background: #3A5897;"> <i class="fa fa-fw"></i>
		</a>
	</div>
</div>
		<input type="hidden" id="dosversion" value="Version: 2.0.33.8782"/>

<div id="about" class="modalDialog">
	<div id="about_outer">
		<div class="row">
			<div class="about_heading">
				<div class="col-md-7 col-sm-7">
					<span style="font-size: 15px;">About FCI Depot Online System</span>
				</div>
				<div class="col-md-4 col-sm-4" >
				</div>
				<div class="col-md-1 col-sm-1">
					<a href="#cancel" title="Close" class="cancel glyphicon glyphicon-remove"></a>
				</div>
			</div>
		</div>
		<div class="row about_body">
			<div class="row" style="margin: 4px;">
				<div class="col-md-12 col-sm-9">
					<span  style=" top: 6px;position: relative;left: 3px;color: #808080; font-size: 13px;">
						Food Corporation of India (FCI) is a Government of India undertaking for execution of food policies of the Government and responsible for procurement, storage, movement and distribution of food grains through its large network of around 2000 depots spread across the entire country.
					</span>
				</div>
			</div>
			<div class="row" style="margin: 2px; margin-bottom: 10px;">
			<div class="col-md-12 col-sm-9" style="margin-top: 0px;">
				<span id="versionnum" class="versionnum"
					style="top: 5px; position: relative; left: 3px; color: #808080; font-size: 13px;">
					</span>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="aboutdos" class="modalDialog">
	<div id="about_outer">
		<div class="row">
			<div class="about_heading">
				<div class="col-md-7 col-sm-7">
					<span style="font-size: 15px;">About FCI Depot Online System</span>
				</div>
				<div class="col-md-4 col-sm-4" >
				</div>
				<div class="col-md-1 col-sm-1">
					<a href="#cancel" title="Close" class="cancelmodal cancel glyphicon glyphicon-remove"></a>
				</div>
			</div>
		</div>
		<div class="row about_body">
			<div class="row" style="margin: 2px;">
				<div class="col-md-12 col-sm-9">
					<span  style="top: 6px;position: relative;left: 3px;color: #808080; font-size: 13px;">
						Food Corporation of India (FCI) is a Government of India undertaking for execution of food policies of the Government and responsible for procurement, storage, movement and distribution of food grains through its large network of around 2000 depots spread across the entire country.
					</span>
				</div>
			</div>
			<div id="infosection" class="row" style="margin-top: 16px; margin-bottom: 16px;">

			</div>
			<div class="row" style="margin: 5px; margin-bottom: 10px;">
			<div class="col-md-12 col-sm-9" style="margin-top: -20px;">
				<span id="versionnum1" class="versionnum"
					style="top: 5px; position: relative; left: 3px; color: #808080; font-size: 13px;">
					</span>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var throttle = false;

	if(typeof(readCookie("_doslastlogin")) == 'undefined'){
		document.querySelector('#versionnum').addEventListener('click', function (evt) {
		    if (!throttle && evt.detail === 3) {
		    	$('#infosection').load("/getversioninfo");
		    	location.href = "#aboutdos";
		        throttle = true;
		        setTimeout(function () {
		            throttle = false;
		        }, 1000);
		    }
		});

		document.querySelector('#versionnum1').addEventListener('click', function (evt) {
		    if (!throttle && evt.detail === 3) {
		    	$('#infosection').load("/getversioninfo");
		    	location.href = "#aboutdos";
		        throttle = true;
		        setTimeout(function () {
		            throttle = false;
		        }, 1000);
		    }
		});

		if(location.hash == "#aboutdos"){
			$('#infosection').load("/getversioninfo");
		}
		$('.cancelmodal').on('click',function(){
			$('#infosection').html('');
		})
	}



	$('.versionnum').html($('#dosversion').val())
</script>

	</div>
</body>

<!-- Mirrored from fcidepotonline.gov.in/mandi/login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Mar 2018 04:09:11 GMT -->
</html>
