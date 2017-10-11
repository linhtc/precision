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
		          		<span lang-key="phone colon">{lang('phone colon')}</span><br><a class="moto-link" data-action="url" target="_self" href="{$smarty.session.sys_cnf->cnf_hotline->v2}">{$smarty.session.sys_cnf->cnf_hotline->v1}</a><br>
	          		</p>
	          	</div>
	          </div>
	          <div class="col-lg-3 col-sm-3 header-border-bt2">
	          	<div class="quick-intro" style="background-image:url({base_url()}media/images/placeholder.png);">
		          	<p class="moto-text_system_11">
		          		<span lang-key="address colon">{lang('address colon')}</span> <a has-alias="true" id="header-address" class="moto-link" data-action="url" target="_blank" href="{$smarty.session.sys_cnf->cnf_address->v2}">{$smarty.session.sys_cnf->cnf_address->v1}</a>
	          		</p>
	          	</div>
	          </div>
	          <div class="col-lg-1 col-sm-1 header-border-bt2">
	            <input id="lang_en" onclick="changeMyLanguage();" type="radio" name="language" value="EN" {if !empty($smarty.session.lang_prefix)}checked="checked"{/if}>
	            <label for="lang_en"> EN</label><br>
  				<input id="lang_vi" onclick="changeMyLanguage();" type="radio" name="language" value="VN" {if empty($smarty.session.lang_prefix)}checked="checked"{/if}>
  				 <label for="lang_vi"> VN</label><br>
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
                  <a href="{base_url()}{$smarty.session.lang_prefix}" class="sf-with-ul" lang-key="home">{lang('home')}</a>
				    <ul style="display: none;">
				        <li>
				            <a href="{base_url()}{$smarty.session.lang_prefix}#home-s1" lang-key="gioi thieu">{lang('gioi thieu')}</a>
				        </li>
				        <li>
				            <a href="{base_url()}{$smarty.session.lang_prefix}#home-s2" lang-key="san pham">{lang('san pham')}</a>
				        </li>
				        <li>
				            <a href="{base_url()}{$smarty.session.lang_prefix}#home-s3" lang-key="nang luc">{lang('nang luc')}</a>
				        </li>
				        <li>
				            <a href="{base_url()}{$smarty.session.lang_prefix}#home-s4" lang-key="dich vu">{lang('dich vu')}</a>
				        </li>
				    </ul>
                </li>
                <li class="{if $uuid eq 'company'}active{/if}">
                  <a href="{base_url()}{$smarty.session.lang_prefix}company" class="sf-with-ul" lang-key="company">{lang('company')}</a>
				    <ul style="display: none;">
				        <li>
				            <a href="{base_url()}{$smarty.session.lang_prefix}company#company-s1" lang-key="cong ty chung toi">{lang('cong ty chung toi')}</a>
				        </li>
				        <li>
				            <a href="{base_url()}{$smarty.session.lang_prefix}company#company-s2" lang-key="tai sao chon chung toi">{lang('tai sao chon chung toi')}</a>
				        </li>
				        <li>
				            <a href="{base_url()}{$smarty.session.lang_prefix}company#company-s3" lang-key="triet ly kinh doanh">{lang('triet ly kinh doanh')}</a>
				        </li>
				        <li>
				            <a href="{base_url()}{$smarty.session.lang_prefix}company#company-s4" lang-key="vai loi ve chung toi">{lang('vai loi ve chung toi')}</a>
				        </li>
				    </ul>
                </li>
                <li class="{if $uuid eq 'rd'}active{/if}">
                  <a href="{base_url()}{$smarty.session.lang_prefix}rd" class="sf-with-ul" lang-key="r_and_d">{lang('r_and_d')}</a>
				    <ul style="display: none;">
				        <li>
				            <a href="{base_url()}{$smarty.session.lang_prefix}rd#rd-s1" lang-key="nghien cuu va phat trien">{lang('nghien cuu va phat trien')}</a>
				        </li>
				        <li>
				            <a href="{base_url()}{$smarty.session.lang_prefix}rd#rd-s2">Team work</a>
				        </li>
				    </ul>
                </li>
                <li class="{if $uuid eq 'product'}active{/if}">
				    <a href="{base_url()}{$smarty.session.lang_prefix}products-services" class="sf-with-ul" lang-key="product_and_service">{lang('product_and_service')}</a>
				    <ul style="display: none;">
				        <li>
				            <a href="{base_url()}{$smarty.session.lang_prefix}products-services#product-s1" lang-key="gia cong chinh xac">{lang('gia cong chinh xac')}</a>
				        </li>
				        <li>
				            <a href="{base_url()}{$smarty.session.lang_prefix}products-services#product-s2" lang-key="thiet ke va cgcn">{lang('thiet ke va cgcn')}</a>
				        </li>
				        <li>
				            <a href="{base_url()}{$smarty.session.lang_prefix}products-services#product-s3" lang-key="dich vu">{lang('dich vu')}</a>
				        </li>
				    </ul>
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
                <li class="nav-search">
                  <input id="seeking-input" has-seeking="true" type="text" lang-key="input a value colon" has-placeholder="true" placeholder="{lang('input a value colon')}" />
                  <i class="fa fa-search" aria-hidden="true"></i>
                </li>
                <li style="display: none;" class="nation-flag">
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
          {foreach from=$finalPhoto->home_section_0 key=ksub item=isub name=foo}
		  	  <div data-src="{base_url()}media/filemanager/source/{$isub->v2}">
	            <div class="camera_caption fadeIn">
	              <div class="container">
	                <div class="camera_cont cam_ins_2">
	                  <h2 lang-key="{$isub->v1}">{lang($isub->v1)}</h2>
	                  <h3 style="display:none;">Chúng tôi cam kết</h3>
	                  <h4 lang-key="{$isub->v4}" has-html="true">{lang($isub->v4)}</h4>
	                  <a lang-key="xem them" href="#" class="btn btn-default btn-sm">{lang('xem them')}</a>
	                </div>
	              </div>
	            </div>
	          </div>        
	      {/foreach}
        </div>
      </div>
{/if}
<!--======================End Camera=========================-->
  </header>