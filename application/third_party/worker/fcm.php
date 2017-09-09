<?php

/*
 *
 * Worker nay chiu trach nhiem check tai khoan facebook
 *
 * */
include(dirname(__FILE__).'/../firebase/src/firebaseLib.php');
//include(dirname(__FILE__).'/../config/appversion.php');
// /etc/supervisor/conf.d

// init config
$config['init'] = true;

# Create our worker object.
$worker= new GearmanWorker();
$worker->addServer('127.0.0.1', 4730);
$worker->addFunction('pushToFirebase', 'pushToFirebase');
print "Worker is started... \n\n\n";

while (1){
    try{
        $ret = $worker->work();
        if ($worker->returnCode() != GEARMAN_SUCCESS) { break; }
    } catch (Exception $e){
        echo $e->getMessage();
    }
}

function pushToFirebase($job){
    echo __function__; print "\n";
    $request = json_decode($job->workload(), true);

    if(empty($request['imei'])){ return false; }

    $firebaseUrl = 'https://testfcm-7f1a7.firebaseio.com/';
    $firebaseToken = 'R0itjH1vVoZXfWXT8DnIyl7yRsLOp25DsAs1jlN0';
    $firebasePath = '/promotions/'.$request['imei'];
    $firebase = new Firebase\FirebaseLib($firebaseUrl, $firebaseToken);
    $rs = $firebase->set($firebasePath, $request);
    return $rs;
}