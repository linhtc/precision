<!--========================================================
                            HEADER
  =========================================================-->
  <header>
  	
  	<div class="top-header">
  		<div style="padding: 5px 5px 0px 70px;overflow: hidden;">
  			<div class="row">
	          <div class="col-lg-2 col-sm-2 text-center" style="position: relative;">
	            <div class="brand">
	              <h1 class="brand_name" style="margin: 0; padding: 0; margin-top: -10px; margin-left: 20px;">
	                <a href="./">TTP</a>
	              </h1>
	              <h5 style="margin: 0; padding: 0; margin-top: -10px; margin-left: 20px;">Leading Quality</h5>
	            </div>
	            <!-- <div class="header-slash-line"></div>
	            <div class="header-slash-line2"></div> -->
	          </div>
	          <div class="col-lg-4 col-sm-4 header-border-bt2">
	            <div class="brand">
	              <h1 class="brand_name">
	                <a href="./">Toan Thang Precision</a>
	              </h1>
	            </div>
	          </div>
	          <div class="col-lg-2 col-sm-2 header-border-bt2">
	          	<div class="quick-intro" style="background-image:url({base_url()}media/images/phone-call.png);">
		          	<p class="moto-text_system_11">
		          		Điện thoại:<br><a class="moto-link" data-action="url" target="_self" href="callto:#">+84 98 44 99 008</a><br>
	          		</p>
	          	</div>
	          </div>
	          <div class="col-lg-3 col-sm-3 header-border-bt2">
	          	<div class="quick-intro" style="background-image:url({base_url()}media/images/placeholder.png);">
		          	<p class="moto-text_system_11">
		          		Địa chỉ: Nguyễn Thị Minh Khai, khu phố Đông Chiêu, phường Tân Đông Hiệp, Tx. Dĩ An, Bình Dương, Việt Nam
	          		</p>
	          	</div>
	          </div>
	          <div class="col-lg-1 col-sm-1 header-border-bt2">
	            <input type="radio" name="language" value="EN"> EN<br>
  				<input type="radio" name="language" value="VN"> VN<br>
	          </div>
  			</div>
  		</div>
  	</div>
  	
  	
    <div id="stuck_container" class="stuck_container">
      <div class="container no-padding">
        <div class="row"> 
          <div class="col-lg-12 col-sm-12 no-padding text-center">
            <nav class="nav">
              <ul class="sf-menu" data-type="navbar">
                <li class="{if $uuid eq 'home'}active{/if}">
                  <a href="{base_url()}{$smarty.session.lang_prefix}" lang-key="home">{lang('home')}</a>
                </li>
                <li class="{if $uuid eq 'company'}active{/if}">
                  <a href="{base_url()}{$smarty.session.lang_prefix}company" lang-key="company">{lang('company')}</a>
                </li>
                <li class="{if $uuid eq 'rd'}active{/if}">
                  <a href="{base_url()}{$smarty.session.lang_prefix}rd" lang-key="r_and_d">{lang('r_and_d')}</a>
                </li>
                <li class="{if $uuid eq 'product'}active{/if}">
                  <a href="{base_url()}{$smarty.session.lang_prefix}products-services" lang-key="product_and_service">{lang('product_and_service')}</a>
                </li>
                <li class="{if $uuid eq 'project'}active{/if}">
                  <a href="{base_url()}{$smarty.session.lang_prefix}projects" lang-key="project">{lang('project')}</a>
                </li>
                <li class="{if $uuid eq 'career'}active{/if}">
                  <a href="{base_url()}{$smarty.session.lang_prefix}careers" lang-key="recruit">{lang('recruit')}</a>
                </li>
                <li class="{if $uuid eq 'contact'}active{/if}">
                  <a href="{base_url()}{$smarty.session.lang_prefix}contacts" lang-key="contact">{lang('contact')}</a>
                </li>
                <li style="display: none;">
                {if empty($smarty.session.lang_prefix)}
                  <a onclick="changeMyLanguage();return false;" style="cursor: pointer;">
                  	<img class="national-flag" key="vn" src="{base_url()}media/images/vn.svg" />
                  </a>
                {else}
                  <a onclick="changeMyLanguage();return false;" style="cursor: pointer;">
                  	<img class="national-flag" key="en" src="{base_url()}media/images/eng.svg" />
                  </a>
                {/if}  
                </li>
                <li class="nav-search">
                  <input type="text" placeholder="Nhập từ khóa..." />
                  <i class="fa fa-search" aria-hidden="true"></i>
                </li>
              </ul>
            </nav>
          </div>
        <!-- <div class="col-lg-2 col-sm-2">
            <nav class="nav">
              <ul class="sf-menu" data-type="navbar">
                <li class="nav-search">
                  <input type="text" placeholder="Nhập từ khóa..." />
                  <i class="fa fa-search" aria-hidden="true"></i>
                </li>
              </ul>
            </nav>
        
	    </div> -->
        </div>
      </div>
    </div>
<!--========================Camera===========================-->
{if $uuid eq 'home'}
      <div class="camera_container">
        <div id="camera" class="camera_wrap">
          <div data-src="{base_url()}media/uploads/images/s01.jpg">
            <div class="camera_caption fadeIn">
              <div class="container">
                <div class="camera_cont cam_ins_2">
                  <h2>Chất lượng sản phẩm</h2>
                  <h3 style="display:none;">Chúng tôi cam kết</h3>
                  <h4>Chúng tôi cam kết tạo ra sản phẩm chất lượng cao, đáp ứng nhanh tiến độ và độ tin cậy cao. <br /> &nbsp;</h4>
                  <a href="#" class="btn btn-default btn-sm">xem thêm</a>
                </div>
              </div>
            </div>
          </div>
          <div data-src="{base_url()}media/uploads/images/s02.jpg">
            <div class="camera_caption fadeIn">
              <div class="container">
                <div class="camera_cont cam_ins_2">
                  <h2>Công nghệ hiện đại</h2>
                  <h3 style="display:none;">Trang bị máy móc, thiết bị</h3>
                  <h4>Trang bị máy móc, thiết bị hiện đại, áp dụng công nghệ hiện đại vào sản xuất. <br /> &nbsp;</h4>
                  <a href="#" class="btn btn-default btn-sm">xem thêm</a>
                </div>
              </div>
            </div>
          </div>
          <div data-src="{base_url()}media/uploads/images/s03.jpg">
            <div class="camera_caption fadeIn">
              <div class="container">
                <div class="camera_cont cam_ins_2">
                  <h2>Máy phay tốc độ cao</h2>
                  <h3 style="display:none;">tốc độ cao</h3>
                  <h4>Trang bị máy tốc độ cao, độ chính xác cao. <br /> <br /> &nbsp;</h4>
                  <a href="#" class="btn btn-default btn-sm">xem thêm</a>
                </div>
              </div>
            </div>
          </div>
          <div data-src="{base_url()}media/uploads/images/s04.jpg">
            <div class="camera_caption fadeIn">
              <div class="container">
                <div class="camera_cont cam_ins_2">
                  <h2>Liên tục cải tiến</h2>
                  <h3 style="display:none;">Không ngừng nâng cao</h3>
                  <h4>Không ngừng nâng cao chất lượng sản phẩm nhằm tạo ra sản phẩm đáp ứng nhu cầu phát triển thị trường. <br /> &nbsp;</h4>
                  <a href="#" class="btn btn-default btn-sm">xem thêm</a>
                </div>
              </div>
            </div>
          </div>
          <div data-src="{base_url()}media/uploads/images/s05.jpg">
            <div class="camera_caption fadeIn">
              <div class="container">
                <div class="camera_cont cam_ins_2">
                  <h2>Quy trình chuẩn hóa</h2>
                  <h3 style="display:none;">Các sản phẩm được</h3>
                  <h4>Các sản phẩm được kiểm soát chặt chẽ từ khâu chuẩn bị, gia công, đóng gói. <br /> &nbsp;</h4>
                  <a href="#" class="btn btn-default btn-sm">xem thêm</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
{/if}
<!--======================End Camera=========================-->
  </header>