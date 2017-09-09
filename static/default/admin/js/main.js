$(document).ready(function() {
	$(".js-example-basic-single").select2();
	$(".js-example-basic-multiple").select2();

	$("button.random_string").click(function(){
		$obj = $(this);
		$.post('/admin/function_basic/random_string', '', function (data) {
            console.log(data);
            $obj.parent().parent().find('input').val(data);

            $obj.parent().parent().parent().append('<p>Mật khẩu: <span style="color: #FF0000;font-weight: bold;">'+data+'</span></p>');
        });
	});
	$("button.random_string_show").click(function(){
        $obj = $(this);
        $.post('/admin/function_basic/random_string', '', function (data) {
            console.log(data);
            $obj.parent().parent().find('input').val(data);
        });
    });

});