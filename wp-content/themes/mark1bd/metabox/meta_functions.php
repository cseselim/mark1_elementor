<?php 

	$prefix = "_metabox_";
	function First_meta_box(array $custombox){
		$custombox[] = array(
			'id' => 'first_section',
			'title' => 'Some write about post type',
			'object_types' => array('team'),
			'fields' => array(
				array(
					'name' => 'Designation',
					'type' => 'text',
					'id'   => 'designation',
				),
				array(
					'name' => 'Facebook_URL',
					'type' => 'text_url',
					'id'   => 'facebook',
				),
				array(
					'name' => 'Twitter_URL',
					'type' => 'text_url',
					'id'   => 'twitter',
				),
				array(
					'name' => 'linkedin_URL',
					'type' => 'text_url',
					'id'   => 'linkedin',
				),
				
			),


		);
		return $custombox;
	}
	add_action('cmb2_meta_boxes','First_meta_box');






	$prefix = "_metabox_";
	function client_meta_box(array $custombox){
		$custombox[] = array(
			'id' => 'client_section',
			'title' => 'Some write about post type',
			'object_types' => array('client'),
			'fields' => array(
				
				array(
					'name' => 'Client_URL',
					'type' => 'text_url',
					'id'   => 'client',
				),
				
			),


		);
		return $custombox;
	}
	add_action('cmb2_meta_boxes','client_meta_box');





	$prefix = "_metabox_";
	function project_meta_box(array $custombox){
		$custombox[] = array(
			'id' => 'project_section',
			'title' => 'Some write about post type',
			'object_types' => array('project','post'),
			'fields' => array(
				
				array(
					'name' => 'Project client',
					'type' => 'text',
					'id'   => 'project',
				),
				
			),


		);
		return $custombox;
	}
	add_action('cmb2_meta_boxes','project_meta_box');




