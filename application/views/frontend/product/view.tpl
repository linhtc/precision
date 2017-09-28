<!--======================well-1=========================-->
    <section class="well-2 bg-primary border" id="product-s1">
      <div class="container">
        <h2 class="secondary_color center_text">Gia công chính xác</h2>
        {assign var="curr" value=0}
        {foreach from=$finalPhoto->product_section_1 key=ksub item=isub name=foo}
        {math assign="curr" equation='x+y' x=$curr y=1}
        {math assign="currdevide" equation='x%y' x=$curr y=3}
        	{if $curr eq 1}
          	<div class="row primary_color flow-offset-1 text-center">
          	{/if}
	        <div class="col-sm-6 col-md-4">
	            <div class="box bg-shadow-white wow fadeInUp">
	              <div class="img" style="background-image: url({base_url()}media/filemanager/thumbs/{$isub->v3});">
	              	<a href="{base_url()}media/filemanager/thumbs/{$isub->v2}" data-lightbox="image-1-{$ksub}" data-title="Gia công chính xác"></a>
	              </div>
	              <h3 class="mtop-minus-50">{$isub->v1}</h3>
	              <p></p>
	            </div>
	          </div>
          	{if $curr gte 3}
          	{assign var="curr" value=0}
          	</div>
          	{/if}
        {/foreach}
      </div>
     </section> 
<!--======================End well-1=========================-->
<!--======================well-1=========================-->
    <section class="well-2 bg-primary border" id="product-s2">
      <div class="container">
        <h2 class="secondary_color center_text">Thiết kế & Chuyển giao công nghệ</h2>
        <div class="row primary_color flow-offset-1 text-center">
          <div class="col-sm-6 col-md-4">
            <div class="box bg-shadow-white wow fadeInUp">
              <div class="img" bg-src="{base_url()}media/uploads/products/fit_product_s2_01.jpg">
              	<a href="{base_url()}media/uploads/products/product_s2_01.jpg" data-lightbox="image-10" data-title="Thiết kế & chuyển giao công nghệ"></a>
              </div>
              <h3 class="mtop-minus-60">SandPaper Machine</h3>
              <p></p>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="box bg-shadow-white wow fadeInUp">
              <div class="img" bg-src="{base_url()}media/uploads/products/fit_product_s2_02.jpg">
              	<a href="{base_url()}media/uploads/products/product_s2_02.jpg" data-lightbox="image-11" data-title="Thiết kế & chuyển giao công nghệ"></a>
              </div>
              <h3 class="mtop-minus-60">Polish Finish Machine</h3>
              <p></p>
            </div>
          </div>
          <div class="col-sm-offset-3 col-sm-6 col-md-offset-0 col-md-4">
            <div class="box bg-shadow-white wow fadeInUp">
              <div class="img" bg-src="{base_url()}media/uploads/products/fit_product_s2_03.jpg">
              	<a href="{base_url()}media/uploads/products/product_s2_03.jpg" data-lightbox="image-12" data-title="Thiết kế & chuyển giao công nghệ"></a>
              </div>
              <h3 class="mtop-minus-60">Robot Machine</h3>
              <p></p>
            </div>
          </div>
        </div>
        <div class="row primary_color flow-offset-1 text-center">
          <div class="col-sm-6 col-md-4">
            <div class="box bg-shadow-white wow fadeInUp">
              <div class="img" bg-src="{base_url()}media/uploads/products/fit_product_s2_04.jpg">
              	<a href="{base_url()}media/uploads/products/product_s2_04.jpg" data-lightbox="image-13" data-title="Thiết kế & chuyển giao công nghệ"></a>
              </div>
              <h3 class="mtop-minus-60">iValuate Machine</h3>
              <p></p>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="box bg-shadow-white wow fadeInUp">
              <div class="img" bg-src="{base_url()}media/uploads/products/fit_product_s2_05.jpg">
              	<a href="{base_url()}media/uploads/products/product_s2_05.jpg" data-lightbox="image-14" data-title="Thiết kế & chuyển giao công nghệ"></a>
              </div>
              <h3 class="mtop-minus-60">Bonding LCD Machine</h3>
              <p></p>
            </div>
          </div>
          <div class="col-sm-offset-3 col-sm-6 col-md-offset-0 col-md-4">
            <div class="box bg-shadow-white wow fadeInUp">
              <div class="img" bg-src="{base_url()}media/uploads/products/fit_product_s2_06.jpg">
              	<a href="{base_url()}media/uploads/products/product_s2_06.jpg" data-lightbox="image-15" data-title="Thiết kế & chuyển giao công nghệ"></a>
              </div>
              <h3 class="mtop-minus-60">Sandblasting Machine</h3>
              <p></p>
            </div>
          </div>
        </div>
        <div class="row primary_color flow-offset-1 text-center">
          <div class="col-sm-6 col-md-4">
            <div class="box bg-shadow-white wow fadeInUp">
              <div class="img" bg-src="{base_url()}media/uploads/products/fit_product_s2_07.jpg">
              	<a href="{base_url()}media/uploads/products/product_s2_07.jpg" data-lightbox="image-16" data-title="Thiết kế & chuyển giao công nghệ"></a>
              </div>
              <h3 class="mtop-minus-60">Atom'x Machine</h3>
              <p></p>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="box bg-shadow-white wow fadeInUp">
              <div class="img" bg-src="{base_url()}media/uploads/products/fit_product_s2_08.jpg">
              	<a href="{base_url()}media/uploads/products/product_s2_08.jpg" data-lightbox="image-17" data-title="Thiết kế & chuyển giao công nghệ"></a>
              </div>
              <h3 class="mtop-minus-60">Polished Glass Machine</h3>
              <p></p>
            </div>
          </div>
          <div class="col-sm-offset-3 col-sm-6 col-md-offset-0 col-md-4">
            <div class="box bg-shadow-white wow fadeInUp">
              <div class="img" bg-src="{base_url()}media/uploads/products/fit_product_s2_09.jpg">
              	<a href="{base_url()}media/uploads/products/product_s2_09.jpg" data-lightbox="image-18" data-title="Thiết kế & chuyển giao công nghệ"></a>
              </div>
              <h3 class="mtop-minus-60">GamePlay</h3>
              <p></p>
            </div>
          </div>
        </div>
      </div>
     </section> 
<!--======================End well-1=========================-->
<!--======================well-3=========================-->
  <section class="well-6 bg-primary border" id="product-s3">
    <div class="container">
      <h2 class="center_text secondary_color">Dịch vụ</h2>
      <div class="row"> 
        <div class="col-lg-1 col-xs-6">
        </div>
        <div class="col-lg-5 col-xs-6">
          <ul class="marked-list text-left">
              {foreach from=$finalList->product_section_3 key=ksub item=isub name=foo}
	          {if $isub->v2 eq 'left'}
	          <li class="wow fadeInRight" data-wow-delay="{$ksub*0.2}s"><a href="#">{$isub->v1}</a></li>
	          {/if}
	          {/foreach}
          </ul>
        </div>
        <div class="col-lg-6 col-xs-6">
          <ul class="marked-list text-left">
              {foreach from=$finalList->product_section_3 key=ksub item=isub name=foo}
	          {if $isub->v2 eq 'right'}
	          <li class="wow fadeInRight" data-wow-delay="{$ksub*0.2}s"><a href="#">{$isub->v1}</a></li>
	          {/if}
	          {/foreach}
          </ul>          
        </div>
      </div>
    </div>
  </section>
  <!--======================End well-3=========================-->
