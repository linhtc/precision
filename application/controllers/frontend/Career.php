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
class Career extends MY_Controller {

	private $class;
	private $pageType;
	private $careerModel;
	private $viewPath;
	private $subTitle;
	
    function __construct() {
        parent::__construct();
        $this->class = strtolower(get_class());
        $this->careerModel = 'sys_careers';
        $this->pageType = 'career';
        $this->viewPath = 'frontend/'.$this->pageType.'/';
        $this->subTitle = get_class();
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
        
        $listing = $this->db->select('`page_job` j, `page_time` t, `page_pos` p, `page_require` r, `page_quantity` q')
        ->from($this->careerModel)
        ->where('deleted', 0)
        ->order_by('id', 'desc')
        ->get()->result();
        
        $data = array(
            'listJs' => add_Js($listJs),
        		'listCss' => add_css($listCss),
        		'uuid' => $this->pageType,
        		'subtitle' => $this->subTitle,
        		'careerList' => $listing
        );

        $this->parser->parse($this->viewPath."view", $data);
    }
}
