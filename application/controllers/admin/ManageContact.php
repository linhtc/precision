<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * @package Admin
 *
 */
class ManageContact extends MY_Controller {

	private $class;
	private $numRow;
	private $contactModel;
	private $viewPath;
	
    function __construct() {
    	parent::__construct();
    	$this->class = strtolower(preg_replace('/(?<!^)([A-Z])/', '-\\1', get_class()));
        $this->numRows = 10;
        $this->contactModel = 'e_contacts';
        $this->viewPath = 'admin/contact/';
    }

    /**
     * View object
     */
    public function view() {
    	$permission = $this->check_permission($this->class, 'edit');
    	$method = $this->input->method();
    	
    	if($method === 'post'){ /*Submit form*/
    		$this->layout->disable_layout();
    		echo $this->modify(); exit;
    	}
    	/*--------------------Break--------------------*/
    	
    	$this->layout->set_layout_dir('views/admin/layouts/');
    	$this->layout->set_layout('default');
    	
    	
    	$item = $this->db->select('id, phone, email, address, maps')
    	->from($this->contactModel)
    	->get()
    	->row()
    	;
    	if(empty($item->id)){
    		redirect(base_url() . "admin/permission-denied");
    		exit;
    	}
    	
    	$listCss = array(
    			'static/default/admin/template/plugins/toastr/toastr.min.css',
    			'static/default/admin/template/plugins/bootstrap-select/bootstrap-select.min.css',
    	);
    	$listJs = array(
    			'static/default/admin/template/plugins/jstree/jstree.min.js',
    			'static/default/admin/template/plugins/toastr/toastr.min.js',
    			'static/default/admin/template/plugins/blockui/jquery.blockUI.js',
    			'static/default/admin/template/plugins/bootstrap-select/bootstrap-select.min.js',
    	);
    	$data = array(
    			'permission' => $permission,
    			'viewPath' => $this->viewPath,
    			'listJs' => add_Js($listJs),
    			'listCss' => add_css($listCss),
    			'item' => $item
    	);
    	$this->parser->parse($this->viewPath."view", $data);
    }
    
	/**
     * Modify data
     */
    public function edit(){
    	$id = $this->input->post('id', false);
    	$phone = $this->input->post('phone', false);
    	$email = $this->input->post('email', false);
    	$address = $this->input->post('address', false);
    	$maps = $this->input->post('maps', false);
    	$pullClass = array(
    			'modified' => date('Y-m-d H:i:s', time()),
    			'ipaddress' => $this->getClientIP(),
    			'phone' => $phone,
    			'email' => $email,
    			'address' => $address,
    			'maps' => $maps
    	);
    	$result = $this->db->where('id', $id)->update($this->contactModel, $pullClass);
    	echo $result ? $result : lang('execute_error');
    	exit;
    }

}
