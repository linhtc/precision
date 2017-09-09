<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * @package Admin
 *
 */
class ManageFee extends MY_Controller {

	private $class;
	private $numRow;
	private $pageModel;
	private $viewPath;
	private $pageType;
	
    function __construct() {
    	parent::__construct();
    	$this->class = strtolower(preg_replace('/(?<!^)([A-Z])/', '-\\1', get_class()));
        $this->numRows = 10;
        $this->pageModel = 'e_pages';
        $this->pageType = 'fee';
        $this->viewPath = 'admin/fee/';
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
        		'static/default/admin/template/plugins/simditor/styles/simditor.css',
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
        		'static/default/admin/template/plugins/simditor/scripts/module.js',
        		'static/default/admin/template/plugins/simditor/scripts/hotkeys.js',
        		'static/default/admin/template/plugins/simditor/scripts/uploader.js',
        		'static/default/admin/template/plugins/simditor/scripts/simditor.js'
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
        		'item' => $item
        );

        $this->parser->parse($this->viewPath."view", $data);
    }

    /**
     * Save object
     */
    public function save() {
    	$this->check_permission($this->class, 'edit');
    	$this->layout->disable_layout();
    	
        $content = $this->input->post('content', false);
        $pullClass = array(
        		'modified' => date('Y-m-d H:i:s'),
        		'page_content' => $content
        );
        echo $this->db->where('page_type', $this->pageType)->update($this->pageModel, $pullClass);
        exit;
    }

}
