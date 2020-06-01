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

  <!-- =======================================================
    Theme Name: NewBiz
    Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
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
      Investor Section
    ============================-->
    
<!--  --------------------------  Investor Form ------------------------------------------------------------------->
    <section id="docs">
    <div class="container">
      <div class="col-md-12 text-center" style="margin-bottom:40px;"  >
        <h2 style="color: #7e0343;font-weight:700;font-size:2em;">All Investors are Welcome.Be our Investor.</h2>
    </div>
<div class="row about-extra">
     <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
        <img src="img/aboutus.png " class="img-fluid" alt="">
     </div>
    <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
      <div class="form_w3layouts" style="border-radius:90px;background-color:#eeebf1;">
     
     <form id="invsform" action="investor.php" method="post" style="" class="agile_form">      
             <h5 class="title" style="color:#7e0343;font-weight:700;text-align:center;padding-top:10px;">PLEASE FILL YOUR DETAILS</h5>
     <div class="form-group" style="padding-left:20px;padding-right:20px;">
         <input type="text" name="investorname" class="form-control" id="investorname" required maxlength="60"  placeholder="Name" required/>
     </div>
	<div class="form-group" style="padding-left:20px;padding-right:20px;">
            <input  type="text" class="form-control" id="careeremob" placeholder="Mobile" name="careeremob" maxlength="10" onkeypress="return isNumberKey(event)" pattern="[7-9]{1}[0-9]{9}" required >   
	</div>
	<div class="form-group" style="padding-left:20px;padding-right:20px;">
            <input type="email" class="form-control" name="careeremail" maxlength="70" id="careeremail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Email" required />
        </div>
        <div class="form-group" style="padding-left:20px;padding-right:20px;">
            <input type="text" name="investorcompname" class="form-control" id="investorcompname" required maxlength="60"  placeholder="Company Name" required/>
        </div>
            <div class="submit-w3l text-center"style="padding-top:20px;padding-bottom: 10px;">
		<button type="submit" class="button" name="btncareersubmit" id="btncareersubmit">Submit</button>
	</div>
        </form>
    </div>
</div>
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
