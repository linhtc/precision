<?php

function add_css($listCss) {
    $list_Css = '';
    if(count($listCss) > 0){
        foreach ($listCss as $value) {
            $list_Css .= '<link href="'.base_url().$value.'" rel="stylesheet" type="text/css" />';
        }
    }
    return $list_Css;

}
function add_js($listJs) {
    $list_Js = '';
    if(count($listJs) > 0){
        foreach ($listJs as $value) {
            $list_Js .= '<script src="'.base_url().$value.'" type="text/javascript"></script>';
        }
    }
    return $list_Js;

}
function get_city($latlng) {
   $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.$latlng.'&sensor=false');

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    //curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    //curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);

    $response = curl_exec($ch);

    $response = json_decode($response);


    $response = $response->results;

    $response = $response[0]->address_components;

    foreach ($response as $item) {
        $type_local = $item->types;
        if($type_local[0] == 'administrative_area_level_1'){
            return $item->long_name;
        }
    }
}
function get_id_city_vtv($str) {
    $all_id_city = array(
        'ben_tre' => '2347703',
        'cao_bang' => '2347704',
        'hai_phong' => '2347707',
        'lai_chau' => '2347708',
        'lam_dong' => '2347709',
        'long_an' => '2347710',
        'quang_nam' => '2347711',
        'quang_ninh' => '2347712',
        'son_la' => '2347713',
        'tay_ninh' => '2347714',
        'thanh_hoa' => '2347715',
        'thai_binh' => '2347716',
        'tien_giang' => '2347717',
        'lang_son' => '2347718',
        'an_giang' => '2347719',
        'dak_lak' => '2347720',
        'dong_nai' => '2347721',
        'dong_thap' => '2347722',
        'kien_giang' => '2347723',
        'ha_noi' => '2347727',
        'ho_chi_minh' => '2347728',
        'ba_ria' => '2347729',
        'binh_dinh' => '2347730',
        'binh_thuan' => '2347731',
        'can_tho' => '2347732',
        'gia_lai' => '2347733',
        'ha_giang' => '2347734',
        'ha_tay' => '2347735',
        'ha_tinh' => '2347736',
        'hoa_binh' => '2347737',
        'khanh_hoa' => '2347738',
        'lao_cai' => '2347740',
        'ha_nam' => '2347741',
        'nghe_an' => '2347742',
        'ninh_binh' => '2347743',
        'ninh_thuan' => '2347744',
        'phu_yen' => '2347745',
        'quang_binh' => '2347746',
        'quang_tri' => '2347747',
        'soc_trang' => '2347748',
        'thua' => '2347749',
        'tra_vinh' => '2347750',
        'tuyen_quang' => '2347751',
        'vinh_long' => '2347752',
        'yen_bai' => '2347753',
        'kon_tum' => '20070076',
        'quang_ngai' => '20070077',
        'bin_duong' => '20070078',
        'hung_yen' => '20070079',
        'hai_duong' => '20070080',
        'bac_lieu' => '20070081',
        'ca_mau' => '20070082',
        'thai_nguyen' => '20070083',
        'bac_kan' => '20070084',
        'da_nang' => '20070085',
        'bin_phuoc' => '20070086',
        'bac_giang' => '20070087',
        'bac_ninh' => '20070088',
        'nam_dinh' => '20070089',
        'vinh_phuc' => '20070090',
        'phu_tho' => '20070091',
        'dien_bien' => '28301718',
        'dac_nong' => '28301719',
        'hau_giang' => '28301720',
    );
    if(isset($all_id_city[$str]))
        return $all_id_city[$str];
    else
        return false;
}
function stripUnicode($str) {
    $str = str_replace(array(',', '<', '>', '&', '{', '}', '*', '?', '/', ':',  '"', '\'', '\\', '@', '!', '*', '#', '(', ')', '&', '.', '^', '~', '+', '_', '“', '”', '%'), array(' '), $str);
    if(!$str) return false;
    $unicode = array
    (
     'a'=>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
     'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
     'd'=>'đ',
     'D'=>'Đ',
     'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
     'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
     'i'=>'í|ì|ỉ|ĩ|ị',
     'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
     'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
     'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
     'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
     'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
     'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
     'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ'
    );

    foreach($unicode as $khongdau=>$codau)
    {
      $arr = explode("|",$codau);
      $str = str_replace($arr,$khongdau,$str);
    }
    $str = preg_replace('/\s+/','_',$str);
    $str = rtrim($str);
    $str = strtolower($str);
    return $str;

}

function showMenuLi(&$content='', $menus, $p, $id_parent = 0, $level = 0){
    $menu_tmp = array();

    foreach ($menus as $key => $item) {
        if ((int) $item['parent'] == (int) $id_parent) {
            $menu_tmp[] = $item;

            unset($menus[$key]);
        }
    }

    if ($menu_tmp)
    {
        $icon = '';
        for($i=0; $i < $level; $i++)
            $icon .= '|----&nbsp;';

        foreach ($menu_tmp as $item)
        {
            $content .= '<tr>';
            $content .= '<td>';
            $content .=  $item['id'];
            $content .= '</td>';
            $content .= '<td>';
            $content .=  $item['created'];
            $content .= '</td>';
            $content .= '<td class="title-cat">';
            $content .=  $icon.$item['subject'];
            $content .= '</td>';
            $content .= '<td  id="row_'.$item['id'].'" class="text-center">';
            if($item['is_publish'] == 1){
                $content .= '<span class="label label-warning">Nháp</span>';
            }else{
                $content .= '<span class="label label-success">Xuất bản</span>';
            }
            $content .= '</td>';
            $content .= '<td class="text-center">';
            $content .= '<a href="main.php?p='.$p.'-sua&id='.$item['id'].'">';
            $content .= '<button type="button" class="btn btn-info btn-xs tooltips" data-toggle="tooltip" data-placement="top"><i class="fa fa-edit"></i></button>';
            $content .= '</a> ';
            $content .= '<a onclick="return confirm(\' Bạn có chắc muốn xóa không ?\');" href="main.php?p=cat-xoa&id='.$item['id'].'">';
            $content .= '<button type="button" class="btn btn-danger btn-xs tooltips" data-toggle="tooltip" data-placement="top"><i class="fa fa-trash-o"></i></button>';
            $content .= '</a>';
            $content .= '</td>';
            $content .= '</tr>';
            // Gọi lại đệ quy
            // Truyền vào danh sách menu chưa lặp và id parent của menu hiện tại
            showMenuLi($content, $menus, $p, $item['id'], $level+1);
        }

    }
}

function show_OPtion(&$content='', $menus, $array_id = array(), $id_parent = 0, $level = 0){
    $menu_tmp = array();

    foreach ($menus as $key => $item) {
        if ((int) $item['parent'] == (int) $id_parent) {
            $menu_tmp[] = $item;

            unset($menus[$key]);
        }
    }

    if ($menu_tmp)
    {
        $icon = '';
        for($i=0; $i < $level; $i++)
            $icon .= '|----&nbsp;';

        foreach ($menu_tmp as $item){
            if (in_array($item['id'], $array_id))
                $content .= "<option selected value='".$item['id']."''>".$icon.$item['subject']."</option>";
            else
                $content .= "<option value='".$item['id']."''>".$icon.$item['subject']."</option>";

            show_OPtion($content, $menus, $array_id, $item['id'], $level+1);
        }

    }
}
function list_Pagination_List($totalRows, $page=1, $pageSize=5, $offset = 2){
    $baseURL = $_SERVER['REDIRECT_QUERY_STRING']."?";
    parse_str($_SERVER['QUERY_STRING'],$arr);
    unset($arr['page']);
    $str="";
    foreach($arr as $k=> $v) $str.= "{$k}={$v}&";

    $baseURL .= $str;

    if ($totalRows<=0) return "";
    $totalPages = ceil($totalRows/$pageSize);
    if ($totalPages<=1) return "";

    $firstLink="";  $prevLink="";  $lastLink="";  $nextLink="";

    if ($page > 1) {
        $firstLink = "<li><a href='$baseURL'>&laquo;</a></li>";
        $prevPage = $page - 1;
        if ($prevPage == 1)
            $prevLink="<li><a href='$baseURL'>&lsaquo;</a></li>";
        else
            $prevLink="<li><a href='".$baseURL."page=$prevPage'>&lsaquo;</a></li>";
    }

    $from = $page - $offset;
    $to = $page + $offset;
    if ($from <=0) { $from = 1;   $to = $offset*2; }
    if ($to > $totalPages) { $to = $totalPages; }
    $links = "";
    for($j = $from; $j <= $to; $j++) {
    {
        if ($j==$page)
            $links= $links . "<li class='active'><span>$j <span class='sr-only'>(current)</span></span></li>";
        else{
            if ($j == 1)
                $links= $links . "<li><a href = '$baseURL'>$j</a></li>";
            else
                $links= $links . "<li><a href = '".$baseURL."page=$j'>$j</a></li>";
        }
    }

    } //for
    if ($page < $totalPages) {
        $lastLink = "<li><a href='".$baseURL."page=$totalPages'>&raquo;</a></li>";
        $nextPage = $page + 1;
        $nextLink = "<li><a href='".$baseURL."page=$nextPage'>&rsaquo;</a></li>";
    }

    $pagination_array[] = $totalPages;
    $pagination_array[] = $firstLink.$prevLink.$links.$nextLink.$lastLink;

    return $pagination_array;
}//PagesLink

function add_css_editor() {
    $list_Css = '';
    $listCss = array(
        'static/default/template/froala-editor/css/froala_editor.css',
        'static/default/template/froala-editor/css/froala_style.css',
        'static/default/template/froala-editor/css/plugins/code_view.css',
        'static/default/template/froala-editor/css/plugins/colors.css',
        'static/default/template/froala-editor/css/plugins/emoticons.css',
        'static/default/template/froala-editor/css/plugins/image_manager.css',
        'static/default/template/froala-editor/css/plugins/image.css',
        'static/default/template/froala-editor/css/plugins/line_breaker.css',
        'static/default/template/froala-editor/css/plugins/table.css',
        'static/default/template/froala-editor/css/plugins/char_counter.css',
        'static/default/template/froala-editor/css/plugins/video.css',
        'static/default/template/froala-editor/css/plugins/fullscreen.css',
        'static/default/template/froala-editor/css/plugins/file.css',
        'static/default/template/froala-editor/css/plugins/quick_insert.css',
    );
    if(count($listCss) > 0){
        foreach ($listCss as $value) {
            $list_Css .= '<link href="'.base_url().$value.'" rel="stylesheet" type="text/css" />';
        }
    }
    return $list_Css;
}
function add_js_editor() {
    $list_Js = '';
    $listJs = array(
        'static/default/template/froala-editor/js/froala_editor.min.js',
        'static/default/template/froala-editor/js/plugins/align.min.js',
        'static/default/template/froala-editor/js/plugins/char_counter.min.js',
        'static/default/template/froala-editor/js/plugins/code_beautifier.min.js',
        'static/default/template/froala-editor/js/plugins/code_view.min.js',
        'static/default/template/template/js/plugins/colors.min.js',
        'static/default/template/froala-editor/js/plugins/draggable.min.js',
        'static/default/template/froala-editor/js/plugins/emoticons.min.js',
        'static/default/template/froala-editor/js/plugins/entities.min.js',
        'static/default/template/froala-editor/js/plugins/file.min.js',
        'static/default/template/froala-editor/js/plugins/font_size.min.js',
        'static/default/template/froala-editor/js/plugins/font_family.min.js',
        'static/default/template/froala-editor/js/plugins/fullscreen.min.js',
        'static/default/template/froala-editor/js/plugins/image.min.js',
        'static/default/template/froala-editor/js/plugins/image_manager.min.js',
        'static/default/template/froala-editor/js/plugins/line_breaker.min.js',
        'static/default/template/froala-editor/js/plugins/inline_style.min.js',
        'static/default/template/froala-editor/js/plugins/link.min.js',
        'static/default/template/froala-editor/js/plugins/lists.min.js',
        'static/default/template/froala-editor/js/plugins/paragraph_format.min.js',
        'static/default/template/froala-editor/js/plugins/paragraph_style.min.js',
        'static/default/template/froala-editor/js/plugins/quick_insert.min.js',
        'static/default/template/froala-editor/js/plugins/quote.min.js',
        'static/default/template/froala-editor/js/plugins/table.min.js',
        'static/default/template/froala-editor/js/plugins/save.min.js',
        'static/default/template/froala-editor/js/plugins/url.min.js',
        'static/default/template/froala-editor/js/plugins/video.min.js',
    );
    if(count($listJs) > 0){
        foreach ($listJs as $value) {
            $list_Js .= '<script src="'.base_url().$value.'" type="text/javascript"></script>';
        }
    }
    return $list_Js;

}
function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

function convert_array($array) {
    $array_end = array();
    if(count($array) < 1)
        return $array_end;
    else{
        foreach ($array as $value) {
            $array_end[$value['id']] = $value['value'];
        }

        return $array_end;
    }
}
function array_gif() { /* Dung de tra cho frontend game */
    $giftMaps = array(
        1 => 'Điện thoại Prime X 2017',
        2 => 'Điện thoại Prime X1',
        3 => 'Sạc dự phòng',
        4 => 'Balo',
        5 => 'Voucher Prime X1',
        6 => 'Voucher Prime X1',
        7 => 'Voucher Prime X1',
        8 => 'Thẻ cào',
        9 => 'Thẻ cào',
        10 => 'Thẻ cào'
    );
    return $giftMaps;
}
function array_gif2() { /* Dung de show trong the select cua admin tool */
    $giftMaps = array(
        1 => 'Prime X 2017',
        2 => 'Prime X1',
        3 => 'Sạc dự phòng',
        4 => 'Balo',
        5 => 'Voucher 200K',
        6 => 'Voucher 300K',
        7 => 'Voucher 500K',
        8 => 'Thẻ cào 50K',
        9 => 'Thẻ cào 20K',
        10 => 'Thẻ cào 10K'
    );
    return $giftMaps;
}
function array_gif3() { /* Dung cho gui mail */
    $giftMaps = array(
        1 => 'Điện thoại Prime X 2017',
        2 => 'Điện thoại Prime X1',
        3 => 'Sạc dự phòng 5000mAh',
        4 => 'Balo thời trang',
        5 => 'VOUCHER ƯU ĐÃI [200.000 VNĐ]',
        6 => 'VOUCHER ƯU ĐÃI [300.000 VNĐ]',
        7 => 'VOUCHER ƯU ĐÃI [500.000 VNĐ]',
        8 => 'Thẻ cào điện thoại trị giá [50.000 VNĐ]',
        9 => 'Thẻ cào điện thoại trị giá [20.000 VNĐ]',
        10 => 'Thẻ cào điện thoại trị giá [10.000 VNĐ]'
    );
    return $giftMaps;
}
function array_carrier() {
    $giftMaps = array(
        1 => 'Mobifone',
        2 => 'Vinaphone',
        3 => 'Viettel',
    );
    return $giftMaps;
}

function send_flashsale_mail($email, $full_name, $model_phone, $voucher){
	$full_name = ucwords($full_name); // viet hoa cac ky tu dau cua ten
	$title = '[MOBIISTAR] Chúc mừng '.$full_name.' đã đăng ký thành công chương trình “SĂN DẾ “CHẤT” – GIÁ SỐC TỰU TRƯỜNG”';
	$str_model = '';
	$str_price = '';
	$str_online = '';
	if($model_phone == 1){ // dien thoai prime x
		$str_model = 'PRIME X';
		$str_price = '1.990.000';
		$str_online = 'http://muahang.mobiistar.vn/smartphone/mobiistar-prime-x.html';
	}elseif($model_phone == 2){ // dien thoai prime x grand
		$str_model = 'PRIME X Grand';
		$str_price = '2.990.000';
		$str_online = 'http://muahang.mobiistar.vn/smartphone/prime-x-grand.html';
	}
	// $content = file_get_contents(MEDIAPATH.'media/files/content_flashsale_mail.html');
	$content = file_get_contents(MEDIAPATH.'media/files/content_flashsale_html.html'); // lay noi dung tu file html
	// thay the nhung thong tin can thiet tu noi dung html
	$content = str_replace('VAR_FULL_NAME', $full_name, $content);
	$content = str_replace('VAR_PHONE_MODEL', $str_model, $content);
	$content = str_replace('VAR_PHONE_PRICE', $str_price, $content);
	$content = str_replace('VAR_BUY_ONLINE', $str_online, $content);
	$content = str_replace('VAR_VOUCHER', $voucher, $content);
	require_once(APPPATH.'third_party/mail/class.phpmailer.php');
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth   = true;
	$mail->Host       = "email-smtp.us-west-2.amazonaws.com";
	$mail->Port       = "587";
	$mail->SMTPSecure = "tls";
	$mail->Username   = "AKIAJEDEGEVJAFFXEVTA";
	$mail->Password   = "AgK8XPx2MLj2uVc5sQHLAzGeY5QGIDipvxZfB8m7lUkU";
	$mail->SetFrom('chuongtrinh@mobiistar.vn', 'Mobiistar');
	$mail->CharSet = 'UTF-8';

	$mail->Subject = $title;
	$body = $content;
	$mail->MsgHTML($body);
	$mail->AddAddress($email, "");
	$mail->AddCC('hotro@mobiistar.vn', "");
	// $mail->AddCC('an.le@mobiistar.vn', "");
	// $mail->AddCC('tuan.tran@mobiistar.vn', "");
	// $mail->AddCC('buihuynh.kinhluan@gmail.com', "");
	return $mail->Send();
}

function send_mail_to_winner_bk($userClass){
    /* Kiem tra mot so thong tin can thiet */
    if(empty($userClass->email)){ return false; }

    $giftList = array_gif3();
    $carrierList = array_carrier();
    $userClass->gift_name = isset($giftList[$userClass->gift_id]) ? $giftList[$userClass->gift_id] : null;

    $full_name = ucwords($userClass->full_name); // viet hoa cac ky tu dau cua ten
	$title = '[MOBIISTAR] Chúc mừng bạn đã trúng thưởng chương trình “VÂN TAY NÓI GÌ VỀ SỰ THÀNH CÔNG CỦA BẠN?”';
	$content = file_get_contents(MEDIAPATH.'files/mail_to_win.html'); /* Noi dung se de trong file html o thu muc media/files */

    /* Thay the nhung thong tin can thiet tu noi dung trong file */
	$content = str_replace('VAR_NAME', $userClass->full_name, $content);
	$content = str_replace('VAR_GIFT', $userClass->gift_name, $content);

	require_once(APPPATH.'third_party/mail/class.phpmailer.php');
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth   = true;
	$mail->Host       = "email-smtp.us-west-2.amazonaws.com";
	$mail->Port       = "587";
	$mail->SMTPSecure = "tls";
	$mail->Username   = "AKIAJEDEGEVJAFFXEVTA";
	$mail->Password   = "AgK8XPx2MLj2uVc5sQHLAzGeY5QGIDipvxZfB8m7lUkU";
	$mail->SetFrom('chuongtrinh@mobiistar.vn', 'Mobiistar');
	$mail->CharSet = 'UTF-8';

	$mail->Subject = $title;
	$body = $content;
	$mail->MsgHTML($body);
	$mail->AddAddress($userClass->email, "");
//	$mail->AddCC('hotro@mobiistar.vn', "");
	// $mail->AddCC('an.le@mobiistar.vn', "");
//	 $mail->AddCC('hoa.tang@mobiistar.vn', "");
//	 $mail->AddCC('buihuynh.kinhluan@gmail.com', "");
	 $mail->AddCC('conglinh.tran@mobiistar.vn', "Leon");
	return $mail->Send();
}

function send_mail_to_winner($userClass){
    /* Kiem tra mot so thong tin can thiet */
    if(empty($userClass->email)){ return false; }

    $giftList = array_gif3();
    $userClass->gift_name = isset($giftList[$userClass->gift_id]) ? $giftList[$userClass->gift_id] : null;

    $contentCard = '';
    $contentVoucher = '';
    $contentApplyFor = ' ';
    $contactLater = 'Mobiistar sẽ liên hệ với bạn về quy trình nhận giải thưởng sau khi chương trình kết thúc vào ngày 09/01/2017.<br><br>';
    if($userClass->gift_id >= 5 && $userClass->gift_id <= 7){ /* Neu trung voucher */
        $contentVoucher = "
            Mã voucher: <label style=\"color: #fd1011;\">$userClass->code</label><br>
            Thời hạn sử dụng mã voucher đến hết ngày 25/01/2017.<br>
            Lưu ý: Voucher chỉ được sử dụng một lần và không có giá trị cộng gộp với các chương trình ưu đãi khác.<br>
            Mã voucher được áp dụng để mua <label style=\"color: #737bfd;\">PRIME X1</label> tại các địa điểm sau:<br>
            1. Trang Mua Hàng Online của Mobiistar:&nbsp;<a href=\"http://muahang.mobiistar.vn/ \" target=\"_blank\">http://muahang.mobiistar.vn/ </a><br>
            2. Hệ thống showroom Mobiistar:<br>
            - TPHCM: 40 Phạm Ngọc Thạch, Phường 6, Quận 3, TPHCM<br>
            - Hà Nội: Tầng 8, Tòa nhà An Minh, số 36 Hoàng Cầu, Đống Đa, Hà Nội<br>
            - Đà Nẵng: 354 Hải Phòng, Quận Thanh Khê, Đà Nẵng<br>
            Thời gian làm việc: Từ 8h AM - 12h AM, 13h30 PM - 17h PM thứ 2 đến thứ 7 trong tuần.<br><br>
        ";
        $contentApplyFor = 'áp dụng cho sản phẩm <label style="color: #737bfd;">PRIME X1</label> ';
        $contactLater = ''; /* Nếu trúng voucher thì phát luôn chứ k cần Một lần nữa bla bla */
    }
    if($userClass->gift_id >= 8 && $userClass->gift_id <= 10){ /* Neu trung card dien thoai */
        $carrierList = array_carrier();
        $userClass->carrier = isset($carrierList[$userClass->carrier]) ? $carrierList[$userClass->carrier] : null;
        $contentCard = "Mã thẻ cào: <label style=\"color: #fd1011;\">$userClass->code</label><br> Mạng di động bạn đã chọn: $userClass->carrier<br><br>";
        $contactLater = ''; /* Nếu trúng thẻ cào thì phát luôn chứ k cần Một lần nữa bla bla */
    }

    $userClass->full_name = ucwords($userClass->full_name); // viet hoa cac ky tu dau cua ten
	$title = '[MOBIISTAR] Chúc mừng bạn đã trúng thưởng chương trình “VÂN TAY NÓI GÌ VỀ SỰ THÀNH CÔNG CỦA BẠN?”';
	$content = file_get_contents(MEDIAPATH.'files/mail_to_win2.html'); /* Noi dung se de trong file html o thu muc media/files */

    /* Thay the nhung thong tin can thiet tu noi dung trong file */
	$content = str_replace('VAR_NAME', $userClass->full_name, $content);
	$content = str_replace('VAR_GIFT', $userClass->gift_name, $content);
	$content = str_replace('VAR_APPLY_FOR', $contentApplyFor, $content);
	$content = str_replace('VAR_CONTENT_CARD', $contentCard, $content);
	$content = str_replace('VAR_CONTENT_VOUCHER', $contentVoucher, $content);
	$content = str_replace('VAR_CONTACT_LATER', $contactLater, $content);

	require_once(APPPATH.'third_party/mail/class.phpmailer.php');
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth   = true;
	$mail->Host       = "email-smtp.us-west-2.amazonaws.com";
	$mail->Port       = "587";
	$mail->SMTPSecure = "tls";
	$mail->Username   = "AKIAJEDEGEVJAFFXEVTA";
	$mail->Password   = "AgK8XPx2MLj2uVc5sQHLAzGeY5QGIDipvxZfB8m7lUkU";
	$mail->SetFrom('chuongtrinh@mobiistar.vn', 'Mobiistar');
	$mail->CharSet = 'UTF-8';

	$mail->Subject = $title;
	$body = $content;
	$mail->MsgHTML($body);
	$mail->AddAddress($userClass->email, "");
//	$mail->AddCC('hotro@mobiistar.vn', "");
	// $mail->AddCC('an.le@mobiistar.vn', "");
//	 $mail->AddCC('hoa.tang@mobiistar.vn', "");
//	 $mail->AddCC('buihuynh.kinhluan@gmail.com', "");
	 $mail->AddCC('conglinh.tran@mobiistar.vn', "Leon");
	return $mail->Send();
}

function file_get_php_classes($filepath, &$modules) {
    $php_code = file_get_contents($filepath);
    get_php_classes($php_code, $modules);
}

function get_php_classes($php_code, &$modules) {
    $funcs = array();
    $class_name = null;
    $tokens = token_get_all($php_code);
    $count = count($tokens);
    for ($i = 2; $i < $count; $i++) {
        if ($tokens[$i - 2][0] == T_CLASS
            && $tokens[$i - 1][0] == T_WHITESPACE
            && $tokens[$i][0] == T_STRING) {
            $class_name = $tokens[$i][1]; // $classes[] = $class_name; $classes[$class_name] = array();
        }
        if ($tokens[$i - 2][0] == T_FUNCTION
            && $tokens[$i - 1][0] == T_WHITESPACE
            && $tokens[$i][0] == T_STRING) {
            $func_name = $tokens[$i][1];
            $funcs[$func_name] = 1;
        }
    }
    if(!empty($class_name)){
        $class_name = preg_replace('/(?<!^)([A-Z])/', '-\\1', $class_name);
        $modules[strtolower($class_name)] = $funcs;
    }
}

/*
	Optimize send mail function
	- parabody = array(
		'VAR_FULL_NAME' => $full_name,
		'VAR_VOUCHER' => $voucher
	);
	- addtion = array(
		// config
	);
 */
function send_mail_optimize($to, $cc, $bcc, $title, $parabody, $addtion){

}