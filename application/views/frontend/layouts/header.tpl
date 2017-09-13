<!--========================================================
                            HEADER
  =========================================================-->
  <header>
    <div id="stuck_container" class="stuck_container">
      <div class="container no-padding">
        <div class="row"> 
          <div class="col-lg-3 col-sm-3 no-padding">
            <div class="brand">
              <h1 class="brand_name">
                <a href="./">TTP</a>
              </h1>
              <h5>Engineering Technology for life</h5>
            </div>
          </div>
          <div class="col-lg-9 col-sm-9 no-padding">
            <nav class="nav">
              <ul class="sf-menu" data-type="navbar">
                <li class="{if $uuid eq 'home'}active{/if}">
                  <a href="{base_url()}">{lang('home')}</a>
                </li>
                <li class="{if $uuid eq 'company'}active{/if}">
                  <a href="{base_url()}company">{lang('company')}</a>
                </li>
                <li class="{if $uuid eq 'product'}active{/if}">
                  <a href="{base_url()}products-services">{lang('product_and_service')}</a>
                </li>
                <li class="{if $uuid eq 'technology'}active{/if}">
                  <a href="{base_url()}design-technology-transfer">{lang('design_and_technology_transfer')}</a>
                </li>
                <li class="{if $uuid eq 'gallery'}active{/if}">
                  <a href="{base_url()}gallery">{lang('project')}</a>
                </li>
                <li class="{if $uuid eq 'contact'}active{/if}">
                  <a href="{base_url()}contacts">{lang('contact')}</a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
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
                  <a href="#" class="btn btn-default btn-sm">read more</a>
                </div>
              </div>
            </div>
          </div>
          <div data-src="{base_url()}media/uploads/images/2.jpg">
            <div class="camera_caption fadeIn">
              <div class="container">
                <div class="camera_cont cam_ins_3">
                  <h2>Công nghệ hiện đại</h2>
                  <h3 style="display:none;">Trang bị máy móc, thiết bị</h3>
                  <p>Trang bị máy móc, thiết bị hiện đại, áp dụng công nghệ hiện đại vào sản xuất.</p>
                  <a href="#" class="btn btn-default btn-sm">read more</a>
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
                  <a href="#" class="btn btn-primary btn-sm">read more</a>
                </div>
              </div>
            </div>
          </div>
          <div data-src="{base_url()}media/uploads/images/4.jpg">
            <div class="camera_caption fadeIn">
              <div class="container">
                <div class="camera_cont cam_ins_3">
                  <h2>Liên tục cải tiến</h2>
                  <h3 style="display:none;">Không ngừng nâng cao</h3>
                  <p>Không ngừng nâng cao chất lượng sản phẩm nhằm tạo ra sản phẩm đáp ứng nhu cầu phát triển thị trường.</p>
                  <a href="#" class="btn btn-default btn-sm">read more</a>
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
                  <a href="#" class="btn btn-default btn-sm">read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
{/if}
<!--======================End Camera=========================-->
  </header>