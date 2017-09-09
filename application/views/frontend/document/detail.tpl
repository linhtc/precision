<div class="row" style="min-height: 300px;">
	<div class="col-md-9 row-container-doc">
		{include file='frontend/layouts/breadcrumb.tpl'}
		<div id="jstree">
		
		</div>
	</div>
	<div class="col-md-3">
		<div class="panel panel-primary">
		  	<div class="panel-heading">Tài liệu mới</div>
		  	<div class="panel-body">
				<ul class="list-group">
				  	<li class="list-group-item">First item</li>
				  	<li class="list-group-item">Second item</li>
					<li class="list-group-item">Third item</li>
				</ul>
			</div>
		</div>
		<div class="panel panel-primary">
		  	<div class="panel-heading">Lớp mới đăng</div>
		  	<div class="panel-body">
				<ul class="list-group">
				  	<li class="list-group-item">First item</li>
				  	<li class="list-group-item">Second item</li>
					<li class="list-group-item">Third item</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<iframe id="iframe-doc-contain" class="iframe-doc iframe-doc-contain" src="" width="100%" height="100%"></iframe>
<button onclick="$('.iframe-doc').hide();" type="button" class="btn btn-danger iframe-doc iframe-doc-button">X</button>
<script>
var specList = '{$specList}';
var docStorage = '{$docStorage}';
try{
	specList = JSON.parse(specList);
	docStorage = JSON.parse(docStorage);
} catch(exx){
	console.log(exx.message);
}

function initLoading(dom){
    dom.block({
        message: '<i class="fa fa-spinner fa-pulse fa-fw" style="color: black;font-size: 900%;"></i>',
        themedCSS: {
            width:  '30%',
            top:    '0%',
            left:   '0%'
        },
        css: {
            border: 'none',
            background: 'none',
            color: '#ffffff'
        }
    });
    $(".blockUI").css("background-color", "transparent");
}
function destroyLoading(dom){
    dom.unblock();
}

$(document).ready(function() {
    $('#jstree').jstree({
        'core' : { 'data' : specList, "check_callback" : true, },
        'ui': { select_multiple_modifier : false },
        /* "plugins" : [ "dnd" ] */
    }).on('changed.jstree', function (e, data) {
        if(data.selected.length == 1) {
            var node = $('#jstree').jstree("get_text", data.selected);
            console.log(node);
        }
    }).bind('select_node.jstree', function(e, data){
        if(data.selected.length > 1){
            data.instance.deselect_node( [ data.selected[0] ] );
        }
        console.log(data.selected[0]);
        if(typeof docStorage[data.selected[0]] == 'string'){
        	console.log(docStorage[data.selected[0]]);
        	$('#iframe-doc-contain').attr('src', docStorage[data.selected[0]]);
        	initLoading($('html'));
        	setTimeout(function(){
            	destroyLoading($('html'));
            	$('.iframe-doc').show();
            }, 500);
        }
    }).bind("move_node.jstree", function(e, data) {
        console.log("Drop node " + data.node.id + " to " + data.parent);
        /*moveMenu(data.node.id, data.parent, e);*/
    }).bind("ready.jstree", function(e, data) {
        console.log("Ready jstree");
        $("#jstree").jstree("open_all");
    });
});
</script>