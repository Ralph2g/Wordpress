<?php
/* ROLES */
require('roles.php');
/* ROLES */

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5f18311a9462a',
        'title' => 'Viaje',
        'fields' => array(
            array(
                'key' => 'field_5f18313442142',
                'label' => 'Destino',
                'name' => 'destino',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5f1831f1556b5',
                'label' => 'Vacunas obligatorias',
                'name' => 'vacunas_obligatorias',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5f183209556b6',
                'label' => 'Vacunas recomendadas',
                'name' => 'vacunas_recomendadas',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5f183215556b7',
                'label' => 'Transporte local',
                'name' => 'transporte_local',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5f183228556b8',
                'label' => 'Peligrosidad',
                'name' => 'peligrosidad',
                'type' => 'select',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'baja' => 'Baja',
                    'media' => 'Media',
                    'alta' => 'Alta',
                    'muy alta' => 'Muy Alta',
                ),
                'default_value' => false,
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'return_format' => 'value',
                'ajax' => 0,
                'placeholder' => '',
            ),
            array(
                'key' => 'field_5f183288556b9',
                'label' => 'Moneda Local',
                'name' => 'moneda_local',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'viaje',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    endif;

// Mostrando nuestros biajes en la API Rest

    add_action('rest_api_init', 'register_custom_fields');

function register_custom_fields()
{
    register_rest_field(
        'viaje',
        'destino',
        array(
            'get_callback' => 'show_fields'
        )
    );
    register_rest_field(
        'viaje',
        'vacunas_obligatorias',
        array(
            'get_callback' => 'show_fields'
        )
    );
    register_rest_field(
        'viaje',
        'vacunas_recomendadas',
        array(
            'get_callback' => 'show_fields'
        )
    );
    register_rest_field(
        'viaje',
        'transporte_local',
        array(
            'get_callback' => 'show_fields'
        )
    );
    register_rest_field(
        'viaje',
        'peligrosidad',
        array(
            'get_callback' => 'show_fields'
        )
    );
    register_rest_field(
        'viaje',
        'moneda_local',
        array(
            'get_callback' => 'show_fields'
        )
    );

}

function show_fields( $object, $field_name, $request ) {
  return get_post_meta( $object[ 'id' ], $field_name, true );
}