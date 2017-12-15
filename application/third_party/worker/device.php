<?php

/*
 *
 * Worker nay chiu trach nhiem check tai khoan facebook
 *
 * */
// include(dirname(__FILE__).'/../firebase/src/firebaseLib.php');
//include(dirname(__FILE__).'/../config/appversion.php');
// /etc/supervisor/conf.d

// init config
$config['init'] = true;

# Create our worker object.
$worker= new GearmanWorker();
$worker->addServer('127.0.0.1', 4730);
$worker->addFunction('processDevicePing', 'processDevicePing');
print "Worker is started... \n\n\n";

while (1){
    try{
        $ret = $worker->work();
        if ($worker->returnCode() != GEARMAN_SUCCESS) { break; }
    } catch (Exception $e){
        echo $e->getMessage();
    }
}

function processDevicePing($job){
    echo __function__; print "\n";
    /* Get request from device */
    $request = json_decode($job->workload());

    /* Validate request */
    if(empty($request->imei)){ return false; }
	
    /* curl init */
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://cnc.local/api/device/cached/'.$request->imei);
//     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
//     curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
//     curl_setopt($ch, CURLOPT_TIMEOUT, 30);
//     curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//     curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
//     curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length: ' . strlen($request)));
    
    /* execute post */
    $response = curl_exec($ch);
    
    /* close connection */
    curl_close($ch);
    
    /* return to client */
    return true;
}