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
class Languages extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->class = strtolower(get_class());
        $this->numRows = 10;
        $this->brandModel = 'brands';
        $this->langModel = 'sys_languages';
        $this->viewPath = 'admin/languages/';
    }

    /**
     * View
     */
    public function view() {
        $permission = $this->check_permission($this->class, 'view');
        $this->layout->set_layout_dir('views/admin/layouts/');
        $this->layout->set_layout('default');

        $listCss = array(
//            'static/default/template/datepicker/css/bootstrap-datetimepicker.min.css',
            'static/default/admin/template/plugins/datatables/media/css/dataTables.bootstrap.min.css',
            'static/default/admin/template/plugins/datatables/extensions/buttons/css/buttons.dataTables.min.css',

            'static/default/admin/template/plugins/toastr/toastr.min.css',
            'static/default/admin/template/plugins/bootstrap-select/bootstrap-select.min.css',
//            'static/default/admin/template/plugins/datetimepicker/jquery.datetimepicker.css',

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

        $lHtml = '
			<option value="">---</option>
			<option value="home">'.lang('home').'</option>
			<option value="company">'.lang('company').'</option>
			<option value="rd">'.lang('rd').'</option>
			<option value="product_and_service">'.lang('product_and_service').'</option>
			<option value="project">'.lang('project').'</option>
			<option value="contact">'.lang('contact').'</option>
		';
        $data = array(
            'permission' => $permission,
            'listJs' => add_Js($listJs),
            'listCss' => add_css($listCss),
            'lHtml' => $lHtml
        );

        $this->parser->parse($this->viewPath."view", $data);
    }

    /**
     * Get data with ajax
     */
    public function data() {
        $permission = $this->check_permission($this->class, 'view');
        $this->layout->disable_layout();

        $sortMaps = array('id', 'modified', 'kind', 'lang', 'vi', 'en');
        $page = $this->input->post('page', true);
        $sort = $this->input->post('sort', true);
        $type = $this->input->post('type', true);
        $numRows = $this->input->post('auto', true);
        if(!empty($numRows) && $numRows > 10 && $numRows < 101){ $this->numRows = $numRows; }
        $start = ($page-1)*$this->numRows;
        $query = "SELECT u.id, u.modified, u.kind, u.lang, u.vi, u.en FROM ".$this->langModel . " u ";
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
        $response->total = number_format($num, 0, ",", ".");
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

        $sort = $this->input->post('sort', true);
        $type = $this->input->post('type', true);

        $sortMaps = array('id', 'modified', 'kind', 'lang', 'vi', 'en');
        $query = "SELECT u.id, u.modified, u.kind, u.lang, u.vi, u.en FROM ".$this->langModel . " u ";
        $query .= $this->criteria();
        $query .= " order by `".(empty($sortMaps[$sort]) ? 'id' : $sortMaps[$sort]) ."` ".$type;
        $list = $this->db->query($query)->result_array();
        $header = array( array(
            'id' => lang('id'),
            'modified' => lang('last_update'),
            'kind' => lang('kind'),
            'lang' => lang('keyword'),
            'vi' => lang('vi'),
            'en' => lang('en')
        ));
        $this->excel($header, $list);
        exit;
    }

    /**
     * Create criteria string for query
     */
    private function criteria(){
        $id = $this->input->get_post('id', true);
        $kind2 = $this->input->get_post('k', true);
        $lang = $this->input->get_post('l', true);
        $vi = $this->input->get_post('v', true);
        $en = $this->input->get_post('e', true);
        $time = $this->input->get_post('dt', true);
        $modified = explode(' - ', $time);
        if(!empty($kind2) && !is_array($kind2)){
            $kind = explode(',', $kind);
        }
        $to = null; $from = null;

        $criteria = " WHERE u.deleted = 0 ";
        if(!empty($id)){
            $criteria .= " AND u.id = '$id' ";
        }
        if(is_array($kind2) && count($kind2)){
            $tmpString = '';
            foreach($kind2 as $item){ if(empty($item)){ continue; } $tmpString .= ($tmpString == "" ? "" : ",")."'$item'"; }
            if(!empty($tmpString)){
            	$criteria .= " AND kind IN($tmpString) ";
            }
        }
        if(!empty($lang)){
            $criteria .= " AND u.lang like '%".addslashes($lang)."%' ";
        }
        if(!empty($vi)){
            $criteria .= " AND u.vi like '%".addslashes($vi)."%' ";
        }
        if(!empty($en)){
            $criteria .= " AND u.en like '%".addslashes($en)."%' ";
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
            $criteria .= " AND u.modified >= '$from 00:00:00' ";
        }
        if(!empty($to)){
            $to = date('Y-m-d', strtotime($to));
            $criteria .= " AND u.modified <= '$to 23:59:59' ";
        }
        return $criteria;
    }

    /**
     * Add object
     */
    public function add() {
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
            'viewPath' => 'admin/'.$this->class,
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

        $item = $this->db->select('id, kind, lang, vi, en')->from($this->langModel)->where('deleted', 0)->where('id', $id)->get()->row();
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
            'viewPath' => 'admin/'.$this->class,
            'item' => $item,
            'id' => $id,
            'permission' => $permission,
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

        $brand = $this->input->post('id', true);
        if(!empty($brand)){
            $pullClass = array('deleted' => 1);
            $result = $this->db->where('id', $brand)->update($this->langModel, $pullClass);
            echo $result; exit;
        }
        echo 0; exit;
    }

    /**
     * Modify data
     */
    function modify(){
        $kind = $this->input->post('kind', true);
        $lang = $this->input->post('lang', true);
        $vi = $this->input->post('vi', true);
        $en = $this->input->post('en', true);
        $vi = nl2br("$vi");
        $en = nl2br("$en");
        $query = "INSERT INTO $this->langModel (`created`, `modified`, `kind`, `lang`, `vi`, `en`)
            VALUES (NOW(), NOW(), '".addslashes($kind)."', '".addslashes($lang)."', '".addslashes($vi)."', '".addslashes($en)."')
            ON DUPLICATE KEY UPDATE modified = VALUES(modified), kind = VALUES(kind), vi = VALUES(vi), en = VALUES(en), deleted = VALUES(deleted);
        ";
        $result = $this->db->query($query);
        return $result ? $result : lang('error');
    }

    /**
     * Create excel
     */
    private function excel(&$header, &$list){ /* using & to point to list in export, not copy to excel func */
        $this->load->helper('mobiistar_helper');
        $giftList = array_gif2();

        //load our new PHPExcel library
        $this->load->library('excel');
        //activate worksheet number 1
        $this->excel->setActiveSheetIndex(0);
        //name the worksheet
        $this->excel->getActiveSheet()->setTitle('Data');

        $list_all = array_merge($header, $list);
        // read data to active sheet
        $this->excel->getActiveSheet()->fromArray($list_all);

        $filename = 'Data_'.time().'.xlsx'; //save our workbook as this file name

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
