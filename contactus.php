
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
      Contact Section
    ============================-->
    <section id="contact" >
      <div class="container-fluid">

      <div class="col-md-12 text-center">
            <h2 style="color: #7e0343;font-weight:700;font-size:2.5em;">Contact Us</h2>
    
          </div>
          <img src="img/contactus.png" alt="" class="img-fluid"style="display: block;margin-left: auto;margin-right: auto;">
        <div class="row wow fadeInUp">

          <div class="col-lg-5">
            <div class="map mb-4 mb-lg-0">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.0612361032795!2d72.96883401431907!3d19.192527553288027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b9b6783362e3%3A0xfc6420ccca68d195!2sMy+Salary+Dost+Fintech+Pvt.+Ltd.!5e0!3m2!1sen!2sin!4v1532433088701" style="border:5px solid white;width: 100%; height: 312px;" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="row">
              <div class="col-md-6 info">
                <i class="ion-ios-location-outline"></i>
                <p style=" font-size: 15px;line-height: 24px;margin-bottom: 10px;color:#2b015b;font-weight:700;">
              Thane,Maharashtra<br>
              India</p>
              </div>
              <div class="col-md-6 info">
                <i class="ion-ios-email-outline"></i>
                <p style=" font-size: 15px;line-height: 24px;margin-bottom: 10px;color:#2b015b;font-weight:700;">care@salarydost.com</p>
              </div>
            
            </div>

            <div class="form">        
              <form action="contactus.php" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="contactname" class="form-control" id="contactname" placeholder="Your Name" data-rule="minlen:4" required/>
                    
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="contactemail" id="contactemail" placeholder="Your Email" data-rule="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required/>
                    
                  </div>
                </div>
            
                <div class="form-group">
                  <textarea class="form-control" name="contactmessage" id="contactmessage" rows="5" data-rule="required"  placeholder="Message" required></textarea>
                 
                </div>
                  
                <div class="text-center">
                  <button type="submit" class="button" name="btncontactsubmit" id="btncontactsubmit">Send Message</button>  
               </div>
            </form>

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
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

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
   <script src="js/jquery.parallax-scroll.js"></script>
  <!-- Contact Form JavaScript File -->
<!--  <script src="contactform/contactform.js"></script>-->

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
<?php
require_once('include/config.php');
if (isset($_POST['btncontactsubmit'])) {

     $contactname= filter_var($_POST["contactname"], FILTER_SANITIZE_STRING);
  
    $contactemail= filter_var($_POST["contactemail"], FILTER_SANITIZE_EMAIL);

    $contactmessage   = filter_var($_POST["contactmessage"], FILTER_SANITIZE_STRING);

   if(empty($name)) {
		$empty[] = "<b>Name</b>";		
	}
	if(empty($email)) {
		$empty[] = "<b>Email</b>";
	}
	if(empty($message)) {
		$empty[] = "<b>Mobile Number</b>";
	}	
	
	if(!empty($empty)) {
		$output = json_encode(array('type'=>'error', 'text' => implode(", ",$empty) . ' Required!'));
        die($output);
	}
	
	if(!filter_var($contactemail, FILTER_VALIDATE_EMAIL)){ //email validation
	    $output = json_encode(array('type'=>'error', 'text' => '<b>'.$contactemail.'</b> is an invalid Email, please correct it.'));
		die($output);
	}
     $query = "Insert into contactus 
	(contactname,contactemail,contactmessage)
	values ('$contactname',$contactemail','$contactmessage')";
    if (mysqli_query($con, $query)) {
        echo "<script type=\"text/javascript\"> alert(\"Your message has been sent. Thank you!.\")</script>";
    } else
        {
        echo "<script type=\"text/javascript\"> alert(\"" . mysqli_error($con) . "\")</script>";
    }
      //sending email to customer care      
    $to = "sneha.patil.sdt@gmail.com";
    $mailHeaders = "From: " . $contactfname . "<" . $contactemail . ">\r\n";
    //$to = "snehahello20@gmail.com";
   // $from = $_POST['contactemail'];

   // $headers = "From: " . $from . "\r\n";
    //$subject = "New Customer Message";
   // $body = "New Customer message: " . $_POST['contactmessage'];
    mail($to, "New Customer Message", $contactmessage, $mailHeaders);
}      
?>
