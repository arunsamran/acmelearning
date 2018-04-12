<?php


//ADD default tab list
add_action('nd_learning_single_course_tab_list','nd_learning_single_course_add_default_tab_list');
function nd_learning_single_course_add_default_tab_list(){

	$nd_learning_default_tabs = '';


	$nd_learning_default_tabs .= '
	<li class="nd_learning_display_inline_block">
		<h4>
			<a class="nd_learning_outline_0 nd_learning_padding_20_15 nd_learning_display_inline_block nd_options_first_font nd_options_color_greydark" href="#nd_learning_single_course_description">
				'.__('Descriptions','nd-learning').'
			</a>
		</h4>
	</li>
	<li class="nd_learning_display_inline_block">
		<h4>
			<a class="nd_learning_outline_0 nd_learning_padding_20_15 nd_learning_display_inline_block nd_options_first_font nd_options_color_greydark" href="#nd_learning_single_course_teachers">
				'.__('Teachers','nd-learning').'
			</a>
		</h4>
	</li>
    ';

    echo $nd_learning_default_tabs;
}


//ADD default tab content
add_action('nd_learning_single_course_tab_list_content','nd_learning_single_course_add_default_tab_list_content');
function nd_learning_single_course_add_default_tab_list_content(){

	//get variables
	$nd_learning_content_course = do_shortcode(get_the_content());
	
	//teacher informations
	$nd_learning_meta_box_teachers = get_post_meta( get_the_ID(), 'nd_learning_meta_box_teachers', true );

	$nd_learning_meta_box_teacher_id = get_post_meta( get_the_ID(), 'nd_learning_meta_box_teacher', true );
    $nd_learning_teacher_name = get_the_title($nd_learning_meta_box_teacher_id);
    $nd_learning_teacher_permalink = get_permalink($nd_learning_meta_box_teacher_id);
    $nd_learning_teacher_excerpt = get_the_excerpt($nd_learning_meta_box_teacher_id);
    
    //image teacher
    $nd_learning_output_image_teacher = '';
	$nd_learning_teacher_image_id = get_post_thumbnail_id( $nd_learning_meta_box_teacher_id );
	$nd_learning_teacher_image_attributes = wp_get_attachment_image_src( $nd_learning_teacher_image_id, 'large' );
	if ( $nd_learning_teacher_image_attributes[0] == '' ) { $nd_learning_output_image = ''; }else{
	  $nd_learning_output_image_teacher .= '
	  <img alt="" class="nd_learning_width_50_all_iphone nd_learning_margin_right_20 nd_learning_border_radius_100_percentage " width="100" src="'.$nd_learning_teacher_image_attributes[0].'">';
	}
	
	//metabox teacher
	$nd_learning_meta_box_teacher_color = get_post_meta( $nd_learning_meta_box_teacher_id, 'nd_learning_meta_box_teacher_color', true );
	if ( $nd_learning_meta_box_teacher_color == '' ) { $nd_learning_meta_box_teacher_color = '#000'; }
	$nd_learning_meta_box_teacher_role = get_post_meta( $nd_learning_meta_box_teacher_id, 'nd_learning_meta_box_teacher_role', true );
	if ( $nd_learning_meta_box_teacher_role == '' ) { $nd_learning_meta_box_teacher_role = __('TEACHER','nd-learning'); }

	$nd_learning_default_tabs_content = '';


	$nd_learning_default_tabs_content .= '
	
		<div class="nd_learning_section" id="nd_learning_single_course_description">
			<div class="nd_learning_section nd_learning_height_40"></div>
			'.$nd_learning_content_course.'
			<div class="nd_learning_section nd_learning_height_40"></div>

			<div class="nd_learning_section nd_learning_single_course_tags_container">
				'.get_the_tag_list('<p class="nd_options_first_font nd_options_color_greydark">'.__('Tags','nd-learning').' : ','','</p>').'
			</div>
			';

			echo $nd_learning_default_tabs_content;
			
			//custom hook
  			do_action("nd_learning_single_course_end_default_tab"); 


		$nd_learning_default_tabs_content = '</div>
		<div class="nd_learning_section" id="nd_learning_single_course_teachers">
			<div class="nd_learning_section nd_learning_height_40"></div>


			<h3><strong>'.__('Our Main Teachers','nd-learning').'</strong></h3>
            <div class="nd_learning_section nd_learning_height_30"></div>

            <div class="nd_learning_section">';

            	
            	//START ALL TEACHERS
            	if ($nd_learning_meta_box_teacher_id == ''){
            		
            		$nd_learning_default_tabs_content .= __('Any teachers for this course','nd-learning');
            	
            	}else{

            		
            		//START MAIN TEACHER
            		$nd_learning_default_tabs_content .= '

		            	<!--START teacher-->
		                <div class="nd_learning_section nd_learning_border_top_1_solid_grey nd_learning_padding_40_20 nd_learning_box_sizing_border_box">


		                    <div class="nd_learning_display_table nd_learning_float_left">
		                                
		                        <div class="nd_learning_display_table_cell nd_learning_vertical_align_middle">
		                        	'.$nd_learning_output_image_teacher.'
		                        </div>

		                        <div class="nd_learning_display_table_cell nd_learning_vertical_align_middle">
		                            <h3 class=""><a class="nd_options_color_greydark nd_options_first_font" href="'.$nd_learning_teacher_permalink.'"><strong>'.$nd_learning_teacher_name.'</strong></a></h3>
		                            <div class="nd_learning_section nd_learning_height_5"></div>
		                            <h5 class="nd_options_color_grey">'.$nd_learning_meta_box_teacher_role.'</h5>
		                            <div class="nd_learning_section nd_learning_height_20"></div>
		                            <a style="background-color:'.$nd_learning_meta_box_teacher_color.';" class="site-button radius-xl m-r15 nd_learning_display_inline_block nd_learning_color_white_important nd_options_first_font nd_learning_padding_8 nd_learning_border_radius_3 nd_learning_font_size_13" href="'.$nd_learning_teacher_permalink.'">
		                            	'.__('VIEW PROFILE','nd-learning').'
		                            </a>
		                          

		                        </div>

		                    </div>
		            
		                    <div class="nd_learning_section nd_learning_height_20"></div>

		                    <p class="nd_learning_section">'.$nd_learning_teacher_excerpt.'</p>
		                    

		                </div>
		                <!--END teacher-->';
		                //END MAIN TEACHER



		                //START  OTHER TEACHERS
		                if ( $nd_learning_meta_box_teachers != '' ) {

		                	//explode the string
		            		$nd_learning_meta_box_teachers_array = explode(',', $nd_learning_meta_box_teachers);

		            		//start cicle for display all teachers
		            		for ($nd_learning_meta_box_teachers_array_i = 0; $nd_learning_meta_box_teachers_array_i < count($nd_learning_meta_box_teachers_array)-1; $nd_learning_meta_box_teachers_array_i++) {
							    
							    $nd_learning_page_by_path = get_page_by_path($nd_learning_meta_box_teachers_array[$nd_learning_meta_box_teachers_array_i],OBJECT,'teachers');
							    
							    //info teacher
							    $nd_learning_teacher_id = $nd_learning_page_by_path->ID;
							    $nd_learning_teacher_name = get_the_title($nd_learning_teacher_id);
							    $nd_learning_teacher_permalink = get_permalink($nd_learning_teacher_id);
							    $nd_learning_teacher_excerpt = get_the_excerpt($nd_learning_teacher_id);

							    //image teacher
							    $nd_learning_output_image_teacher = '';
								$nd_learning_teacher_image_id = get_post_thumbnail_id( $nd_learning_teacher_id );
								$nd_learning_teacher_image_attributes = wp_get_attachment_image_src( $nd_learning_teacher_image_id, 'large' );
								if ( $nd_learning_teacher_image_attributes[0] == '' ) { $nd_learning_output_image = ''; }else{
								  $nd_learning_output_image_teacher .= '
								  <img alt="" class="nd_learning_width_50_all_iphone nd_learning_margin_right_20 nd_learning_border_radius_100_percentage " width="100" src="'.$nd_learning_teacher_image_attributes[0].'">';
								}
								
								//metabox teacher
								$nd_learning_meta_box_teacher_color = get_post_meta( $nd_learning_teacher_id, 'nd_learning_meta_box_teacher_color', true );
								if ( $nd_learning_meta_box_teacher_color == '' ) { $nd_learning_meta_box_teacher_color = '#000'; }
								$nd_learning_meta_box_teacher_role = get_post_meta( $nd_learning_teacher_id, 'nd_learning_meta_box_teacher_role', true );
								if ( $nd_learning_meta_box_teacher_role == '' ) { $nd_learning_meta_box_teacher_role = __('TEACHER','nd-learning'); }


							    $nd_learning_default_tabs_content .= '

				            	<!--START teacher-->
				                <div class="nd_learning_section nd_learning_border_top_1_solid_grey nd_learning_padding_40_20 nd_learning_box_sizing_border_box">


				                    <div class="nd_learning_display_table nd_learning_float_left">
				                                
				                        <div class="nd_learning_display_table_cell nd_learning_vertical_align_middle">
				                        	'.$nd_learning_output_image_teacher.'
				                        </div>

				                        <div class="nd_learning_display_table_cell nd_learning_vertical_align_middle">
				                            <h3 class=""><a class="nd_options_color_greydark nd_options_first_font" href="'.$nd_learning_teacher_permalink.'"><strong>'.$nd_learning_teacher_name.'</strong></a></h3>
				                            <div class="nd_learning_section nd_learning_height_5"></div>
				                            <h5 class="nd_options_color_grey">'.$nd_learning_meta_box_teacher_role.'</h5>
				                            <div class="nd_learning_section nd_learning_height_20"></div>
				                            <a style="background-color:'.$nd_learning_meta_box_teacher_color.';" class="nd_learning_display_inline_block nd_learning_color_white_important nd_options_first_font nd_learning_padding_8 nd_learning_border_radius_3 nd_learning_font_size_13" href="'.$nd_learning_teacher_permalink.'">
				                            	'.__('VIEW PROFILE','nd-learning').'
				                            </a>
				                          

				                        </div>

				                    </div>
				            
				                    <div class="nd_learning_section nd_learning_height_20"></div>

				                    <p class="nd_learning_section">'.$nd_learning_teacher_excerpt.'</p>
				                    

				                </div>
				                <!--END teacher-->';

							}

		                }
		                //END OTHER TEACHERS

            	}
            	//END ALL TEACHERS
                


            $nd_learning_default_tabs_content .= '</div>

		</div>

    ';

    echo $nd_learning_default_tabs_content;
}

?>



<?php get_header( ); ?>




<?php 
	
$nd_learning_meta_box_course_header_img = get_post_meta( get_the_ID(), 'nd_learning_meta_box_course_header_img', true );
$nd_learning_meta_box_course_header_img_title = get_post_meta( get_the_ID(), 'nd_learning_meta_box_course_header_img_title', true );
$nd_learning_meta_box_course_header_img_position = get_post_meta( get_the_ID(), 'nd_learning_meta_box_course_header_img_position', true );

if ( $nd_learning_meta_box_course_header_img != '' ) { ?>	

    <div class="nd_learning_section nd_learning_background_size_cover <?php echo $nd_learning_meta_box_course_header_img_position; ?>" style="background-image:url(<?php echo $nd_learning_meta_box_course_header_img; ?>);">

        <div class="nd_learning_section nd_learning_bg_greydark_alpha_gradient_2">

            <!--start nd_learning_container-->
            <div class="nd_learning_container nd_learning_clearfix">

                <div class="nd_learning_section nd_learning_height_200"></div>

                <div class="nd_learning_width_50_percentage nd_learning_padding_15 nd_learning_box_sizing_border_box nd_learning_width_100_percentage_all_iphone nd_learning_float_left">

                    <strong class="nd_learning_color_white_important nd_learning_font_size_40 nd_options_first_font"><?php echo $nd_learning_meta_box_course_header_img_title; ?></strong>

                    <div class="nd_learning_section nd_learning_height_20"></div>

                    <div id="nd_learning_single_course_header_img_date_duration" class="nd_learning_display_table nd_learning_float_left nd_learning_display_none_all_iphone">
                        <img alt="" class="nd_learning_margin_right_10 nd_learning_display_table_cell nd_learning_vertical_align_middle" width="30" height="30" src="<?php echo plugins_url(); ?>/nd-learning/assets/img/icons/icon-calendar-white.svg">
                        <h3 class=" nd_learning_color_white_important nd_learning_display_table_cell nd_learning_vertical_align_middle"><?php echo nd_learning_get_course_date(); ?></h3>
                        <img alt="" class="nd_learning_margin_right_10 nd_learning_margin_left_20 nd_learning_display_table_cell nd_learning_vertical_align_middle" width="30" height="30" src="<?php echo plugins_url(); ?>/nd-learning/assets/img/icons/icon-clock-white.svg">
                        <h3 class="nd_learning_color_white_important nd_learning_display_table_cell nd_learning_vertical_align_middle "><?php echo nd_learning_get_course_duration(); ?></h3>
                    </div>
                    
                </div>


                <div class="nd_learning_width_50_percentage nd_learning_padding_15 nd_learning_box_sizing_border_box nd_learning_width_100_percentage_all_iphone nd_learning_display_none_all_iphone nd_learning_float_left nd_learning_text_align_right">

                    <div class="nd_learning_section nd_learning_height_40"></div>

                
                   <!-- <div id="nd_learning_single_course_header_img_price" class="nd_learning_display_table nd_learning_float_right">

                        <div class="nd_learning_display_table_cell nd_learning_vertical_align_bottom">
                            <h5 class="nd_learning_font_size_20 nd_learning_color_white_important"><?php //_e('per person','nd-learning'); ?> / </h5>
                        </div>
                                
                        <div class="nd_learning_display_table_cell nd_learning_vertical_align_top">
                            <h5 class="nd_learning_font_size_20 nd_learning_color_white_important nd_learning_margin_5"><?php //echo nd_learning_get_course_currency(); ?></h5>
                        </div>

                        <div class="nd_learning_display_table_cell nd_learning_vertical_align_bottom">
                            <h1 class=" nd_learning_color_white_important nd_learning_font_size_60 nd_learning_line_height_50">
                            	<?php 
                            		
                            		/*if( nd_learning_get_course_price(get_the_ID()) == 0 ){

		                                 _e('Free','nd-learning');

		                              }else{

		                                echo nd_learning_get_course_price(get_the_ID());

		                              }*/

                            	?>
                            </h1>
                        </div>

                    </div> -->


                </div>

                <div class="nd_learning_section nd_learning_height_5"></div>

            </div>
            <!--end container-->

        </div>

    </div>



    <?php do_action('nd_learning_end_header_img_single_course_hook'); ?>




<?php } ?>


<?php

if(have_posts()) :
	while(have_posts()) : the_post();

		//include tabs js
		wp_enqueue_script('jquery-ui-tabs');
		
		//declare variables
	    $nd_learning_terms_difficulty_course_results = '';
	    $nd_learning_terms_category_course_results = '';
	    $nd_learning_terms_location_course_results = '';
	    $nd_learning_terms_typology_course_results = '';
	    $nd_learning_terms_duration_course_results = '';

	    //recover datas from plugin settings
	    $nd_learning_currency = get_option('nd_learning_currency');

	    //default
	    $nd_learning_title_course = get_the_title();
		$nd_learning_title_excerpt = get_the_excerpt();

	    //metabox
	    $nd_learning_meta_box_price = get_post_meta( get_the_ID(), 'nd_learning_meta_box_price', true );
	    if ( $nd_learning_meta_box_price == 0 ) { 
	        $nd_learning_meta_box_price = 'Free';
	    } else { 
	        $nd_learning_meta_box_price = $nd_learning_meta_box_price.' '.$nd_learning_currency; 
	    }

	    $nd_learning_meta_box_max_availability = get_post_meta( get_the_ID(), 'nd_learning_meta_box_max_availability', true );
	    $nd_learning_meta_box_date = get_post_meta( get_the_ID(), 'nd_learning_meta_box_date', true );
	    $nd_learning_meta_box_color = get_post_meta( get_the_ID(), 'nd_learning_meta_box_color', true );
	    $nd_learning_meta_box_form = get_post_meta( get_the_ID(), 'nd_learning_meta_box_form', true );


	    //teacher informations
		$nd_learning_meta_box_teacher_id = get_post_meta( get_the_ID(), 'nd_learning_meta_box_teacher', true );
	    $nd_learning_teacher_name = get_the_title($nd_learning_meta_box_teacher_id);
	    $nd_learning_teacher_permalink = get_permalink($nd_learning_meta_box_teacher_id);
		$nd_learning_teacher_image_id = get_post_thumbnail_id( $nd_learning_meta_box_teacher_id );
		$nd_learning_teacher_image_attributes = wp_get_attachment_image_src( $nd_learning_teacher_image_id, 'large' );

	   
	    //taxonomies
	    $nd_learning_terms_difficulty_course = wp_get_post_terms( get_the_ID(), 'difficulty-level-course', array("fields" => "all"));
	    $nd_learning_terms_category_course = wp_get_post_terms( get_the_ID(), 'category-course', array("fields" => "all"));
	    $nd_learning_terms_location_course = wp_get_post_terms( get_the_ID(), 'location-course', array("fields" => "all"));
	    $nd_learning_terms_typology_course = wp_get_post_terms( get_the_ID(), 'typology-course', array("fields" => "all"));
	    $nd_learning_terms_duration_course = wp_get_post_terms( get_the_ID(), 'duration-course', array("fields" => "all"));

	    foreach($nd_learning_terms_difficulty_course as $nd_learning_term_difficulty_course) { $nd_learning_terms_difficulty_course_results .= $nd_learning_term_difficulty_course->name.' '; }
	    foreach($nd_learning_terms_category_course as $nd_learning_term_category_course) { $nd_learning_terms_category_course_results .= $nd_learning_term_category_course->name.' '; }
	    foreach($nd_learning_terms_location_course as $nd_learning_term_location_course) { $nd_learning_terms_location_course_results .= $nd_learning_term_location_course->name.' '; }
	    foreach($nd_learning_terms_typology_course as $nd_learning_term_typology_course) { $nd_learning_terms_typology_course_results .= $nd_learning_term_typology_course->name.' '; }
	    foreach($nd_learning_terms_duration_course as $nd_learning_term_duration_course) { $nd_learning_terms_duration_course_results .= $nd_learning_term_duration_course->name.' '; }
		
		//image
				    if ( has_post_thumbnail() ) {

					  $nd_learning_image_id = get_post_thumbnail_id( get_the_ID() );
					  $nd_learning_image_attributes = wp_get_attachment_image_src( $nd_learning_image_id, 'large' );
					  $nd_learning_image_src = $nd_learning_image_attributes[0];
					}
					
					//get variables
				$nd_learning_content_course = do_shortcode(get_the_content());
				
				//teacher informations
				$nd_learning_meta_box_teachers = get_post_meta( get_the_ID(), 'nd_learning_meta_box_teachers', true );

				$nd_learning_meta_box_teacher_id = get_post_meta( get_the_ID(), 'nd_learning_meta_box_teacher', true );
				$nd_learning_teacher_name = get_the_title($nd_learning_meta_box_teacher_id);
				$nd_learning_teacher_permalink = get_permalink($nd_learning_meta_box_teacher_id);
				$nd_learning_teacher_excerpt = get_the_excerpt($nd_learning_meta_box_teacher_id);
				
				//image teacher
				$nd_learning_output_image_teacher = '';
				$nd_learning_teacher_image_id = get_post_thumbnail_id( $nd_learning_meta_box_teacher_id );
				$nd_learning_teacher_image_attributes = wp_get_attachment_image_src( $nd_learning_teacher_image_id, 'large' );
				if ( $nd_learning_teacher_image_attributes[0] == '' ) { $nd_learning_output_image = ''; }else{
				  $nd_learning_output_image_teacher .= '
				  <img alt="" class="nd_learning_width_50_all_iphone nd_learning_margin_right_20 nd_learning_border_radius_100_percentage " width="100" src="'.$nd_learning_teacher_image_attributes[0].'">';
				}
				
				//metabox teacher
				$nd_learning_meta_box_teacher_color = get_post_meta( $nd_learning_meta_box_teacher_id, 'nd_learning_meta_box_teacher_color', true );
				if ( $nd_learning_meta_box_teacher_color == '' ) { $nd_learning_meta_box_teacher_color = '#000'; }
				$nd_learning_meta_box_teacher_role = get_post_meta( $nd_learning_meta_box_teacher_id, 'nd_learning_meta_box_teacher_role', true );
				if ( $nd_learning_meta_box_teacher_role == '' ) { $nd_learning_meta_box_teacher_role = __('TEACHER','nd-learning'); }

		?>

 <!-- contact area -->
        <div class="content-area acme-contentpad">
            <!-- Product details -->
            <div class="container woo-entry">
                <div class="row m-b30">
                    <div class="blog-post blog-md date-style-2">
                        <div class="col-md-4 col-sm-4 m-b30"><span class="image-outer"> <a href="#"><img src="<?php echo $nd_learning_image_src; ?>" alt=""></a></span> </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="rdx-post-title ">
                                <h3 class="post-title"><a href="#"><?php echo $nd_learning_title_course; ?></a></h3>
                            </div>
                            <div class="rdx-post-text">
                                <p class="m-b10"><?php echo $nd_learning_title_excerpt; ?></p>
                            </div>
                           
                           <div class="row">
                    <div class="col-md-12">
                        <div class="rdx-tabs border-top product-description bg-tabs">
                            <ul class="nav nav-tabs ">
                                <li class="active"><a data-toggle="tab" href="#web-design-1"><i class="fa fa-globe"></i> <span class="title-head">Description</span></a></li>
                                <li><a data-toggle="tab" href="#graphic-design-1"><i class="fa fa-photo"></i> <span class="title-head">Additional Information</span></a></li>
								<li><a data-toggle="tab" href="#developement-1"><i class="fa fa-cog"></i> <span class="title-head">Main Tutors</span></a></li>
                                <li><a data-toggle="tab" href="#developement-2"><i class="fa fa-cog"></i> <span class="title-head">Course Review</span></a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="web-design-1" class="tab-pane active">
                                    <?php echo $nd_learning_content_course; ?>
                                </div>
                                <div id="graphic-design-1" class="tab-pane">
                                     <table class="table table-bordered" >
                                <tr>
                                    <td><h3><img alt="" class="nd_learning_float_right" width="40" height="40" src="<?php echo plugins_url();?>/nd-learning/assets/img/icons/icon-price-grey.svg">Price</h3></td>
                                    <td><?php echo $nd_learning_meta_box_price; ?></td>
                                </tr>
                                <tr>
                                    <td><h3><img alt="" class="nd_learning_float_right" width="40" height="40" src="<?php echo plugins_url();?>/nd-learning/assets/img/icons/icon-availability-grey.svg">Availability</h3></td>
                                    <td><?php echo $nd_learning_meta_box_max_availability; ?></td>
                                </tr>
                                <tr>
                                    <td><h3><img alt="" class="nd_learning_float_right" width="40" height="40" src="<?php echo plugins_url();?>/nd-learning/assets/img/icons/icon-availability-grey.svg">Tutor</h3></td>
                                    <td><?php echo $nd_learning_teacher_name; ?><a href='<?php echo $nd_learning_teacher_permalink; ?>' target='_blank' > <button class="site-button yellow radius-xl  m-r15" type="button">View Profile</button></a></td>
                                </tr>
								<tr>
                                    <td><h3><img alt="" class="nd_learning_float_right" width="40" height="40" src="<?php echo plugins_url();?>/nd-learning/assets/img/icons/icon-typology-grey.svg">Category</h3></td>
                                    <td><?php echo $nd_learning_terms_category_course_results; ?> </td>
                                </tr>
								<tr>
                                    <td><h3><img alt="" class="nd_learning_float_right" width="40" height="40" src="<?php echo plugins_url();?>/nd-learning/assets/img/icons/icon-duration-grey.svg">Duration</h3></td>
                                    <td><?php echo $nd_learning_terms_duration_course_results ; ?></td>
                                </tr>
								<tr>
                                    <td><h3><img alt="" class="nd_learning_float_right" width="40" height="40" src="<?php echo plugins_url();?>/nd-learning/assets/img/icons/icon-print-grey.svg">Print</h3></td>
                                    <td><a class="nd_learning_cursor_pointer" onclick="window.print()">Click Here</a></td>
                                </tr>
							</table>
                                </div>
                                <div id="developement-1" class="tab-pane">
                                    <?php
										//START ALL TEACHERS
            	if ($nd_learning_meta_box_teacher_id == ''){
            		
            		$nd_learning_default_tabs_content .= __('Any teachers for this course','nd-learning');
            	
            	}else{

            		
            		//START MAIN TEACHER
            		$nd_learning_default_tabs_content .= '

		            	<!--START teacher-->
		                <div class="nd_learning_section nd_learning_border_top_1_solid_grey nd_learning_padding_40_20 nd_learning_box_sizing_border_box">


		                    <div class="nd_learning_display_table nd_learning_float_left">
		                                
		                        <div class="nd_learning_display_table_cell nd_learning_vertical_align_middle">
		                        	'.$nd_learning_output_image_teacher.'
		                        </div>

		                        <div class="nd_learning_display_table_cell nd_learning_vertical_align_middle">
		                            <h3 class=""><a class="nd_options_color_greydark nd_options_first_font" href="'.$nd_learning_teacher_permalink.'"><strong>'.$nd_learning_teacher_name.'</strong></a></h3>
		                            <div class="nd_learning_section nd_learning_height_5"></div>
		                            <h5 class="nd_options_color_grey">'.$nd_learning_meta_box_teacher_role.'</h5>
		                            <div class="nd_learning_section nd_learning_height_20"></div>
		                            <a style="background-color:'.$nd_learning_meta_box_teacher_color.';" class="site-button radius-xl m-r15 nd_learning_display_inline_block nd_learning_color_white_important nd_options_first_font nd_learning_padding_8 nd_learning_border_radius_3 nd_learning_font_size_13" href="'.$nd_learning_teacher_permalink.'">
		                            	'.__('VIEW PROFILE','nd-learning').'
		                            </a>
		                          

		                        </div>

		                    </div>
		            
		                    <div class="nd_learning_section nd_learning_height_20"></div>

		                    <p class="nd_learning_section">'.$nd_learning_teacher_excerpt.'</p>
		                    

		                </div>
		                <!--END teacher-->';
		                //END MAIN TEACHER



		                //START  OTHER TEACHERS
		                if ( $nd_learning_meta_box_teachers != '' ) {

		                	//explode the string
		            		$nd_learning_meta_box_teachers_array = explode(',', $nd_learning_meta_box_teachers);

		            		//start cicle for display all teachers
		            		for ($nd_learning_meta_box_teachers_array_i = 0; $nd_learning_meta_box_teachers_array_i < count($nd_learning_meta_box_teachers_array)-1; $nd_learning_meta_box_teachers_array_i++) {
							    
							    $nd_learning_page_by_path = get_page_by_path($nd_learning_meta_box_teachers_array[$nd_learning_meta_box_teachers_array_i],OBJECT,'teachers');
							    
							    //info teacher
							    $nd_learning_teacher_id = $nd_learning_page_by_path->ID;
							    $nd_learning_teacher_name = get_the_title($nd_learning_teacher_id);
							    $nd_learning_teacher_permalink = get_permalink($nd_learning_teacher_id);
							    $nd_learning_teacher_excerpt = get_the_excerpt($nd_learning_teacher_id);

							    //image teacher
							    $nd_learning_output_image_teacher = '';
								$nd_learning_teacher_image_id = get_post_thumbnail_id( $nd_learning_teacher_id );
								$nd_learning_teacher_image_attributes = wp_get_attachment_image_src( $nd_learning_teacher_image_id, 'large' );
								if ( $nd_learning_teacher_image_attributes[0] == '' ) { $nd_learning_output_image = ''; }else{
								  $nd_learning_output_image_teacher .= '
								  <img alt="" class="nd_learning_width_50_all_iphone nd_learning_margin_right_20 nd_learning_border_radius_100_percentage " width="100" src="'.$nd_learning_teacher_image_attributes[0].'">';
								}
								
								//metabox teacher
								$nd_learning_meta_box_teacher_color = get_post_meta( $nd_learning_teacher_id, 'nd_learning_meta_box_teacher_color', true );
								if ( $nd_learning_meta_box_teacher_color == '' ) { $nd_learning_meta_box_teacher_color = '#000'; }
								$nd_learning_meta_box_teacher_role = get_post_meta( $nd_learning_teacher_id, 'nd_learning_meta_box_teacher_role', true );
								if ( $nd_learning_meta_box_teacher_role == '' ) { $nd_learning_meta_box_teacher_role = __('TEACHER','nd-learning'); }


							    $nd_learning_default_tabs_content .= '

				            	<!--START teacher-->
				                <div class="nd_learning_section nd_learning_border_top_1_solid_grey nd_learning_padding_40_20 nd_learning_box_sizing_border_box">


				                    <div class="nd_learning_display_table nd_learning_float_left">
				                                
				                        <div class="nd_learning_display_table_cell nd_learning_vertical_align_middle">
				                        	'.$nd_learning_output_image_teacher.'
				                        </div>

				                        <div class="nd_learning_display_table_cell nd_learning_vertical_align_middle">
				                            <h3 class=""><a class="nd_options_color_greydark nd_options_first_font" href="'.$nd_learning_teacher_permalink.'"><strong>'.$nd_learning_teacher_name.'</strong></a></h3>
				                            <div class="nd_learning_section nd_learning_height_5"></div>
				                            <h5 class="nd_options_color_grey">'.$nd_learning_meta_box_teacher_role.'</h5>
				                            <div class="nd_learning_section nd_learning_height_20"></div>
				                            <a style="background-color:'.$nd_learning_meta_box_teacher_color.';" class="nd_learning_display_inline_block nd_learning_color_white_important nd_options_first_font nd_learning_padding_8 nd_learning_border_radius_3 nd_learning_font_size_13" href="'.$nd_learning_teacher_permalink.'">
				                            	'.__('VIEW PROFILE','nd-learning').'
				                            </a>
				                          

				                        </div>

				                    </div>
				            
				                    <div class="nd_learning_section nd_learning_height_20"></div>

				                    <p class="nd_learning_section">'.$nd_learning_teacher_excerpt.'</p>
				                    

				                </div>
				                <!--END teacher-->';

							}

		                }
		                //END OTHER TEACHERS

            	}
            	//END ALL TEACHERS
				echo $nd_learning_default_tabs_content;
									?>
                                </div>
								<div id="developement-2" class="tab-pane active">
                                    <div id="comments">
                                        <ol class="commentlist">
                                            <li class="comment">
                                                <div class="comment_container"> <img class="avatar avatar-60 photo" src="images/testimonials/pic1.jpg" alt="">
                                                    <div class="comment-text">
                                                        <div  class="star-rating">
                                                            <div data-rating='3'> <i class="fa fa-star" data-alt="1" title="regular"></i> <i class="fa fa-star" data-alt="2" title="regular"></i> <i class="fa fa-star-o" data-alt="3" title="regular"></i> <i class="fa fa-star-o" data-alt="4" title="regular"></i> <i class="fa fa-star-o" data-alt="5" title="regular"></i> </div>
                                                        </div>
                                                        <p class="meta"> <strong class="author">Cobus Bester</strong> <span><i class="fa fa-clock-o"></i> March 7, 2013</span> </p>
                                                        <div class="description">
                                                            <p>Really happy with this print. The colors are great, and the paper quality is very good.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="comment">
                                                <div class="comment_container"> <img class="avatar avatar-60 photo" src="images/testimonials/pic2.jpg" alt="">
                                                    <div class="comment-text">
                                                        <div  class="star-rating">
                                                            <div data-rating='3'> <i class="fa fa-star" data-alt="1" title="regular"></i> <i class="fa fa-star" data-alt="2" title="regular"></i> <i class="fa fa-star" data-alt="3" title="regular"></i> <i class="fa fa-star-o" data-alt="4" title="regular"></i> <i class="fa fa-star-o" data-alt="5" title="regular"></i> </div>
                                                        </div>
                                                        <p class="meta"> <strong class="author">Cobus Bester</strong> <span><i class="fa fa-clock-o"></i> March 7, 2013</span> </p>
                                                        <div class="description">
                                                            <p>Really happy with this print. The colors are great, and the paper quality is very good.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="comment">
                                                <div class="comment_container"> <img class="avatar avatar-60 photo" src="images/testimonials/pic3.jpg" alt="">
                                                    <div class="comment-text">
                                                        <div  class="star-rating">
                                                            <div data-rating='3'> <i class="fa fa-star" data-alt="1" title="regular"></i> <i class="fa fa-star" data-alt="2" title="regular"></i> <i class="fa fa-star" data-alt="3" title="regular"></i> <i class="fa fa-star" data-alt="4" title="regular"></i> <i class="fa fa-star-o" data-alt="5" title="regular"></i> </div>
                                                        </div>
                                                        <p class="meta"> <strong class="author">Cobus Bester</strong> <span><i class="fa fa-clock-o"></i> March 7, 2013</span> </p>
                                                        <div class="description">
                                                            <p>Really happy with this print. The colors are great, and the paper quality is very good.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                           
                           <!-- <form method="post" class="cart">
                                <div class="quantity btn-quantity pull-left m-r10">
                                    <input id="demo_vertical2" type="text" value="1" name="demo_vertical2"/>
                                </div>
                                <button class="btn btn-primary site-button pull-left"><i class="fa fa-cart-plus"></i> Add To Cart</button>
                            </form> -->
                        </div>
                    </div>
                </div>
				

                
            </div>
            <!-- Product details -->
        </div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->

<?php

endwhile;
endif;

?>


<?php

//close container
$nd_learning_container = get_option('nd_learning_container');
if ($nd_learning_container != 1) { echo '</div>'; }

?>


<?php

//custom hook
do_action("nd_learning_single_course_page_before_footer");


?>



<?php get_footer( );
















