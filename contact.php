<?require_once 'inc/menu.php';?>


<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Contact</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,900" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<!-- Start Header Area -->
	<?php
	include'h1.php';
	 ?>
	<!-- End Header Area -->

	<!-- start banner Area -->
	<section class="banner-area relative">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Contact Us
					</h1>
					<p class="link-nav">
						<span class="box">
							<a href="index.php">Home </a>
							<a href="contact.php">Contact</a>
						</span>
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
<?php
                     require_once"ayarp.php";
                     $query ="SELECT * FROM contact ";
 
                        $result = mysqli_query($baglan2, $query) or die("Ошибка " . mysqli_error($baglan2)); 
                  if($result)
                    {
                       $rows = mysqli_num_rows($result); 
                         $ayar=mysqli_fetch_array($result);
     
                        echo "</table>";
//                         for ($i = 0 ; $i < $rows ; ++$i)
// {
//      //$row = mysqli_fetch_row($result);
//      echo "<tr>";
//          for ($j = 0 ; $j < 7 ; ++$j) echo "<td> $ayar[$j]</td>";
//      echo "</tr>";
// }
                        mysqli_free_result($result);
                            }
//$row=row($query);



 



					?>
	<!-- Start contact-page Area -->
	<section class="contact-page-area section-gap-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 d-flex flex-column address-wrap">
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-home"></span>
						</div>
						<div class="contact-details">
							<h5><?php echo $ayar[6] ?></h5>
							<p>Hezi Aslanov
							</p>
						</div>
					</div>
					
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-phone-handset"></span>
						</div>
						<div class="contact-details">
							<h5><?php echo $ayar[1] ?></h5>
							<p>Mon to Fri 9am to 6 pm</p>
						</div>
					</div>
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-envelope"></span>
						</div>
						<div class="contact-details">
							<h5> <?php echo $ayar[2] ?>  </h5>
							<p>Send us your query anytime!</p>
						</div>
					</div>
				
				<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span style="width: 50px; height: 50px;" class="fa fa-instagram"></span>
						</div>
						<div class="contact-details">
							<h5> <a href="https://www.instagram.com/mrdlyva_/"><?php echo $ayar[3] ?></a></h5>
							<p>instagram</p>
						</div>
					</div>

					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span style="width: 50px; height: 50px;"  class="fa fa-linkedin"></span>
						</div> 
						
						<div class="contact-details">
							<h5> <a href="https://az.linkedin.com/in/dilbazi-merdeliyeva-7022a6172"><?php echo $ayar[4] ?></a></h5>
							<p>linkedin</p>
						</div>
				</div>	</div>
				<div class="col-lg-8">
					<form class="form-area " id="myForm" action="mail.php" method="post" class="contact-form text-right">
						<div class="row">
							<div class="col-lg-6 form-group form-group-top">
								<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
								 class="common-input mb-20 form-control" required="" type="text">

								<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

								<input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'"
								 class="common-input mb-20 form-control" required="" type="text">
							</div>
							<div class="col-lg-6 form-group">
								<textarea class="common-textarea form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"
								 required=""></textarea>
							</div>
							<div class="col-lg-12">
								<div class="alert-msg" style="text-align: left;"></div>

								<button class="primary-btn" style="float: right;" data-text="Send Message">
									<span>S</span>
									<span>e</span>
									<span>n</span>
									<span>d</span>
									<span> </span>
									<span>M</span>
									<span>e</span>
									<span>s</span>
									<span>s</span>
									<span>a</span>
									<span>g</span>
									<span>e</span>

								</button>
							</div>
						</div>
					</form>
				</div>

				<div class="col-lg-12">
					<div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
				</div>
			</div>
		</div>
	</section>
	<?php 
	 include'fme.php';  ?>

	<!-- ####################### Start Scroll to Top Area ####################### -->
	
	<!-- ####################### End Scroll to Top Area ####################### -->

</body>

</html>