<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'typography_customization' => array(
		'title'   => esc_html__( 'Typography', 'breezycv' ),
		'type'    => 'tab',
		'options' => array(
			'typography_options' => array(
				'title'   => esc_html__( 'Typography', 'breezycv' ),
				'type'    => 'box',
				'options' => array(
					'body_typography' => array(
					    'type' => 'typography-v2',
					    'value' => array(
					        'family' => 'Poppins',
					        'style' => 'normal',
					        'weight' => 400,
					        'subset' => 'latin-ext',
					        'variation' => 'regular',
					        'size' => 15,
					        'line-height' => 1.75,
					        'letter-spacing' => 0,
					        'color' => '#666666',
					        'palettes' => array( '#666', '#d5d5d5' ),
					    ),
					    'components' => array(
					        'family'         => true,
					        'line-height'    => true,
					        'letter-spacing' => false,
					        'color'          => false,
					    ),
					    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
					    'label' => esc_html__('Body Text', 'breezycv'),
					    'desc'  => false,
					    'help'  => false,
					),
					'headings' => array(
					    'type' => 'typography-v2',
					    'value' => array(
					        'family' => 'Poppins',
					        'style' => 'normal',
					        'weight' => 600,
					        'subset' => 'latin-ext',
					        'variation' => '600',
					        'size' => 33,
					        'line-height' => 33,
					        'letter-spacing' => 0,
					        'color' => '#333333',
					    ),
					    'components' => array(
					        'family'         => true,
					        'size'           => false,
					        'line-height'    => false,
					        'letter-spacing' => false,
					        'color'          => false,
					    ),
					    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
					    'label' => esc_html__('Headings Font', 'breezycv'),
					    'desc'  => false,
					    'help'  => false,
					),
					'h1'                => array(
						'label' => esc_html__( 'H1 Size', 'breezycv' ),
						'type'  => 'typography',
						'value' => array(
							'size' => 32,
							'style'  => '400',
						),
						'components' => array(
					        'family' => false,
					        'size'   => true,
					        'style'  => true,
					        'color'  => false
					    ),
						'desc'  => esc_html__( 'H1 heading size',
							'breezycv' ),
					),
					'h2'                => array(
						'label' => esc_html__( 'H2 Size', 'breezycv' ),
						'type'  => 'typography',
						'value' => array(
							'size' => 24,
							'style'  => '400',
						),
						'components' => array(
					        'family' => false,
					        'size'   => true,
					        'style'  => true,
					        'color'  => false
					    ),
						'desc'  => esc_html__( 'H2 heading size',
							'breezycv' ),
					),
					'h3'                => array(
						'label' => esc_html__( 'H3 Size', 'breezycv' ),
						'type'  => 'typography',
						'value' => array(
							'size' => 18,
							'style'  => '400',
						),
						'components' => array(
					        'family' => false,
					        'size'   => true,
					        'style'  => true,
					        'color'  => false
					    ),
						'desc'  => esc_html__( 'H1 heading size',
							'breezycv' ),
					),
					'h4'                => array(
						'label' => esc_html__( 'H4 Size', 'breezycv' ),
						'type'  => 'typography',
						'value' => array(
							'size' => 16,
							'style'  => '400',
						),
						'components' => array(
					        'family' => false,
					        'size'   => true,
					        'style'  => true,
					        'color'  => false
					    ),
						'desc'  => esc_html__( 'H4 heading size',
							'breezycv' ),
					),
					'h5'                => array(
						'label' => esc_html__( 'H5 Size', 'breezycv' ),
						'type'  => 'typography',
						'value' => array(
							'size' => 14,
							'style'  => '400',
						),
						'components' => array(
					        'family' => false,
					        'size'   => true,
					        'style'  => true,
					        'color'  => false
					    ),
						'desc'  => esc_html__( 'H5 heading size',
							'breezycv' ),
					),
					'h6'                => array(
						'label' => esc_html__( 'H6 Size', 'breezycv' ),
						'type'  => 'typography',
						'value' => array(
							'size' => 12,
							'style'  => '400',
						),
						'components' => array(
					        'family' => false,
					        'size'   => true,
					        'style'  => true,
					        'color'  => false
					    ),
						'desc'  => esc_html__( 'H6 heading size',
							'breezycv' ),
					),

				)
			),
		)
	)
);