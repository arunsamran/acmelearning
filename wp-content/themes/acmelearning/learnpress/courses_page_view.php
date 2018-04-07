<?php
/**
 * Courses Page View
 */

defined( 'ABSPATH' ) || exit;

$instance = $this->instance;
?>
<div class="isotope_container isotope row masonry-layout">
	<?php foreach ( $this->courses as $course ): ?>
        <div class="course-entry isotope-item col-md-4 col-sm-6 col-xs-12">
			<?php if ( ! empty( $instance['show_thumbnail'] ) ): ?>
                <div class="course-cover" style="background-image: url('<?php echo get_the_post_thumbnail_url( $course->id, 'rainbow_colleges-square' ); ?>');">
                </div>
			<?php endif; ?>
            <div class="course-detail">
                <div class="course-meta">
                    <div class="course-meta-title">
                        <h5 class="course-title">
                            <?php echo esc_html( $course->get_course_data()->post_title ); ?>
                        </h5>

                        <?php if ( ! empty( $instance['show_lesson'] ) ): ?>
                        <div class="course-lesson-number">
                            <?php
                            $lessons = sizeof( $course->get_lessons() );
                            echo intval( $lessons ) > 1 ? sprintf( esc_html__( '%d lessons', 'rainbow-colleges' ), $lessons ) : sprintf( esc_html__( '%d lesson', 'rainbow-colleges' ), $lessons );
                            ?>
                        </div>
                        <?php endif; ?>
                    </div>

	                <?php if ( ! empty( $instance['show_price'] ) ): ?>
                    <div class="course-price">
                        <?php
                        echo strtolower( $course->get_price_html() ) == "free" ? $course->get_price_html() : substr( $course->get_price_html(), 0, - 3 );
                        ?>
                    </div>
	                <?php endif; ?>
                </div>

				<?php if ( ! empty( $instance['desc_length'] ) && intval( $instance['desc_length'] ) > 0 ): ?>
                    <div class="course-description"><?php
						$content_length = intval( $instance['desc_length'] );
						$the_content    = $course->get_course_data()->post_content;
						$the_content    = wp_trim_words( $the_content, $content_length, esc_html__( '...', 'rainbow-colleges' ) );
						echo wp_kses_post( $the_content );
						?></div>
				<?php endif; ?>

				<?php if ( ! empty( $instance['show_teacher'] ) ): ?>
                    <div class="course-author">
						<?php echo wp_kses_post( $course->get_instructor_html() ); ?>
                    </div>
				<?php endif; ?>
                <div class="course-buttons">
                    <a class="theme_button color1" href="<?php echo get_the_permalink( $course->id ) ?>">

	                    <?php echo esc_html__('Learn More', 'rainbow-colleges'); ?>
                    </a>
                    <a class="theme_button color2" href="<?php echo get_the_permalink( $course->id ) ?>">

		                <?php echo esc_html__('Buy now', 'rainbow-colleges'); ?>
                    </a>
                </div>
            </div>
        </div>
	<?php endforeach; ?>
</div>
<div class="clearfix"></div>