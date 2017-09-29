<!--======================well=========================-->

    <section class="well-1 bg-primary" id="home-s1">
      <div class="container">
	      <div class="row offset">
	      	<div class="col-lg-3 col-xs-3">
	      		<div class="panel panel-default wow fadeInUp">
				  <div class="panel-heading" lang-key="ho tro truc tuyen">{lang('ho tro truc tuyen')}</div>
				  <div class="panel-body">
			  		<div class="online-support" style="background-image:url({base_url()}media/uploads/images/phone2.png);">
				  		<h4 class="blink_me">
		                	<span><small style="font-size: 80%;">Hotline:</small> 
		                	<br><a href="{$smarty.session.sys_cnf->cnf_hotline->v2}">{$smarty.session.sys_cnf->cnf_hotline->v1}</a></span>
		                </h4>
			  		</div>
					<span style="color: #272d33; display: block; margin-top: 3px;" lang-key="phong ky thuat">
					{lang('phong ky thuat')}
					</span>
	                {foreach from=$smarty.session.sys_cnf->tphone key=ksub item=isub name=foo}
			  		<p style="position: relative; margin-top: 5px; {if $smarty.foreach.foo.last} border-bottom: thin dotted; {/if}">
	                	<span>
	                		{$isub->n}
	                		<a style="padding-left: 5px;" href="{$isub->v1}" class="anchor-contact">
	                			<img src="{base_url()}media/images/zalo.png" />
	                		</a>
	                		<a style="padding-left: 20px;" href="{$isub->v2}" class="anchor-contact">
	                			<img src="{base_url()}media/images/skype.png" />
	                		</a>
	                	</span>
	                </p>
			      	{/foreach}
					<span style="color: #272d33; display: block; margin-top: 3px;" lang-key="phong kinh doanh">
					{lang('phong kinh doanh')}
					</span>
	                {foreach from=$smarty.session.sys_cnf->sphone key=ksub item=isub name=foo}
			  		<p style="position: relative; margin-top: 5px; {if $smarty.foreach.foo.last} border-bottom: thin dotted; {/if}">
	                	<span>
	                		{$isub->n}
	                		<a style="padding-left: 5px;" href="{$isub->v1}" class="anchor-contact">
	                			<img src="{base_url()}media/images/zalo.png" />
	                		</a>
	                		<a style="padding-left: 20px;" href="{$isub->v2}" class="anchor-contact">
	                			<img src="{base_url()}media/images/skype.png" />
	                		</a>
	                	</span>
	                </p>
			      	{/foreach}
	                <span style="color: #272d33; display: block; margin-top: 3px;" lang-key="thong tin lien he">
					{lang('thong tin lien he')}
					</span>
			  		<p style="position: relative;">
	                	<span>
	                		<b>Email: </b>{$smarty.session.sys_cnf->cnf_email->v1}
	                	</span>
	                </p>
				  </div>
				</div>
	      		<div class="panel panel-default wow fadeInUp">
				  <div class="panel-heading" style="border-bottom: 0px;">Video Clip</div>
				  <div class="panel-body" style="padding: 0px;">
				  	<iframe id="youtube-iframe" style="width: 100%; height: 215px;" src=""></iframe>
				  </div>
				</div>
	      		<div class="panel panel-default wow fadeInUp" style="min-height: 216px;">
				  <div class="panel-heading" style="display:none;">Video Clip</div>
				  <div class="panel-body" style="padding: 0px;">
				  	<div id="fb-root"></div>
						<script>setTimeout(function(){
							(function(d, s, id) {
								  var js, fjs = d.getElementsByTagName(s)[0];
								  if (d.getElementById(id)) return;
								  js = d.createElement(s); js.id = id;
								  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=1701436310107866";
								  fjs.parentNode.insertBefore(js, fjs);
								}(document, 'script', 'facebook-jssdk'));
						}, 2000);</script>
						<div class="fb-page" data-href="{$smarty.session.sys_cnf->cnf_facebook_page->v1}" data-width="340" data-hide-cover="false" data-show-facepile="true"></div>
				  </div>
				</div>
	      		<div class="panel panel-default wow fadeInUp">
				  <div class="panel-heading" lang-key="thong ke">{lang('thong ke')}</div>
				  <div class="panel-body" style="padding-bottom: 0;padding-top: 0;">
			  		<div class="statistic-request" style="background-image:url({base_url()}media/uploads/images/online.png);">
				  		<span lang-key="dang online">{lang('dang online')} <script type="text/javascript" src="{base_url()}webcounter.php"></script></span>
			  		</div>
			  		<div class="statistic-request" style="background-image:url({base_url()}media/uploads/images/homqua.png);">
				  		<span lang-key="hom qua">{lang('hom qua')} <label id="count-yesterday"><i class="fa fa-spinner" aria-hidden="true"></i></label></span>
			  		</div>
			  		<div class="statistic-request" style="background-image:url({base_url()}media/uploads/images/tuan.png);">
				  		<span lang-key="tuan nay">{lang('tuan nay')} <label id="count-thisweek"><i class="fa fa-spinner" aria-hidden="true"></i></label></span>
			  		</div>
			  		<div class="statistic-request" style="background-image:url({base_url()}media/uploads/images/tong.png);">
				  		<span lang-key="tong truy cap">{lang('tong truy cap')} <label id="count-total"><i class="fa fa-spinner" aria-hidden="true"></i></label></span>
			  		</div>
				  </div>
				</div>
	      	</div>
	      	<div class="col-lg-9 col-xs-9 offset-6">
		        {assign var="curr" value=0}
		        {foreach from=$finalPhoto->home_section_1 key=ksub item=isub name=foo}
		        {math assign="curr" equation='x+y' x=$curr y=1}
		        {math assign="currdevide" equation='x%y' x=$curr y=3}
		        	{if $curr eq 1}
		          	<div class="row offset">
		          	{/if}
			          <div class="col-lg-6 col-xs-6 offset-6">
			            <div class="product bg-cover pr-img-04 wow fadeInUp" 
			            	style="background-image: url({base_url()}media/filemanager/thumbs/{$isub->v3});" 
			            	bg-src="{base_url()}media/filemanager/source/{$isub->v2}">
			              <a href="#" class="product_cont product_cont_mode">
			                <h3 lang-key="{$isub->v1}">{lang($isub->v1)}</h3>
			                <p has-html="true" lang-key="{$isub->v4}">{lang($isub->v4)}</p>
			                <i class="icon primary-icon icon-sm material-icons-keyboard_arrow_right"></i>
			              </a>
			            </div>
			          </div>
		          	{if $curr gte 2}
		          	{assign var="curr" value=0}
		          	</div>
		          	{/if}
		        {/foreach}
	      	</div>
	      </div>
      </div>
    </section>
<!--======================End well=========================-->
<!--======================well_1=========================-->
    <section class="well-3" id="home-s2">
      <div class="container center_text">
        <h2 class="secondary_color" lang-key="san pham">{lang('san pham')}</h2>
        {assign var="curr" value=0}
        {foreach from=$finalPhoto->home_section_2 key=ksub item=isub name=foo}
        {math assign="curr" equation='x+y' x=$curr y=1}
        {math assign="currdevide" equation='x%y' x=$curr y=3}
        	{if $curr eq 1}
          	<div class="row offset">
          	{/if}
	          <div class="col-lg-4 col-xs-4">
	            <div class="product bg-100p bg-shadow pr-img-01 wow fadeInUp" 
	            style="background-image: url({base_url()}media/filemanager/thumbs/{$isub->v3});" 
	            bg-src="{base_url()}media/filemanager/source/{$isub->v2}">
	              <a href="#" class="product_cont product_cont_mode no-all-padding">
	                <h3>{$isub->v1}</h3>
	                <i class="icon primary-icon icon-sm material-icons-keyboard_arrow_right"></i>
	              </a>
	            </div>
	          </div>
          	{if $curr gte 3}
          	{assign var="curr" value=0}
          	</div>
          	{/if}
        {/foreach}
      </div>
    </section>
<!--======================End well_1=========================-->
<!--======================well_1=========================-->
    <section class="well-2 bg-primary center_text" id="home-s3">
    <h2 class="secondary_color wow fadeInRight">Chúng tôi sẽ giải quyết</h2>
    <h3 class="primary_color wow fadeInLeft">các yêu cầu của khách hàng</h3>
    <div class="container text-left offset-1">
      <div class="row icon-hover_2 flow-offset-1">
        <div class="col-lg-4 col-xs-12 wow fadeInUp">
          <i class="icon primary-icon icon-md material-icons-toys"></i>
          <h3 class="secondary_color" style='font: 400 34px/48px "Open Sans", sans-serif;'>Gia công chính xác</h3>
          <p>&nbsp;</p>
          <h4 class="primary_color inset-3">Chúng tôi chuyên gia công chính xác chi tiết máy, gia công chi tiết khuôn, linh kiện-phụ tùng cơ khí ô tô-điện tử và các ngành công nghiệp khác. <br />
          Bên cạnh đó chúng tôi áp dụng công nghệ xử lý bề mặt không những mang lại sản phẩm đạt yêu cầu kỹ thuật mà còn đáp ứng về mặt ngoại quan sản phẩm. </h4>
        </div>
        <div class="col-lg-4 col-xs-12 wow fadeInUp offset-6" data-wow-delay="0.2s">
          <i class="icon primary-icon icon-md material-icons-access_alarm"></i>
          <h3 class="secondary_color" style='font: 400 34px/48px "Open Sans", sans-serif;'>Thiết kế, chế tạo máy</h3>
          <p>&nbsp;</p>
          <h4 class="primary_color inset-3">Với đội ngũ kỹ sư nhiều kinh nghiệm làm việc trong nhiều lĩnh vực, chúng tôi đưa ra các giải pháp công nghệ kỹ thuật từ đó thiết kế chế tạo máy theo nhu cầu của khách hàng. <br />
          Những sản phẩm tưởng như không thể, phức tạp khi đến với chúng tôi sẽ đơn giản và tối ưu nhất.</h4>
        </div>
        <div class="col-lg-4 col-xs-12 wow fadeInUp offset-6" data-wow-delay="0.4s">
          <i class="icon primary-icon icon-md material-icons-tonality"></i>
          <h3 class="secondary_color" style='font: 400 34px/48px "Open Sans", sans-serif;'>Dịch vụ của chúng tôi</h3>
          <p>&nbsp;</p>
          <h4 class="primary_color inset-3">Với phương châm mang lại sự hài lòng cho khách hàng. <br />
          Sản phẩm của chúng tôi được kiểm tra nghiêm ngặt từ khâu đầu vào, quá trình sản xuất cho tới khâu kiểm định, 
          đóng gói và vận chuyển để mang lại sản phẩm đạt chất lượng và đáp ứng nhanh tiến độ.</h4>
        </div>
      </div>
    </div>
    <a href="#" class="btn btn-default btn-md wow fadeIn">View all</a>
    </section>
<!--======================End well_1=========================-->
<!--======================parallax=========================-->
    <section class="parallax well-3" data-url="{base_url()}media/filemanager/source/{$finalPhoto->home_section_4[0]->v2}" data-mobile="true" data-speed="0.6" id="home-s4">
      <div class="container">
        <div class="row"> 
          <div class="col-lg-6">
            <!-- <h2 class="wow fadeInLeft ls-1">Chúng tôi phục vụ các nhu cầu chế tạo</h2> -->
            <!-- <h3 class="wow fadeInLeft">các nhau cầu chế tạo</h3> -->
	        {foreach from=$finalList->home_section_4 key=ksub item=isub name=foo}
	          {if $isub->v2 eq 'left'}
		          {if $smarty.foreach.foo.first}
		          <h2 class="wow fadeInLeft ls-1">{$isub->v1}</h2>
		          {else}
		          <h4 class="wow fadeIn offset-8">{$isub->v1}</h4> <br />
		          {/if}
	          {/if}
	          {/foreach}
          </div>
          <div class="col-lg-6">
            <ul class="index-list icon-hover_3">
              {foreach from=$finalList->home_section_4 key=ksub item=isub name=foo}
	          {if $isub->v2 eq 'right'}
	          <li class="wow fadeInRight" data-wow-delay="{$ksub*0.2}s">
              	<h4>{$isub->v1}</h4>
              </li>
	          {/if}
	          {/foreach}
            </ul>
          </div>
        </div>
      </div>
    </section>
<!--======================End parallax=========================-->
<!--======================End well=========================-->
    <section class="well-4" id="home-s5">
      <div class="container">
        <div class="row flow-offset-1 text-center text-lg-left">
          <div class="col-lg-5">
            <img src="{base_url()}static/default/frontend/images/introduce.jpg" alt="" class="wow fadeInLeft">
          </div>
          <div class="col-lg-7">
            <h2 class="secondary_color wow fadeInRight" style="margin-top: -20px;">Một vài lời về công ty chúng tôi</h2>
            <h3 class="primary_color wow fadeInRight"></h3>
            <h4 class="primary_color offset-1 inset-3">
            Công ty TNHH cơ khí chính xác Toàn Thắng được thành lập với mục tiêu cung cấp 
            cho thị trường sản phẩm cơ khí chính xác, kết hợp chuyển giao công nghệ trong lĩnh vực thiết kế chế tạo máy.
            <br />
            Với đội ngũ kỹ sư chuyên nghiệp qua nhiều năm kinh nghiệm và có tay nghề kỹ thuật cao. 
            Chúng tôi khẳng định sẽ mang đến sự hài lòng tuyệt đối nếu bạn lựa chọn chúng tôi.
            <br />
            Với phương châm mang lại sự hài lòng cho khách hàng. Công ty chúng tôi luôn nỗ lực cải tiến, liên tục phát triển không ngừng 
            để đáp ứng yêu cầu ngày càng cao của Quý khách.
            </h4>
          </div>
        </div>
      </div>
    </section>
<!--======================End well=========================-->