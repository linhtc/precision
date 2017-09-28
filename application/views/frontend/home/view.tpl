<!--======================well=========================-->

    <section class="well-1 bg-primary" id="home-s1">
      <div class="container">
	      <div class="row offset">
	      	<div class="col-lg-3 col-xs-3">
	      		<div class="panel panel-default wow fadeInUp">
				  <div class="panel-heading">Hỗ trợ trực tuyến</div>
				  <div class="panel-body">
			  		<div class="online-support" style="background-image:url({base_url()}media/uploads/images/phone2.png);">
				  		<h4 class="blink_me">
		                	<span><small style="font-size: 80%;">Hotline:</small> 
		                	<br><a href="{$smarty.session.sys_cnf->cnf_hotline->v2}">{$smarty.session.sys_cnf->cnf_hotline->v1}</a></span>
		                </h4>
			  		</div>
					<span style="color: #272d33; display: block; margin-top: 3px;">Phòng kỹ thuật:</span>
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
					<span style="color: #272d33; display: block; margin-top: 3px;">Phòng kinh doanh:</span>
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
	                <span style="color: #272d33; display: block; margin-top: 3px;">Thông tin liên hệ:</span>
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
				  <div class="panel-heading">Thống kê</div>
				  <div class="panel-body" style="padding-bottom: 0;padding-top: 0;">
			  		<div class="statistic-request" style="background-image:url({base_url()}media/uploads/images/online.png);">
				  		<span>Đang online: <script type="text/javascript" src="{base_url()}webcounter.php"></script></span>
			  		</div>
			  		<div class="statistic-request" style="background-image:url({base_url()}media/uploads/images/homqua.png);">
				  		<span>Hôm qua: <label id="count-yesterday"><i class="fa fa-spinner" aria-hidden="true"></i></label></span>
			  		</div>
			  		<div class="statistic-request" style="background-image:url({base_url()}media/uploads/images/tuan.png);">
				  		<span>Tuần này: <label id="count-thisweek"><i class="fa fa-spinner" aria-hidden="true"></i></label></span>
			  		</div>
			  		<div class="statistic-request" style="background-image:url({base_url()}media/uploads/images/tong.png);">
				  		<span>Tổng truy cập: <label id="count-total"><i class="fa fa-spinner" aria-hidden="true"></i></label></span>
			  		</div>
				  </div>
				</div>
	      	</div>
	      	<div class="col-lg-9 col-xs-9 offset-6">
		        <div class="row offset">
		          <div class="col-lg-6 col-xs-6">
		            <div class="product bg-cover pr-img-01" style="background-image: url({base_url()}media/uploads/images/home_hl_01.jpg);">
		              <a href="#" class="product_cont product_cont_mode">
		                <h3>Trung tâm gia công</h3>
		                <p>Sử dụng máy gia công tốc độ cao thương hiệu từ Nhật Bản, đem lại độ chính xác gia công.</p>
		                <i class="icon primary-icon icon-sm material-icons-keyboard_arrow_right"></i>
		              </a>
		            </div>
		          </div>
		          <div class="col-lg-6 col-xs-6">
		            <div class="product bg-cover pr-img-03" style="background-image: url({base_url()}media/uploads/images/home_hl_02.jpg);">
		              <a href="#" class="product_cont product_cont_mode">
		                <h3>Gia công chi tiết</h3>
		                <p>
		                	Sản phẩm được gia công trên công nghệ hiện đại kết hợp công nghệ xử lý bề mặt tạo ra chất lượng sản phẩm có độ chính xác và độ thẩm mỹ cao.
		                	<br />
		                	Gia công trên mọi vật liệu như Nhôm, Đồng, Sắt, Nhựa, Teflon, Mika, ...
		                </p>
		                <i class="icon primary-icon icon-sm material-icons-keyboard_arrow_right"></i>
		              </a>
		            </div>
		          </div>
		        </div>
		        <div class="row offset">
		          <div class="col-lg-6 col-xs-6 offset-6">
		            <div class="product bg-cover pr-img-04 wow fadeInUp" style="background-image: url({base_url()}media/uploads/images/home_hl_03.jpg);">
		              <a href="#" class="product_cont product_cont_mode">
		                <h3>Trang thiết bị</h3>
		                <p>Sử dụng trang thiết bị hiện đại, có độ chính xác cao. <br /> &nbsp;</p>
		                <i class="icon primary-icon icon-sm material-icons-keyboard_arrow_right"></i>
		              </a>
		            </div>
		          </div>
		          <div class="col-lg-6 col-xs-6">
		            <div class="product bg-cover pr-img-0 wow fadeInUp" style="background-image: url({base_url()}media/uploads/images/home_hl_04.jpg);">
		              <a href="#" class="product_cont product_cont_mode">
		                <h3>Gia công khuôn</h3>
		                <p>Thiết kế và gia công khuôn nhựa, khuôn thổi, khuôn hút chân không.</p>
		                <i class="icon primary-icon icon-sm material-icons-keyboard_arrow_right"></i>
		              </a>
		            </div>
		          </div>
		        </div>
		        <div class="row offset">
		          <div class="col-lg-6 col-xs-6">
		            <div class="product bg-cover pr-img-01 wow fadeInUp" style="background-image: url({base_url()}media/uploads/images/home_hl_05.jpg);">
		              <a href="#" class="product_cont product_cont_mode">
		                <h3>Nghiên cứu & chế tạo</h3>
		                <p>Nghiên cứu, thiết kế và chế tạo máy móc công nghiệp, máy tự động hóa và bán tự động.</p>
		                <i class="icon primary-icon icon-sm material-icons-keyboard_arrow_right"></i>
		              </a>
		            </div>
		          </div>
		          <div class="col-lg-6 col-xs-6 offset-6">
		            <div class="product bg-cover pr-img-02 wow fadeInUp" style="background-image: url({base_url()}media/uploads/images/home_hl_06.jpg);">
		              <a href="#" class="product_cont product_cont_mode">
		                <h3>Thiết kế & gia công khuôn</h3>
		                <p>Nghiên cứu, thiết kế và gia công khuôn ép nhựa, khuôn thổi, khuôn đùn, khuôn hút chân không, ...</p>
		                <i class="icon primary-icon icon-sm material-icons-keyboard_arrow_right"></i>
		              </a>
		            </div>
		          </div>
		        </div>
	      	</div>
	      </div>
      </div>
    </section>
<!--======================End well=========================-->
<!--======================well_1=========================-->
    <section class="well-3" id="home-s2">
      <div class="container center_text">
        <h2 class="secondary_color">Sản phẩm</h2>
        <div class="row offset">
          <div class="col-lg-4 col-xs-4">
            <div class="product bg-100p bg-shadow pr-img-01 wow fadeInUp" style="background-image: url({base_url()}media/uploads/images/home_p_1.jpg);">
              <a href="#" class="product_cont product_cont_mode no-all-padding">
                <h3>Aluminium Anodize</h3>
                <i class="icon primary-icon icon-sm material-icons-keyboard_arrow_right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-xs-4">
            <div class="product bg-100p bg-shadow pr-img-03 wow fadeInUp" style="background-image: url({base_url()}media/uploads/images/home_p_2.jpg);">
              <a href="#" class="product_cont product_cont_mode no-all-padding">
                <h3>SKD11</h3>
                <i class="icon primary-icon icon-sm material-icons-keyboard_arrow_right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-xs-4">
            <div class="product bg-100p bg-shadow pr-img-03 wow fadeInUp" style="background-image: url({base_url()}media/uploads/images/home_p_3.jpg);">
              <a href="#" class="product_cont product_cont_mode no-all-padding">
                <h3>SUS 304</h3>
                <i class="icon primary-icon icon-sm material-icons-keyboard_arrow_right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="row offset">
          <div class="col-lg-4 col-xs-4">
            <div class="product bg-100p bg-shadow pr-img-01 wow fadeInUp" style="background-image: url({base_url()}media/uploads/images/home_p_4.jpg);">
              <a href="#" class="product_cont product_cont_mode no-all-padding">
                <h3>Robot Machine</h3>
                <i class="icon primary-icon icon-sm material-icons-keyboard_arrow_right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-xs-4">
            <div class="product bg-100p bg-shadow pr-img-03 wow fadeInUp" style="background-image: url({base_url()}media/uploads/images/home_p_5.jpg);">
              <a href="#" class="product_cont product_cont_mode no-all-padding">
                <h3>Milling Plastic Molds</h3>
                <i class="icon primary-icon icon-sm material-icons-keyboard_arrow_right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-xs-4">
            <div class="product bg-100p bg-shadow pr-img-03 wow fadeInUp" style="background-image: url({base_url()}media/uploads/images/home_p_6.jpg);">
              <a href="#" class="product_cont product_cont_mode no-all-padding">
                <h3>Vaccum Mold</h3>
                <i class="icon primary-icon icon-sm material-icons-keyboard_arrow_right"></i>
              </a>
            </div>
          </div>
        </div>
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
    <section class="parallax well-3" data-url="{base_url()}static/default/frontend/images/page-01_bg-01.jpg" data-mobile="true" data-speed="0.6" id="home-s4">
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
<!--======================parallax=========================-->
    <section style="display:none;" class="parallax well-5 offset-10 inset-1" data-url="{base_url()}static/default/frontend/images/page-01_bg-01.jpg" data-mobile="true" data-speed="0.6">
      <div class="container">
      <h2 class="center_text">Testimonials</h2>
        <div class="row flow-offset-1">
          <div class="col-lg-4">
            <blockquote class="wow fadeInUp">
              <p>
                <q>
                  <span class="secondary_color">“</span>I would highly recommend this company for any project consisting of structural steel. When they are working on one of my projects, I can always count on them to complete the job on schedule.
                </q>
              </p>
              <div class="cite">
                  <h4>Adam Smith</h4>
                  <p>Client</p>
              </div>
            </blockquote>
          </div>
          <div class="col-lg-4">
            <blockquote class="wow fadeInUp" data-wow-delay="0.2s">
              <p>
                <q>
                  <span class="secondary_color">“</span>Your company has been supplying and erecting steel for one of our projects since our inception. Their professional staff, quality of work, and customer service are outstanding! 
                </q>
              </p>
              <div class="cite">
                  <h4>Robert Johnson</h4>
                  <p>Client</p>
              </div>
            </blockquote>
          </div>
          <div class="col-lg-4">
            <blockquote class="wow fadeInUp" data-wow-delay="0.4s">
              <p>
                <q>
                  <span class="secondary_color">“</span>We have maintained a valuable relationship with Steel and Fabrication Industry for over 10 years due to their commitment to Quality, Detail and Overall Focus on schedule.
                </q>
              </p>
              <div class="cite">
                  <h4>Tom Cooper</h4>
                  <p>Client</p>
              </div>
            </blockquote>
          </div>
        </div>
      </div>
    </section>