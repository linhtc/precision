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
class Register extends MY_Controller {

	private $class;
	private $folder;
	private $viewPath;
	private $pageModel;
	private $pageType;
	private $subjectModel;
	private $classModel;
	private $regisStudentModel;
	private $regisTeacherModel;
	private $requirementModel;
	
    function __construct() {
        parent::__construct();
        $this->class = strtolower(get_class());
        $this->viewPath = 'frontend/register/';
        $this->folder = 'home';
        $this->pageModel = 'e_pages';
        $this->pageType = 'register';
        $this->subjectModel = 'e_subjects';
        $this->classModel = 'e_classes';
        $this->regisStudentModel = 'e_regis_students';
        $this->regisTeacherModel= 'e_regis_teachers';
        $this->requirementModel= 'e_regis_requirements';
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
    					'title' => lang('register'),
    					'url' => base_url().'dang-ky',
    					'class' => 'active'
    			)
    	);
    	$data['breadcrumb'] = $breadcrumb;
    	
    	$this->parser->parse($this->viewPath."view", $data);
    }
    
    /**
     * Teacher
     */
    public function teacher() {
    	$permission = 1;//$this->check_permission($this->class, 'view');
    	$this->layout->set_layout_dir('views/frontend/layouts/');
    	$this->layout->set_layout('default');
    	
    	$listCss = array(
    			'static/default/admin/template/plugins/toastr/toastr.min.css',
    			'static/default/admin/template/plugins/bootstrap-select/bootstrap-select.min.css',
    	);
    	$listJs = array(
    			'static/default/admin/template/plugins/toastr/toastr.min.js',
    			'static/default/admin/template/plugins/blockui/jquery.blockUI.js',
    			'static/default/admin/template/plugins/bootstrap-select/bootstrap-select.min.js',
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
    					'title' => lang('register'),
    					'url' => base_url().'dang-ky',
    					'class' => ''
    			),
    			array(
    					'title' => lang('teacher_regis'),
    					'url' => base_url().'dang-ky/lam-gia-su',
    					'class' => 'active'
    			)
    	);
    	$data['breadcrumb'] = $breadcrumb;
    	
    	$classList = $this->db->select('id, class')->from($this->classModel)->where('deleted', 0)->get()->result();
    	$data['classList'] = $classList;
    	
    	$subjectList = $this->db->select('id, subject')->from($this->subjectModel)->where('deleted', 0)->get()->result();
    	$data['subjectList'] = $subjectList;
    	
    	$requirementList= $this->db->select('id, requirement')->from($this->requirementModel)->where('deleted', 0)->get()->result();
    	$data['requirementList'] = $requirementList;
    	
    	$this->parser->parse($this->viewPath."teacher", $data);
    }
    
    /**
     * Student
     */
    public function student() {
    	$permission = 1;//$this->check_permission($this->class, 'view');
    	$this->layout->set_layout_dir('views/frontend/layouts/');
    	$this->layout->set_layout('default');
    	
    	$listCss = array(
    			'static/default/admin/template/plugins/toastr/toastr.min.css',
    			'static/default/admin/template/plugins/bootstrap-select/bootstrap-select.min.css',
    	);
    	$listJs = array(
    			'static/default/admin/template/plugins/toastr/toastr.min.js',
    			'static/default/admin/template/plugins/blockui/jquery.blockUI.js',
    			'static/default/admin/template/plugins/bootstrap-select/bootstrap-select.min.js',
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
    					'title' => lang('register'),
    					'url' => base_url().'dang-ky',
    					'class' => ''
    			),
    			array(
    					'title' => lang('student_regis'),
    					'url' => base_url().'dang-ky/tim-gia-su',
    					'class' => 'active'
    			)
    	);
    	$data['breadcrumb'] = $breadcrumb;
    	
    	$classList = $this->db->select('id, class')->from($this->classModel)->where('deleted', 0)->get()->result();
    	$data['classList'] = $classList;
    	
    	$this->parser->parse($this->viewPath."student", $data);
    }
    
    /**
     * Student regis studentregis
     */
    public function studentregis(){
    	$pullClass = $this->input->post();
    	$result = $this->db->insert($this->regisStudentModel, $pullClass);
    	echo $result ? $result : lang('execute_error');
    	exit;
    }
    
    /**
     * Teacher regis teacherregis
     */
    public function teacherregis(){
    	$pullClass = $this->input->post();
    	//     	print_r($pullClass); exit;
    	if(isset($pullClass['classes'])){
    		$pullClass['classes'] = json_encode($pullClass['classes']);
    	}
    	if(isset($pullClass['subjects'])){
    		$pullClass['subjects'] = json_encode($pullClass['subjects']);
    	}
    	$result = $this->db->insert($this->regisTeacherModel, $pullClass);
    	echo $result ? $result : lang('execute_error');
    	exit;
    }
}
