<!--========================================================
                            HEADER
  =========================================================-->
  <header>
  	
  	<div class="top-header">
  		<div class="container no-padding">
  			<div class="row">
	          <div class="col-lg-5 col-sm-5">
	            <div class="brand">
	              <h1 class="brand_name">
	                <a href="./">TTP&nbsp;&nbsp;&nbsp;Toàn Thắng Precision</a>
	              </h1>
	              <h5 style="display: none;">Leading Quality</h5>
	            </div>
	          </div>
	          <div class="col-lg-3 col-sm-3">
	          
	          	<div class="row"><div class="moto-cell col-xs-2" data-container="container"><div data-widget-id="wid__image__59c26d3cefa92" class="moto-widget moto-widget-image moto-preset-default  moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto " data-widget="image">
                        <div class="moto-widget-image-link">
                <img data-src="https://template58608.motopreview.com/mt-demo/58600/58608/mt-content/uploads/2016/03/mt-0368-icon1.png" class="moto-widget-image-picture lazyloaded" data-id="1104" title="" alt="" draggable="false" src="https://template58608.motopreview.com/mt-demo/58600/58608/mt-content/uploads/2016/03/mt-0368-icon1.png">
            </div>
            </div></div><div class="moto-cell col-xs-10" data-container="container"><div class="moto-widget moto-widget-text moto-preset-default                               moto-spacing-top-small moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="sasa">
    <div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_11">Phone:<br><a class="moto-link" data-action="url" target="_self" href="callto:#">+84 98 44 99 008</a><br></p></div>
</div></div></div>
	          
	          </div>
	          <div class="col-lg-3 col-sm-3">
	          		
	          		<div class="row"><div class="moto-cell col-xs-2" data-container="container"><div data-widget-id="wid__image__59c26d3cefd6d" class="moto-widget moto-widget-image moto-preset-default  moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto " data-widget="image">
                                        <a class="moto-widget-image-link moto-link" href="/contact-us/" data-action="page">
                    <img style="margin-top: 10px;" data-src="https://template58608.motopreview.com/mt-demo/58600/58608/mt-content/uploads/2016/03/mt-0368-icon2.png" class="moto-widget-image-picture lazyloaded" data-id="1103" title="" alt="" draggable="false" src="https://template58608.motopreview.com/mt-demo/58600/58608/mt-content/uploads/2016/03/mt-0368-icon2.png">
                </a>
                        </div></div><div class="moto-cell col-xs-10" data-container="container"><div class="moto-widget moto-widget-text moto-preset-default                              moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="text" data-preset="default" data-spacing="aasa">
    <div class="moto-widget-text-content moto-widget-text-editable"><p class="moto-text_system_11">Location:<br>Nguyễn Thị Minh Khai, Đông Chiêu, Tân Đông Hiệp, Dĩ An, Bình Dương, Việt Nam</p></div>
</div></div></div>
	          		
	          </div>
	          
	          <div class="col-lg-1 col-sm-1">
	            <input type="radio" name="language" value="EN"> EN<br>
  				<input type="radio" name="language" value="VN"> VN<br>
	          </div>
	          
  			</div>
  		</div>
  	</div>
  	
  	
    <div id="stuck_container" class="stuck_container">
      <div class="container no-padding">
        <div class="row"> 
        <div class="col-lg-1 col-sm-1">
        
	    </div>
          <div class="col-lg-10 col-sm-10 no-padding text-center">
            <nav class="nav">
              <ul class="sf-menu" data-type="navbar">
                <li class="{if $uuid eq 'home'}active{/if}">
                  <a href="{base_url()}{$smarty.session.lang_prefix}" lang-key="home">{lang('home')}</a>
                </li>
                <li class="{if $uuid eq 'company'}active{/if}">
                  <a href="{base_url()}{$smarty.session.lang_prefix}company" lang-key="company">{lang('company')}</a>
                </li>
                <li class="{if $uuid eq 'technology'}active{/if}">
                  <a href="{base_url()}{$smarty.session.lang_prefix}design-technology-transfer" lang-key="r_and_d">{lang('r_and_d')}</a>
                </li>
                <li class="{if $uuid eq 'product'}active{/if}">
                  <a href="{base_url()}{$smarty.session.lang_prefix}products-services" lang-key="product_and_service">{lang('product_and_service')}</a>
                </li>
                <li class="{if $uuid eq 'gallery'}active{/if}">
                  <a href="{base_url()}{$smarty.session.lang_prefix}gallery" lang-key="project">{lang('project')}</a>
                </li>
                <li class="{if $uuid eq 'career'}active{/if}">
                  <a href="{base_url()}{$smarty.session.lang_prefix}career" lang-key="recruit">{lang('recruit')}</a>
                </li>
                <li class="{if $uuid eq 'contact'}active{/if}">
                  <a href="{base_url()}{$smarty.session.lang_prefix}contacts" lang-key="contact">{lang('contact')}</a>
                </li>
                <li class="nav-search">
                  <!-- <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a> -->
                  <input type="text" placeholder="Nhập từ khóa..." />
                  <i class="fa fa-search" aria-hidden="true"></i>
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
                <!--
                <li>
                  <a href="{base_url()}company">{lang('company')}</a>
                  <ul>
                    <li>
                      <a href="#">What We Do</a>
                    </li>
                    <li>
                      <a href="#">What We Offer</a>
                      <ul>
                        <li>
                          <a href="#">News</a>
                        </li>
                        <li>
                          <a href="#">Our Standards</a>
                        </li>
                        <li>
                          <a href="#">Useful Links</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="#">Forum</a>
                    </li>
                  </ul>
                </li>
                -->
              </ul>
            </nav>
          </div>
        <div class="col-lg-1 col-sm-1">
        
	    </div>
        </div>
      </div>
    </div>
<!--========================Camera===========================-->
{if $uuid eq 'home'}
      <div class="camera_container">
        <div id="camera" class="camera_wrap">
          <div data-src="{base_url()}media/uploads/images/1.jpg">
            <div class="camera_caption fadeIn">
              <div class="container">
                <div class="camera_cont cam_ins_2">
                  <h2>Chất lượng sản phẩm</h2>
                  <h3 style="display:none;">Chúng tôi cam kết</h3>
                  <p>Chúng tôi cam kết tạo ra sản phẩm chất lượng cao, đáp ứng nhanh tiến độ và độ tin cậy cao.</p>
                  <a href="#" class="btn btn-default btn-sm">xem thêm</a>
                </div>
              </div>
            </div>
          </div>
          <div data-src="{base_url()}media/uploads/images/2.jpg">
            <div class="camera_caption fadeIn">
              <div class="container">
                <div class="camera_cont cam_ins_2">
                  <h2>Công nghệ hiện đại</h2>
                  <h3 style="display:none;">Trang bị máy móc, thiết bị</h3>
                  <p>Trang bị máy móc, thiết bị hiện đại, áp dụng công nghệ hiện đại vào sản xuất.</p>
                  <a href="#" class="btn btn-default btn-sm">xem thêm</a>
                </div>
              </div>
            </div>
          </div>
          <div data-src="{base_url()}media/uploads/images/3.jpg">
            <div class="camera_caption fadeIn">
              <div class="container">
                <div class="camera_cont cam_ins_2">
                  <h2>Máy phay tốc độ cao</h2>
                  <h3 style="display:none;">tốc độ cao</h3>
                  <p>Trang bị máy tốc độ cao, độ chính xác cao. <br /> <br /> &nbsp;</p>
                  <a href="#" class="btn btn-default btn-sm">xem thêm</a>
                </div>
              </div>
            </div>
          </div>
          <div data-src="{base_url()}media/uploads/images/4.jpg">
            <div class="camera_caption fadeIn">
              <div class="container">
                <div class="camera_cont cam_ins_2">
                  <h2>Liên tục cải tiến</h2>
                  <h3 style="display:none;">Không ngừng nâng cao</h3>
                  <p>Không ngừng nâng cao chất lượng sản phẩm nhằm tạo ra sản phẩm đáp ứng nhu cầu phát triển thị trường.</p>
                  <a href="#" class="btn btn-default btn-sm">xem thêm</a>
                </div>
              </div>
            </div>
          </div>
          <div data-src="{base_url()}media/uploads/images/5.jpg">
            <div class="camera_caption fadeIn">
              <div class="container">
                <div class="camera_cont cam_ins_2">
                  <h2>Quy trình chuẩn hóa</h2>
                  <h3 style="display:none;">Các sản phẩm được</h3>
                  <p>Các sản phẩm được kiểm soát chặt chẽ từ khâu chuẩn bị, gia công, đóng gói.</p>
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