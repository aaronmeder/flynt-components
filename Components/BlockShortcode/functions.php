<?php

namespace Flynt\Components\BlockShortcode;

use Flynt\FieldVariables;
use Flynt\Utils\Options;

add_filter(
    'Flynt/addComponentData?name=BlockShortcode',
    function ($data) {
        return $data;
    }
);

function getACFLayout()
{
    return [
        'name' => 'BlockShortcode',
        'label' => 'Shortcode',
        'sub_fields' => [
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Shortcode', 'flynt'),
                'name' => 'shortcode',
                'type' => 'text',
                'required' => 1,
                'wpml_cf_preferences' => 3, // copy once
            ],
            [
              'label' => __('Options', 'flynt'),
              'name' => 'optionsTab',
              'type' => 'tab',
              'placement' => 'top',
              'endpoint' => 0
            ],
            [
              'label' => '',
              'name' => 'options',
              'type' => 'group',
              'layout' => 'row',
              'sub_fields' => [
                 // Add some options fields here
              ]
            ]
        ]
    ];
}
