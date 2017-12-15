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
class Recruit extends MY_Controller {

	private $class;
	private $folder;
	private $viewPath;
	private $subjectModel;
	private $documentModel;
	private $docDetailModel;
	private $classModel;
	private $newsModel;
	private $recruitModel;
	private $pageType;
	
    function __construct() {
        parent::__construct();
        $this->class = strtolower(get_class());
        $this->viewPath = 'frontend/recruit/';
        $this->subjectModel = 'e_subjects';
        $this->documentModel = 'e_documents';
        $this->docDetailModel = 'e_doc_details';
        $this->classModel = 'e_classes';
        $this->newsModel = 'e_news';
        $this->recruitModel = 'e_recruits';
        $this->pageType = 'recruit';
    }
    
    /**
     * View
     */
    public function view($new='') {
    	$permission = 1;//$this->check_permission($this->class, 'view');
    	$this->layout->set_layout_dir('views/frontend/layouts/');
    	$this->layout->set_layout('default');
    	
    	$listCss = array(
    			'static/default/admin/template/plugins/jstree/style.min.css'
    	);
    	$listJs = array(
    			'static/default/admin/template/plugins/jstree/jstree.min.js',
    			'static/default/admin/template/plugins/blockui/jquery.blockUI.js'
    	);
    	
    	$data = array(
    			'permission' => $permission,
    			'listJs' => add_Js($listJs),
    			'listCss' => add_css($listCss),
    			'uuid' => $this->pageType
    	);
    	
    	if(empty($new)){
    		$news = $this->db->select('id, modified, title, friendly, image, summary')
    		->from($this->recruitModel)
    		->where('deleted', 0)->get()->result_array();
    		$data['news'] = $news;
    		
    		$breadcrumb = array(
    				array(
    						'title' => lang('recruit'),
    						'url' => base_url().'tuyen-dung',
    						'class' => 'active'
    				)
    		);
    		$data['breadcrumb'] = $breadcrumb;
    		
    		$this->parser->parse($this->viewPath."view", $data);
    	} else{
    		$item = $this->db->select('id, modified, title, friendly, image, summary, content')
    		->from($this->recruitModel)->where('deleted', 0)
    		->where('friendly', $new)->get()->row();
    		$data['item'] = $item;
    		
    		$breadcrumb = array(
    				array(
    						'title' => lang('recruit'),
    						'url' => base_url().'tuyen-dung',
    						'class' => ''
    				),
    				array(
    						'title' => $item->title,
    						'url' => base_url().'tuyen-dung/'.$new,
    						'class' => 'active'
    				)
    		);
    		$data['breadcrumb'] = $breadcrumb;
    		
    		$this->parser->parse($this->viewPath."detail", $data);
    	}
    }
}
