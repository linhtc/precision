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
class Introduction extends MY_Controller {

	private $class;
	private $folder;
	private $viewPath;
	private $pageModel;
	private $pageType;
	private $subjectModel;
	
    function __construct() {
        parent::__construct();
        $this->class = strtolower(get_class());
        $this->viewPath = 'frontend/introduction/';
        $this->folder = 'home';
        $this->pageModel = 'e_pages';
        $this->pageType = 'introduction';
        $this->subjectModel = 'e_subjects';
    }
    
    /**
     * View
     */
    public function view() {
        $permission = 1;//$this->check_permission($this->class, 'view');
        $this->layout->set_layout_dir('views/frontend/layouts/');
        $this->layout->set_layout('default');

        $listCss = array(
        		
        );
        $listJs = array(
        		
        );
        
        $item = $this->db->select('id, page_content')
        ->from($this->pageModel)
        ->where('page_type', $this->pageType)
        ->get()
        ->row()
        ;
        
        $data = array(
            'permission' => $permission,
            'listJs' => add_Js($listJs),
        		'listCss' => add_css($listCss),
        		'item' => $item,
        		'uuid' => $this->pageType
        );
        
        $breadcrumb = array(
        		array(
        				'title' => lang('introduction'),
        				'url' => base_url().'gioi-thieu',
        				'class' => 'active'
        		)
        );
        $data['breadcrumb'] = $breadcrumb;

        $this->parser->parse($this->viewPath."view", $data);
    }
}
