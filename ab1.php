<?require_once 'inc/menu.php';?>

<section class="about-area section-gap">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6 about-left">
					<img class="img-fluid" src="img/about-img3.jpg" alt="">
				</div>
				<div class="col-lg-5 col-md-12 about-right">
					<div class="section-title">
						<h2>about myself</h2>
					</div>
					<div class="mb-50 wow fadeIn" data-wow-duration=".8s">
						<p>
							I was born on February 21, 1998  in Qusar.I finished school here and entered Baku State University.Here I finished school and entered the Baku State University. Now I am studying at the 4th year of the Faculty of Applied Mathematics and Cybernetics
						</p>
						<p>-----------
						</p>
					</div>
					<a href="#" class="primary-btn white" data-text="More Info">
						<span>M</span>
						<span>o</span>
						<span>r</span>
						<span>e</span>
						<span> </span>
						<span>I</span>
						<span>n</span>
						<span>f</span>
						<span>o</span>
					</a>
					<a href="#" class="primary-btn" data-text="Resume">
						<span>R</span>
						<span>e</span>
						<span>s</span>
						<span>u</span>
						<span>m</span>
						<span>e</span>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Area -->
	<?php require_once'ayarp.php'; 
          require_once'funksiya.php';
          $query ="SELECT * FROM inf ";
 
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
                            define("URL", $ayar[13]);
//$row=row($query);
	?>

	<!-- Start Job History Area Area -->
	<section class="job-area offwhite section-gap-top section-gap-bottom-90">
		<div class="container">
			<div class="row d-flex">
				<div class="col-lg-12">
					<div class="section-title">
						<h2>Skills</h2>
						<p>_______________________________-</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6">
					<div class="single-job">
						<div class="top-sec d-flex justify-content-between">
							<div class="top-left">
								<h4>Language skills</h4>
								<p></p>
							</div>
							<div class="top-right">
								<a href="#" class="primary-btn" data-text="Jul '15 to Present">
									<span>J</span><span>u</span><span>l</span>
									<span>'</span><span>1</span><span>5</span>
									<span>t</span><span>o</span>
									<span>P</span><span>r</span><span>e</span><span>s</span><span>e</span><span>n</span><span>t</span>
								</a>
							</div>
						</div>
						<div class="bottom-sec wow fadeIn" data-wow-duration="2s">
							<?php  echo $ayar[6];    ?>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="single-job">
						<div class="top-sec d-flex justify-content-between">
							<div class="top-left">
								<h4><?php  echo $ayar[7];    ?></h4>
								<p></p>
							</div>
							<div class="top-right">
								<a href="#" class="primary-btn" data-text="Jul '15 to Present">
									<span>J</span><span>u</span><span>l</span>
									<span>'</span><span>1</span><span>5</span>
									<span>t</span><span>o</span>
									<span>P</span><span>r</span><span>e</span><span>s</span><span>e</span><span>n</span><span>t</span>
								</a>
							</div>
						</div>
						<div class="bottom-sec wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
							80 percent out of 100
							
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="single-job">
						<div class="top-sec d-flex justify-content-between">
							<div class="top-left">
								<h4><?php  echo $ayar[8];    ?></h4>
								<p></p>
							</div>
							<div class="top-right">
								<a href="#" class="primary-btn" data-text="Jul '15 to Present">
									<span>J</span><span>u</span><span>l</span>
									<span>'</span><span>1</span><span>5</span>
									<span>t</span><span>o</span>
									<span>P</span><span>r</span><span>e</span><span>s</span><span>e</span><span>n</span><span>t</span>
								</a>
							</div>
						</div>
						<div class="bottom-sec wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
							85 percent out of 100
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="single-job">
						<div class="top-sec d-flex justify-content-between">
							<div class="top-left">
								<h4><?php  echo $ayar[10];    ?></h4>
								<p></p>
							</div>
							<div class="top-right">
								<a href="#" class="primary-btn" data-text="Jul '15 to Present">
									<span>J</span><span>u</span><span>l</span>
									<span>'</span><span>1</span><span>5</span>
									<span>t</span><span>o</span>
									<span>P</span><span>r</span><span>e</span><span>s</span><span>e</span><span>n</span><span>t</span>
								</a>
							</div>
						</div>
						<div class="bottom-sec wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
							75 percent out of 100
						</div>
					</div>
				</div>
                <div class="col-lg-6">
					<div class="single-job">
						<div class="top-sec d-flex justify-content-between">
							<div class="top-left">
								<h4><?php  echo $ayar[11],"  "   ,$ayar[12];    ?></h4>
								<p></p>
							</div>
							<div class="top-right">
								<a href="#" class="primary-btn" data-text="Jul '15 to Present">
									<span>J</span><span>u</span><span>l</span>
									<span>'</span><span>1</span><span>5</span>
									<span>t</span><span>o</span>
									<span>P</span><span>r</span><span>e</span><span>s</span><span>e</span><span>n</span><span>t</span>
								</a>
							</div>
						</div>
						<div class="bottom-sec wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
							90 percent out of 100
						</div>
					</div>
				</div>


				<div class="col-lg-6">
					<div class="single-job">
						<div class="top-sec d-flex justify-content-between">
							<div class="top-left">
								<h4><?php  echo $ayar[9];    ?></h4>
								<p></p>
							</div>
							<div class="top-right">
								<a href="#" class="primary-btn" data-text="Jul '15 to Present">
									<span>J</span><span>u</span><span>l</span>
									<span>'</span><span>1</span><span>5</span>
									<span>t</span><span>o</span>
									<span>P</span><span>r</span><span>e</span><span>s</span><span>e</span><span>n</span><span>t</span>
								</a>
							</div>
						</div>
						<div class="bottom-sec wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
							 90 percent out of 100
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>