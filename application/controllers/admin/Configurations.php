<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Configurations extends MY_Controller {
	
	private $configModel;
	
	function __construct() {
        parent::__construct();
        $this->class = strtolower(get_class());
        $this->numRows = 10;
        $this->configModel = 'sys_configurations';
        $this->viewPath = 'admin/configurations/';
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

        $campaignList = array();//$this->db->select('id, campaign_name `name`')->from($this->campaignModel)->where('status', 1)->get()->result_array();

        $data = array(
            'campaignList' => $campaignList,
            'permission' => $permission,
            'listJs' => add_Js($listJs),
            'listCss' => add_css($listCss),
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

        $campaignList = array();//$this->db->select('id, campaign_name `name`')->from($this->campaignModel)->where('status', 1)->get()->result_array();

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
            'campaignList' => $campaignList,
            'listJs' => add_Js($listJs),
            'listCss' => add_css($listCss),
        );
        $this->parser->parse($this->viewPath."add", $data);
    }

    /**
     * Edit object
     */
    public function edit($id='') {
        $permission = $this->check_permission($this->class, 'edit');
        $method = $this->input->method();

        if($method === 'post'){ /*Submit form*/
            $this->layout->disable_layout();
            echo $this->modify(); exit;
        }
        /*--------------------Break--------------------*/

        $this->layout->set_layout_dir('views/admin/layouts/');
        $this->layout->set_layout('default');


        $objCnf = $this->db->select('`id`, `apply_key`, `apply_value`, `apply_name`')
            ->from($this->configModel)
            ->where('id', $id)
            ->get()
            ->row_array()
        ;

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
            'objCnf' => $objCnf,
            'listJs' => add_Js($listJs),
            'listCss' => add_css($listCss),
        );
        $this->parser->parse($this->viewPath."edit", $data);
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
            $result = $this->db->where('id', $id)->update($this->configModel, $pullClass);
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

        $page = $this->input->post('page', true);
        $sort = $this->input->post('sort', true);
        $type = $this->input->post('type', true);
        $start = ($page-1)*$this->numRows;
        $query = "select `id`, `apply_key`, `apply_value`, `apply_value2`, `apply_name`  from ".$this->configModel.' cnf';
        $query .= $this->criteria();
        $num = $this->db->query($query)->num_rows();
//        $query .= " order by `".(empty($sortMaps[$sort]) ? 'id' : $sortMaps[$sort]) ."` ".$type;
        $query .= " limit $start, ".$this->numRows;
//        echo $query; exit;
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
     * Create criteria string for query
     */
    function criteria(){
        $campaigns = $this->input->post('campaign', true);
        $id = $this->input->post('id', true);
        $key = $this->input->post('key', true);
        $name = $this->input->post('name', true);
        $value = $this->input->post('value', true);
        $criteria = " where deleted = 0 ";
        if(is_array($campaigns) && count($campaigns)){
            $mdString = '';
            foreach($campaigns as $campaign){
                $mdString .= ($mdString == "" ? "" : ",")."'$campaign'";
            }
            $criteria .= " AND campaign IN($mdString) ";
        }
        if(!empty($id)){
            $criteria .= " AND id = '$id' ";
        }
        if(!empty($key)){
            $criteria .= " AND apply_key like '%$key%' ";
        }
        if(!empty($name)){
            $criteria .= " AND apply_name like '%$name%' ";
        }
        if($value != ''){
            $criteria .= " AND apply_value like '%$value%' ";
        }
        return $criteria;
    }

    /**
     * Modify data
     */
    function modify(){
        $key = $this->input->post('apply_key', true);
        $name = $this->input->post('apply_name', true);
        $value = $this->input->post('apply_value', true);
        $value2 = $this->input->post('apply_value2', true);
        if(!empty($key)){
            $query = "
                INSERT INTO `".$this->configModel."` (`apply_key`, `apply_name`, `apply_value`, `apply_value2`, `created`, `modified`)
                VALUES ('".addslashes($key)."', '".addslashes($name)."', 
					'".addslashes($value)."', '".addslashes($value2)."', NOW(), NOW())
                ON DUPLICATE KEY UPDATE `apply_value` = '".addslashes($value)."', `apply_value2` = '".addslashes($value2)."', 
					`apply_name` = '".addslashes($name)."', `modified` = NOW();
            ";
            $result = $this->db->query($query);
            return $result ? $result : 'Thực hiện không thành công!';
        }
        return 'Thực hiện không thành công!';
    }

}
