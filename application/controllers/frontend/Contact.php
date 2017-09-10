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
	private $pageType;
	private $viewPath;
	
	function __construct() {
		parent::__construct();
		$this->class = strtolower(get_class());
		$this->pageType = 'contact';
		$this->viewPath = 'frontend/'.$this->pageType.'/';
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
				'uuid' => $this->pageType
		);
		
		$this->parser->parse($this->viewPath."view", $data);
	}
}
