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
function sendmailmessage($userClass){
    /* Kiem tra mot so thong tin can thiet */
    if(empty($userClass->email)){ return false; }

    $userClass->name = ucwords($userClass->name); // viet hoa cac ky tu dau cua ten
	$title = '[MailBot] Có lời nhắn từ '.$userClass->name;
	$content = 'Bạn '.$userClass->name.' có số phone là '.$userClass->phone.' đã để lại lời nhắn sau: <br /> <br />'.$userClass->message;
	
// 	require_once(APPPATH.'third_party/mail/class.phpmailer.php');
	require_once(APPPATH.'third_party/mail/PHPMailerAutoload.php');
	$mail = new PHPMailer();
	$mail->IsSMTP();
// 	$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth   = true;
	$mail->Host       = "smtp.gmail.com";
	$mail->Port       = "587";
	$mail->SMTPSecure = "tls";
	$mail->Username   = "tplus.tcl2@gmail.com";
	$mail->Password   = "LeonTran@123";
	$mail->addReplyTo($userClass->email, $userClass->name);
	$mail->SetFrom("noreply@toanthangprecision.com", "TTP Bot");
	$mail->CharSet = 'UTF-8';
	$mail->IsHTML(true);

	$mail->Subject = $title;
	$body = $content;
	$mail->MsgHTML($body);
	$mail->AddAddress('info@toanthangprecision.com', "TTP Support");
// 	$mail->AddAddress('tplus.tcl@gmail.com', "Leon");
	//	 $mail->AddCC('tplus.tcl@gmail.com', "Leon");
	 $mail->addBCC('tplus.tcl@gmail.com', "Leon");
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
