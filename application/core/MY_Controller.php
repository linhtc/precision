<?php

/**
 * Description of MY_Controller
 *
 * @author Bui Huynh Kinh Luan <buihuynh.kinhluan@gmail.com>
 * @copyright (c) 2016, 500BITS
 * @link http://500bits.com
 * @license MIT
 * @version beta.0.1
 */
class MY_Controller extends CI_Controller {

    protected $model_name = '';

    function __construct() {
        parent::__construct();

        global $URI, $CFG;
        
        $config = & $CFG->config;
        $lang_uri_abbr = $config['lang_uri_abbr'];
//         $langKey = $URI->segment(1); // dang dung tam domain /cnc nen chu thich lai
        $langKey = $URI->segment(2);
        $langPrefix = ($langKey == 'vn' || empty($langKey)) ? '' : (isset($lang_uri_abbr[$langKey]) ? $langKey.'/' : '');
        $this->session->set_userdata('lang_prefix', $langPrefix);
        $langFolder = isset($lang_uri_abbr[$langKey]) ? $lang_uri_abbr[$langKey] : $lang_uri_abbr[$config['language_abbr']];
        $this->lang->load('aio', $langFolder);
        $this->session->set_userdata('lang_folder', $langFolder);
        $this->load->helper('language');
        $langKey = isset($lang_uri_abbr[$langKey]) ? $langKey : $config['language_abbr'];
        $this->session->set_userdata('lang_key', $langKey);
        $langKey = ($langKey == $config['language_abbr']) ? '' : $langKey.'/';
        $this->session->set_userdata('user_menu', $this->gen_menu($this->session->userdata('user_mn_text'), $langKey));
    }
    public function loadLangFolder($langFolder=null){
    	if(empty($langFolder)){
    		$langFolder = $this->session->userdata('lang_folder');
    	}
    	$this->lang->load('aio', $langFolder);
    }
    public function checkPermission($permission = 'r') {
        $is_sign_in = $this->checkSignIn();
        if ($is_sign_in != TRUE) {
            redirect(base_url() . "admin");
        }
    }
    public function checkSignIn() {
        $CI = & get_instance();
        if ($CI->session->userdata('user_id') && $CI->session->userdata('user_username')) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    function check_permission($class, $function){
        $CI = & get_instance();
        $administrator = $CI->session->userdata('administrator');
        if($administrator){
            return $administrator;
        }
        $usr = $CI->session->userdata('user_username');
        if (empty($usr)) {
            $url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            redirect(base_url() . "admin?r=".urlencode($url));
        }
        $permission = $CI->session->userdata('user_group_permission');
//         print_r($permission); exit;
        if(!empty($permission[$class][$function])){
            return $permission[$class];
        } else{
            redirect(base_url() . "admin/permission-denied");
        }
    }
    function gen_menu($menuListTmp, $prefix) {
        if(empty($menuListTmp) || is_string($menuListTmp)){ return false; }
        $menuString = '<ul class="sidebar-menu">';
        $childrenList = new stdClass();
        foreach($menuListTmp as $menuTmp){
            $menuID = $menuTmp->id;
            $parentID = $menuTmp->parent_id;
            $menuName = $menuTmp->menu_name;
            $menuModule = $menuTmp->module;
            $menuRouter = $menuTmp->router;
            $menuIcon = $menuTmp->icon;

            $menuName = lang($menuName);

            $menuItem = new stdClass();
            $menuItem->id = $menuID;
            $menuItem->parent_id = $parentID;
            $menuItem->menu_name = $menuName;
            $menuItem->module = $menuModule;
            $menuItem->router = $menuRouter;
            $menuItem->icon = $menuIcon;

            if(empty($childrenList->$parentID)){
                $childrenList->$parentID = array($menuItem);
            } else{
                array_push($childrenList->$parentID, $menuItem);
            }

        }
        foreach($menuListTmp as $menuItem){
            $menuID = $menuItem->id;
            $parentID = $menuItem->parent_id;
            $menuName = lang($menuItem->menu_name);
            $menuName = strtoupper($menuName);
            if(empty($parentID)){
                $level = 0;
                $menuString .= '<li class="header" level="'.$level.'">'.$menuName;
                if(!empty($childrenList->$menuID)){
                    $this->get_children_menu($menuString, $childrenList, $childrenList->$menuID, $level, $menuItem->menu_name, $prefix);
                }
                $menuString .= '</li>';
            }
        }
        $menuString .= '</ul>';
        return $menuString;
    }
    function get_children_menu(&$menuString, $childrenList, $currChildrenList, $level, $rootName=null, &$prefix) {
        $level++;
        foreach($currChildrenList as $menuItem){
            $menuID = $menuItem->id;
            $parentID = $menuItem->parent_id;
            $menuName = $menuItem->menu_name;
            $menuName = lang($menuName);
            $menuModule = $menuItem->module;
            $menuRouter = $menuItem->router;
            $mlv = 'level="'.$level.'"';
            $rootName = lang($rootName);
            $head = $level == 1 ? 'head="'.$rootName.'"' : '';
            $menuIcon = !empty($menuItem->icon) ? $menuItem->icon : 'fa-circle-o';
            $menuActive = !empty($childrenList->$menuID) ? 'active_'.$menuID : $menuModule.'_'.$menuRouter;
            $menuParent = !empty($menuRouter) ? 'active_'.$parentID : '';
            $menuUrl = !empty($menuRouter) ? base_url().$prefix.'admin/'.$menuModule.'/'.$menuRouter : '#';
            $menuTitle = !empty($menuRouter) ? '<i class="fa '.$menuIcon.'"></i>'.$menuName : '<i class="fa '.$menuIcon.'"></i><span>'.$menuName.'</span><i class="fa fa-angle-left pull-right"></i>';
            if(!empty($childrenList->$menuID)){
                $menuTmp = '';
                $this->get_children_menu($menuTmp, $childrenList, $childrenList->$menuID, $level, null, $prefix);
                if(!empty($menuTmp)){
                    $menuString .= '<li '.$mlv.' '.$head.' parent="'.$menuParent.'" class="'.(!empty($childrenList->$menuID) ? 'treeview ' : '').$menuActive.'"> <a href="'.$menuUrl.'">'.$menuTitle.'</a>';
                    $menuString .= '<ul class="treeview-menu">';
                    $menuString .= $menuTmp;
                    $menuString .= '</ul>';
                    $menuString .= '</li>';
                }
            } elseif($menuUrl != '#'){
                $menuString .= '<li '.$mlv.' '.$head.' parent="'.$menuParent.'" class="'.(!empty($childrenList->$menuID) ? 'treeview ' : 'li-level'.$level.' ').$menuActive.'"> <a href="'.$menuUrl.'">'.$menuTitle.'</a>';
                $menuString .= '</li>';
            }
        }
    }
    function unmask($string) {
        /* Note it not work in php 7 */
        if(!ctype_xdigit($string)){
            return 0;
        }
        $secretKey = 'tplus@!zKaC$3<!?';
        $pack = pack('H*', $string);
        $urldecode = urldecode($pack);
        $base64_decode = base64_decode($urldecode);
        $mcrypt_decrypt = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $secretKey, $base64_decode, MCRYPT_MODE_ECB);
        return trim($mcrypt_decrypt);
    }
    function mask($string) {
        /* Note it not work in php 7 */
        if(!ctype_xdigit($string)){
            return 0;
        }
        $secretKey = 'tplus@!zKaC$3<!?';
        $mcrypt_get_iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_ECB);
        $mcrypt_create_iv = mcrypt_create_iv($mcrypt_get_iv_size, MCRYPT_RAND);
        $mcrypt_encrypt = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $secretKey, $string, MCRYPT_MODE_ECB, $mcrypt_create_iv);
        $base64_encode = base64_encode($mcrypt_encrypt);
        $urlencode = urlencode($base64_encode);
        $unpack = unpack('H*', $urlencode);
        $array_shift = array_shift($unpack);
        return trim($array_shift);
    }
    function total($items){
        if(is_object($items)){
            $items = (array)$items;
        }
        return count($items);
    }
    function stripVN($str) {
    	$str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
    	$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
    	$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
    	$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
    	$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
    	$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
    	$str = preg_replace("/(đ)/", 'd', $str);
    	
    	$str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
    	$str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
    	$str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
    	$str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
    	$str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
    	$str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
    	$str = preg_replace("/(Đ)/", 'D', $str);
    	return $str;
    }
    function getClientIP() {
    	$ipaddress = '';
    	if (getenv('HTTP_CLIENT_IP'))
    		$ipaddress = getenv('HTTP_CLIENT_IP');
    		else if(getenv('HTTP_X_FORWARDED_FOR'))
    			$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    			else if(getenv('HTTP_X_FORWARDED'))
    				$ipaddress = getenv('HTTP_X_FORWARDED');
    				else if(getenv('HTTP_FORWARDED_FOR'))
    					$ipaddress = getenv('HTTP_FORWARDED_FOR');
    					else if(getenv('HTTP_FORWARDED'))
    						$ipaddress = getenv('HTTP_FORWARDED');
    						else if(getenv('REMOTE_ADDR'))
    							$ipaddress = getenv('REMOTE_ADDR');
    							return $ipaddress;
    }

}
