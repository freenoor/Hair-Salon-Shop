<?php
add_action( 'init', 'ds_init_my_hooks' );
function ds_init_my_hooks(){
    add_action( 'customize_register', 'ds_footer_options' );
}
function ds_customizer_live_preview()
{
	wp_enqueue_script( 
		  'themecustomizer',			//Give the script an ID
		  get_template_directory_uri().'/assets/js/customizer.js',//Point to file
		  array( 'jquery','customize-preview' ),	//Define dependencies
		  '',						//Define a version (optional) 
		  true						//Put script in footer?
	);
}
add_action( 'customize_preview_init', 'ds_customizer_live_preview' );
function ds_footer_options( $wp_customize ) {   
    $wp_customize -> remove_section( 'static_front_page' ); 
    
    $wp_customize->add_section( 'footer' , array(
		'title'      => 'Footer',
        'priority'   => 60,
		) );
		$wp_customize->add_setting( 'gb_name1', array(
			'default'     => 'Lorem Ipsum',
			'transport'   => 'postMessage',
			) );
			$wp_customize->add_control( 'gb_name1', array(
				'label' => 'Name ',
				'section' => 'footer',
				'settings' => 'gb_name1',
				'type' => 'text',
				) );
		$wp_customize->add_setting( 'gb_name2', array(
					'default'     => 'Lorem Ipsum',
					'transport'   => 'postMessage',
					) );
					$wp_customize->add_control( 'gb_name2', array(
						'label' => 'Name 2',
						'section' => 'footer',
						'settings' => 'gb_name2',
						'type' => 'text',
				) );
			$wp_customize->add_setting( 'gb_fax', array(
			'default'     => 'Lorem Ipsum',
			'transport'   => 'postMessage',
			) );
			$wp_customize->add_control( 'gb_fax', array(
			'label' => 'Fax',
			'section' => 'footer',
			'settings' => 'gb_fax',
			'type' => 'text',
			) );
    $wp_customize->add_setting( 'gb_offnungszeiten' , array(
		'default'     => 'Lorem Ipsum',
		'transport'   => 'postMessage',
    ) );
    $wp_customize->add_control( 'gb_offnungszeiten', array(
		'label' => 'Öffnungszeiten',
		'section' => 'footer',
		'settings' => 'gb_offnungszeiten',
		'type' => 'textarea',
    ) );
    $wp_customize->add_setting( 'footer_address' , array(
		'default'     => 'Lorem Ipsum',
		'transport'   => 'postMessage',
    ) );
    $wp_customize->add_control( 'footer_address', array(
		'label' => 'Address',
		'section' => 'footer',
		'settings' => 'footer_address',
		'type' => 'textarea',
    ) );
    $wp_customize->add_setting( 'footer_phone' , array(
		'default'     => 'Lorem Ipsum',
		'transport'   => 'postMessage',
		) );
		
    $wp_customize->add_control( 'footer_phone', array(
		'label' => 'Phone',
		'section' => 'footer',
		'settings' => 'footer_phone',
		'type' => 'text',
		) );
		$wp_customize->add_setting( 'footer_phone2' , array(
			'default'     => 'Lorem Ipsum',
			'transport'   => 'postMessage',
			) );
			
			$wp_customize->add_control( 'footer_phone2', array(
			'label' => 'Phone 2',
			'section' => 'footer',
			'settings' => 'footer_phone2',
			'type' => 'text',
			) );
			$wp_customize->add_setting( 'footer_fax' , array(
				'default'     => 'Lorem Ipsum',
				'transport'   => 'postMessage',
				) );
				
				$wp_customize->add_control( 'footer_fax', array(
				'label' => 'Fax Number',
				'section' => 'footer',
				'settings' => 'footer_fax',
				'type' => 'text',
				) );
    $wp_customize->add_setting( 'footer_email' , array(
		'default'     => 'Lorem Ipsum',
		'transport'   => 'postMessage',
    ) );
    $wp_customize->add_control( 'footer_email', array(
		'label' => 'Email',
		'section' => 'footer',
		'settings' => 'footer_email',
		'type' => 'text',
    ) );
    $wp_customize->add_setting( 'footer_copyrights' , array(
		'default'     => 'Lorem Ipsum',
		'transport'   => 'postMessage',
    ) );
    $wp_customize->add_control( 'footer_copyrights', array(
		'label' => 'Copyrights',
		'section' => 'footer',
		'settings' => 'footer_copyrights',
		'type' => 'textarea',
    ) );
    $wp_customize->add_setting( 'footer_fb' , array(
		'default'     => 'Lorem Ipsum',
		'transport'   => 'postMessage',
    ) );
    $wp_customize->add_control( 'footer_fb', array(
		'label' => 'Facebook Link',
		'section' => 'footer',
		'settings' => 'footer_fb',
		'type' => 'text',
    ) );
    $wp_customize->add_setting( 'footer_tw' , array(
		'default'     => 'Lorem Ipsum',
		'transport'   => 'postMessage',
    ) );
    $wp_customize->add_control( 'footer_tw', array(
		'label' => 'Twitter Link',
		'section' => 'footer',
		'settings' => 'footer_tw',
		'type' => 'text',
    ) );
    $wp_customize->add_setting( 'footer_pint' , array(
		'default'     => 'Lorem Ipsum',
		'transport'   => 'postMessage',
    ) );
    $wp_customize->add_control( 'footer_pint', array(
		'label' => 'Pinterest Link',
		'section' => 'footer',
		'settings' => 'footer_pint',
		'type' => 'text',
		) );
		$wp_customize->add_setting( 'footer_instagram' , array(
			'default'     => 'Lorem Ipsum',
			'transport'   => 'postMessage',
			) );
			$wp_customize->add_control( 'footer_instagram', array(
			'label' => 'Instagram Link',
			'section' => 'footer',
			'settings' => 'footer_instagram',
			'type' => 'text',
			) );

		$wp_customize->add_setting( 'main_banner_image' , array(
			'transport'   => 'refresh',
			) );
			$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'main_banner_image',
				array(
					'label'      => __( 'Footer Image', 'theme_name' ),
					'section'    => 'footer',
					'settings'   => 'main_banner_image'
				)
			)
			);
}
