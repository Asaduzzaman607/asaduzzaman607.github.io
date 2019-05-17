<?php
/**
 * CVitae functions
 *
 * @package CVitae
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function cvitae_get_section_title( $id ){
	$alt_title = get_post_meta( get_the_ID(), 'cvitae_alt_title', true );
	$title = ( $alt_title ) ? $alt_title :  get_the_title( $id );
	return $title;
}

function cvitae_get_section_id( $id ){
	$section_id = explode( '/', get_the_permalink( $id ) );
	array_pop( $section_id );
	$section_id = end($section_id);
	return $section_id;
}

function cvitae_render_intro(){

	if( ! is_page_template( 'page-templates/home.php' ) ) return;

	$intro_type = ot_get_option( 'cvitae_intro_type', 1 );

	if( $intro_type == 1 ) {

		$image       = ot_get_option( 'cvitae_intro_1_image', get_template_directory_uri() . '/assets/img/slider/1-image.jpg' );
		$name        = ot_get_option( 'cvitae_intro_1_name', esc_html__( 'Your name', 'cvitae' ) );
		$designation = ot_get_option( 'cvitae_intro_1_designation', esc_html__( 'Your profession', 'cvitae' ) ); ?>

		<div id="home" class="cvitae-section slider fullSlider">
			<div class="slider-overlay cvitae-typed-slider">
				<div class="image-left" style="background-image: url( <?php echo esc_url( $image ); ?> );"></div>
				<div class="slider-content">
					<p class="name"><?php echo wp_kses( str_replace( ' ', '<br>', $name), array( 'br' => array() ) ); ?></p>
					<p class="designation"><?php echo esc_html( $designation ); ?></p>
				</div>
			</div>
		</div>
		<!-- CVitae Slider -->

	<?php } elseif( $intro_type == 2 ) {

		$background  = ot_get_option( 'cvitae_intro_2_background', get_template_directory_uri() . '/assets/img/slider/2-background.jpg' );
		$name        = ot_get_option( 'cvitae_intro_2_name', esc_html__( 'Your Name', 'cvitae' ) );
		$professtion = ot_get_option( 'cvitae_intro_2_designation', esc_html__( 'Your professtion', 'cvitae' ) );
		$target_text = ot_get_option( 'cvitae_intro_2_target_text', esc_html__( 'More', 'cvitae' ) );
		$target_id   = ot_get_option( 'cvitae_intro_2_target' ); ?>

		<div id="home" class="cvitae-section slider fullSlider">
			<div class="slider-overlay cvitae-typed-slider" style="background-image: url( <?php echo esc_url( $background ); ?> );">
				<div class="cvitae-container">
					<div class="slider-content">
						<p class="name"><?php echo esc_html( $name ); ?></p>
						<p class="designation"><?php echo esc_html( $professtion ); ?></p>
						<a href="<?php echo esc_url( '#' . cvitae_get_section_id( $target_id ) ); ?>" class="goto-bio"><?php echo esc_html( $target_text ); ?></a>
						<div class="shape"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- CVitae Slider -->

	<?php } elseif( $intro_type == 3 ) {

		$background  = ot_get_option( 'cvitae_intro_3_background', get_template_directory_uri() . '/assets/img/slider/3-background.jpg' );
		$image       = ot_get_option( 'cvitae_intro_3_image', get_template_directory_uri() . '/assets/img/slider/3.jpg' );
		$name        = ot_get_option( 'cvitae_intro_3_name', esc_html__( 'Your Name', 'cvitae' ) );
		$professtion = ot_get_option( 'cvitae_intro_3_designation', esc_html__( 'Your professtion', 'cvitae' ) ); ?>

		<div id="home" class="cvitae-section slider sliderStyle3" style="background-image: url( <?php echo esc_url( $background ); ?> );">
			<div class="slider-content">
				<p class="name"><?php echo wp_kses( str_replace( ' ', '<br> ', $name), array( 'br' => array() ) ); ?></p>
				<p class="designation"><?php echo wp_kses( str_replace( ' ', '<br> ', $professtion), array( 'br' => array() ) ); ?></p>
				<div class="box"></div>
				<img src="<?php echo esc_url( $image ); ?>" class="image" alt="<?php echo esc_attr( $name ); ?>">
			</div>
		</div>
		<!-- CVitae Slider -->

	<?php } elseif( $intro_type == 4 ) {

		$background  = ot_get_option( 'cvitae_intro_4_background', get_template_directory_uri() . '/assets/img/slider/4-background.jpg' );
		$image       = ot_get_option( 'cvitae_intro_4_image', get_template_directory_uri() . '/assets/img/slider/4-image.jpg' );
		$name        = ot_get_option( 'cvitae_intro_4_name', esc_html__( 'Your Name', 'cvitae' ) );
		$professtion = ot_get_option( 'cvitae_intro_4_designation', esc_html__( 'Your professtion', 'cvitae' ) ); ?>

		<div id="home" class="cvitae-section slider sliderStyle4" style="background-image: url( <?php echo esc_url( $background ); ?> );">
			<div class="slider-content">
				<div class="box">
					<p class="name"><?php echo esc_html( $name ); ?></p>
					<p class="designation"><?php echo esc_html( $professtion ); ?></p>
				</div>
				<img src="<?php echo esc_url( $image ); ?>" class="image" alt="<?php echo esc_attr( $name ); ?>">
				<img src="<?php echo get_template_directory_uri() . '/assets/img/slider/4-shadow.png'; ?>" class="shadow" alt="Slider">
			</div>
		</div>
		<!-- CVitae Slider -->

	<?php } elseif( $intro_type == 5 ) {

		$image       = ot_get_option( 'cvitae_intro_5_image', get_template_directory_uri() . '/assets/img/slider/5-image.jpg' );
		$name        = ot_get_option( 'cvitae_intro_5_name', esc_html__( 'Your Name', 'cvitae' ) );
		$professtion = ot_get_option( 'cvitae_intro_5_designation', esc_html__( 'Your professtion', 'cvitae' ) );
		$target_text = ot_get_option( 'cvitae_intro_5_target_text', esc_html__( 'See full bio', 'cvitae' ) );
		$target_id   = ot_get_option( 'cvitae_intro_5_target' ); ?>

		<div id="home" class="cvitae-section slider sliderStyle5">
			<div class="slider-content">
				<div class="box-container">
					<p class="name"><?php echo esc_html( $name ); ?></p>
					<p class="designation"><?php echo esc_html( $professtion ); ?></p>
					<a href="<?php echo esc_url( '#' . cvitae_get_section_id( $target_id ) ); ?>" class="goto-bio"><?php echo esc_html( $target_text ); ?></a>
				</div>
				<div class="box1"></div>
				<div class="box2"></div>
				<div class="box3"></div>
				<img src="<?php echo esc_url( $image ); ?>" class="image" alt="<?php echo esc_attr( $name ); ?>">
			</div>
		</div>
		<!-- CVitae Slider -->

	<?php } elseif( $intro_type == 6 ) {

		$image       = ot_get_option( 'cvitae_intro_6_image', get_template_directory_uri() . '/assets/img/slider/6-image.png' );
		$name        = ot_get_option( 'cvitae_intro_6_name', esc_html__( 'Your Name', 'cvitae' ) );
		$professtion = ot_get_option( 'cvitae_intro_6_designation', esc_html__( 'Your professtion', 'cvitae' ) );
		$target_text = ot_get_option( 'cvitae_intro_6_target_text', esc_html__( 'See full bio', 'cvitae' ) );
		$target_id   = ot_get_option( 'cvitae_intro_6_target' ); ?>

		<div id="home" class="cvitae-section slider sliderStyle6">
			<div class="cvitae-container">
				<div class="slider-content">
					<div class="box-container">
						<p class="name"><?php echo esc_html( $name ); ?></p>
						<p class="designation"><?php echo esc_html( $professtion ); ?></p>
						<a href="<?php echo esc_url( '#' . cvitae_get_section_id( $target_id ) ); ?>" class="goto-bio"><?php echo esc_html( $target_text ); ?></a>
					</div>
					<img src="<?php echo esc_url( $image ); ?>" class="image" alt="<?php echo esc_attr( $name ); ?>">
				</div>
			</div>
		</div>
		<!-- CVitae Slider -->

	<?php } elseif( $intro_type == 7 ) {

		$background  = ot_get_option( 'cvitae_intro_7_background', get_template_directory_uri() . '/assets/img/slider/7-background.jpg' );
		$image       = ot_get_option( 'cvitae_intro_7_image', get_template_directory_uri() . '/assets/img/slider/7-image.png' );
		$name        = ot_get_option( 'cvitae_intro_7_name', esc_html__( 'Your Name', 'cvitae' ) );
		$professtion = ot_get_option( 'cvitae_intro_7_designation', esc_html__( 'Your professtion', 'cvitae' ) ); ?>

		<div id="home" class="cvitae-section slider sliderStyle7" style="background-image: url( <?php echo esc_url( $background ); ?> );">
			<div class="cvitae-container">
				<div class="slider-content">
					<div class="box-container">
						<p class="name"><?php echo esc_html( $name ); ?></p>
						<p class="designation"><?php echo esc_html( $professtion ); ?></p>
					</div>
					<img src="<?php echo esc_url( $image ); ?>" class="image" alt="<?php echo esc_attr( $name ); ?>">
				</div>
			</div>
		</div>
		<!-- CVitae Slider -->

	<?php } elseif( $intro_type == 8 ) {

		$background  = ot_get_option( 'cvitae_intro_8_background', get_template_directory_uri() . '/assets/img/slider/8-background.jpg' );
		$name        = ot_get_option( 'cvitae_intro_8_name', esc_html__( 'Your Name', 'cvitae' ) );
		$professtion = ot_get_option( 'cvitae_intro_8_designation', esc_html__( 'Your professtion', 'cvitae' ) ); ?>

		<div id="home" class="cvitae-section slider sliderStyle8">
			<div class="slider-overlay cvitae-typed-slider" style="background-image: url( <?php echo esc_url( $background ); ?> );">
				<div class="cvitae-container">
					<div class="slider-content">
						<p class="name"><?php echo esc_html( $name ); ?></p>
						<p class="designation"><?php echo esc_html( $professtion ); ?></p>
					</div>
				</div>
			</div>
		</div>
		<!-- CVitae Slider -->

	<?php } elseif( $intro_type == 9 ) {

		$background  = ot_get_option( 'cvitae_intro_9_background', get_template_directory_uri() . '/assets/img/slider/9-background.jpg' );
		$name        = ot_get_option( 'cvitae_intro_9_name', esc_html__( 'Your Name', 'cvitae' ) );
		$professtion = ot_get_option( 'cvitae_intro_9_designation', esc_html__( 'Your professtion', 'cvitae' ) ); ?>

		<div id="home" class="cvitae-section slider fullSlider">
			<div class="slider-overlay cvitae-typed-slider" style="background-image: url( <?php echo esc_url( $background ); ?> );">
				<div class="cvitae-container">
					<div class="slider-content">
						<p class="name"><?php echo esc_html( $name ); ?></p>
						<p class="designation"><?php echo esc_html( $professtion ); ?></p>
					</div>
				</div>
			</div>
		</div>
		<!-- CVitae Slider -->

	<?php } elseif( $intro_type == 10 ) {

		$left_image  = ot_get_option( 'cvitae_intro_10_background_left', get_template_directory_uri() . '/assets/img/slider/10-left.jpg' );
		$right_image = ot_get_option( 'cvitae_intro_10_background_right', get_template_directory_uri() . '/assets/img/slider/10-right.jpg' );
		$name        = ot_get_option( 'cvitae_intro_10_name', esc_html__( 'Your Name', 'cvitae' ) );
		$professtion = ot_get_option( 'cvitae_intro_10_designation', esc_html__( 'Your professtion', 'cvitae' ) ); ?>

		<div id="home" class="cvitae-section slider sliderStyle10">
			<div class="slider-overlay cvitae-typed-slider">
				<div class="slider-content">
					<p class="name"><?php echo esc_html( $name ); ?></p>
					<p class="designation"><?php echo esc_html( $professtion ); ?></p>
				</div>
				<div class="image-left" style="background-image: url( <?php echo esc_url( $left_image ); ?> );"></div>
				<div class="image-right" style="background-image: url( <?php echo esc_url( $right_image ); ?> );"></div>
			</div>
		</div>
		<!-- CVitae Slider -->

	<?php } elseif( $intro_type == 11 ) {

		$background  = ot_get_option( 'cvitae_intro_11_background', get_template_directory_uri() . '/assets/img/slider/11-background.jpg' );
		$name        = ot_get_option( 'cvitae_intro_11_name', esc_html__( 'Your Name', 'cvitae' ) );
		$professtion = ot_get_option( 'cvitae_intro_11_designation', esc_html__( 'Your professtion', 'cvitae' ) );
		$target_id   = ot_get_option( 'cvitae_intro_11_target' ); ?>

		<div id="home" class="cvitae-section slider fullSlider">
			<div class="slider-overlay cvitae-typed-slider" style="background-image: url( <?php echo esc_url( $background ); ?> );">
				<div class="slider-content">
					<p class="name"><?php echo esc_html( $name ); ?></p>
					<p class="designation"><?php echo esc_html( $professtion ); ?></p>
					<span class="box1"></span>
					<span class="box2"></span>
					<span class="box3"></span>
					<span class="box4"></span>
				</div>
				<div class="mouse-icon"><a href="<?php echo esc_url( '#' . cvitae_get_section_id( $target_id ) ); ?>"><span class="wheel"></span></a></div>
			</div>
		</div>
		<!-- CVitae Slider -->

	<?php } elseif( $intro_type == 12 ) {

		$background  = ot_get_option( 'cvitae_intro_12_background', get_template_directory_uri() . '/assets/img/slider/12-background.jpg' );
		$text        = ot_get_option( 'cvitae_intro_12_text', esc_html__( 'Hi', 'cvitae' ) );
		$typed_texts = ot_get_option( 'cvitae_intro_12_loop_text', array( array( 'title' => esc_html__( 'Default', 'cvitae' ) ), array( 'title' => esc_html__( 'Text', 'cvitae' ) ) ) );
		$target_id   = ot_get_option( 'cvitae_intro_12_target' ); ?>

		<div id="home" class="cvitae-section slider fullSlider">
			<div class="slider-overlay cvitae-typed-slider" style="background-image: url( <?php echo esc_url( $background ); ?> );">
				<div class="slider-content">
					<p class="slider-title"><?php echo esc_html( $text ); ?></p>
					<p class="second-line"><span class="typed-text"></span></p>
					<div id="typed-strings">
					    <?php foreach( $typed_texts as $text ) : ?>
					    	<p><?php echo esc_html( $text['title'] ); ?></p>
					    <?php endforeach; ?>
					</div>
				</div>
				<div class="mouse-icon"><a href="<?php echo esc_url( '#' . cvitae_get_section_id( $target_id ) ); ?>"><span class="wheel"></span></a></div>
			</div>
		</div>
		<!-- CVitae Slider -->

	<?php } elseif( $intro_type == 13 ) {

		$background  = ot_get_option( 'cvitae_intro_13_background', get_template_directory_uri() . '/assets/img/slider/13-background.jpg' );
		$image       = ot_get_option( 'cvitae_intro_13_image', get_template_directory_uri() . '/assets/img/slider/13-image.png' );
		$line_1      = ot_get_option( 'cvitae_intro_13_line_1', esc_html__( 'First Line', 'cvitae' ) );
		$line_2      = ot_get_option( 'cvitae_intro_13_line_2', esc_html__( 'Second Line', 'cvitae' ) );
		$line_3      = ot_get_option( 'cvitae_intro_13_line_3', esc_html__( 'Third Line', 'cvitae' ) );
		$target_text = ot_get_option( 'cvitae_intro_13_target_text', esc_html__( 'See full bio', 'cvitae' ) );
		$target_id   = ot_get_option( 'cvitae_intro_13_target' ); ?>

		<div id="home" class="cvitae-section slider sliderStyle13" style="background-image: url( <?php echo esc_url( $background ); ?> );">
			<div class="cvitae-container">
				<div class="slider-content">
					<div class="text-container">
						<div class="cvitae-slabText"><?php echo esc_html( $line_1 ); ?></div>
						<div class="cvitae-slabText"><?php echo esc_html( $line_2 ); ?></div>
						<div class="cvitae-slabText"><?php echo esc_html( $line_3 ); ?></div>
					</div>
					<a href="<?php echo esc_url( '#' . cvitae_get_section_id( $target_id ) ); ?>" class="goto-bio"><?php echo esc_html( $target_text ); ?></a>
					<img src="<?php echo esc_url( $image ); ?>" class="image" alt="Image">
				</div>
			</div>
		</div>
		<!-- CVitae Slider -->

	<?php } elseif ( $intro_type == 14 ) {

		$background  = ot_get_option( 'cvitae_intro_14_background', get_template_directory_uri() . '/assets/img/slider/14-background.jpg' );
		$image       = ot_get_option( 'cvitae_intro_14_image', get_template_directory_uri() . '/assets/img/slider/14-image.png' );
		$line_1      = ot_get_option( 'cvitae_intro_14_line_1', esc_html__( 'First Line', 'cvitae' ) );
		$line_2      = ot_get_option( 'cvitae_intro_14_line_2', esc_html__( 'Second Line', 'cvitae' ) );
		$line_3      = ot_get_option( 'cvitae_intro_14_line_3', esc_html__( 'Third Line', 'cvitae' ) );
		$target_text = ot_get_option( 'cvitae_intro_14_target_text', esc_html__( 'See full bio', 'cvitae' ) );
		$target_id   = ot_get_option( 'cvitae_intro_14_target' ); ?>

		<div id="home" class="cvitae-section slider sliderStyle14" style="background-image: url( <?php echo esc_url( $background ); ?> );">
			<div class="cvitae-container">
				<div class="slider-content">
					<div class="text-container">
						<div class="cvitae-slabText"><?php echo esc_html( $line_1 ); ?></div>
						<div class="cvitae-slabText"><?php echo esc_html( $line_2 ); ?></div>
						<div class="cvitae-slabText"><?php echo esc_html( $line_3 ); ?></div>
					</div>
					<a href="<?php echo esc_url( '#' . cvitae_get_section_id( $target_id ) ); ?>" class="goto-bio"><?php echo esc_html( $target_text ); ?></a>
					<img src="<?php echo esc_url( $image ); ?>" class="image" alt="Image">
				</div>
			</div>
		</div>
		<!-- CVitae Slider -->

	<?php } elseif ( $intro_type == 15 ) {

		$background  = ot_get_option( 'cvitae_intro_15_background', get_template_directory_uri() . '/assets/img/slider/15-background.png' );
		$image       = ot_get_option( 'cvitae_intro_15_image', get_template_directory_uri() . '/assets/img/slider/15-image.png' );
		$name        = ot_get_option( 'cvitae_intro_15_name', esc_html__( 'Your Name', 'cvitae' ) );
		$professtion = ot_get_option( 'cvitae_intro_15_designation', esc_html__( 'Your professtion', 'cvitae' ) );
		$target_id   = ot_get_option( 'cvitae_intro_15_target' ); ?>

		<div id="home" class="cvitae-section slider fullSlider">
			<div class="slider-overlay cvitae-typed-slider" style="background-image: url( <?php echo esc_url( $background ); ?> );">
				<div class="cvitae-container">
					<div class="slider-content">
						<p class="name"><?php echo esc_html( $name ); ?></p>
						<p class="designation"><?php echo esc_html( $professtion ); ?></p>
						<a href="#about" class="goto-bio"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/slider/15-arrow.png' ); ?>" alt="Arrow"></a>
						<div class="shape"></div>
					</div>
				</div>
				<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $name ); ?>" class="main">
				<div class="layer-1"></div>
				<div class="layer-2"></div>
				<div class="layer-3"></div>
			</div>
		</div>
		<!-- CVitae Slider -->
	
	<?php } elseif ( $intro_type == 16 ) {

		$video_id  = ot_get_option( 'cvitae_intro_16_video_id', '_0KcxL2Lssk' );
		$line_one  = ot_get_option( 'cvitae_intro_16_line_one', esc_html( 'I\'m Nail Swarovski' ) );
		$line_two  = ot_get_option( 'cvitae_intro_16_line_two', esc_html( '& never tried of' ) );
		$words     = ot_get_option( 'cvitae_intro_16_loop_text', array( array( 'title' => esc_html__( 'Default', 'cvitae' ) ), array( 'title' => esc_html__( 'Text', 'cvitae' ) ) ) );
		$target_id = ot_get_option( 'cvitae_intro_16_target' ); ?>

		<div id="home" class="cvitae-section slider">
			<div class="slider-content">
				<p class="slider-title"><?php echo esc_html( $line_one ); ?></p>
				<p class="second-line cd-headline slide">
					<span><?php echo esc_html( $line_two ); ?></span>
					<span class="cd-words-wrapper">
						<?php foreach( $words as $key => $word ) : ?>
							<b class="<?php if ( $key == 0 ) echo 'is-visible'; ?>"><?php echo esc_html( $word['title'] ); ?></b>
						<?php endforeach; ?>
					</span>
				</p>
			</div>
			<div id="cvitae-video-background" data-video-id="<?php echo esc_attr( $video_id ); ?>"></div>
			<div class="mouse-icon"><a href="<?php echo esc_url( '#' . cvitae_get_section_id( $target_id ) ); ?>"><span class="wheel"></span></a></div>
		</div>

		<!-- <div id="home" class="cvitae-section slider fullSlider">
			<div class="slider-overlay cvitae-typed-slider" style="background-image: url( <?php echo esc_url( $background ); ?> );">
				<div class="slider-content">
					<p class="slider-title"><?php echo esc_html( $text ); ?></p>
					<p class="second-line"><span class="typed-text"></span></p>
					<div id="typed-strings">
						<?php foreach( $typed_texts as $text ) : ?>
							<p><?php echo esc_html( $text['title'] ); ?></p>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="mouse-icon"><a href="<?php echo esc_url( '#' . cvitae_get_section_id( $target_id ) ); ?>"><span class="wheel"></span></a></div>
			</div>
		</div> -->
		<!-- CVitae Slider -->

	<?php } ?>
	
<?php
}

function cvitae_render_sections(){

	global $cvitae_parallax_ids;

	$cvitae_parallax_ids = array();

	if( ( $locations = get_nav_menu_locations() ) && $locations['primary'] ){
		
		$menu 			= wp_get_nav_menu_object( $locations['primary'] );
		
		$menu_items 	= wp_get_nav_menu_items( $menu->term_id );

		$post_ids = array();

		foreach( $menu_items as $item ) {
			if( $item->object == 'section' ){
				$post_ids[] = $item->object_id;
			}
		}

		$args = array(
			'post_type' => 'section',
			'post__in' => $post_ids,
			'posts_per_page' => -1,
			'orderby' => 'post__in'
		);

		$cvitae_sections = new WP_Query( $args );
	}

	
	
	if ( isset( $cvitae_sections ) && $cvitae_sections->have_posts() ) {
		
		while ( $cvitae_sections->have_posts() ) : $cvitae_sections->the_post();

			$section_type = get_post_meta( get_the_ID(), 'cvitae_section_type', true );

			$section_id = cvitae_get_section_id( get_the_ID() );

			if( $section_type == 'about' ) {
				$bio_image = get_post_meta( get_the_ID(), 'cvitae_about_image', true );
				$bio_text  = get_post_meta( get_the_ID(), 'cvitae_about_text', true );
				$bio_info  = get_post_meta( get_the_ID(), 'cvitae_about_info', true );
				$bio_links = get_post_meta( get_the_ID(), 'cvitae_about_links', true );
				?>

				<div id="<?php echo esc_attr( $section_id ); ?>" class="cvitae-section cvitae-about-me">
					<div class="cvitae-container">
						<div class="cvitae-section-content">
							<div class="content-left short-bio">
								<div class="pic">
									<img class="img-responsive" src="<?php echo esc_url( $bio_image ); ?>" alt="Bio Pic">
								</div>
								<?php echo wpautop( wp_kses( $bio_text, array( 'strong' => array() ) ) ); ?>
							</div>
							<div class="content-right about">
								<h3 class="cvitae-section-title"><?php echo esc_html( cvitae_get_section_title( get_the_ID() ) ); ?></h3>

								<?php if( ! empty( $bio_info ) ) : ?>

									<?php foreach($bio_info as $info) : ?>
										<p class="info"><span class="field-title"><?php echo esc_html( $info['title'] ); ?></span> <span class="field-separator">:</span> <span class="field-value"><?php echo esc_html( $info['text'] ); ?></span></p>
									<?php endforeach; ?>

								<?php endif ?>

							</div>
							<div class="links">
								<?php if( ! empty( $bio_links ) ) : ?>

									<?php foreach($bio_links as $link) : ?>
										<a href="<?php echo esc_url( $link['link'] ); ?>" class="tooltipped" data-position="left" data-delay="50" data-tooltip="<?php echo esc_attr( $link['title'] ); ?>"><span class="<?php echo esc_attr( $link['icon'] ); ?>"></span><?php echo esc_html( $link['title'] ); ?></a>
									<?php endforeach; ?>

								<?php endif ?>
							</div>
						</div>
					</div>
				</div><!-- CVitae About -->

			<?php } elseif( $section_type == 'skill' ) {

				$highlights = get_post_meta( get_the_ID(), 'cvitae_skill_highlights', true );
				$skills     = get_post_meta( get_the_ID(), 'cvitae_skill_skillbar', true );
				?>
				<div id="<?php echo esc_attr( $section_id ); ?>" class="cvitae-section cvitae-skills">
					<div class="cvitae-container">
						<div class="cvitae-section-content">
							<div class="content-left">
								<h3 class="cvitae-section-title"><?php echo esc_html( cvitae_get_section_title( get_the_ID() ) ); ?></h3>
								<ul class="hi-lights">
									<?php if( ! empty( $highlights ) ) : ?>

										<?php foreach($highlights as $item) : ?>

											<li><?php echo esc_html( $item['title'] ); ?></li>
										
										<?php endforeach; ?>

									<?php endif ?>
								</ul>
							</div>
							<div class="content-right">
								<div class="progress-bar-container">

									<?php if( ! empty( $skills ) ) : ?>

										<?php foreach($skills as $skill) : ?>

											<div class="progress">
												<h3 class="progress-title"><?php echo esc_html( $skill['title'] ); ?></h3>
												<div class="progress-bar" data-progress="<?php echo esc_attr( $skill['percentage'] ); ?>">
													<span class="bar"></span>
													<span class="text"><?php echo esc_html( $skill['percentage'] ); ?></span>
												</div>
											</div>
										
										<?php endforeach; ?>

									<?php endif ?>

								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- CVitae Skills -->
			<?php } elseif( $section_type == 'achievement' ) {
				$margin_fix            = get_post_meta( get_the_ID(), 'cvitae_achievement_margin_fix', true ) ? : 'off';
				$background            = get_post_meta( get_the_ID(), 'cvitae_achievement_background', true );
				$text                  = get_post_meta( get_the_ID(), 'cvitae_achievement_text', true );
				$achievements          = get_post_meta( get_the_ID(), 'cvitae_achievements', true );
				if( $background != '' ) {
					$cvitae_parallax_ids[] = $section_id;
				}
				?>
				<div id="<?php echo esc_attr( $section_id ); ?>" class="cvitae-section cvitae-achievement <?php echo esc_attr( ( $margin_fix == 'on' ) ? 'mb-0' : ''  ); ?>" <?php if( $background != '' ) { ?> style="background-image: url(<?php echo esc_url( $background ); ?>);" <?php } ?>>
					<div class="cvitae-container">
						<div class="cvitae-section-content">
							<div class="content-left">
								<h3 class="cvitae-section-title"><?php echo esc_html( cvitae_get_section_title( get_the_ID() ) ); ?></h3>
								<?php echo wpautop( esc_html( $text ) ); ?>
							</div>
							<div class="content-right">

								<?php if( ! empty( $achievements ) ) : ?>
									
									<div class="achievement-container">

										<?php foreach($achievements as $achievement) : ?>

											<div class="item">
												<p class="achievement-date"><?php echo esc_html( $achievement['date'] ); ?></p>
												<h4 class="achievement-title"><?php echo esc_html( $achievement['title'] ); ?></h4>
												<p class="achievement-detail"><?php echo esc_html( $achievement['deatials'] ); ?></p>
											</div>
										
										<?php endforeach; ?>

									</div>

								<?php endif ?>
								
							</div>
						</div>
					</div>
				</div>
				<!-- CVitae Achievement -->
			<?php } elseif( $section_type == 'education' ) {
				$text   = get_post_meta( get_the_ID(), 'cvitae_education_text', true );
				$degrees   = get_post_meta( get_the_ID(), 'cvitae_educations', true );
				?>
				<div id="<?php echo esc_attr( $section_id ); ?>" class="cvitae-section cvitae-education">
					<div class="cvitae-container">
						<div class="cvitae-section-content">
							<div class="content-left">
								<h3 class="cvitae-section-title"><?php echo esc_html( cvitae_get_section_title( get_the_ID() ) ); ?></h3>
								<?php echo wpautop( esc_html( $text ) ); ?>
							</div>
							<div class="content-right">

								<?php if( ! empty( $degrees ) ) : ?>
									
									<ul class="collapsible" data-collapsible="accordion">

										<?php foreach($degrees as $degree) : ?>

											<li>
												<div class="collapsible-header"><?php echo esc_html( $degree['title'] ); ?>, <span class="year"><?php echo esc_html( $degree['duration'] ); ?></span></div>
												<div class="collapsible-body">
													<p><?php echo esc_html( $degree['deatials'] ); ?></p>
												</div>
											</li>
										
										<?php endforeach; ?>

									</ul>

								<?php endif ?>

							</div>
						</div>
					</div>
				</div>
				<!-- CVitae Education -->
			<?php } elseif( $section_type == 'portfolio' ) {
				$text   = get_post_meta( get_the_ID(), 'cvitae_portfolio_text', true );
				$albums = get_post_meta( get_the_ID(), 'cvitae_portfolio_albums', true );
				?>
				<div id="<?php echo esc_attr( $section_id ); ?>" class="cvitae-section cvitae-portfolio">
					<div class="cvitae-container">
						<div class="cvitae-section-content">
							<div class="content-left">
								<h3 class="cvitae-section-title"><?php echo esc_html( cvitae_get_section_title( get_the_ID() ) ); ?></h3>
								<?php echo wpautop( esc_html( $text ) ); ?>
							</div>
							<div class="content-right">

								<?php if( ! empty( $albums ) ) : ?>
									
									<div id="cvitae-slider" class="mi-slider cvitae-gallery">

										<?php foreach($albums as $album) : ?>

											<ul>

												<?php for ($i=1; $i < 4; $i++) : ?>

													<li>

														<a href="#" class="project"
															data-project-title="<?php echo esc_attr( $album['item_' . $i . '_title'] ); ?>"
															data-project-image="<?php echo esc_url( $album['item_' . $i . '_image'] ); ?>"
															data-project-link="<?php echo esc_url( $album['item_' . $i . '_link'] ); ?>"
															data-project-detail="<?php echo esc_attr( $album['item_' . $i . '_description'] ); ?>">
															<img src="<?php echo esc_url( $album['item_' . $i . '_image'] ); ?>" alt="<?php echo esc_attr( $album['item_' . $i . '_title'] ); ?>">
															<h4><?php echo esc_html( $album['item_' . $i . '_title'] ); ?></h4>
														</a>

													</li>
													
												<?php endfor; ?>

											</ul>
										
										<?php endforeach; ?>


										<nav>

											<?php foreach($albums as $album) : ?>

												<a href="#"><?php echo esc_html( $album['title'] ); ?></a>
											
											<?php endforeach; ?>

										</nav>

									</div>

								<?php endif ?>
								
							</div>
						</div>
					</div>
				</div>
				<!-- CVitae Portfolio -->
				
			<?php } elseif( $section_type == 'tesimonial' ) {				$margin_fix   = get_post_meta( get_the_ID(), 'cvitae_testimonial_margin_fix', true ) ? : 'off';
				$background            = get_post_meta( get_the_ID(), 'cvitae_testimonial_background', true );
				$text                  = get_post_meta( get_the_ID(), 'cvitae_testimonial_text', true );
				$testimonials          = get_post_meta( get_the_ID(), 'cvitae_testimonials', true );
				if( $background != '' ) {
					$cvitae_parallax_ids[] = $section_id;
				}
				?>
				<div id="<?php echo esc_attr( $section_id ); ?>" class="cvitae-section cvitae-testimonial <?php echo esc_attr( ( $margin_fix == 'on' ) ? 'mb-0' : ''  ); ?>" <?php if( $background != '' ) { ?> style="background-image: url(<?php echo esc_url( $background ); ?>);" <?php } ?>>
					<div class="cvitae-container">
						<div class="cvitae-section-content">
							<div class="content-left">
								<h3 class="cvitae-section-title"><?php echo esc_html( cvitae_get_section_title( get_the_ID() ) ); ?></h3>
								<?php echo wpautop( esc_html( $text ) ); ?>
							</div>
							<div class="content-right">

								<?php if( ! empty( $testimonials ) ) : ?>

									<div class="testimonial-container">

										<?php foreach($testimonials as $item) : ?>

											<div class="item">
												<p class="designation"><?php echo esc_html( $item['designation'] ); ?></p>
												<h4 class="name"><?php echo esc_html( $item['title'] ); ?></h4>
												<p class="message"><?php echo esc_html( $item['message'] ); ?></p>
											</div>
										
										<?php endforeach; ?>

									</div>

								<?php endif; ?>

							</div>
						</div>
					</div>
				</div>
				<!-- CVitae Testimonial -->
				
			<?php } elseif( $section_type == 'experience' ) {
				$text        = get_post_meta( get_the_ID(), 'cvitae_experience_text', true );
				$experiences = get_post_meta( get_the_ID(), 'cvitae_experiences', true );
				?>
				<div id="<?php echo esc_attr( $section_id ); ?>" class="cvitae-section cvitae-experience">
					<div class="cvitae-container">
						<div class="cvitae-section-content">
							<div class="content-left">
								<h3 class="cvitae-section-title"><?php echo esc_html( cvitae_get_section_title( get_the_ID() ) ); ?></h3>
								<?php echo wpautop( esc_html( $text ) ); ?>
							</div>
							<div class="content-right">

								<?php if( ! empty( $experiences ) ) : ?>

									<ul class="collapsible" data-collapsible="accordion">

										<?php foreach($experiences as $item) : ?>

											<li>
												<div class="collapsible-header"><?php echo esc_html( $item['title'] ); ?> <span class="degree"><?php esc_html_e( 'as', 'cvitae' ); ?></span> <?php echo esc_html( $item['designation'] ); ?>  <span class="year"><?php echo esc_html( $item['duration'] ); ?></span></div>
												<div class="collapsible-body">
													<p><?php echo esc_html( $item['responsibilities'] ); ?></p>
												</div>
											</li>
										
										<?php endforeach; ?>

									</ul>

								<?php endif; ?>
								
							</div>
						</div>
					</div>
				</div>
				<!-- CVitae Experience -->

			<?php } elseif( $section_type == 'blog' ) {
				$text = get_post_meta( get_the_ID(), 'cvitae_blog_text', true );
				?>
				<div id="<?php echo esc_attr( $section_id ); ?>" class="cvitae-section cvitae-blog">
					<div class="cvitae-container">
						<div class="cvitae-section-content">
							<div class="content-left">
								<h3 class="cvitae-section-title"><?php echo esc_html( cvitae_get_section_title( get_the_ID() ) ); ?></h3>
								<?php echo wpautop( esc_html( $text ) ); ?>
								<a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="view-all"><?php esc_html_e( 'View all', 'cvitae' ); ?></a>
							</div>
							<div class="content-right">
								<?php
									$args = array(
										'post_type' => 'post',
										'posts_per_page' => 3
									);

									$cvitae_blog_posts = new WP_Query( $args );

								if ( isset( $cvitae_blog_posts ) && $cvitae_blog_posts->have_posts() ) { ?>
								
									<div class="blog-container">

										<?php while( $cvitae_blog_posts->have_posts() ) : $cvitae_blog_posts->the_post(); ?>
										
											<div id="post-<?php the_ID(); ?>" <?php post_class( 'post' ); ?>>
												<div class="thumb">
													<a href="<?php the_permalink(); ?>" target="_blank">
														
														<?php if( has_post_thumbnail() ) : ?>

															<?php the_post_thumbnail( 'cvitae-blog-image' ); ?>
														
														<?php else: ?>

															<img src="<?php echo get_template_directory_uri() . '/assets/img/blog_thumb.jpg'; ?>" alt="Blog Image">
														
														<?php endif; ?>

													</a>
												</div>
												<h3 class="title"><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></h3>
											</div>

										<?php endwhile; ?>

									</div>

								<?php } ?>
							</div>
						</div>
					</div>
				</div>
				<!-- CVitae Blog -->

			<?php } elseif( $section_type == 'client' ) {
				$margin_fix            = get_post_meta( get_the_ID(), 'cvitae_client_margin_fix', true ) ? : 'off';
				$background            = get_post_meta( get_the_ID(), 'cvitae_client_background', true );
				$text                  = get_post_meta( get_the_ID(), 'cvitae_client_text', true );
				$clients               = get_post_meta( get_the_ID(), 'cvitae_clients', true );
				if( $background != '' ) {
					$cvitae_parallax_ids[] = $section_id;
				}
				?>
				<div id="<?php echo esc_attr( $section_id ); ?>" class="cvitae-section cvitae-clients <?php echo esc_attr( ( $margin_fix == 'on' ) ? 'mb-0' : ''  ); ?>" <?php if( $background != '' ) { ?> style="background-image: url(<?php echo esc_url( $background ); ?>);" <?php } ?>>
					<div class="cvitae-container">
						<div class="cvitae-section-content">
							<div class="content-left">
								<h3 class="cvitae-section-title"><?php echo esc_html( cvitae_get_section_title( get_the_ID() ) ); ?></h3>
								<?php echo wpautop( esc_html( $text ) ); ?>
							</div>
							<div class="content-right">

								<?php if( ! empty( $clients ) ) : ?>

									<div class="clients-container">

										<?php foreach($clients as $client) : ?>

											<div class="item">
												<a href="<?php echo esc_url( $client['link'] ); ?>"><img src="<?php echo esc_url( $client['logo'] ); ?>" alt="<?php echo esc_attr( $client['title'] ); ?>"></a>
											</div>
										
										<?php endforeach; ?>

									</div>

								<?php endif; ?>
								
							</div>
						</div>
					</div>
				</div>
				<!-- CVitae Clients -->
				
			<?php }

		endwhile; ?>

		<div class="cvitae-portfolio-popup">
			<div class="portfolio-content">
				<div class="project-image">
					<img id="project-image" src="<?php echo get_template_directory_uri() . '/assets/img/placeholder_portfolio.jpg'; ?>" class="img-responsive" alt="Project Image">
				</div>
				<div class="project-title"><h4 id="project-title">Project Title</h4><a id="project-link" target="_blank" href="#">( Live Link )</a></div>
				<p class="project-detail" id="project-detail">Write a short description (2 lines) about your project (when you did this? for whom you worked for? ) How was the accomplishment etc? Remember, a good practise, you must not write more than 40 - 60 words</p>
				<span class="project-popup-close ti-close"></span>
			</div>
		</div>
		<!-- ./cvitae-portfolio-popup -->

		<?php

		add_action( 'wp_footer','cvitae_parallax_script', 100 );
	}
}

function cvitae_parallax_script(){

	global $cvitae_parallax_ids;

	$output ='';
	$output .='<script type="text/javascript">';
	$output .='jQuery(document).ready(function() {';
	$output .='jQuery(window).load(function(){';
		
	foreach( $cvitae_parallax_ids as $parallax_id ){
		$output .='jQuery("#' . $parallax_id . '").parallax( "50%", 0.6 );';
	}

	$output .='})';
	$output .='})';
	$output .='</script>';
	echo '' . $output;
}

function cvitae_render_blog_list_details(){

	$post_author = get_the_author();

	$post_author_link = get_the_author_link();

	$post_categories = wp_get_post_categories( get_the_ID() );

	?>

	<header class="entry-header">
		
		<h2 class="entry-title"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h2>

	</header>

	<div class="post-info">

		<p class="user"><span class="ti-user"></span> <a href="<?php echo esc_url( home_url() . '/author/' . $post_author_link ); ?>"> <?php echo esc_html( $post_author ); ?></a></p>
		<p class="calender"><span class="ti-calendar"></span> <?php echo get_the_date( 'F d Y', get_the_ID() ); ?></p>
		<p class="category"><span class="ti-folder"></span> <a href="<?php echo esc_url( get_category_link( $post_categories[0] ) ); ?>"> <?php echo esc_html( get_cat_name( $post_categories[0] ) ); ?></a></p>
		
		<?php if( function_exists('the_views') ) : ?>

			<p class="hits"><span class="ti-mouse-alt"></span> <?php echo esc_html( 'Hits' ); ?> ( <?php the_views(); ?> )</p>

		<?php endif; ?>

	</div>

	<div class="entry-content">

		<?php the_excerpt(); ?>

	</div>

	<a href="<?php echo esc_url( get_permalink() ); ?>" class="continue-reading"><?php esc_html_e( 'Continue Reading', 'cvitae' ); ?></a>

<?php
}

function cvitae_render_blog_single_details(){

	$post_author = get_the_author();

	$post_categories = wp_get_post_categories( get_the_ID() );

	?>

	<header class="entry-header">
		
		<h2 class="entry-title"><?php the_title(); ?></h2>

	</header>

	<div class="post-info">

		<p class="user"><span class="ti-user"></span> <a href="#"> <?php echo esc_html( $post_author ); ?></a></p>
		<p class="calender"><span class="ti-calendar"></span> <?php echo get_the_date( 'F d Y', get_the_ID() ); ?></p>
		<p class="category"><span class="ti-folder"></span> <a href="<?php echo esc_url( get_category_link( $post_categories[0] ) ); ?>"> <?php echo esc_html( get_cat_name( $post_categories[0] ) ); ?></a></p>
		
		<?php if( function_exists('the_views') ) : ?>

			<p class="hits"><span class="ti-mouse-alt"></span> <?php echo esc_html( 'Hits' ); ?> ( <?php the_views(); ?> )</p>

		<?php endif; ?>

	</div>

	<div class="entry-content">

		<?php the_content(); ?>

		<?php

		wp_link_pages( array(
			'before'   => '<div class="page-links">' . esc_html__( 'Pages:', 'cvitae' ),
			'after'    => '</div>'
		) );

		?>

	</div>

	<footer class="entry-footer">

		<?php the_post_navigation(); ?>

		<div class="social-share">
			<p>SHARE THIS ARTICLE ON: </p>
			<ul>
				<?php $encoded_url = urlencode( esc_url( get_permalink() ) ); ?>
				<li><a href="<?php echo 'https://www.facebook.com/sharer/sharer.php?u=' . $encoded_url;?>" class="facebook">facebook</a></li>
				<li><a href="<?php echo 'https://twitter.com/intent/tweet?source=' . $encoded_url;?>" class="twitter">twitter</a></li>
				<li><a href="<?php echo 'https://plus.google.com/share?url=' . $encoded_url;?>" class="google-plus">google+</a></li>
				<li><a href="<?php echo 'http://pinterest.com/pin/create/button/?url=' . $encoded_url;?>" class="pinterest">pinterest</a></li>
			</ul>
		</div>
		<div class="post-author-info">
			<div class="cvitae-row">
				<div class="cvitae-col-sm-2 display-picture">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 200 ); ?>
				</div>
				<div class="cvitae-col-sm-10">
					<h5 class="display-name"><?php the_author_meta( 'display_name' ); ?></h5>
					<p><?php echo ( get_the_author_meta( 'description' ) != '' ) ? get_the_author_meta( 'description' ) : esc_html__( 'Author info not available', 'cvitae' ); ?></p>
				</div>
			</div>
		</div>
		<div class="other-meta">

			<?php

				$categories_list = get_the_category_list( esc_html__( ', ', 'cvitae' ) );
				if ( $categories_list && cvitae_categorized_blog() ) {
					printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'cvitae' ) . '</span>', $categories_list ); // WPCS: XSS OK.
				}
			
				$tags_list = get_the_tag_list( '', esc_html__( ', ', 'cvitae' ) );
				if ( $tags_list ) {
					printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'cvitae' ) . '</span>', $tags_list ); // WPCS: XSS OK.
				}

			?>

		</div>

	</footer>

<?php
}

function cvitae_render_footer(){ ?>

	<div id="<?php echo esc_attr( ( is_page_template( 'page-templates/home.php' ) ) ? 'contact' : 'contact-section' ); ?>" class="cvitae-section cvitae-contact footer">
		
		<?php if( is_page_template( 'page-templates/home.php' ) ) : ?>

			<div class="cvitae-container home-contact-section">

				<div class="cvitae-section-content">

					<div class="content-left">

						<?php
							$title     = ot_get_option( 'cvitae_contact_title', esc_html__( 'Contact', 'cvitae' ) );
							$text      = ot_get_option( 'cvitae_contact_text', esc_html__( 'Short text here.', 'cvitae' ) );
							$image     = ot_get_option( 'cvitae_contact_image' );
							$shortcode = ot_get_option( 'cvitae_contact_cf7_shortcode' );
						?>

						<h3 class="cvitae-section-title"><?php echo esc_html( $title ); ?></h3>
						
						<?php echo wpautop( esc_html( $text ) ); ?>

						<?php if( $image ) : ?>

							<img src="<?php echo esc_url( $image ); ?>" alt="Signature">

						<?php endif; ?>

					</div>
					<div class="content-right">
						<?php echo do_shortcode( $shortcode ); ?>
					</div>

				</div>

			</div>

		<?php endif; ?>

		<div class="footer-content">

			<div class="cvitae-container">

				<?php $footer_links = ot_get_option( 'cvitae_footer_links' ); ?>

				<?php if( ! empty( $footer_links ) ) : ?>

					<ul class="links">

						<?php $goto_top_index = ceil( count( $footer_links ) / 2 ) - 1; ?>
						
						<?php foreach ( $footer_links as $index => $item ) : ?>

							<li class="tooltipped" data-position="top" data-delay="50" data-tooltip="<?php echo esc_attr( $item['title'] ); ?>"><a href="<?php echo esc_url( $item['link'] ); ?>"><span class="<?php echo esc_attr( $item['icon'] ); ?>"></span></a></li>
							
							<?php if ( $index == $goto_top_index ) echo '<li class="tooltipped" data-position="top" data-delay="50" data-tooltip="Goto Top"><a href="#" data-hover="Goto Top" class="goto-top"><span class="ti-arrow-up"></span>' . esc_html__( 'Goto Top', 'cvitae' ) . '</a></li>'; ?>
						
						<?php endforeach; ?>

					</ul>

				<?php endif; ?>

				<?php $footer_text = ot_get_option( 'cvitae_footer_text', esc_html__( 'Themecop 2015', 'cvitae' ) ); ?>
				
				<p class="copyright">

					<?php
					
					echo wp_kses(
						$footer_text,
		                array(
							'a' => array( 'href' => array(), 'target' => array() ),
							'span' => array( 'class' => array() )
						)
					);

					?>
					
				</p>
			</div>

		</div>

	</div>
	<!-- CVitae Contact & Footer -->
	
<?php
}

function cvitae_custom_styles() {
    
    wp_enqueue_style( 'cvitae-custom-styles', get_template_directory_uri() . '/assets/css/cvitae-custom-style.css' );
    
    $intro_type = ot_get_option( 'cvitae_intro_type', 1 );
    
    $custom_inline_style = "";
    
    if( $intro_type == 13 ){
    	$custom_inline_style = ".intro-13 { background-image: url( '" . ot_get_option( 'cvitae_intro_13_footer_background', get_template_directory_uri() . '/assets/img/slider/13-footer-background.jpg' ) . "' ) }";
    } elseif ( $intro_type == 14 ){
    	$custom_inline_style = ".intro-14 { background-image: url( '" . ot_get_option( 'cvitae_intro_14_footer_background', get_template_directory_uri() . '/assets/img/slider/14-footer-background.jpg' ) . "' ) }";
    }

    $custom_inline_style .= ot_get_option( 'cvitae_custom_css' );
    
    wp_add_inline_style( 'cvitae-custom-styles', $custom_inline_style );
}

add_action( 'wp_enqueue_scripts', 'cvitae_custom_styles' );

function cvitae_nav_location_class(){
	$intro_type = ot_get_option( 'cvitae_intro_type', 1 );
	switch ( $intro_type ) {
		case  5:
		case  7:
		case  9:
		case 11:
		case 12:
		case 13:
		case 14:
			return '';
			break;
		case  1:
		case  3:
		case  4:
		case  6:
		case  8:
		case 10:
			if( is_page_template( 'page-templates/home.php' ) )
				return 'bottom';
			break;
		case  2:
			if( is_page_template( 'page-templates/home.php' ) )
				return 'slider-bottom';
			break;
	}
}

function cvitae_render_navigation(){ ?>

	<div class="cvitae-menu-wrapper <?php echo esc_attr( cvitae_nav_location_class() ); ?>">
		
		<?php

			wp_nav_menu( array(
				'theme_location'  => 'primary',
				'menu'            => '',
				'container'       => 'nav',
				'container_class' => ( is_page_template( 'page-templates/home.php' ) ) ? 'cvitae-main-nav scroll' : 'cvitae-main-nav',
				'container_id'    => '',
				'menu_class'      => '',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => '',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 1,
				'walker'          => new CVitae_Menu()
			) );
		?>

	</div>
	<!-- CVitae Main Navigation -->

	<div class="cvitae-mobile-navigation <?php echo ( ot_get_option( 'cvitae_intro_type' ) == 15 ) ? 'left-nav' : ''; ?>">

		<div class="nav-header">
			<span class="ti-menu mobile-site-menu"></span>
			<a class="mobile-site-title" href="<?php echo esc_url( ( is_page_template( 'page-templates/home.php' ) ) ? home_url( '#home' ) : home_url() ); ?>"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
		</div>
		
		<?php

			wp_nav_menu( array(
				'theme_location'  => 'primary',
				'menu'            => '',
				'container'       => 'nav',
				'container_class' => 'cvitae-mobile-nav scroll',
				'container_id'    => 'cvitae-mobile-navigation',
				'menu_class'      => '',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => '',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 1,
				'walker'          => new CVitae_Menu()
			) );

		?>

	</div>
	<!-- CVitae Mobile Navigation -->

<?php
}

function cvitae_render_header(){
	?>

	<?php

	$intro_type = ot_get_option( 'cvitae_intro_type', 1 );

	switch ( $intro_type ) {
		case  5:
		case  7:
		case  9:
		case 11:
		case 12:
		case 13:
		case 14:
		case 15:
		case 16:
			cvitae_render_navigation();
			cvitae_render_intro();
			break;
		case  1:
		case  2:
		case  3:
		case  4:
		case  6:
		case  8:
		case 10:
			cvitae_render_intro();
			cvitae_render_navigation();
			break;
	}
}


function cvitae_pagination( $numpages = '', $pagerange = '', $paged='' ) {
	
	global $paged;

	if ( empty( $pagerange ) ) {
		$pagerange = 2;
	}
	
	if ( empty( $paged ) ) {
		$paged = 1;
	}

	if ( $numpages == '' ) {

		global $wp_query;
		
		$numpages = $wp_query->max_num_pages;
		
		if( ! $numpages ) {
			$numpages = 1;
		}

	}

	$pagination_args = array(
		'base'            => get_pagenum_link(1) . '%_%',
		'format'          => 'page/%#%',
		'total'           => $numpages,
		'current'         => $paged,
		'show_all'        => False,
		'end_size'        => 1,
		'mid_size'        => $pagerange,
		'prev_next'       => True,
		'prev_text'       => '&laquo;',
		'next_text'       => '&raquo;',
		'type'            => 'array',
		'add_args'        => false,
		'add_fragment'    => ''
	);

	$paginate_links = paginate_links($pagination_args);

	if ($paginate_links) { ?>
		<nav class="cvitae-post-pagination">
			<ul class="pagination">
			<?php foreach( $paginate_links as $paginate_link ){ ?>
				<li><?php printf( $paginate_link ); ?></li>
			<?php } ?>
			</ul>
		</nav>
	<?php }
}

function cvitae_render_breadcrumb(){

	$image = ot_get_option( 'cvitae_page_cover', '' ); ?>

	<div class="blog-single-header" <?php if( $image != '' ) { ?> style="background-image: url(<?php echo esc_url( $image ); ?>);" <?php } ?>>

		<div class="cvitae-container">

		<?php if( is_archive() ) : ?>

			<h1 class="page-title"><?php the_archive_title(); ?></h1>
			<ol class="cvitae-breadcrumb">
				<li><a href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( 'Home', 'cvitae' ); ?></a></li>
				<li><a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>"><?php echo get_the_title( get_option( 'page_for_posts' ) ); ?></a></li>
				<li class="active"><?php the_archive_title(); ?></li>
			</ol>

		<?php elseif( is_single() ) : ?>

			<h1 class="page-title"><?php the_title(); ?></h1>
			<ol class="cvitae-breadcrumb">
				<li><a href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( 'Home', 'cvitae' ); ?></a></li>
				<li><a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>"><?php echo get_the_title( get_option( 'page_for_posts' ) ); ?></a></li>
				<li class="active"><?php the_title(); ?></li>
			</ol>

		<?php else : ?>

			<h1 class="page-title"><?php single_post_title(); ?></h1>
			<ol class="cvitae-breadcrumb">
				<li><a href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( 'Home', 'cvitae' ); ?></a></li>
				<li class="active"><?php single_post_title(); ?></li>
			</ol>

		<?php endif; ?>

		</div>

	</div>

	<?php
}