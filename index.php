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
if(isset($_POST['username'])&&isset($_POST['password'])){
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * from `adminlogin` where username = '$username' and password = '$password'";
$result = mysqli_query($connection,$query);
if(mysqli_fetch_array($result)){
 session_start();
 $_SESSION['admin'] = 'true';
 header('location:admin_details.php');
}
else {
    $msg = "Login Failed...!!!";
  echo '<script type="text/javascript">alert("INFO:  ' . $msg . '");</script>';
}
  }
 ?>



<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from fcidepotonline.gov.in/loginpage by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Mar 2018 04:08:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" /><!-- /Added by HTTrack -->
<head>
      <meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=Edge" /><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <title>FCI Depot Online System - Login</title>
      <meta http-equiv="cache-control" content="max-age=0" /><meta http-equiv="cache-control" content="no-cache" /><meta http-equiv="expires" content="0" /><meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" /><meta http-equiv="pragma" content="no-cache" />


<link rel="stylesheet" href="css/sweetalert2.css">

<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/sweetalert2.min.js"></script>
<script src="js/pop-up.js"></script>
<input type="hidden" id="isFirstTime" value="true">
<script>
	$( document ).ready(function() {
		var title = "null"
		var msg = "null"
		var url = "null"
		var isPopUpTrue = "null"
		var url1 = "null"
		var qrcodeUrl = "loginpage.html"
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

      <link href="css/latestFonts3860.css?v=1" rel="stylesheet"><link href="css/bootstrap-3.3.2.min.css" rel="stylesheet"><link href="css/slider-new30f4.css?v=3" rel="stylesheet"><link href="css/newLogin8e0e.css?v=8" rel="stylesheet"><link href="css/font-awesome.css" rel="stylesheet"><link href="css/nav5e1f.css?v=2" rel="stylesheet" type="text/css" /><link href="css/about30f4.css?v=3" rel="stylesheet" />
   </head>
   <body id='myBody' onLoad="window.scroll(0, 0)">
      <div id='wrapper' style="margin-top: -10px; margin-left: -3px;">
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
         <div class='row' id='Landing-screen'>
			 <div class="col-sm-12 col-md-12" id='headerRow'>
			   <div class='row hidden-xs hidden-sm' id="forWeb">
                  <div class="col-sm-2 col-md-2">
                     <img src="images/NewLogin/depot-online-logo3.png" class='headerLogos pull-left' style='padding-left:10px;'>
                  </div>
                  <div class="col-sm-8 col-md-8">
                     <div class='row'>
                        <div class="col-sm-5 col-md-5">
                           <span class='myFontFamily headerFont pull-right'>DEPOT</span>
                        </div>
                        <div class="col-sm-2 col-md-2">
                           <img src="images/NewLogin/fci-50years-logo.png" class='headerLogos'>
                        </div>
                        <div class="col-sm-5 col-md-5">
                           <span class='myFontFamily headerFont pull-left'>ONLINE</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-2 col-md-2">
                     <img src="images/NewLogin/Digital_India_White.png" class='headerLogos pull-right'>
                  </div>
               </div>
               <div class='row hidden-md hidden-lg' id = "forMob">
                  <div class="col-sm-12">
                     <div class='row'>
                         <div class="col-sm-12  hidden-sm">
                          <center> <span class='myFontFamily headerFont'>DEPOT ONLINE</span></center>
                        </div>

                        <div class="col-sm-12 hidden-xs">
                          <center> <span class='myFontFamily headerFont'>DEPOT
                          	<img src="images/NewLogin/fci-50years-logo.png" class='headerLogos'> ONLINE</span></center>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
            <div class="col-sm-12 col-md-12" id='Landing-screen-info'>
               <div class='row'>
                  <div class=" col-sm-6 col-md-5 hidden-xs hidden-sm" >
                     <img src="images/NewLogin/stats-3.png" class='screenDisplayImg img-resposive'>
                  </div>
                  <div class="col-xs-1 col-sm-1 hidden-md hidden-lg" >
				  </div>
                  <div class="col-md-4 hidden-sm hidden-xs  myFontFamily" id='description-Section'>
                     <div class="">Depot Online System is a solution for managing the end to end operations of FCI Depots. The Key Objective of the Depot Online System is to align with 'Digital India' vision for transformation of food distribution supply chain in India.</div>
                     <br/>
                     <div class="">Powered by VIT DepoSoft&trade;, it would facilitate process automation, standardization and efficiency of the management of food grain distribution and would enable real time monitoring of operations and timely data reporting.</div>
                  </div>

                  <div class="col-sm-7 hidden-md hidden-lg hidden-xs  myFontFamily" id='description-Section'>
                     <div class="">Depot Online System is a solution for managing the end to end operations of FCI Depots. The Key Objective of the Depot Online System is to align with 'Digital India' vision for transformation of food distribution supply chain in India.</div>
                     <br/>
                     <div class="">Powered by VIT DepoSoft&trade;, it would facilitate process automation, standardization and efficiency of the management of food grain distribution and would enable real time monitoring of operations and timely data reporting.</div>
                  </div>

                  <div class="col-xs-12 hidden-md hidden-lg hidden-sm myFontFamily" id='description-Section'>
                     <div class="">Depot Online System is a solution for managing the end to end operations of FCI Depots. The Key Objective of the Depot Online System is to align with 'Digital India' vision for transformation of food distribution supply chain in India.</div>
                     <br/>
                     <div class="">Powered by VIT DepoSoft&trade;, it would facilitate process automation, standardization and efficiency of the management of food grain distribution and would enable real time monitoring of operations and timely data reporting.</div>
                     <br/>
                  </div>

                  <div class="col-xs-10 col-sm-4 col-md-3 ">
                     <form method="post" >
                           <input type="text" class="form-control" id="login-username" placeholder="Username" style='border-radius:0px' name="username" required autofocus>
                           <input type="password" class="form-control" id="login-password" placeholder="Password" style='border-radius:0px' name="password" required>
                           <input type="submit" value="Login" ></input>

					</form>
                     <br/><br/>
                     <div class="panel panelPadClass" style='margin-right:50px;'>
                        <div class="panel-heading panel-default" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                           <h4 class="panel-title" style='color:#3657a3;' title='Click here to expand / collapse'>
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">Other Logins</a>
                              <span class="fa fa-plus" style='float:right;' data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne"></span>
                           </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                           <div class="panel-body mypanel-body">

							 <div class="form-group">
								<div class="input-group">
								  <span class="input-group-addon " id="basic-addon1"><i class="fa fa-user"></i></span>
								  <a href='millers/index.php' class="form-control btn btn-primary otherlogins myFontFamily" aria-describedby="basic-addon1">Miller Login</a>
								</div>
								 <div class="input-group">
								  <span class="input-group-addon " id="basic-addon1"><i class="fa fa-user"></i></span>
								  <a href='mandi/index.php' class="form-control btn btn-primary otherlogins myFontFamily" aria-describedby="basic-addon1">Mandi Login</a>
								</div>
								 <div class="input-group">
								  <span class="input-group-addon " id="basic-addon1"><i class="fa fa-user"></i></span>
								  <a href='farmers/login.php' class="form-control btn btn-primary otherlogins myFontFamily" aria-describedby="basic-addon1">Farmer Login</a>
								</div>
								 <div class="input-group">
								  <span class="input-group-addon " id="basic-addon1"><i class="fa fa-user"></i></span>
								  <a href='agencies/login.html' class="form-control btn btn-primary otherlogins myFontFamily" aria-describedby="basic-addon1">Arhatiya Login</a>
								</div>
								 <div class="input-group">
								  <span class="input-group-addon " id="basic-addon1"><i class="fa fa-user"></i></span>
								  <a href='guest/login.html' class="form-control btn btn-primary otherlogins myFontFamily" aria-describedby="basic-addon1">Guest Login</a>
								</div>

                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class='container'>

            <div class="row row-offcanvas row-offcanvas-right mainContainer" id='highlights-container'>
               <fieldset class="scheduler-border">
               <legend align="center" class="scheduler-border">HIGHLIGHTS</legend>
               <div class="row">
                  <div class="col-xs-12 col-md-12">
                     <div id="first-slider">
                        <div id="highlights-carousel" class="carousel slide carousel-fade">
                           <ol class="carousel-indicators hidden-xs">
                              <li data-target="#highlights-carousel" data-slide-to="0" class="active"></li>
                              <li data-target="#highlights-carousel" data-slide-to="1"></li>
                              <li data-target="#highlights-carousel" data-slide-to="2"></li>
                              <li data-target="#highlights-carousel" data-slide-to="3"></li>
                              <li data-target="#highlights-carousel" data-slide-to="4"></li>
                              <li data-target="#highlights-carousel" data-slide-to="5"></li>
                              <li data-target="#highlights-carousel" data-slide-to="6"></li>
							 <li data-target="#highlights-carousel" data-slide-to="7"></li>
							 <li data-target="#highlights-carousel" data-slide-to="8"></li>
                            </ol>
                           <div class="carousel-inner" role="listbox">
                           	  <!-- DO NOT ADD ANY NEW CLASS AFTER THE EXISTING CLASS 'dashboard-1' - ADD IT BEFORE THAT -->
							  <div class="item active dashboard-1" style='background-color:#263c5e;'>
                                  <div class="row">
                                    <div class="carousel-container ">
										<div class="col-md-10 col-lg-10 col-sm-8 text-section">
                                          <h3><span class='slider-main-heading'>Responsive UI</span></h3>
											<h5 data-animation="animated bounceInUp" class='slider-explanation'>Responsive web design for consistent user experience across device platforms and form factors.
                                          </h5>
                                       </div>
                                     </div>
								 </div>
                              </div>
                              <!-- DO NOT ADD ANY NEW CLASS AFTER THE EXISTING CLASS 'stacks' - ADD IT BEFORE THAT -->
							  <div class="item stacks" style='background-color:#263c5e;' data-lazy-load-src="images/NewLogin/stacks.jpg">
                                  <div class="row">
                                    <div class="carousel-container ">
										<div class="col-md-10 col-lg-10 col-sm-8 text-section">
                                          <h3><span class='slider-main-heading'>Visibility</span></h3>
											<h5 data-animation="animated bounceInUp" class='slider-explanation'>Drill-down capability and visibility all the way up the Stacks where the actual commodity is stored to all echelons of the organization.
                                          </h5>
                                       </div>
                                     </div>
								 </div>
                              </div>
                              <!-- DO NOT ADD ANY NEW CLASS AFTER THE EXISTING CLASS 'stacks' - ADD IT BEFORE THAT -->
							<div class="item miller-consign" style='background-color:#263c5e;' data-lazy-load-src="images/NewLogin/consignment.jpg">
								<div class="row">
								<div class="carousel-container ">
									<div class="col-md-10 col-lg-10 col-sm-8 text-section">
									  <h3><span class='slider-main-heading'>Lite Web App for Miller</span></h3>
										<h5 data-animation="animated bounceInUp" class='slider-explanation'>Light weight pages that can be accessed from any Mobile with a Browser that are easy to operate by the Millers to schedule the dispatch of their consignments to FCI.
									  </h5>
								   </div>
								 </div>
								</div>
                             </div>
                             <!-- DO NOT ADD ANY NEW CLASS AFTER THE EXISTING CLASS 'reports' - ADD IT BEFORE THAT -->
							 <div class="item reports" style='background-color:#263c5e;' data-lazy-load-src="images/NewLogin/reports.jpg">
                                 	<div class="row">
                                    <div class="carousel-container ">
										<div class="col-md-10 col-lg-10 col-sm-8 text-section">
                                          <h3><span class='slider-main-heading'>Reports</span></h3>
											<h5 data-animation="animated bounceInUp" class='slider-explanation'>MIS Reports at different granularities and different perspectives always available at the finger-tips to Officers at different levels.
                                          </h5>
                                       </div>
                                     </div>
								 </div>
                              </div>
                              <!-- DO NOT ADD ANY NEW CLASS AFTER THE EXISTING CLASS 'farmer' - ADD IT BEFORE THAT -->
						   <div class="item farmer" style='background-color:#263c5e;' data-lazy-load-src="images/NewLogin/farmer.jpg">
								<div class="row">
								<div class="carousel-container ">
									<div class="col-md-10 col-lg-10 col-sm-8 text-section">
									  <h3><span class='slider-main-heading'>Lite Web App for Farmer</span></h3>
										<h5 data-animation="animated bounceInUp" class='slider-explanation'>Light weight and user friendly pages for the Farmers to schedule a Slot at the nearest Mandi for selling their produce directly to FCI at the Minimum Support Price..
									  </h5>
								   </div>
								 </div>
							 </div>
							</div>
							<!-- DO NOT ADD ANY NEW CLASS AFTER THE EXISTING CLASS 'dashboard-2' - ADD IT BEFORE THAT -->
							 <div class="item dashboard-2" style='background-color:#263c5e;' data-lazy-load-src="images/NewLogin/home.jpg">
                                 	<div class="row">
                                    <div class="carousel-container ">
										<div class="col-md-10 col-lg-10 col-sm-8 text-section">
                                          <h3><span class='slider-main-heading'>Dashboard</span></h3>
											<h5 data-animation="animated bounceInUp" class='slider-explanation'>Role based Dashboard that helps decision making with graphical presentation and drill-down capabilities.
                                          </h5>
                                       </div>
                                     </div>
								 </div>
                              </div>
                              <!-- DO NOT ADD ANY NEW CLASS AFTER THE EXISTING CLASS 'tablet-view' - ADD IT BEFORE THAT -->
							 <div class="item tablet-view" style='background-color:#263c5e;' data-lazy-load-src="images/NewLogin/tab.jpg">
                                 	<div class="row">
                                    <div class="carousel-container ">
										<div class="col-md-10 col-lg-10 col-sm-8 text-section">
                                          <h3><span class='slider-main-heading' style='color:#FFF;'>Tablet Apps</span></h3>
											<h5 data-animation="animated bounceInUp" class='slider-explanation' style='color:#FFF;'>Android Apps for Tablets with intuitive UI for effective capture of data at the point of occurrence.
                                          </h5>
                                       </div>
                                     </div>
								 </div>
                              </div>
                              <!-- DO NOT ADD ANY NEW CLASS AFTER THE EXISTING CLASS 'email-sms' - ADD IT BEFORE THAT -->
							 <div class="item email-sms" style='background-color:#263c5e;' data-lazy-load-src="images/NewLogin/sms.jpg">
                                 	<div class="row">
                                    <div class="carousel-container ">
										<div class="col-md-10 col-lg-10 col-sm-8 text-section">
                                          <h3><span class='slider-main-heading' style='color:#FFF;'>Alerts</span></h3>
											<h5 data-animation="animated bounceInUp" class='slider-explanation' style='color:#FFF;'>Email and SMS Alerts &amp; Notifications that allows all the stakeholders to stay updated about their operations.
                                          </h5>
                                       </div>
                                     </div>
								 </div>
                              </div>
                              <!-- DO NOT ADD ANY NEW CLASS AFTER THE EXISTING CLASS 'weighbridge1' - ADD IT BEFORE THAT -->
                              <div class="item weighbridge1" style='background-color:#263c5e;' data-lazy-load-src="images/NewLogin/weighbridge1.jpg">
                                 	<div class="row">
                                    <div class="carousel-container ">
										<div class="col-md-10 col-lg-10 col-sm-8 text-section">
                                          <h3><span class='slider-main-heading' style='color:#FFF;'>Weighbridge Integration</span></h3>
											<h5 data-animation="animated bounceInUp" class='slider-explanation' style='color:#FFF;'>Integrated with 1000 plus weighbridges across multiple brands for automatic capture of the truck weight directly into the system.
                                          </h5>
                                       </div>
                                     </div>
								 </div>
                              </div>
                            </div>
                           <!-- End Wrapper for slides-->
                           <a class="left carousel-control" href="#highlights-carousel" role="button" data-slide="prev">
                           <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
                           </a>
                           <a class="right carousel-control" href="#highlights-carousel" role="button" data-slide="next">
                           <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               </fieldset>
            </div>
		    <div class="row row-offcanvas row-offcanvas-right mainContainer">
               <fieldset class="scheduler-border">
               <legend align="center" class="scheduler-border">INSIGHT</legend>
               <div class="row">
                  <div class="youtubeSection">
                     <iframe data-src="https://www.youtube.com/embed/wfQ3KBCG4t8?rel=0" frameborder="0" allowfullscreen style='height:inherit; width:inherit;'></iframe>
                  </div>
               </div>
               </fieldset>
            </div>

            <div class="row row-offcanvas row-offcanvas-right mainContainer hidden-xs" id="description">
               <fieldset class="scheduler-border">
               <legend align="center" class="scheduler-border">More</legend>
               <div class="row">
                  <div class="col-sm-2 col-xs-6 col-md-2">
                     <a href="#" class="btn btn-danger btn-lg moreBtn box" role="button" data-target="#contactDetailsModel" data-toggle="modal"><span class="fa fa-phone" aria-hidden="true" style="font-size:25px"></span> <br/>Contact us</a>
                  </div>
                  <div class="col-sm-2 col-xs-6 col-md-2">
                     <a href='downloads/user_manuals.html' target='_blank' class="btn btn-warning btn-lg moreBtn box"><span class="fa fa-book" style="font-size:25px"></span> <br/>User Guide</a>
                  </div>
                  <div class="col-sm-2 col-xs-6 col-md-2">
                     <a href='https://www.youtube.com/channel/UCuFtbl6d3zQFfxIKzfyVMgQ' target='_blank' class="btn btn-success btn-lg moreBtn"><span class="fa fa-video-camera" style="font-size:25px"></span> <br/>Tutorials</a>
                  </div>
                  <div class="col-sm-2 col-xs-6 col-md-2">
                     <a href='http://fcihelpdesk.ricohitss.co.in:8080/' target='_blank' class="btn btn-info btn-lg moreBtn"><span class="fa fa-user" style="font-size:25px"></span> <br/>Help Desk</a>
                  </div>
                  <div class="col-sm-2 col-xs-6 col-md-2">
                     <a href='https://www.facebook.com/FoodCorporation/' target='_blank' class="btn btn-primary btn-lg moreBtn"><span class="fa fa-facebook-official" style="font-size:25px"></span><br/>Facebook</a>
                  </div>
                  <div class="col-sm-2 col-xs-6 col-md-2">
                     <a href='https://twitter.com/FCI_India' target='_blank' class="btn btn-lg btn-info moreBtn"><span class="fa fa-twitter" style="font-size:25px"></span><br/>Twitter</a>
                  </div>
               </div>
               </fieldset>
            </div>
         </div>


         <div class="modal fade" id="contactDetailsModel" role="dialog">
			    <div class="modal-dialog">
			      <div class="modal-content">
				        <div class="modal-header" style ="background: none repeat scroll 0% 0% #444 !important;color: #FFF;">
					          	<button type="button" class="close" data-dismiss="modal" style = "color: #FFF;">&times;</button>
					          <h4 class="modal-title" style = "font-size: 14px;padding: 0px;">Contact Details</h4>
				        </div>
				        <div class="modal-body">
       							<span>DGM (IT) : Sameer Verma, </span><span class="glyphicon glyphicon-earphone"> 43527485, </span>
       								 <span class="glyphicon glyphicon-envelope"> dgmit.fci@gov.in</span>
       								 <br />
       								 <br />
       							<span>AGM (IT) : Vivek Poddar, </span><span class="glyphicon glyphicon-earphone"> 43527669, </span>
       									 <span class="glyphicon glyphicon-envelope"> agm1it.fci@gov.in</span>
				        </div>
			      </div>
			    </div>
		 </div>
         <div id="footer" class='footer'>
            <div class='row' style="margin-right: 0; margin-top: 15px;">
               <div class="col-xs-12 col-sm-12 col-md-12">
                  <ul class="sub-sites">
                     <li class='usefullSites'>
                        <a title="Department of Food and Public Distribution, India" alt="DFPD" href="http://dfpd.nic.in/" target="_blank">
                        Department of Food and Public Distribution, India</a>
                        <!-- <img title="Department of Food and Public Distribution, India" alt="DFPD" src="dfpdslogo.png" ></a> -->
                     </li>
                     <li class='usefullSites'>
                        <a title="Food Corporation of India" alt="FCI" href="http://www.fci.gov.in/" target="_blank">
                        Food Corporation of India</a>
                        <!-- <img title="Food Corporation of India" alt="FCI" src="fci-logo.jpg"  style='height:50px; weight:50px;'></a> -->
                     </li>
                     <li class='usefullSites'>
                        <a title="Central Warehousing Corporation" alt="CWC" href="http://cewacor.nic.in/index.php" target="_blank">
                        Central Warehousing Corporation</a>
                        <!-- <img title="Central Warehousing Corporation" alt="CWC" src="imageedit__2063996512.png" style='height:50px; weight:50px;'></a> -->
                     </li>
                     <li class='usefullSites'><a title="RTI" alt="RTI" href="http://fci.gov.in/RTI.php" target="_blank">
                        RTI</a>
                     </li>
                     <li class='usefullSites'><a title="FAQ" alt="FAQ" href="http://fci.gov.in/information.php" target="_blank">
                        FAQ</a>
                     </li>
                  </ul>
                  <hr style='border-top: 1px solid #337ab7; margin-top: -7px; margin-bottom: -12px;'>
                  <h2 align='center' class='myFontFamily' style='color:#FFFFFF; font-size:12px'>This application is owned by Food Corporation of India. Developed and maintained by Vyshnavi Information Technologies (India) Pvt. Limited and System Integrators are Ricoh India and Mars India Private Limited.
                  </h2>
               </div>
            </div>
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

	   <script src="js/jquery-2.1.3.min3860.js?v=1"></script><script src="js/bootstrap-3.3.2.min.js"></script><script src="js/slider-new3860.js?v=1"></script><script src="js/crypto_rollups_aes-min3860.js?v=1"></script><script src="js/crypto_rollups_pbkdf2-min3860.js?v=1"></script><script src="js/jquery.lazyloadxt.extra-min3860.js?v=1"></script><script type="text/javascript" src="js/scrollUp.js"></script>
	 <script>
    	$(function() {
  			$('.captcha').addClass('hidden');
			var bls = null;
			$('#captcha').attr('required', false);
			$('#captcha').prop('required', false);
			if(typeof(bls) != 'undefined' && bls != '' && bls > 2){
				$('#captcha').attr('required', true);
				$('#captcha').prop('required', true);
				$('.captcha').removeClass('hidden');
			}

			var src = $("#scrollTopImg").attr("src");
    		$("#scrollTopImg").attr('src','/'+src);
    	});

      </script>
	<script type="text/javascript">
	 var iv = "";
	 var salt = "";
		function login(){
			var keySize = 128;
			var iterationCount = 4;
			var _serverSalt = "9tL5fgOQwxpBGdH0RAHoQMi34ESYjwa3aDknHJfQLPU3K-m7FHoB!-516551152!1520309240720";
			var password = $('#login-password').val();

			var iv = CryptoJS.lib.WordArray.random(16); var salt = CryptoJS.lib.WordArray.random(32);
			var aesUtil = new AesUtil(keySize, iterationCount);
			var encrypt = aesUtil.encrypt(salt.toString(CryptoJS.enc.Hex), iv.toString(CryptoJS.enc.Hex), _serverSalt, password);
 			$('#login-password').val(salt.toString(CryptoJS.enc.Hex)+ iv.toString(CryptoJS.enc.Hex) + encrypt.toString());
 			return true;
		}

		var AesUtil = function(keySize, iterationCount) {
			  this.keySize = keySize / 32;
			  this.iterationCount = iterationCount;
			};

			AesUtil.prototype.generateKey = function(salt, passPhrase) {
			  var key = CryptoJS.PBKDF2(
			      passPhrase,
			      CryptoJS.enc.Hex.parse(salt),
			      { keySize: this.keySize, iterations: this.iterationCount });
			  return key;
			}

			AesUtil.prototype.encrypt = function(salt, iv, passPhrase, plainText) {
			  var key = this.generateKey(salt, passPhrase);
			  var encrypted = CryptoJS.AES.encrypt(
			      plainText,
			      key,
			      { iv: CryptoJS.enc.Hex.parse(iv) });
			  return encrypted.ciphertext.toString(CryptoJS.enc.Base64);
			}
	</script>
      <script>
         (function( $ ) {

			 //Function to animate slider captions
			 function doAnimations( elems ) {
				 //Cache the animationend event in a variable
				 var animEndEv = 'webkitAnimationEnd animationend';

				 elems.each(function () {
					 var $this = $(this),
					 $animationType = $this.data('animation');
					 $this.addClass($animationType).one(animEndEv, function () {
					 $this.removeClass($animationType);
					 });
				 });
			 }

			 //Variables on page load
			 var $myCarousel = $('#highlights-carousel'),
			 $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

			 //Initialize carousel
			 $myCarousel.carousel();

			 //Animate captions in first slide on page load
			 doAnimations($firstAnimatingElems);

			 //Pause carousel
			 $myCarousel.carousel('pause');


			 //Other slides to be animated on carousel slide event
			 $myCarousel.on('slide.bs.carousel', function (e) {
				 var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
				 doAnimations($firstAnimatingElems);
			 });
			 $('#highlights-carousel').carousel({
				 interval:3000,
				 pause: "false"
			 });

         })(jQuery);

         $('#highlights-carousel').on('slide.bs.carousel', function (e) {
             var $nextImage = null;
             $activeItem = $('.active.item', this);
             if (e.direction == 'left'){
                 $nextImage = $activeItem.next('.item');
             } else {
     			if ($activeItem.index() == 0){
     				$nextImage = $('.weighbridge1');
                 } else {
                    $nextImage = $activeItem.prev('.item');
                 }
     	    }

             var targetString = e.relatedTarget.className;
             var classString = $nextImage.attr('class');
             if(typeof(classString) != "undefined" &&  classString.substring(classString.lastIndexOf(" ") + 1) != targetString.substring(targetString.lastIndexOf(" ") + 1)){
            	 $nextImage = $('.'+targetString.substring(targetString.lastIndexOf(" ") + 1));
             }

             // prevents the loaded image if it is already loaded
             var src = $nextImage.data('lazy-load-src');

             if (typeof src !== "undefined" && src != "") {
            	 $nextImage.closest('div').css('background-image', 'url(' + src + ')');
                 $nextImage.data('lazy-load-src', '');
             }
         });

         function reloadcaptcha(type){
        	 if(type == 'reset'){
        			var path = "/farmers/captcha?q="+ new Date().getTime();
            	 	$('#resetpwdcaptcha').attr('src', path);
        	 }else{
        			var path = "/farmers/captcha?q="+ new Date().getTime();
            	 	$('#pwdcaptchaImage').attr('src', path);
        	 }
         }
      </script>
   </body>

<!-- Mirrored from fcidepotonline.gov.in/loginpage by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Mar 2018 04:09:02 GMT -->
</html>
