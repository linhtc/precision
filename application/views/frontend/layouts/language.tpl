{$this->lang->load('aio', 'vietnamese')}
<script type="text/javascript">
	var rootBaseUrl = '{base_url()}';
	if (typeof(Storage) !== "undefined") {
	    /* Code for localStorage/sessionStorage. */
		localStorage.vn_home = "{lang('home')}";
		localStorage.vn_company = "{lang('company')}";
		localStorage.vn_product_and_service = "{lang('product_and_service')}";
		localStorage.vn_project = "{lang('project')}";
		localStorage.vn_recruit = "{lang('recruit')}";
		localStorage.vn_contact = "{lang('contact')}";
	} else {
		console.log('Not support localStorage');
	}
</script>
{$this->lang->load('aio', 'english')}
<script type="text/javascript">
	var rootBaseUrl = '{base_url()}';
	if (typeof(Storage) !== "undefined") {
		localStorage.en_home = "{lang('home')}";
		localStorage.en_company = "{lang('company')}";
		localStorage.en_product_and_service = "{lang('product_and_service')}";
		localStorage.en_project = "{lang('project')}";
		localStorage.en_recruit = "{lang('recruit')}";
		localStorage.en_contact = "{lang('contact')}";
	} else {
		console.log('Not support localStorage');
	}
</script>
{$this->lang->load('aio', $smarty.session.lang_folder)}