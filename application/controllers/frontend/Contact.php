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
	
	/**
	 * Send mail
	 */
	public function message(){
		$name = $this->input->post('name', true);
		$email = $this->input->post('email', true);
		$phone = $this->input->post('phone', true);
		$message = $this->input->post('message', true);
		
		if(!empty($name) && !empty($email) && !empty($phone) && !empty($message)){
			$userClass = new stdClass();
			$userClass->name = $name;
			$userClass->email = $email;
			$userClass->phone = $phone;
			$userClass->message = $message;
			
			$this->load->helper('mobiistar_helper');
			$rs = sendmailmessage($userClass);
			echo $rs ? 'MF000' : 'MF255'; exit;
		}
		echo 'MF255'; exit;
	}
}
