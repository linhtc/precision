<!--========================================================
                            HEADER
  =========================================================-->
  <header>
    <div id="stuck_container" class="stuck_container">
      <div class="container">
        <div class="row"> 
          <div class="col-lg-3 col-sm-3 no-padding">
            <div class="brand">
              <h1 class="brand_name">
                <a href="./">CNC</a>
              </h1>
              <h5>technology for life</h5>
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
          <div data-src="{base_url()}media/uploads/images/CNC.jpg">
            <div class="camera_caption fadeIn">
              <div class="container">
                <div class="camera_cont cam_ins_2">
                  <h2>Providing premium</h2>
                  <h3>products of exceptional value</h3>
                  <p>We are committed to the highest quality, reliability, responsibility, continuous improvement.</p>
                  <a href="#" class="btn btn-default btn-sm">read more</a>
                </div>
              </div>
            </div>
          </div>
          <div data-src="{base_url()}media/uploads/images/maxresdefault.jpg">
            <div class="camera_caption fadeIn">
              <div class="container">
                <div class="camera_cont cam_ins_3">
                  <h2>Offering the best level of</h2>
                  <h3>excellence in steel fabrication</h3>
                  <p>Our company can boast the reputation of the trusted partner known worldwide.</p>
                  <a href="#" class="btn btn-default btn-sm">read more</a>
                </div>
              </div>
            </div>
          </div>
          <div data-src="{base_url()}media/uploads/images/154479068494.jpg">
            <div class="camera_caption fadeIn">
              <div class="container">
                <div class="camera_cont cam_ins_1">
                  <h2>A wide range</h2>
                  <h3>of high quality structural steel projects</h3>
                  <p>Welcome to the number 1 company in the industry! Looking for some helpful advice? Go no further; you've come to the right place. </p>
                  <a href="#" class="btn btn-primary btn-sm">read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
{/if}
<!--======================End Camera=========================-->
  </header>