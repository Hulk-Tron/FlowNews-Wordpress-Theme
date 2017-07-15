<?php

$custom_sidebars = flow_elated_get_custom_sidebars();

$sidebar_meta_box = flow_elated_add_meta_box(
    array(
        'scope' => array('page', 'portfolio-item', 'post'),
        'title' => 'Sidebar',
        'name' => 'sidebar_meta'
    )
);

    flow_elated_add_meta_box_field(
        array(
            'name'        => 'eltd_sidebar_meta',
            'type'        => 'select',
            'label'       => 'Layout',
            'description' => 'Choose the sidebar layout',
	        'default_value' => '',
            'parent'      => $sidebar_meta_box,
            'options'     => array(
						''			=> 'Default',
						'no-sidebar'		=> 'No Sidebar',
						'sidebar-33-right'	=> 'Sidebar 1/3 Right',
						'sidebar-25-right' 	=> 'Sidebar 1/4 Right',
						'sidebar-33-left' 	=> 'Sidebar 1/3 Left',
						'sidebar-25-left' 	=> 'Sidebar 1/4 Left',
					)
        )
    );

if(count($custom_sidebars) > 0) {
    flow_elated_add_meta_box_field(array(
        'name' => 'eltd_custom_sidebar_meta',
        'type' => 'selectblank',
        'label' => 'Choose Widget Area in Sidebar',
        'description' => 'Choose Custom Widget area to display in Sidebar"',
        'parent' => $sidebar_meta_box,
        'options' => $custom_sidebars
    ));
}
