<?php  session_start();
require_once 'inc/menu.php';

?><!DOCTYPE html>
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
	<title><?php echo  $lang["about"];?></title>

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
						About Us
					</h1>
					<p class="link-nav">
						<span class="box">
							<a href="index.php"><?php echo  $lang["home"];?> </a>
							<a href="about.php"><?php echo  $lang["about"];?></a></p>
					</span>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start About Area -->
	<?php include'ab1.php'; ?>
	<!-- End Job Historyt Area Area -->

	<!-- Start Testimonials Area -->
	<section class="testimonials_area section-gap">
		<div class="container">
			<div class="testi_slider owl-carousel">
				<div class="item">
					<div class="testi_item">
						<img src="img/quote.png" alt="">
						<h4>Fanny Spencer</h4>
						<ul class="list">
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
						</ul>
						<div class="wow fadeIn" data-wow-duration="1s">
							<p>
								As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel
								across her face <br> and She is the host to your journey.
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="testi_item">
						<img src="img/quote.png" alt="">
						<h4>Fanny Spencer</h4>
						<ul class="list">
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
						</ul>
						<div class="wow fadeIn" data-wow-duration="1s">
							<p>
								As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel
								across her face <br> and She is the host to your journey.
							</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="testi_item">
						<img src="img/quote.png" alt="">
						<h4>Fanny Spencer</h4>
						<ul class="list">
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
						</ul>
						<div class="wow fadeIn" data-wow-duration="1s">
							<p>
								As conscious traveling Paup ers we must always be oncerned about our dear Mother Earth. If you think about it, you travel
								across her face <br> and She is the host to your journey.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	  <?php   require_once'funksiya.php';
					                  require_once'ayarp.php';
					                  //require_once'ab1.php';
                                     //echo(URL);
                                   if($_POST){
  	$c_name=p("c_name");
  	$c_mes=p("c_mes");
  	//$c_tarix=p("c_tarix");
  	$c_link=sef_link($c_name);
     if(!$c_name){
     	echo '<h4 class="alert_error">adi daxil etmelisiniz</h4>';
     } else
     {
        $varmi="SELECT * FROM coment WHERE c_link='$c_link' ";
        $result = mysqli_query($baglan2, $varmi) or die("Ошибка " . mysqli_error($baglan2)); 
if($result)
{
    $rows = mysqli_num_rows($result); 
    $ayar=mysqli_fetch_array($result);
     
    echo "</table>";
     
    
}
        if(mysqli_num_rows($result)){
        	echo '<h4 class="alert_error"> <strong>'.ss($c_name).' </strong> bu ad movcuddur bashqasini daxil edin</h4>';
        }
        else{
        	$insert="INSERT INTO coment  SET 
        	c_name='$c_name',
        	c_mes='$c_mes',
        	c_link='$c_link'
        	


        	";
        	$result2 = mysqli_query($baglan2, $insert) or die("Ошибка " . mysqli_error($baglan2));
        	if($result2)
{
    // $rows= mysqli_num_rows($result2); 
    // $ayar=mysqli_fetch_array($result2);
     
    echo "</table>";
     
    
}
     if($result2){
     	echo "<h4> kategori bashariyla eklendi yonlediriliyorsunuz</h4>";
     	go("portfolio/blog-single.php",1);

     } else{ echo '<h4>mysqlhatasi:'.mysqli_error().'</h4>';}
        }

     }

  }
                                    
					           ?>
					           <?php
		$query="SELECT * FROM coment";
        $result = mysqli_query($baglan2, $query) or die("Ошибка " . mysqli_error($baglan2)); 
if($result)
{
    $rows = mysqli_num_rows($result); 
    $ayar=mysqli_fetch_array($result);
     
    echo "</table>";
     
    
} if( $rows>0){
		  ?>
		
				<?php
                   while ($ayar=mysqli_fetch_array($result)) {
                   	# code...
                   
				?>
				
					
					<div> <img style="width: 40px;height: 40px;" src="img\images.png"><?php echo ss($ayar[1]);?></div> <div >
					<div style=" float:left;width: 80%;"><?php echo ss($ayar[3]);?></div>
					<div style=" float:right;width: 20%">
						<?php echo ss($ayar[2]);?>
					</div></div>
				
			<?php } ?>
			
	</div>
<?php }else{

  ?>
  <h4 class="alert_warning"> siteye kategori eklenmemish</h4>
<?php } 

?>
<form method="post">
		<header><h3>Leave coment</h3></header>
		<div >
			<fieldset>
				<label>Name</label>
				<input type="text" name="c_name"> 
			</fieldset>
			
			<fieldset>
				<label> Message</label>
			<textarea rows="3"  text="text" name="c_mes" > 
			 	</textarea>
			 </fieldset>
			 			

		</div>
		<br>
		<br>

		<div class="submit_link">
			<input type="submit" value="post coment" >
			                     
			
		</div>
		
	</form>

					
	<!-- End Testimonials Area -->

	<!-- Start Contact Area -->
	<?php include'cme.php'; 
	include'fme.php'; 
	session_write_close();

	?>

	
</body>

</html>