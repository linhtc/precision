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
class NewClass extends MY_Controller {

	private $class;
	private $viewPath;
	private $pageModel;
	private $pageType;
	private $subjectModel;
	private $newClassModel;
	
    function __construct() {
        parent::__construct();
        $this->class = strtolower(get_class());
        $this->viewPath = 'frontend/newclass/';
        $this->pageModel = 'e_pages';
        $this->pageType = 'newclass';
        $this->subjectModel = 'e_subjects';
        $this->newClassModel = 'e_new_classes';
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
        				'title' => lang('newclass'),
        				'url' => base_url().'lop-moi',
        				'class' => 'active'
        		)
        );
        $data['breadcrumb'] = $breadcrumb;
        
        $list = $this->db->select('*')->from($this->newClassModel)->where('deleted', 0)
        ->order_by('id', 'desc')->get()->result_array();
        $data['list'] = $list;

        $this->parser->parse($this->viewPath."view", $data);
    }
}
