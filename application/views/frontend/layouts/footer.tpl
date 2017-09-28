<footer>
    {if $uuid eq 'home' or $uuid eq 'contact'}
    <div class="container no-padding">
      <div class="row inset-2 flow-offset-1">
        <div class="col-lg-3 col-xs-12 icon-hover" style="padding-left: 0px; padding-right: 0px;">
          <i class="icon secondary-icon icon-xs material-icons-location_on"></i>
          <h3>Địa chỉ:</h3>
          <p>
          	<a href="{$smarty.session.sys_cnf->cnf_address->v2}" target="_blank">
          	{$smarty.session.sys_cnf->cnf_address->v1}
         	</a>
          </p>
        </div>
        <div class="col-lg-3 col-xs-12 icon-hover offset-6" style="padding-left: 0px; padding-right: 0px;">
          <i class="icon secondary-icon icon-xs material-icons-phone"></i>
          <h3>Điện thoại:</h3>
          <p>
          	{foreach from=$smarty.session.sys_cnf->fphone key=ksub item=isub}
	          <a href="{$isub->v2}">{$isub->v1}</a><br>
	      	{/foreach}
          </p>
        </div>
        <div class="col-lg-3 col-xs-12 icon-hover offset-6" style="padding-left: 0px; padding-right: 0px;">
          <i class="icon secondary-icon icon-xs material-icons-email"></i>
          <h3>Liên hệ:</h3>
          <p style="white-space: pre;">
          <a href="{base_url()}{$smarty.session.sys_cnf->cnf_email->v2}">{$smarty.session.sys_cnf->cnf_email->v1}</a><br>
          <a href="{$smarty.session.sys_cnf->cnf_hotline->v2}">Hotline: {$smarty.session.sys_cnf->cnf_hotline->v1}</a></p>
        </div>
        <div class="col-lg-3 col-xs-12 icon-hover offset-6">
          <i class="icon secondary-icon icon-xs material-icons-schedule"></i>
          <h3>Mở cửa:</h3>
          <p style="white-space: pre;">24/7<br>
          Tất cả các ngày trong tuần</p>
        </div>
      </div>
    </div>
    <section class="map">
    	<iframe id="google-map-iframe" src="" frameborder="0" style="width: 100%; height: 450px; border:0;" allowfullscreen></iframe>
    </section>
    {/if}
    <div class="footer-cnt center_text">
      <p class="copyright">Toan Thang Precision © 2017. <a href="index-5.html" class="rights">Privacy Policy</a></p>
    </div>
  </footer>