<!-- Start Contact Area -->
<?php require_once 'inc/menu.php';?>
	<section class="contact-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="contact-title">
						<h2>Contact Me</h2>
						<p></p>
					</div>
				</div>
			</div>
			<?php 
              require_once'ayarp.php';
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
			?>

			<div class="row mt-80">
				<div class="col-lg-4 col-md-4">
					<div class="contact-box">
						<h4><?php  echo $ayar[1];    ?></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="contact-box">
						<h4><?php  echo $ayar[2];    ?></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="contact-box">
						<h4><?php  echo $ayar[4];?></h4>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="#" class="primary-btn mt-50" data-text="Hire Me">
						<span>H</span>
						<span>i</span>
						<span>r</span>
						<span>e</span>
						<span> </span>
						<span>M</span>
						<span>e</span>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End Contact Area -->