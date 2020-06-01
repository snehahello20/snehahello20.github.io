<?php
session_start();

$_SESSION['POSITION'] = isset($_GET['p']) ? $_GET['p'] : $_SESSION['POSITION'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Salarydost - friend For fund</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Easy loan,easy salary,salary,fast money,low interest,instant loan,jaldi money,jaldi loan,short term loan,home loan,
        education loan,personal loan,business loan,flipkart,loan for salaried people,fatafat loan,low EMI,less EMI loan" name="keywords">
  <meta content="Short term loan for Salaried people." name="description">
<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
  <!-- Favicons -->
 <link href="img/favicon-16x16.png" type="image/png" sizes="16x16" rel="icon">
  <link href="img/favicon-32x32.png" type="image/png" sizes="32x32" rel="icon">

  <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

   <!--==========================
    Header
  ============================-->
   <?php
    include_once('include/header.php');
    ?>
    
     <!--==========================
    Header end
  ============================-->
    <!--==========================
      Career Section
    ============================-->
    
<!--  --------------------------  career Form ------------------------------------------------------------------->
    <section id="docs" id="shortterm" class="clearfix" style="background: url(./img/screen-bg.png) no-repeat;
	background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    background-attachment: fixed;
	background-position: center;">
        <div class="container">
           <div class="col-lg-12 col-sm-12 col-xs-10 col-md-10 ">
            <form id="careerapply" style="background-color:#eeebf1;" action="careerapply.php" method="post" class="agile_form" enctype="multipart/form-data">
             <h5 class="title" style="color:#7e0343;font-weight:700;text-align:center;padding-top:30px;">PLEASE FILL YOUR DETAILS</h5>
             <div class="form-group">
                <label name="careerpost" style="font-weight:700;font-size:15px;padding-left:20px;">Post Applied:</label>
                <label name="careersel" style="font-weight:700;font-size:15px;"><?= $_SESSION['POSITION'] ?></label>
            </div>
	    <div class="form-group" style="padding-left:20px;padding-right:30px;">
                <label for="Name"><b>Name *</b></label><br />
	    <input type="text" name="carrername" class="form-control" id="carrername" required maxlength="60"  required/>
            </div>
				
				<div class="form-group" style="padding-left:20px;padding-right:30px;">
                                    <label for="Mobile" ><b>Mobile *</b></label><br />
                                 <input  type="text" class="form-control" id="careeremailmob" name="careeremailmob" maxlength="10" onkeypress="return isNumberKey(event)" pattern="[7-9]{1}[0-9]{9}" required >   
				</div>
				<div class="form-group" style="padding-left:20px;padding-right:30px;">
                                    <label for="Email"><b>Email *</b></label><br />
				<input type="email" class="form-control" name="careeremail" maxlength="70" id="careeremail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required />

				</div>
                             
                               <div class="form-group" style="padding-left:20px;padding-right:30px;">
                                   <label for="Resume"><b>Your Resume*</b></label><br />
                                <textarea class="form-control" name="resume" id="resume" rows="15" data-rule="required"  placeholder="Paste your Resume" required></textarea>
                 
                                </div>
                                
				<div class="submit-w3l text-center"style="padding-top:20px;">
				<button type="submit" class="button" name="btncareersubmit" id="btncareersubmit">Submit</button>
				</div>
                            
			</form>
           </div>
        </div>
    </section>

  <!--==========================
    Footer
  ============================-->
   <?php
    include_once('include/footer.php');
    ?>
    
     <!--==========================
    Footer end
  ============================-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script><!--
-->  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
<!--  <script src="contactform/contactform.js"></script>-->

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
<script>

    //Number Validation
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        else
            return true;
    }

</script>
</body>
</html>
