<?php
new \Kirki\Panel(
    'master_panel_id',
    [
        'priority'    => 10,
        'title'       => esc_html__('Master options', 'master'),
        'description' => esc_html__('Master Description.', 'master'),
    ]
);

function logo_section()
{
    new \Kirki\Section(
        'logo_section_id',
        [
            'title'       => esc_html__('My Logo Section', 'master'),
            'description' => esc_html__('My Section Description.', 'master'),
            'panel'       => 'master_panel_id',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'logo_url',
            'label'       => esc_html__('Image Control (URL)', 'master'),
            'description' => esc_html__('The saved value will be the URL.', 'master'),
            'section'     => 'logo_section_id',
            'default'     => get_template_directory_uri() . '/assets/img/logo.png',
        ]
    );
}
logo_section();
