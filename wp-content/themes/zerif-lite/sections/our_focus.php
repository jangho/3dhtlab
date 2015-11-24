<section class="focus" id="features">



<div class="container">





	<!-- SECTION HEADER -->



	<div class="section-header">







		<!-- SECTION TITLE -->


		<?php
		$zerif_ourfocus_title = get_theme_mod('zerif_ourfocus_title',__('FEATURES','zerif-lite'));
		
		if( !empty($zerif_ourfocus_title) ):
			echo '<h2 class="dark-text">'.__($zerif_ourfocus_title,'zerif-lite').'</h2>';
		endif;	
		?>




		<?php

		$zerif_ourfocus_subtitle = get_theme_mod('zerif_ourfocus_subtitle',__('What makes this single-page WordPress theme unique.','zerif-lite'));



		if( !empty($zerif_ourfocus_subtitle) ):



			echo '<h6>'.__($zerif_ourfocus_subtitle,'zerif-lite').'</h6>';



		endif;

		?>



	</div>





	<div class="row">



			<?php

			if ( is_active_sidebar( 'sidebar-ourfocus' ) ) :

				dynamic_sidebar( 'sidebar-ourfocus' );

			else:

				the_widget( 'zerif_ourfocus','title=VAT&text=저렴하고 수명이 긴 테플론 계열 이형제로 대체
유지비용 절감&link=#&image_uri='.get_stylesheet_directory_uri()."/images/icon_1-VAT.png", array('before_widget' => '', 'after_widget' => '') );

				the_widget( 'zerif_ourfocus','title=Light Source&text=전용 필터 사용으로 다양한 종류의 레진 출력 가능&link=#&image_uri='.get_stylesheet_directory_uri()."/images/icon_2-Light-Source.png", array('before_widget' => '', 'after_widget' => '') );

				the_widget( 'zerif_ourfocus','title=Embedded System&text=Touch Screen으로 PC 없이 출력 가능&link=#&image_uri='.get_stylesheet_directory_uri()."/images/icon_3-Embedded-System.png", array('before_widget' => '', 'after_widget' => '') );
				the_widget( 'zerif_ourfocus','title=Hardware&text=자동원점보정, Ball Screw와
LM Guide 사용으로 Z축 이송 정밀도 보장&link=#&image_uri='.get_stylesheet_directory_uri()."/images/icon_4-Hardware.png", array('before_widget' => '', 'after_widget' => '') );
				the_widget( 'zerif_ourfocus','title=Software&text=전용 소프트웨어 개발 및 무상 upgrade 제공&link=#&image_uri='.get_stylesheet_directory_uri()."/images/icon_5-Software.png", array('before_widget' => '', 'after_widget' => '') );

			endif;

			?>



	</div>



</div> <!-- / END CONTAINER -->



</section>  <!-- / END FOCUS SECTION -->