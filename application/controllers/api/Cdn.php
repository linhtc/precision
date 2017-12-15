<?php

/**
 *
 * @package Api
 *
 */
class Cdn extends MY_Controller {

	private $metalogModel;
	
    function __construct() {
        parent::__construct();
        $this->metalogModel = 'sys_metalogs';
    }

    /**
     * Tra ve resource cho client va luu lai thong tin
     * @request: {}
     * @response: {}
     **/
    public function metadata($path=''){
        $this->layout->disable_layout(); // disable layout
        
		// Include library
        $this->load->library('mongo_db');
        
        // Create new connection
        $this->mongo_db->connect();
        
        // Insert data
//         $insertId = $this->mongo_db->insert('devices', [
// //         	'_id' => $this->mongo_db->create_document_id(),
// 			'imei' => '036521843184216',
//         	'brand' => 'Samsung',
//         	'model' => 'Galaxy S13',
//         	'capacity' => 32,
//         	'color' => ['Gold', 'Rose', 'Black'],
//         	'retail_mode_version' => '1.2.1',
//         	'star_people_version' => '1.2.1',
//        		'last_updated' => $this->mongo_db->date()
//         ]);
//         print_r($insertId); echo "<br />";
        
        // Execute select query
        $users = $this->mongo_db->get('devices');
        print_r($users); exit;
        
        
//         $imei = $this->input->get('i');
        $page = $this->input->get('page');
        if(empty($page)){
        	$page = 1;
        }
        $file = MEDIAPATH.'uploads/documents/'.$path;
// echo $file; exit;
        if (file_exists($file)){
        	$pullClass = array(
        			'created' => date('Y-m-d H:i:s', time()),
        			'modified' => date('Y-m-d H:i:s', time()),
        			'ipaddress' => $this->getClientIP(),
        			'file' => $path
        	);
        	$this->db->insert($this->metalogModel, $pullClass);
        	
//             header('Content-Description: File Transfer');
//             header('Content-Type: application/octet-stream');
//             header('Content-Disposition: attachment; filename='.basename($file));
//             header('Content-Transfer-Encoding: binary');
//             header('Expires: 0');
//             header('Cache-Control: must-revalidate');
//             header('Pragma: public');
//             header('Content-Length: ' . filesize($file));
//             readfile($file);

//         	header("Content-type:application/pdf");
        	
//         	// It will be called downloaded.pdf
//         	header('Content-Disposition: attachment; filename='.basename($file));
        	
//         	// The PDF source is in original.pdf
//         	readfile($file);
        	$url = base_url().'media/uploads/documents/'.$path.'#toolbar=0&navpanes=0&page='.$page;
        	$next = base_url().'api/cdn/metadata/'.$path.'?page='.($page+1);
        	
			echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>';
			echo '<script>function on_load(){ 
				setTimeout(function(){
					console.log("loaded");
					document.oncontextmenu = function() {return false;};
					document.onkeydown = function(e) {
					    if(e.keyCode == 123) {
					     return false;
					    }
					    if(e.ctrlKey && e.shiftKey && e.keyCode == \'I\'.charCodeAt(0)){
					     return false;
					    }
					    if(e.ctrlKey && e.shiftKey && e.keyCode == \'J\'.charCodeAt(0)){
					     return false;
					    }
					    if(e.ctrlKey && e.keyCode == \'U\'.charCodeAt(0)){
					     return false;
					    }
					    if(e.ctrlKey && e.shiftKey && e.keyCode == \'C\'.charCodeAt(0)){
					     return false;
					    }      
					 }
					document.documentElement.style.overflow = \'hidden\';  // firefox, chrome
				    document.body.scroll = "no";
					if(/chrom(e|ium)/.test(navigator.userAgent.toLowerCase())){
						var nextButton = document.getElementById("next-button");
						nextButton.style.display = \'none\';
					}
				}, 1);
			}</script>';
			echo '<a id="next-button" href="'.$next.'" style="z-index:999999999; position:fixed; top:0; right:0; background: #ccc;width: 100%;text-align: center;height: 20px;vertical-align: middle;padding-top: 10px;padding-bottom: 10px;">NEXT</a>';
        	echo '<iframe id="iframe" src="'.$url.'" width="100%" height="100%" style="pointer-events: none; margin-top:0px;" onload="on_load(this)" ></iframe>';
        	
            exit;
        }
    }
    
    /**
     * Tra ve resource cho client va luu lai thong tin
     * @request: {}
     * @response: {}
     **/
    public function upload($path=''){
    	$this->layout->disable_layout(); // disable layout
    	
    	//         $imei = $this->input->get('i');
    	$page = $this->input->get('page');
    	if(empty($page)){
    		$page = 1;
    	}
    	$file = MEDIAPATH.'uploads/documents/'.$path;
    	// echo $file; exit;
    	if (file_exists($file)){
    		$pullClass = array(
    				'created' => date('Y-m-d H:i:s', time()),
    				'modified' => date('Y-m-d H:i:s', time()),
    				'ipaddress' => $this->getClientIP(),
    				'file' => $path
    		);
    		$this->db->insert($this->metalogModel, $pullClass);
    		
    		//             header('Content-Description: File Transfer');
    		//             header('Content-Type: application/octet-stream');
    		//             header('Content-Disposition: attachment; filename='.basename($file));
    		//             header('Content-Transfer-Encoding: binary');
    		//             header('Expires: 0');
    		//             header('Cache-Control: must-revalidate');
    		//             header('Pragma: public');
    		//             header('Content-Length: ' . filesize($file));
    		//             readfile($file);
    		
    		//         	header("Content-type:application/pdf");
    		
    		//         	// It will be called downloaded.pdf
    		//         	header('Content-Disposition: attachment; filename='.basename($file));
    		
    		//         	// The PDF source is in original.pdf
    		//         	readfile($file);
    		$url = base_url().'media/uploads/documents/'.$path.'#toolbar=0&navpanes=0&page='.$page;
    		$next = base_url().'api/cdn/metadata/'.$path.'?page='.($page+1);
    		
    		echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>';
    		echo '<script>function on_load(){
				setTimeout(function(){
					console.log("loaded");
					document.oncontextmenu = function() {return false;};
					document.onkeydown = function(e) {
					    if(e.keyCode == 123) {
					     return false;
					    }
					    if(e.ctrlKey && e.shiftKey && e.keyCode == \'I\'.charCodeAt(0)){
					     return false;
					    }
					    if(e.ctrlKey && e.shiftKey && e.keyCode == \'J\'.charCodeAt(0)){
					     return false;
					    }
					    if(e.ctrlKey && e.keyCode == \'U\'.charCodeAt(0)){
					     return false;
					    }
					    if(e.ctrlKey && e.shiftKey && e.keyCode == \'C\'.charCodeAt(0)){
					     return false;
					    }
					 }
					document.documentElement.style.overflow = \'hidden\';  // firefox, chrome
				    document.body.scroll = "no";
					if(/chrom(e|ium)/.test(navigator.userAgent.toLowerCase())){
						var nextButton = document.getElementById("next-button");
						nextButton.style.display = \'none\';
					}
				}, 1);
			}</script>';
    		echo '<a id="next-button" href="'.$next.'" style="z-index:999999999; position:fixed; top:0; right:0; background: #ccc;width: 100%;text-align: center;height: 20px;vertical-align: middle;padding-top: 10px;padding-bottom: 10px;">NEXT</a>';
    		echo '<iframe id="iframe" src="'.$url.'" width="100%" height="100%" style="pointer-events: none; margin-top:0px;" onload="on_load(this)" ></iframe>';
    		
    		exit;
    	}
    }

}