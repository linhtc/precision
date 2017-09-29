<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * @package Admin
 *
 *
 * @author Bui Huynh Kinh Luan <buihuynh.kinhluan@gmail.com>
 * @copyright (c) 2016, 500BITS
 * @link http://500bits.com
 * @license MIT
 * @version beta.0.1
 */
class Crontabs extends MY_Controller {
	
	private $viewerModel;
	
    function __construct() {
        parent::__construct();
        $this->preceptsModel = 'precepts';
        $this->logsModel = 'playgame_logs';
        $this->luckyModel = 'playgame_luckies';
        $this->giftsModel = 'campaign_gifts';
        $this->winnerModel = 'winners';
        $this->socialUsersModel = 'social_users';
        $this->voucherModel = 'gift_vouchers';
        $this->cardModel = 'gift_cards';
        $this->weatherModel = 'weathers';
        $this->metalogModel = 'metalogs';

        $this->brandModel = 'brands';
        $this->modelModel = 'models';
        $this->deviceModel = 'devices';
        $this->rateModel = 'rates';
        $this->featureModel = 'features';
        $this->overviewModel = 'overviews';
        $this->crawlerModel = 'crawlers';
        $this->rateModel = 'rates';
        $this->pointModel = 'points';
        $this->langModel = 'sys_languages';
        $this->ticketNum = 3; /* Moi lan share se co 3 luot lucky */
        $this->viewerModel = 'sys_viewers';
    }

    /**
     * Set thoi gian thay doi gap
     * @request: yeu cau key = cfb63b3b500864ff0a9e92d2d3039595
     * @response: {}
     **/
    public function event($key=null){
        $this->layout->disable_layout(); // disable layout
        if($key !== 'cfb63b3b500864ff0a9e92d2d3039595'){ /* Neu khong truyen key nay thi ban */
            echo 'Banned!'; exit;
        }
        $query = "select @@global.event_scheduler;";
        $checker = $this->db->query($query)->row();
        $status = isset($checker->{'@@global.event_scheduler'}) ? $checker->{'@@global.event_scheduler'} : null;
        if($status === 'ON'){
            $query = "set @@global.event_scheduler = OFF;";
            $result = $this->db->query($query);
            $status = $result ? 'OFF' : $status;
        } else {
            $query = "set @@global.event_scheduler = ON;";
            $result = $this->db->query($query);
            $status = $result ? 'ON' : $status;
        }
        echo $status; exit;
    }

    /**
     * Test email
     * @request: {}
     * @response: {}
     **/
    public function mail(){
        exit;
        $this->layout->disable_layout(); // disable layout
        $this->load->helper('mobiistar_helper');
        echo mail_test_1();
        exit;
    }

    /**
     * Where are you now?
     * @request: {}
     * @response: {}
     **/
    public function remind(){
        $this->layout->disable_layout(); // disable layout

        $date = new DateTime('2016-09-19');
        $now = new DateTime();
        echo $now->diff($date)->days;
        echo '.';
        echo (5113 - $now->diff($date)->days); exit;
    }

    /**
     * Cron job ma sep Luan bao set cho Jimmy
     * @request: {}
     * @response: {}
     **/
    public function jimmy(){
        $this->layout->disable_layout(); // disable layout

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/players/csv_export?app_id=895e44ff-e330-485c-b190-3db407dbeb72");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);

        $headers = array();
        $headers[] = "Content-Type: application/json";
        $headers[] = "Authorization: Basic ZDlmYzJjY2MtNTkxYS00ZGZhLWEzOGQtNmE5OWNlZGQ2MTg0";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close ($ch);

        $this->load->helper('mobiistar_helper');
        echo mail_to_jimmy($result);
        exit;
    }

    /**
     * Tracking email via load resource files
     * @request: {}
     * @response: {}
     **/
    public function metadata($path=''){
        $this->layout->disable_layout(); // disable layout

        $imei = $this->input->get('i');
        $file = MEDIAPATH.'uploads/'.$path;

        if (file_exists($file)){
            if(!empty($imei)){
                $pullClass = array(
                    'created' => date('Y-m-d H:i:s', time()),
                    'modified' => date('Y-m-d H:i:s', time()),
                    'imei' => $imei,
                    'files' => $path
                );
                $this->db->insert($this->metalogModel, $pullClass);
            }
            $size = getimagesize($file);
            $fp = fopen($file, 'rb');
            if ($size and $fp){
                header('Content-Type: '.$size['mime']);
                header('Content-Length: '.filesize($file));
                fpassthru($fp);
                exit;
            }
        }
    }
    
    /**
     * Counting viewer
     * @request: {}
     * @response: {}
     **/
    public function viewer(){
    	$this->layout->disable_layout(); // disable layout
    	
    	$client = $this->getClientIP();
    	$currtime = date('YmdH', time());
    	$query = "
			INSERT INTO sys_viewers (created, modified, ip, currtime)
			VALUES (NOW(), NOW(), '".addslashes($client)."', '".addslashes($currtime)."')
			ON DUPLICATE KEY UPDATE modified = VALUES(modified);
		";
    	$this->db->query($query);
    	
    	
    	$yesterday = date("Y-m-d", strtotime("-1 day", time()));
    	$yesterdayViewer = $this->db->select('id')->from($this->viewerModel)
    	->where('created >= "'.$yesterday.' 00:00:00"', '', false)
    	->where('created < "'.$yesterday.' 23:59:59"', '', false)
    	->get()->num_rows();
    	$thisweek = date("Y-m-d", strtotime("-6 day", time()));
    	$thisweekViewer = $this->db->select('id')->from($this->viewerModel)
    	->where('created >= "'.$thisweek.' 00:00:00"', '', false)
    	->get()->num_rows();
    	$totalViewer = $this->db->select('id')->from($this->viewerModel)->get()->num_rows();
    	
    	$response = new stdClass();
    	$response->yesterday = $yesterdayViewer;
    	$response->thisweek = $thisweekViewer;
    	$response->total = $totalViewer;
    	
    	$this->response($response);
    }
    
    /**
     * Get language to LocalStorage
     * @request: {}
     * @response: {}
     **/
    public function langstorage(){
    	$this->layout->disable_layout(); // disable layout
    	
    	$response = new stdClass();
    	$response->metadata = new stdClass();
    	
    	$lang = $this->input->post('lang', true);
    	$data = $this->input->post('data', true);
    	
    	$lang2 = $lang;
    	
    	if($data){
    		foreach($data as $key){
    			$response->metadata->{$lang2.'_'.$key} = lang($key);
    		}
    	}
    	if($lang == 'vn'){
    		$this->loadLangFolder('english');
    		$lang2 = 'en';
    	}
    	if($data){
    		foreach($data as $key){
    			$response->metadata->{$lang2.'_'.$key} = lang($key);
    		}
    	}
    	if($lang == 'en'){
    		$this->loadLangFolder('english');
    	} else{
    		$this->loadLangFolder('vietnamese');
    	}
    	
    	$this->response($response);
    	
    }
    
    /**
     * Ham tra du lieu ve cho client voi header la json
     * @input: pointer stdClass
     * @output: json encode stdClass
     **/
    private function response(stdClass &$response) {
    	header('Content-Type: application/json');
    	echo json_encode($response, JSON_UNESCAPED_UNICODE); exit;
    }

    /**
     * Tracking email
     * @request: {}
     * @response: {}
     **/
    public function metadatabk($path=''){
        $this->layout->disable_layout(); // disable layout

        $v = $this->input->get('v');
        $myfile = fopen(APPPATH."controllers/api/test.txt", "w") or die("Unable to open file!");
        fwrite($myfile, date('Y-m-d H:i:s', time()).': '.$v); // fwrite($myfile, html_entity_decode($body));
        fclose($myfile);
        $file = MEDIAPATH.'files/'.$path;

        if (file_exists($file)){
            $size = getimagesize($file);
            $fp = fopen($file, 'rb');
            if ($size and $fp){
                header('Content-Type: '.$size['mime']);
                header('Content-Length: '.filesize($file));
                fpassthru($fp);
                exit;
            }
        }
    }

    /**
     * Xem tinh hinh thoi tiet
     * @request: {}
     * @response: {}
     **/
    public function weather($start=0){
        $this->layout->disable_layout(); // disable layout
        $limit = 10;
        $mode = 'vtv';
        $modeList = array('vtv', 'msn');
        $mode = array_rand($modeList, 1);
        $mode = $modeList[$mode];
        $list = $this->db->select('id, modified, link_msn, link_vtv')->from($this->weatherModel)/*->where('TIMESTAMPDIFF(HOUR, modified, now()) > ', '0', false)*/->limit($limit, $start)->get()->result();
        echo count($list); echo "<br /><hr />";
        foreach($list as $item){
            $date = new DateTime($item->modified);
            $now = new DateTime();

            $time = $now->diff($date)->format("%h");
            if((int)$time < 1){
                continue;
            }
            $request = new stdClass();
            $request->id = $item->id;
            if($mode == 'vtv'){
                $request->link = $item->link_vtv;
                $rs = $this->getVTVWeather($request);
            } elseif($mode == 'msn'){
                $request->link = $item->link_msn;
                $rs = $this->getMSNWeather($request);
            } else{
                /*Tell me to do something*/
            }
            echo $rs; echo "<br /><hr />";
            sleep(mt_rand(1, 10));
        }
        echo "<br /><hr />"; exit;
    }

    /**
     * Lay tinh trang thoi tiet thong qua VTV
     * @request: {}
     * @response: {}
     **/
    private function getVTVWeather(stdClass &$request){
        $header = array(
            'User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:51.0) Gecko/20100101 Firefox/51.0',
            'Accept-Language: en-US,en;q=0.5',
            'Host: vtvapi1.channelvn.net',
            'Accept: application/json, text/javascript, */*; q=0.01',
            'Referer: http://vtv.vn/du-bao-thoi-tiet.htm',
            'origin: http://vtv.vn',
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $request->link);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
//        curl_setopt($ch, CURLOPT_CAINFO, APPPATH.'third_party/worker/msncom.crt');
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);

        $response = curl_exec($ch);

        list($headers, $body) = explode("\r\n\r\n", $response, 2);

        $myfile = fopen(APPPATH.'third_party/worker/metadata/weather_vtv_'.$request->id.".html", "w") or die("Unable to open file!");
        fwrite($myfile, $body); // fwrite($myfile, html_entity_decode($body));
        fclose($myfile);

        $pullClass = array(
            'sunrise' => '',
            'sunset' => '',
            'moonrise' => '',
            'moonset' => '',
            'uvindex' => '',
            'feels_like' => '',
            'wind' => '',
            'barometer' => '',
            'visibility' => '',
            'humidity' => '',
            'dew_point' => '',
            'temperature' => '',
            'forecast' => '',
            'notes' => $body,
            'modified' => date('Y-m-d H:i:s', time())
        );

        $response = json_decode($body);
        $response = isset($response[0]) ? $response[0] : false;
        if($response){
            foreach($response as $key=>$value){
                $key = strtolower($key);
                if($key == 'status'){
                    $key = 'forecast';
                }
                if(isset($pullClass[$key])){
                    $pullClass[$key] = $value;
                }
            }
        }
        if(empty($pullClass['sunrise'])){
            return 0;
        }

        return $this->db->where('id', $request->id)->update($this->weatherModel, $pullClass);
    }

    /**
     * Lay tinh trang thoi tiet
     * @request: {}
     * @response: {}
     **/
    private function getMSNWeather(stdClass &$request){
        $header = array(
            'User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:51.0) Gecko/20100101 Firefox/51.0',
            'Accept-Language: en-US,en;q=0.5',
            'Host: www.msn.com',
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
            'Cookie: _chartbeat4=t=OLXTHDdVvGWQcE5TB-7ZnnC7NS4l&E=0&EE=0&x=0&c=0.4&y=2782&w=983',
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $request->link);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
//        curl_setopt($ch, CURLOPT_CAINFO, APPPATH.'third_party/worker/msncom.crt');
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);

        $response = curl_exec($ch);
        if (curl_error($ch)) {
            echo "ERROR: ".curl_error($ch);
        }
        list($headers, $body) = explode("\r\n\r\n", $response, 2);
//        print_r($response); exit;

        $myfile = fopen(APPPATH.'third_party/worker/metadata/weather_msn_'.$request->id.".html", "w") or die("Unable to open file!");
        fwrite($myfile, $body); // fwrite($myfile, html_entity_decode($body));
        fclose($myfile);

//        return true;

        $pullClass = array(
            'sunrise' => '',
            'sunset' => '',
            'moonrise' => '',
            'moonset' => '',
            'uvindex' => '',
            'feels_like' => '',
            'wind' => '',
            'barometer' => '',
            'visibility' => '',
            'humidity' => '',
            'dew_point' => '',
            'temperature' => '',
            'forecast' => '',
            'notes' => '',
            'modified' => date('Y-m-d H:i:s', time())
        );

        libxml_use_internal_errors(true);
        $dom = new DOMDocument();
        $dom->loadHTMLFile(APPPATH.'third_party/worker/metadata/weather_msn_'.$request->id.".html");


        $nodes = $dom->getElementsByTagName("ul");
        foreach ($nodes as $element){
            $classy = $element->getAttribute("class");
            if ($classy == "forecast-list"){
                $ul = $element->getElementsByTagName("li");
                foreach($ul as $li){
                    if($li->getAttribute("data-aop") == 'day1'){
                        $a = $li->getElementsByTagName("a");
                        $detail = $a->item(0)->getAttribute("data-detail");
                        $pullClass['notes'] = $detail;
                        $detail = json_decode(html_entity_decode($detail));
                        foreach($pullClass as $key=>$dc){
                            if(isset($detail->$key)){
                                $pullClass[$key] = $detail->$key;
                            }
                        }
                    }
                }
            }
        }

        $nodes = $dom->getElementsByTagName("div");
        foreach ($nodes as $element){
            $classy = $element->getAttribute("class");
            if($classy == 'current-info'){
                $span = $element->getElementsByTagName("span");
                if($span->item(0)->getAttribute("class") == 'current'){
                    $pullClass['temperature'] = $span->item(0)->textContent;
                }
            }
            if ($classy == "weather-info"){
                $skytext = $element->childNodes->item(1)->textContent;
                if(!empty($skytext)){
                    $pullClass['forecast'] = $skytext;
                }
                $ul = $element->getElementsByTagName("li");
                foreach($ul as $li){

                    $bValue = $li->nodeValue;
                    $span = $li->getElementsByTagName("span");
                    $li->removeChild($span->item(0));

                    $aValue = trim(html_entity_decode($li->nodeValue));
                    if(strpos($bValue, 'Feels Like') !== false){
                        $pullClass['feels_like'] = $aValue;
                    }
                    if(strpos($bValue, 'Wind')  !== false){
                        $pullClass['wind'] = $aValue;
                    }
                    if(strpos($bValue, 'Barometer')  !== false){
                        $pullClass['barometer'] = $aValue;
                    }
                    if(strpos($bValue, 'Visibility')  !== false){
                        $pullClass['visibility'] = $aValue;
                    }
                    if(strpos($bValue, 'Humidity')  !== false){
                        $pullClass['humidity'] = $aValue;
                    }
                    if(strpos($bValue, 'Dew Point')  !== false){
                        $pullClass['dew_point'] = $aValue;
                    }
                }
            }
        }

        libxml_use_internal_errors(false);

        if(empty($pullClass['sunrise'])){
            return 0;
        }

        return $this->db->where('id', $request->id)->update($this->weatherModel, $pullClass);
    }

    /**
     * Cron job to update news
     * @request: {}
     * @response: {}
     **/
    public function languages($key=null){
        /*$body = '';
        $this->lang->load('aio', 'english');
        $list = $this->lang->language;
        foreach($list as $key=>$value){
            $body .= (empty($body) ? '' : ', ') . "('".addslashes($key)."', '".addslashes($value)."')";
        }
        if(!empty($body)){
            $query = "INSERT INTO languages (lang, en) VALUES $body ON DUPLICATE KEY UPDATE en = VALUES(en);";
            $result = $this->db->query($query);
            echo $result;
        }*/
        if($key != 'hello'){
            echo 'Hi there'; exit;
        }
        $response = new stdClass();
        $response->vi = 0;
        $response->en = 0;
        $list = $this->db->select('lang, vi, en')->from($this->langModel)->where('deleted', 0)->get()->result();
        if($list){
            $fileVi = '';
            $fileEn = '';
            foreach($list as $item){
                $fileVi .= (empty($fileVi) ? '<?php ' : '').'$lang[\''.$item->lang.'\'] = \''.$item->vi.'\';';
                $fileEn .= (empty($fileEn) ? '<?php ' : '').'$lang[\''.$item->lang.'\'] = \''.$item->en.'\';';
            }
            if(!empty($fileVi)){
                $response->vi = file_put_contents(APPPATH."language/vietnamese/aio_lang.php", $fileVi);
            }
            if(!empty($fileEn)){
                $response->en = file_put_contents(APPPATH."language/english/aio_lang.php", $fileEn);
            }
        }
        echo json_encode($response); exit;
    }

    /**
     * Cron job to update news
     * @request: {}
     * @response: {}
     **/
    public function crawlers(){
        for($p=21; $p<=102; $p++){
            $this->crawler($p);
            echo "<br />";
            sleep(mt_rand(3, 10));
        }
    }

    /**
     * Cron job to update news
     * @request: {}
     * @response: {}
     **/
    public function crawler($page=1){
        $request = new stdClass();
        if($page == 1){
        $request->crawler = 'http://www.pdevice.com/product-category/smartphone';
        } else{
            $request->crawler = 'http://www.pdevice.com/product-category/smartphone/page/'.$page;
        }
        $header = array(
            'User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:52.0) Gecko/20100101 Firefox/52.0',
            'Host: www.pdevice.com',
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
            'Accept-Language: en-US,en;q=0.5'
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $request->crawler);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);

        $response = curl_exec($ch);
        if (curl_error($ch)) { echo "ERROR: ".curl_error($ch); }
        list($headers, $body) = explode("\r\n\r\n", $response, 2);

        $myfile = fopen(APPPATH.'third_party/worker/metadata/pdevice_crawler.html', "w") or die("Unable to open file!");
        fwrite($myfile, $body); // fwrite($myfile, html_entity_decode($body));
        fclose($myfile);

        libxml_use_internal_errors(true);
        $dom = new DOMDocument();
        $dom->loadHTMLFile(APPPATH.'third_party/worker/metadata/pdevice_crawler.html');

        $bodyCrawler = '';
        $finder = new DomXPath($dom);
        $className="aps-product-title";
        $nodes = $finder->query("//*[contains(@class, '$className')]");
        if($nodes->length){
            foreach($nodes as $node){
                $as = $node->getElementsByTagName("a");
                if($as->length){
                    $href = $as->item(0)->getAttribute("href");
                    $title = $as->item(0)->textContent;
                    $bodyCrawler .= ($bodyCrawler == '' ? '' : ', ') . "(NOW(), NOW(), '".addslashes($title)."', '".addslashes($href)."')";
                }
            }
        }
        $result = 0;
        if(!empty($bodyCrawler)){
            $query = "INSERT INTO $this->crawlerModel (`created`, `modified`, `title`, `url`) VALUES $bodyCrawler
              ON DUPLICATE KEY UPDATE modified = VALUES(modified), url = VALUES(url);
            ";
            $result = $this->db->query($query);
        }
        echo $page. ' ====> ' .$result;
    }

    /**
     * Cron job to update news
     * @request: {}
     * @response: {}
     **/
    public function rates($key=null){
        if($key != 'hello'){
            echo 'Hi there!'; exit;
        }
        $query = "
            update $this->modelModel as m 
            inner join (
                select rs3.*
                from(
                    select rs2.brand, rs2.model, cast(sum(((rs2.total / p.child) * (p.percent / 100))) as decimal(12, 1)) rates
                    from(
                        select rs.brand, rs.model, sum(rs.rate) total, rs.parent
                        from(
                            select r.brand, r.model, r.rate, (select p.parent from points p where p.title = r.feature and p.deleted = 0) parent
                            from $this->rateModel r 
                            where r.feature in (select bd.title from points bd where bd.parent <> 0 and bd.deleted = 0)
                        ) rs
                        group by rs.brand, rs.model, rs.parent
                    ) rs2
                    inner join $this->pointModel p on p.id = rs2.parent
                    group by rs2.brand, rs2.model
                ) rs3
            ) as rs4 on m.brand = rs4.brand and m.model = rs4.model
            set m.rate = rs4.rates
            where m.deleted = 0 and m.id > 0;
        ";
        $result = $this->db->query($query);
        echo $result; exit;
    }

    /**
     * Cron job to update news
     * @request: {}
     * @response: {}
     **/
    public function spec($start=0){
        $this->layout->disable_layout(); // disable layout
        $limit = 10;
        $list = $this->db->select('id, modified, brand, model, crawler')->from($this->modelModel)->limit($limit, $start)->get()->result();

        foreach($list as $item){
            $date = new DateTime($item->modified);
            $now = new DateTime();

            $time = $now->diff($date)->format("%h");
            if((int)$time < 1){
                continue;
            }
            echo $item->brand.' '.$item->model.' ===> '.$this->getSpecification($item) . "<br />";
            sleep(mt_rand(3, 10));
        }
        echo "<br /><hr />"; exit;
    }

    /**
     * Cron job to update news
     * @request: {}
     * @response: {}
     **/
    public function specs($start=0){
        $this->layout->disable_layout(); // disable layout
        $limit = 20;

//        $aa = array(2819);

        $list = $this->db->select('id, modified, title, url crawler')
            ->from($this->crawlerModel)
            ->where('deleted', 0)
            ->where('completed', 0)
//            ->limit($limit, $start)
//            ->where_in('id', $aa)
//            ->order_by('modified', 'asc')
            ->order_by('rand()')
            ->limit($limit)
            ->get()->result()
        ;
//        print_r(count((array)$list)); exit;
        set_time_limit(0);
        $ids = '';
        $ids2 = '';
        foreach($list as $item){
//            $date = new DateTime($item->modified);
//            $now = new DateTime();
//
//            $time = $now->diff($date)->format("%h");
//            if((int)$time < 1){
//                continue;
//            }
            $result = $this->getSpecification($item);
            if($result){
                echo $item->brand.' '.$item->model.' ===> '. $result . "<br />";
                $ids .= ($ids == '' ? '' : ', ') . $item->id;
            } else{
                echo $item->title .' ===> '. $result . "<br />";
                $ids2 .= ($ids2 == '' ? '' : ', ') . $item->id;
            }
           sleep(mt_rand(1, 3));
        }
        if(!empty($ids)){
            $query = "UPDATE $this->crawlerModel c SET c.completed = 1, c.modified = NOW() WHERE c.id IN($ids);";
            $this->db->query($query);
        }
        if(!empty($ids2)){
            $query = "UPDATE $this->crawlerModel c SET c.modified = NOW() WHERE c.id IN($ids2);";
            $this->db->query($query);
        }
        echo "<br /><hr /><script>document.writeln('Hello'); setTimeout(function(){ location.reload(); }, 30000)</script>"; exit;
    }

    /**
     * Lay tinh trang thoi tiet
     * @request: {}
     * @response: {}
     **/
    private function insertBrand(&$brand){
        $brandMap = array(
            '360 Formerly Known as Qiku' => 'Qiku',
            '360' => 'Qiku',
            '360 N4A' => 'Qiku',
            'and Model Intex Aqua Trend' => 'Intex',
            'LETV LeEco' => 'LeEco',
            'Letv' => 'LeEco',
            'LeEco Formerly Known as LeTv' => 'LeEco',
            'LeEco LETV' => 'LeEco',
            'KrugerMatz' => 'Kruger Matz',
            'Xiaomi Mi Note 2' => 'Xiaomi',
            'HTC 10 Evo' => 'HTC',
            'BQ Mobile' => 'BQ',
            'Cong' => 'QCong',
            'iNewMobile' => 'iNew Mobile',
            'GigabytePhones' => 'Gigabyte Phones',
            'Gigabyte GSmart' => 'Gigabyte Phones'
        );
        if(isset($brandMap[$brand])){
            $brand = $brandMap[$brand];
        }
        $query = "INSERT INTO $this->brandModel (`created`, `modified`, `brand`) 
            VALUES (NOW(), NOW(), '".addslashes($brand)."')
            ON DUPLICATE KEY UPDATE modified = VALUES(modified), brand = VALUES(brand), deleted = VALUES(deleted);
        ";
        $this->db->query($query);
    }

    /**
     * Lay spec cua mot device
     * @request: {}
     * @response: {}
     **/
    private function getSpecification(stdClass &$request){
       $header = array(
           'User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:52.0) Gecko/20100101 Firefox/52.0',
           'Host: www.pdevice.com',
           'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
           'Accept-Language: en-US,en;q=0.5'
       );

       $ch = curl_init();
       curl_setopt($ch, CURLOPT_URL, $request->crawler);

       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
       curl_setopt($ch, CURLOPT_VERBOSE, 1);
       curl_setopt($ch, CURLOPT_HEADER, 1);
       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
       curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
       curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
       curl_setopt($ch, CURLOPT_TIMEOUT, 30);
       curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);

       $response = curl_exec($ch);
       if (curl_error($ch)) { echo "ERROR: ".curl_error($ch); return 0; }
       list($headers, $body) = explode("\r\n\r\n", $response, 2);

       $myfile = fopen(APPPATH.'third_party/worker/metadata/pdevice_'.$request->id.".html", "w") or die("Unable to open file!");
//        fwrite($myfile, $body); //
       fwrite($myfile, html_entity_decode($body));
       fclose($myfile);

        $overviewMap = (object)array(
            'Camera' => 'Camera Overview',
            'CPU' => 'Processor (Clock)',
            'Storage' => 'Internal Storage',
            'Display' => 'Screen (Size & Type)',
            'RAM' => 'Memory',
            'OS' => 'OS Version'
        );

        libxml_use_internal_errors(true);
        $dom = new DOMDocument();
        $dom->loadHTMLFile(APPPATH.'third_party/worker/metadata/pdevice_'.$request->id.".html");

        $image = 0;
        $rate = 0;
        $price = 0;
        $basePrice = '';
        $bodyRates = '';
        $bodyFeatures = '';
        $bodySpecs = '';
        $rateList = new stdClass();
        $finder = new DomXPath($dom);
        if(empty($request->brand)){
            $className="aps-product-brand";
            $nodes = $finder->query("//*[contains(@class, '$className')]");
            if($nodes->length){
                $span = $nodes->item(0)->getElementsByTagName("span");
                if($span->length){
                    $brand = trim($span->item(1)->nodeValue);
                    if(!empty($brand)){
                        $request->brand = $brand;
                        $this->insertBrand($request->brand);
                    }
                }
            }
        }
        if(empty($request->model)){
            $nodes = $dom->getElementById("aps-overview");
            if($nodes){
                $uls = $nodes->getElementsByTagName("ul");
                if($uls->length){
                    foreach($uls as $ul){
                        $lis = $ul->getElementsByTagName("li");
                        if($lis->length){
                            foreach($lis as $li){
                                $value = $li->nodeValue;
                                if(empty($request->brand)){
                                    if(strpos($value, 'Brand & Model') !== false){
                                        $value = str_replace('Brand & Model', '', $value);
                                        $value = htmlentities($value);
                                        $value = preg_replace("/&#?[a-z0-9]{2,8};/i","", $value);
                                        $value = preg_replace("/[^a-zA-Z0-9\\s\\+]/", "", strip_tags($value));
                                        if(empty($request->brand)){
                                            $request->brand = 'Other';
                                            $this->insertBrand($request->brand);
                                        }
                                        $request->model = trim($value);
                                        if(!empty($request->model)){
                                            break;
                                        }
                                    } elseif(strpos($value, 'Brand Name') !== false){
                                        $value = htmlentities($value);
                                        $value = preg_replace("/&#?[a-z0-9]{2,8};/i","", $value);
                                        $value = preg_replace("/[^a-zA-Z0-9\\s\\+]/", "", strip_tags($value));
                                        $value = str_replace('Brand Name', '', $value);
                                        $request->brand = trim($value);
                                        $this->insertBrand($request->brand);
                                        if(!empty($request->model)){
                                            break;
                                        }
                                    } elseif(strpos($value, 'Brand') !== false){
                                        $value = htmlentities($value);
                                        $value = preg_replace("/&#?[a-z0-9]{2,8};/i","", $value);
                                        $value = preg_replace("/[^a-zA-Z0-9\\s\\+]/", "", strip_tags($value));
                                        $value = str_replace('Brand', '', $value);
                                        $request->brand = trim($value);
                                        $this->insertBrand($request->brand);
                                        if(!empty($request->model)){
                                            break;
                                        }
                                    }
                                }
                                if(strpos($value, 'Model') !== false){
                                    $value = htmlentities($value);
                                    $value = preg_replace("/&#?[a-z0-9]{2,8};/i","", $value);
                                    $value = preg_replace("/[^a-zA-Z0-9\\s\\+]/", "", strip_tags($value));
                                    $value = str_replace('Model', '', $value);
                                    $request->model = trim($value);
                                    if(!empty($request->brand)){
                                        break;
                                    }
                                }
                                if(strpos($value, 'Device –') !== false){
                                    $value = htmlentities($value);
                                    $value = preg_replace("/&#?[a-z0-9]{2,8};/i","", $value);
                                    $value = preg_replace("/[^a-zA-Z0-9\\s\\+]/", "", strip_tags($value));
                                    $value = str_replace('Device', '', $value);
                                    $request->model = trim($value);
                                    if(!empty($request->brand)){
                                        break;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        if(empty($request->model)){
            if(empty($request->brand)){
                return 0;
            }
            if(strpos($request->title, $request->brand) !== false){
                $title = str_replace($request->brand, '', $request->title);
                $pos = strpos($title, 'Smartphone');
                if($pos === false){
                    $pos = strpos($title, 'smartphone');
                }
                if($pos !== false){
                    $request->model = substr($title, 0, $pos);
                }
            }
            if(empty($request->model)) {
                return 0;
            }
        }
        if(empty($request->brand)){
            $request->brand = 'Other';
            $this->insertBrand($request->brand);
        }
        if(strpos($request->model, 'Also Known') !== false){
            $request->model = substr($request->model, 0, strpos($request->model, 'Also Known'));
            $request->model = trim($request->model);
        }

        $className="aps-image-zoom";
        $nodes = $finder->query("//*[contains(@class, '$className')]");
        if($nodes->length){
            $image = $nodes->item(0)->getAttribute("src");
        }
        $className="aps-rating-total";
        $nodes = $finder->query("//*[contains(@class, '$className')]");
        if($nodes->length){
            $rate = $nodes->item(0)->nodeValue;
        }
//        $className="aps-price-value";
//        $nodes = $finder->query("//*[contains(@class, '$className')]");
//        if($nodes->length){
//            $price = $nodes->item(0)->nodeValue;
//        }
        $className="aps-rating-asp";
        $nodes = $finder->query("//*[contains(@class, '$className')]");
        if($nodes->length){
            foreach($nodes as $node){
                $rateName = ''; $rateValue = '';
                $strong = $node->getElementsByTagName("strong");
                if($strong->length){
                    $rateName = trim($strong->item(0)->nodeValue);
                }
                $span = $node->getElementsByTagName("span");
                if($span->length){
                    $rateValue = trim($span->item(0)->textContent);
                }
                if(empty($rateName)){ continue; }
                if(isset($rateList->$rateName)){ break; }
                $rateValueEval = eval('return '.$rateValue.';') * 10;
                if($rateValueEval){
                    $rateValue = $rateValueEval;
                } elseif((float)$rateValue){
                    $rateValue = (float)$rateValue;
                }
                $bodyRates .= ($bodyRates == '' ? '' : ', '). "(NOW(), NOW(), '".addslashes($request->brand)."',
                            '".addslashes($request->model)."','".addslashes($rateName)."','".addslashes($rateValue)."')";
                $rateList->$rateName = $rateValue;
            }
        }

        $nodes = $dom->getElementsByTagName("ul");
        if($nodes->length){
            foreach ($nodes as $element){
                $featureName = ''; $featureValue = '';
                $specName = ''; $specValue = '';
                if ($element->getAttribute("class") == "aps-features-list"){
                    $ul = $element->getElementsByTagName("li");
                    foreach($ul as $li){
                        $divs = $li->getElementsByTagName("div");
                        if($divs->length){
                            foreach($divs as $div){
                                if ($div->getAttribute("class") == "aps-feature-info"){
                                    $strong = $div->getElementsByTagName("strong");
                                    if($strong->length){
                                        $featureName = trim($strong->item(0)->nodeValue);
                                    }
                                    $span = $div->getElementsByTagName("span");
                                    if($span->length){
                                        $featureValue = trim($span->item(0)->nodeValue);
                                    }
                                }
                            }
                        }
                        if(isset($overviewMap->$featureName)){
                            $featureName = $overviewMap->$featureName;
                        }
                        $bodyFeatures .= ($bodyFeatures == '' ? '' : ', '). "(NOW(), NOW(), '".addslashes($request->brand)."',
                            '".addslashes($request->model)."','".addslashes($featureName)."','".addslashes($featureValue)."')";
                    }
                }

                if ($element->getAttribute("class") == "aps-specs-list"){
                    $ul = $element->getElementsByTagName("li");
                    foreach($ul as $li){
                        $strong = $li->getElementsByTagName("strong");
                        if($strong->length){
                            $specName = trim($strong->item(0)->nodeValue);
                        }

                        $divs = $li->getElementsByTagName("div");
                        if($divs->length){
                            foreach($divs as $div){
                                if ($div->getAttribute("class") == "aps-attr-value"){
                                    $specValue = trim($div->nodeValue);
                                    if(empty($specValue)){
                                        $i = $div->getElementsByTagName("i");
                                        if($i->length){
                                            if(strpos($i->item(0)->getAttribute("class"), 'aps-icon-check')  !== false){
                                                $specValue = 'Yes';
                                            } elseif(strpos($i->item(0)->getAttribute("class"), 'aps-icon-cancel')  !== false){
                                                $specValue = 'No';
                                            }
                                        }
                                    }
                                    if($specName == 'Video Resolution'){
                                        $as = $div->getElementsByTagName("a");
                                        if($as->length){
                                            $specValue = '';
                                            foreach($as as $a){
                                                $specValue .= ($specValue == '' ? '' : ', '). $this->convertVideoResolution($a->getAttribute('data-cfemail'));
                                            }
                                        }
                                    }
                                    if($specName == 'Selling Price'){
                                        $basePrice = $specValue;
                                        $price = htmlentities($specValue);
                                        $price = preg_replace("/&#?[a-z0-9]{2,8};/i","", $price);
                                        $price = preg_replace("/[^0-9\\s\\.\\,]/", "", strip_tags($price));
                                        $price = (float)$price;
                                    }
                                }
                            }
                        }
                        $bodySpecs .= ($bodySpecs == '' ? '' : ', '). "(NOW(), NOW(), '".addslashes($request->brand)."',
                            '".addslashes($request->model)."','".addslashes($specName)."','".addslashes($specValue)."')";
                    }
                }
            }
        }
        libxml_use_internal_errors(false);

        $this->db->trans_begin();
        $query = "INSERT INTO $this->modelModel (`created`, `modified`, `brand`, `model`, `price`, `rate`, `image`, `crawler`, `base_price`) 
          VALUES (NOW(), NOW(), '".addslashes($request->brand)."', '".addslashes($request->model)."', '".addslashes($price)."', 
            '".addslashes($rate)."', '".addslashes($image)."', '".addslashes($request->crawler)."', '".addslashes($basePrice)."')
          ON DUPLICATE KEY UPDATE modified = VALUES(modified), price = VALUES(price), rate = VALUES(rate),
            image = VALUES(image), crawler = VALUES(crawler), base_price = VALUES(base_price);
        ";
        $this->db->query($query);

        $query = "INSERT INTO $this->rateModel (`created`, `modified`, `brand`, `model`, `feature`, `rate`) VALUES $bodyRates
          ON DUPLICATE KEY UPDATE modified = VALUES(modified), rate = VALUES(rate), deleted = VALUES(deleted);
        ";
        $this->db->query($query);

        $query = "INSERT INTO $this->featureModel (`created`, `modified`, `brand`, `model`, `feature`, `des`) VALUES $bodySpecs
          ON DUPLICATE KEY UPDATE modified = VALUES(modified), des = VALUES(des), deleted = VALUES(deleted);
        ";
        $this->db->query($query);

        $query = "INSERT INTO $this->overviewModel (`created`, `modified`, `brand`, `model`, `overview`, `des`) VALUES $bodyFeatures
          ON DUPLICATE KEY UPDATE modified = VALUES(modified), des = VALUES(des), deleted = VALUES(deleted);
        ";
        $this->db->query($query);
        $result = 1;
        if ($this->db->trans_status() === TRUE){
            $this->db->trans_commit();
        } else {
            $this->db->trans_rollback();
            $result = 0;
        }
        return $result;
    }

    /**
     * Chuyen cdata tu pdevice sang video resolution
     * @request: {}
     * @response: {}
     **/
    private function convertVideoResolution($a){
//        $a = '6d5c5d555d1d2d5b5d0b1d1e';
        $es = '';
        for($n=2; strlen($a)-$n; $n+=2){
            $r = '0x' . substr($a, 0, 2);
            $tmp = '0x' . substr($a, $n, 2);
            $tmp = hexdec($tmp) ^ hexdec($r);
            $tmp = '0' . base_convert($tmp, 10, 16);
            $tmp = substr($tmp, -2);
            $es .= '%' . $tmp;
        }
        return urldecode($es);
    }

    /**
     * Cron job to update tgdd's price
     * @request: {}
     * @response: {}
     **/
    public function tgdd($start=0){
        $this->layout->disable_layout(); // disable layout
        $limit = 10;

//        $aa = array(2819);

        $list = $this->db->select('id, modified, brand, model, capacity, color, crawler')
            ->from($this->deviceModel)
            ->where('deleted', 0)
            ->where('completed', 0)
//            ->where_in('id', $aa)
            ->order_by('modified', 'asc')
            ->limit($limit)
            ->get()->result()
        ;

        set_time_limit(0);
        $ids = '';
        $ids2 = '';
        foreach($list as $item){
            $result = $this->priceOfTgdd($item);
            echo $item->brand.' '.$item->model.' '.$item->capacity.' '.$item->color.' ===> '. $result . "<br />";
            if($result){
                $ids .= ($ids == '' ? '' : ', ') . $item->id;
            } else{
                $ids2 .= ($ids2 == '' ? '' : ', ') . $item->id;
            }
            sleep(mt_rand(6, 12));
        }
        if(!empty($ids)){
            $query = "UPDATE $this->deviceModel c SET c.completed = 1, c.modified = NOW() WHERE c.id IN($ids);";
            $this->db->query($query);
        }
        if(!empty($ids2)){
            $query = "UPDATE $this->deviceModel c SET c.modified = NOW() WHERE c.id IN($ids2);";
            $this->db->query($query);
        }
        echo $result; exit;
    }

    /**
     * Lay spec cua mot device
     * @request: {}
     * @response: {}
     **/
    private function priceOfTgdd(stdClass &$request){
        if(empty($request->crawler)){
            return 0;
        }
        $header = array(
            'User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:52.0) Gecko/20100101 Firefox/52.0',
            'Host: www.thegioididong.com',
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
            'Accept-Language: en-US,en;q=0.5'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $request->crawler);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);

        $response = curl_exec($ch);
        if (curl_error($ch)) { echo "ERROR: ".curl_error($ch); return 0; }
        list($headers, $body) = explode("\r\n\r\n", $response, 2);

        $myfile = fopen(APPPATH.'third_party/worker/metadata/tgdd_'.$request->id.".html", "w") or die("Unable to open file!");
//        fwrite($myfile, $body); //
        fwrite($myfile, html_entity_decode($body));
        fclose($myfile);

        libxml_use_internal_errors(true);
        $dom = new DOMDocument();
        $dom->loadHTMLFile(APPPATH.'third_party/worker/metadata/tgdd_'.$request->id.".html");

        $price = 0;
        $image = '';
        $finder = new DomXPath($dom);

        $className="area_price";
        $nodes = $finder->query("//*[contains(@class, '$className')]");
        if($nodes->length){
            $strong = $nodes->item(0)->getElementsByTagName('strong');
            if($strong->length){
                $price = $strong->item(0)->nodeValue;
                $price = htmlentities($price);
                $price = preg_replace("/&#?[a-z0-9]{2,8};/i","", $price);
                $price = preg_replace("/[^a-zA-Z0-9\\.]/", "", strip_tags($price));
            }
        }

        $className="picture";
        $nodes = $finder->query("//*[contains(@class, '$className')]");
        if($nodes->length){
            $img = $nodes->item(0)->getElementsByTagName('img');
            if($img->length){
                $image = $img->item(0)->getAttribute('src');
            }
        }
        libxml_use_internal_errors(false);

        if(!empty($price)){
            $query = "INSERT INTO $this->deviceModel (`created`, `modified`, `brand`, `model`, `capacity`, `color`, `price`, `image`) 
              VALUES (NOW(), NOW(), '".addslashes($request->brand)."', '".addslashes($request->model)."', 
                '".addslashes($request->capacity)."', '".addslashes($request->color)."', '".addslashes($price)."', '".addslashes($image)."')
              ON DUPLICATE KEY UPDATE modified = VALUES(modified), price = VALUES(price), image = VALUES(image);
            ";
            return $this->db->query($query);
        }
        return 0;
    }

    /**
     * Dump database with out mysql dump
     * @request: {}
     * @response: {}
     **/
    public function dump(){
        exit;
        echo "Starting... <br />";
//        shell_exec("/usr/bin/php ".APPPATH."../third_party/mysql/dump/tests/canvas.php");

        error_reporting(E_ALL);

        include_once(dirname(__FILE__) . "/../../third_party/mysql/dump/src/Ifsnop/Mysqldump/Mysqldump.php");

        $dumpSettings = array(
            'exclude-tables' => array('/^travis*/'),
            'compress' => Ifsnop\Mysqldump\Mysqldump::NONE,
            'no-data' => false,
            'add-drop-table' => true,
            'single-transaction' => true,
            'lock-tables' => true,
            'add-locks' => true,
            'extended-insert' => false,
            'disable-keys' => true,
            'skip-triggers' => false,
            'add-drop-trigger' => true,
            'routines' => true,
            'databases' => false,
            'add-drop-database' => false,
            'hex-blob' => true,
            'no-create-info' => false,
            'where' => ''
        );
        $dumpSettings['databases'] = true;

        $dump = new Ifsnop\Mysqldump\Mysqldump(
            "mysql:host=localhost;dbname=vas_canvas",
            "vas-canvas",
            "3S3AJ128kemlyaeSe538",
            $dumpSettings);
        $dump->start("vas_canvas.sql");
        exit;

        exit;
    }

}