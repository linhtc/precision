<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * @package Admin
 *
 */
class ManageStudentRegis extends MY_Controller {

	private $class;
	private $numRow;
	private $classModel;
	private $studentRegisModel;
	private $requirementModel;
	private $viewPath;
	
    function __construct() {
    	parent::__construct();
    	$this->class = strtolower(preg_replace('/(?<!^)([A-Z])/', '-\\1', get_class()));
        $this->numRows = 10;
        $this->classModel = 'e_classes';
        $this->studentRegisModel = 'e_regis_students';
        $this->requirementModel= 'e_regis_requirements';
        $this->viewPath = 'admin/studentregis/';
    }

    /**
     * View
     */
    public function view() {
        $permission = $this->check_permission($this->class, 'view');
        $this->layout->set_layout_dir('views/admin/layouts/');
        $this->layout->set_layout('default');

        $listCss = array(
            'static/default/template/datepicker/css/bootstrap-datetimepicker.min.css',
            'static/default/admin/template/plugins/datatables/media/css/dataTables.bootstrap.min.css',
            'static/default/admin/template/plugins/datatables/extensions/buttons/css/buttons.dataTables.min.css',
            'static/default/admin/template/plugins/toastr/toastr.min.css',
            'static/default/admin/template/plugins/bootstrap-select/bootstrap-select.min.css',

            'static/default/admin/template/css/opt.min.css',
        );
        $listJs = array(
            'static/default/template/mask/jquery.mask.js',
            'static/default/template/datepicker/js/moment.js',
            'static/default/template/datepicker/js/moment-with-locales.js',
            'static/default/template/datepicker/js/bootstrap-datetimepicker.min.js',
            'static/default/admin/template/plugins/bootpag/jquery.bootpag.min.js',
            'static/default/admin/template/plugins/toastr/toastr.min.js',
            'static/default/admin/template/plugins/blockui/jquery.blockUI.js',
            'static/default/admin/template/plugins/datatables/media/js/jquery.dataTables.min.js',
            'static/default/admin/template/plugins/datatables/media/js/dataTables.bootstrap.min.js',
            'static/default/admin/template/plugins/datatables/extensions/responsive/js/dataTables.responsive.min.js',
            'static/default/admin/template/plugins/datatables/extensions/buttons/js/dataTables.buttons.min.js',
            'static/default/admin/template/plugins/datatables/extensions/buttons/js/buttons.flash.min.js',
            'static/default/admin/template/plugins/datatables/extensions/buttons/js/jszip.min.js',
            'static/default/admin/template/plugins/datatables/extensions/buttons/js/pdfmake.min.js',
            'static/default/admin/template/plugins/datatables/extensions/buttons/js/vfs_fonts.js',
            'static/default/admin/template/plugins/datatables/extensions/buttons/js/buttons.html5.min.js',
            'static/default/admin/template/plugins/datatables/extensions/buttons/js/buttons.print.min.js',
            'static/default/admin/template/plugins/confirmation/bootstrap-confirmation.min.js',
            'static/default/admin/template/plugins/bootstrap-select/bootstrap-select.min.js',

            'static/default/admin/template/js/opt.min.js',
        );
        
        $rHtml = '<option value=""></option>';
        $subjectList = $this->db->select('id, requirement')->from($this->requirementModel)->where('deleted', 0)/* ->order_by('subject', 'asc') */->get()->result();
        if($subjectList){
        	foreach($subjectList as $item){
        		$rHtml.= '<option value="'.$item->requirement.'">'.$item->requirement.'</option>';
        	}
        }
        
        $cHtml = '';
        $classList = $this->db->select('id, class')->from($this->classModel)->where('deleted', 0)/* ->order_by('subject', 'asc') */->get()->result();
        if($classList){
        	foreach($classList as $item){
        		$cHtml .= '<option value="'.$item->id.'">'.$item->class.'</option>';
        	}
        }
        
        $stHtml = '<option value="0">'.lang('not_done').'</option><option value="1">'.lang('done').'</option>';

        $data = array(
            'permission' => $permission,
            'listJs' => add_Js($listJs),
        		'listCss' => add_css($listCss),
        		'requirement' => $rHtml,
        		'class' => $cHtml,
        		'status' => $stHtml
        );

        $this->parser->parse($this->viewPath."view", $data);
    }

    /**
     * Add object
     */
    public function add() {
        $permission = $this->check_permission($this->class, 'add');
        $method = $this->input->method();

        if($method === 'post'){ /*Submit form*/
            $this->layout->disable_layout();
            echo $this->modify(); exit;
        }
        /*--------------------Break--------------------*/

        $this->layout->set_layout_dir('views/admin/layouts/');
        $this->layout->set_layout('default');

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
            'viewPath' => $this->viewPath,
            'permission' => $permission,
            'listJs' => add_Js($listJs),
            'listCss' => add_css($listCss)
        );
        $this->parser->parse($this->viewPath."add", $data);
    }

    /**
     * Edit object
     */
    public function edit($id='') {
    	$permission = $this->check_permission($this->class, 'edit');
    	$method = $this->input->method();
    	
    	if(!empty($id)){
    		$id = $this->unmask($id);
    	}
    	
    	if($method === 'post'){ /*Submit form*/
    		$this->layout->disable_layout();
    		echo $this->modify(); exit;
    	}
    	/*--------------------Break--------------------*/
    	
    	$this->layout->set_layout_dir('views/admin/layouts/');
    	$this->layout->set_layout('default');
    	
    	
    	$item = $this->db->select('id, class')
    	->from($this->classModel)
    	->where('id', $id)
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
    	$this->parser->parse($this->viewPath."edit", $data);
    }

    /**
     * Done object
     */
    public function done() {
    	$permission = $this->check_permission($this->class, 'edit');
    	
    	$this->layout->disable_layout();
    	
    	$id = $this->input->post('id', false);
    	$pullClass = array(
    		'modified' => date('Y-m-d H:i:s', time()),
    		'done' => 1
    	);
    	echo $this->db->where('id', $id)->update($this->studentRegisModel, $pullClass);
    	exit;
    }
    
	/**
     * Delete object
     */
    public function delete() {
        $this->check_permission($this->class, 'delete');
        $this->layout->disable_layout();

        $id = $this->input->post('id', true);
        if(!empty($id)){
            $pullClass = array('deleted' => 1);
            $result = $this->db->where('id', $id)->update($this->classModel, $pullClass);
            echo $result; exit;
        }
        echo 0; exit;
    }
    
	/**
     * Get data with ajax
     */
    public function data() {
        $permission = $this->check_permission($this->class, 'view');
        $this->layout->disable_layout();

        $sortMaps = array('id', 'modified', 'fullname', 'address', 'email', 'phone', 'class', 'subjects', 'requirement_teachers', 'notes', 'done');
        $page = $this->input->post('page', true);
        $sort = $this->input->post('sort', true);
        $type = $this->input->post('type', true);
        $numRows = $this->input->post('auto', true);
        if(!empty($numRows) && $numRows > 10 && $numRows < 101){ $this->numRows = $numRows; }
        $start = ($page-1)*$this->numRows;
        $query = "select `id`, `modified`, `ipaddress`, `fullname`, `address`, (select c.class from $this->classModel c where c.id = o.class) classname,
			`email`, `phone`, `subjects`, `requirement_teachers`, `notes`, `done` from ".$this->studentRegisModel. " o ";
        $query .= $this->criteria();
        $num = $this->db->query($query)->num_rows();
        $query .= " order by `".(empty($sortMaps[$sort]) ? 'id' : $sortMaps[$sort]) ."` ".$type;
        $query .= " limit $start, ".$this->numRows;
        $list = $this->db->query($query)->result_array();
        $this->smarty->assign('list', $list);
        $this->smarty->assign('permission', $permission);
        $html = $this->smarty->fetch($this->viewPath."data.tpl");

        $response = new stdClass();
        $response->html = $html;
        $response->num = ceil($num/$this->numRows);
        $response->total = $num;
        $response->page = $page;
        $response->sort = $sort;
        $response->type = $type;
        echo json_encode($response); exit;
    }

    /**
     * Export data with ajax
     */
    public function export() {
        $this->check_permission($this->class, 'export');
        $this->layout->disable_layout();

        $sortMaps = array('id', 'modified', 'fullname', 'address', 'email', 'phone', 'class', 'subjects', 'requirement_teachers', 'notes', 'done');
        $sort = $this->input->get_post('sort', true);
        $type = $this->input->get_post('type', true);

        $query = "select `id`, `modified`, `fullname`, `address`, (select c.class from $this->classModel c where c.id = o.class) classname,
        `email`, `phone`, `subjects`, `requirement_teachers`, `notes`, `done` from ".$this->studentRegisModel. " o ";
        $query .= $this->criteria();
        $query .= " order by `".(empty($sortMaps[$sort]) ? 'id' : $sortMaps[$sort]) ."` ".$type;
        $list = $this->db->query($query)->result_array();
        $header = array( array(
            'id' => lang('id'),
        	'modified' => lang('last_update'),
        	'fullname' => lang('fullname'),
        	'address' => lang('address'),
        	'email' => lang('email'),
        	'phone' => lang('phone'),
        	'classname' => lang('class'),
        	'subjects' => lang('subjects'),
        	'requirement_teachers' => lang('requirement'),
        	'notes' => lang('note'),
        	'done' => lang('done')
        ));
        $this->excel($header, $list);
        exit;
    }
    
	/**
     * Create criteria string for query
     */
    private function criteria(){
    	$id = $this->input->get_post('id', true);
    	$time = $this->input->get_post('dt', true);
        $ip = $this->input->get_post('ip', true);
        $fullname = $this->input->get_post('fu', true);
        $address = $this->input->get_post('ad', true);
        $phone = $this->input->get_post('ph', true);
        $email = $this->input->get_post('em', true);
        $class = $this->input->get_post('cl', true);
        $subject = $this->input->get_post('su', true);
        $requirement = $this->input->get_post('re', true);
        $note = $this->input->get_post('no', true);
        $status = $this->input->get_post('st', true);
        if(!empty($status) && !is_array($status)){
        	$status= explode(',', $status);
        }
        if(!empty($class) && !is_array($class)){
        	$class = explode(',', $class);
        }
        $modified = explode(' - ', $time);
        $to = null; $from = null;

        $criteria = " where `deleted` = 0 ";
        if(!empty($id)){
        	$criteria .= " AND `id` = '".addslashes($class)."' ";
        }
        if(is_array($modified)){
            if(count($modified) === 2){
                $from = $modified[0];
                $to = $modified[1];
            }
            if(count($modified) === 1){
                $from = $modified[0];
            }
        }
        if(!empty($from)){
            $from = date('Y-m-d', strtotime($from));
            $criteria .= " AND `modified` >= '$from 00:00:00' ";
        }
        if(!empty($to)){
            $to = date('Y-m-d', strtotime($to));
            $criteria .= " AND `modified` <= '$to 23:59:59' ";
        }
        if(!empty($ip)){
        	$criteria .= " AND `ipaddress` like '%".addslashes($ip)."%' ";
        }
        if(!empty($fullname)){
        	$criteria .= " AND `fullname` like '%".addslashes($fullname)."%' ";
        }
        if(!empty($address)){
        	$criteria .= " AND `address` like '%".addslashes($address)."%' ";
        }
        if(!empty($phone)){
        	$criteria .= " AND `phone` like '%".addslashes($phone)."%' ";
        }
        if(!empty($email)){
        	$criteria .= " AND `email` like '%".addslashes($email)."%' ";
        }
        if(is_array($class) && count($class)){
        	$tmpString = '';
        	foreach($class as $item){ $tmpString .= ($tmpString == "" ? "" : ",")."'$item'"; }
        	$criteria .= " AND `class` IN($tmpString) ";
        }
        if(!empty($subject)){
        	$criteria .= " AND `subjects` like '%".addslashes($subject)."%' ";
        }
        if(!empty($requirement)){
        	$criteria .= " AND `requirement_teachers` like '%".addslashes($requirement)."%' ";
        }
        if(!empty($note)){
        	$criteria .= " AND `notes` like '%".addslashes($note)."%' ";
        }
        if(is_array($status) && count($status)){
        	$tmpString = '';
        	foreach($status as $item){ $tmpString .= ($tmpString == "" ? "" : ",")."'$item'"; }
        	$criteria .= " AND `done` IN($tmpString) ";
        }
        return $criteria;
    }
    
	/**
     * Modify data
     */
    private function modify(){
        $id = $this->input->post('id', false);
        $class = $this->input->post('class', false);
        if(!empty($class)){
        	$ip = $this->getClientIP();
            $query = "
                INSERT INTO `".$this->classModel."` (".(!empty($id) ? '`id`, ' : '')."`created`, `modified`, `ipaddress`, `class`) 
                VALUES (".(!empty($id) ? $id.', ' : '')."NOW(), NOW(), '".addslashes($ip)."', '".addslashes($class)."')
                ON DUPLICATE KEY UPDATE `ipaddress` = VALUES(ipaddress), `class` = VALUES(class), `deleted` = VALUES(deleted), modified = VALUES(modified)
                ;
            ";
            $result = $this->db->query($query);
            return $result ? $result : lang('execute_error');
        }
        return lang('execute_error');
    }
    
	/**
     * Create excel
     * Using & to point to mem
     */
    private function excel(&$header, &$list){
        $this->load->helper('mobiistar_helper');
        
        //load our new PHPExcel library
        $this->load->library('excel');
        //activate worksheet number 1
        $this->excel->setActiveSheetIndex(0);
        //name the worksheet
        $this->excel->getActiveSheet()->setTitle('Data');

        $list_all = array_merge($header, $list);
        // read data to active sheet
        $this->excel->getActiveSheet()->fromArray($list_all);

        $filename = 'Data_'.$this->class.'_'.time().'.xlsx'; //save our workbook as this file name

        header('Content-Type: application/vnd.ms-excel'); //mime type

        header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name

        header('Cache-Control: max-age=0'); //no cache

        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format

        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel2007');

        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');

    }

}
