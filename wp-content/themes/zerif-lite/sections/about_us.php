<section class="about-us" id="about">
	<div class="container">


		<!-- SECTION HEADER -->

		<div class="section-header">


			<!-- SECTION TITLE -->

			<?php 
			$zerif_aboutus_title = get_theme_mod('zerif_aboutus_title',__('About','zerif-lite'));
			
			if( !empty($zerif_aboutus_title) ):
				echo '<h2 class="white-text">'.__($zerif_aboutus_title,'zerif-lite').'</h2>';
			endif;

			?>

			<!-- SHORT DESCRIPTION ABOUT THE SECTION -->


			<?php


				$zerif_aboutus_subtitle = get_theme_mod('zerif_aboutus_subtitle',__('Use this section to showcase important details about your business.','zerif-lite'));


				if( !empty($zerif_aboutus_subtitle) ):


					echo '<h6 class="white-text">';


						echo __($zerif_aboutus_subtitle,'zerif-lite');


					echo '</h6>';


				endif;


			?>
		</div><!-- / END SECTION HEADER -->


<!-- 3 COLUMNS OF ABOUT US-->
<?php
				echo '<div class="container">';


					echo '<div class="row" data-scrollreveal="enter right after 0s over 1s">';


						echo '<div class="col-md-12">';


							echo '<div id="client-feedbacks" class="owl-carousel owl-theme">';

									if(is_active_sidebar( 'sidebar-testimonials' )):


										dynamic_sidebar( 'sidebar-testimonials' );
									else:

										the_widget( 'zerif_testimonial_widget','image_uri='.get_stylesheet_directory_uri().'/images/about.png');
					
										the_widget( 'zerif_testimonial_widget','text=<h1 class="red-text">3D Craftor</h1><img src="http://htlab.dothome.co.kr/wp-content/themes/onepirate/images/line_long.png"><br />Full HD DLP Printer (1920*1080)<br />Stand-alone Touch Screen System 구현<br />유/무선 네트워크를 통한 제어 및 모니터링 가능<br />쥬얼리 분야에 필요한 고해상도 왁스 레진 출력 용이<br /><img src="http://htlab.dothome.co.kr/wp-content/themes/onepirate/images/line_long.png">
<br />쥬얼리에 최적화된 3D Craftor
<br />대형 출력물에 최적화된 3D Craftor Extended<br /><br /><strong>출력 방식</strong> DLP <br/><strong>지원 파일</strong> STL<br/><strong>제품 무게</strong> 25kg<br/><strong>정격 전압</strong> 220V AC<br/><strong>사용 전력</strong> 320 W<br/><br/>

<a href="#product"><img src="http://htlab.dothome.co.kr/wp-content/themes/onepirate/images/morebox.png"></a>
');
									endif;



							echo '</div>';


						echo '</div>';


					echo '</div>';


				echo '</div>';

?>
<!-- / END 3 COLUMNS OF ABOUT US-->





	<!-- CLIENTS -->
	<?php
		if(is_active_sidebar( 'sidebar-aboutus' )):
			echo '<div class="our-clients">';
				echo '<h5><span class="section-footer-title">'.__('OUR HAPPY CLIENTS','zerif-lite').'</span></h5>';
			echo '</div>';

			echo '<div class="client-list">';
				echo '<div data-scrollreveal="enter right move 60px after 0.00s over 2.5s">';
				dynamic_sidebar( 'sidebar-aboutus' );
				echo '</div>';
			echo '</div> ';
		endif;
	?>


</div> <!-- / END CONTAINER -->


</section> <!-- END ABOUT US SECTION -->
