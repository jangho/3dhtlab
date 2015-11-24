<?php


			echo '<section class="testimonial" id="product">';


				echo '<div class="container">';


					echo '<div class="section-header">';


						$zerif_testimonials_title = get_theme_mod('zerif_testimonials_title',__('Testimonials','zerif-lite'));
						
						if( !empty($zerif_testimonials_title) ):
					
							echo '<h2 class="white-text">'.__($zerif_testimonials_title,'zerif-lite').'</h2>';
							
						endif;	





					echo '</div>';


					echo '<div class="row" data-scrollreveal="enter right after 0s over 1s">';


						echo '<div class="col-md-12">';


							echo '<div id="client-feedbacks" class="owl-carousel owl-theme wp-caption-text ">';

									if(is_active_sidebar( 'sidebar-testimonials' )):


										dynamic_sidebar( 'sidebar-testimonials' );
									else:


										the_widget( 'zerif_testimonial_widget','text=<a class="white-text"><img src="http://htlab.dothome.co.kr/wp-content/themes/onepirate/images/line_short.png"><h1>3D Craftor</h1><br /> <br />주얼리, 치의계열, 소형 모형에 적합<br/>권장 XY해상도 : 30~70μm</br>출력물 최대높이 : 200mm</br>제품 사이즈 : 505*302*1150mm</br></a>');
										the_widget( 'zerif_testimonial_widget','text=<a class="white-text"><img src="http://htlab.dothome.co.kr/wp-content/themes/onepirate/images/line_short.png"><h1>3D Craftor Extended</h1><br /> <br />피규어, 대형 모형에 적합<br/>권장 XY해상도 : 50~100μm</br>출력물 최대높이 : 400mm</br>제품 사이즈 : 505*302*1350mm</br></a>');
						$zerif_testimonials_subtitle = get_theme_mod('zerif_testimonials_subtitle');
						if( !empty($zerif_testimonials_subtitle) ):


							echo '<h6 class="white-text">'.__($zerif_testimonials_subtitle,'zerif-lite').'</h6>';


						endif;
										the_widget( 'zerif_testimonial_widget','text=<a class="red-text">XY 해상도에 따른</a><br><a class="red-text">출력 면적 크기</a><br><a class="white-text right"> 30μm : 57.6mm x 32.4mm</a><br /><a class="white-text right">50μm : 96mm x 54mm<br /><a class="white-text right">70μm : 144mm x 81mm</br><a class="white-text right">100μm : 192mm x 108mm</a></a></a>');

										the_widget( 'zerif_testimonial_widget','text=<a class="red-text">Z축 해상도</a><br><a class="red-text">(적층 두께)</a><br><a class="white-text right">25μm(=0.025mm)</a><br /><a class="white-text right">50μm(=0.050mm)</a><br /><a class="white-text right">75μm(=0.075mm)</a></br><a class="white-text right">100μm(=0.100mm)</a>');
									endif;



							echo '</div>';


						echo '</div>';


					echo '</div>';


				echo '</div>';


			echo '</section>';


?>