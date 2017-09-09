<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Books
 *
 * @author CPU10890-local
 */
class Contact extends MY_Controller {

	private $class;
	private $viewPath;
	private $contactModel;
	private $subjectModel;
	private $pageType;
	
    function __construct() {
        parent::__construct();
        $this->class = strtolower(get_class());
        $this->viewPath = 'frontend/contact/';
        $this->contactModel = 'e_contacts';
        $this->subjectModel = 'e_subjects';
        $this->pageType = 'contact';
    }

    /**
     * View
     */
    public function view() {
        $this->layout->set_layout_dir('views/frontend/layouts/');
        $this->layout->set_layout('default');

        $listCss = array(
        		
        );
        $listJs = array(
        	
        );
        
        $data = array(
            'listJs' => add_Js($listJs),
        		'listCss' => add_css($listCss),
        		'uuid' => 'contact',
        		'uuid' => $this->pageType
        );
        
        $breadcrumb = array(
        		array(
        				'title' => lang('contact'),
        				'url' => base_url().'lien-he',
        				'class' => 'active'
        		)
        );
        $data['breadcrumb'] = $breadcrumb;

        $this->parser->parse($this->viewPath."view", $data);
    }
}
