<?php

/**
 *
 * @package Api
 *
 */
class Device extends MY_Controller {

	private $metalogModel; /* Metalog table in mysql database */
	private $deviceMongoModel; /* Collection in mongo database */
	private $gearmanHost; /* Host of gearman server */
	private $gearmanPort; /* Port of gearman server */
	private $memcachedHost; /* host of memcached server */
	private $memcachedPort; /* Port of memcached server */
	
    function __construct() {
        parent::__construct();
        $this->metalogModel = 'sys_metalogs';
        $this->deviceMongoModel = 'devices';
        $this->gearmanHost = '127.0.0.1';
        $this->gearmanPort = 4730;
        $this->memcachedHost = 'localhost';
        $this->memcachedPort = 11211;
    }

    /**
     * Device pings to server
     * @request: {}
     * @response: {}
     **/
    public function ping($imei=''){
        $this->layout->disable_layout(); /* disable layout */
                
        /* Define response object */
        $response = new stdClass();
        $response->error = 0;
        $response->message = null;
        $response->time = time();
        $response->data = [];
        
        /* Validation imei param */
        if(empty($imei)){
        	$response->error = -1;
        	$response->message = 'IMEI is not empty.';
        	$this->response($response);
        }
        
        /* Get data in memcached */
        $memcached = new Memcached();
        $memcached->addServer($this->memcachedHost, $this->memcachedPort);
        $device = $memcached->get($imei);
        
        /* Response imei information if exist */
        if($device){
        	$response->data = $device;
        } else{
        	/* Add this request to Gearman worker */
        	$client = new GearmanClient();
        	if ((isset($client)) and ($client instanceof GearmanClient)){
        		if($client->addServer($this->gearmanHost, $this->gearmanPort)){
        			$success = @$client->ping('Are you there');
        			if ($success) {
        				$request = new stdClass();
        				$request->imei = $imei;
        				$client->doBackground("processDevicePing", json_encode($request));
        			}
        		}
        	}
        }
        
        /* Response to client */
        $this->response($response);
    }
    
    /**
     * Gearman worker pings to server
     * @request: {}
     * @response: {}
     **/
    public function cached($imei=''){
    	$this->layout->disable_layout(); /* disable layout */
    	
    	/* Define response object */
    	$response = new stdClass();
    	$response->error = 0;
    	$response->message = null;
    	$response->time = time();
    	$response->data = [];
    	
    	/* Validation imei param */
    	if(empty($imei)){
    		$response->error = -1;
    		$response->message = 'IMEI is not empty.';
    		$this->response($response);
    	}
    	
    	/* Initital memcached */
    	$memcached = new Memcached();
    	$memcached->addServer($this->memcachedHost, $this->memcachedPort);
    	
    	/* Include library */
    	$this->load->library('mongo_db');
    	
    	/* Create new connection */
    	$this->mongo_db->connect();
    	
    	/* Execute select query */
    	$filter = ['imei' => $imei];
    	$projection = ['projection' => ['_id' => 0]];
    	$device = $this->mongo_db->getOneWhere($this->deviceMongoModel, $filter, $projection);
    	$memcached->set($imei, $device, 300); /* expiration is 300 seconds */
    	
    	/* Response to client */
    	$this->response($response);
    }

}