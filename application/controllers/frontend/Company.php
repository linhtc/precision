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
class Company extends MY_Controller {

	private $class;
	private $pageType;
	private $listModel;
	private $photoModel;
	private $viewPath;
	
    function __construct() {
        parent::__construct();
        $this->class = strtolower(get_class());
        $this->listModel = 'sys_lists';
        $this->photoModel = 'sys_photos';
        $this->pageType = 'company';
        $this->viewPath = 'frontend/'.$this->pageType.'/';
    }

    /**
     * View
     */
    public function view() {
        $this->layout->set_layout_dir('views/frontend/layouts/');
        $this->layout->set_layout('default');

        $listCss = array(
        		'static/default/template/lightbox/css/lightbox.css',
        );
        $listJs = array(
        		'static/default/template/lightbox/js/lightbox.js',
        );
        
        $finalList = new stdClass();
        
        $listing = $this->db->select('page_type k, page_content v1, page_content2 v2')
        ->from($this->listModel)
        ->where('deleted', 0)->like('page_type', $this->pageType.'_', 'after')
        ->order_by('sort', 'asc')
        ->get()->result();
        foreach($listing as $item){
        	if(!isset($finalList->{$item->k})){
        		$finalList->{$item->k} = array();
        	}
        	array_push($finalList->{$item->k}, $item);
        }
        
        $finalPhoto = new stdClass();
        
        $listing = $this->db->select('page_type k, page_content v1, page_content2 v2, page_content3 v3')
        ->from($this->photoModel)
        ->where('deleted', 0)->like('page_type', $this->pageType.'_', 'after')
        ->order_by('sort', 'asc')
        ->get()->result();
        foreach($listing as $item){
        	if(!isset($finalPhoto->{$item->k})){
        		$finalPhoto->{$item->k} = array();
        	}
        	array_push($finalPhoto->{$item->k}, $item);
        }
//         print_r(json_encode($finalPhoto)); exit;
        
        $data = array(
            'listJs' => add_Js($listJs),
        		'listCss' => add_css($listCss),
        		'uuid' => $this->pageType,
        		'finalList' => $finalList,
        		'finalPhoto' => $finalPhoto
        );

        $this->parser->parse($this->viewPath."view", $data);
    }
}
