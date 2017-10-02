<!--======================well-1=========================-->
    <section class="well-2 bg-primary border" id="rd-s1">
      <div class="container">
        <h2 class="secondary_color center_text" lang-key="nghien cuu va phat trien">{lang('nghien cuu va phat trien')}</h2>
        <h3 class="secondary_color center_text" lang-key="chuyen giao cong nghe">{lang('chuyen giao cong nghe')}</h3>
        {assign var="curr" value=0}
        {foreach from=$finalPhoto->rd_section_1 key=ksub item=isub name=foo}
        {math assign="curr" equation='x+y' x=$curr y=1}
        {math assign="currdevide" equation='x%y' x=$curr y=3}
        	{if $curr eq 1}
          	<div class="row primary_color flow-offset-1 text-center">
          	{/if}
	        <div class="col-sm-6 col-md-4">
	            <div class="box bg-shadow-white wow fadeInUp">
	              <div class="img" style="background-image: url({base_url()}media/filemanager/thumbs/{$isub->v3});">
	              	<a href="{base_url()}media/filemanager/source/{$isub->v2}" data-lightbox="image-1-{$ksub}" data-title="{lang('chuyen giao cong nghe')}"></a>
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
<!--======================parallax=========================-->
  <section class="parallax well-6" id="rd-s2">
    <div class="container">
    <h2 class="secondary_color center_text" lang-key="teamwork">{lang('teamwork')}</h2>
    </div>
  </section>
  <section class="parallax well-6" data-url="{base_url()}media/filemanager/source/{$finalPhoto->rd_section_2[0]->v2}" data-mobile="true" data-speed="0.6">
    <div class="container">
      <div class="row" style="opacity: 0;"> 
        <div class="col-lg-6">
          <h2 class="wow fadeInLeft">Why choose us</h2>
          <h3 class="wow fadeInLeft">Our advantages</h3>
          <p class="wow fadeIn offset-8"></p>
          <p>&nbsp;<br />&nbsp;<br />&nbsp;<br />&nbsp;<br /></p>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-5">
          <ul class="marked-list-1 text-left">
                <li class="wow fadeInRight"><a href="#">Extensive product line</a></li>
                <li class="wow fadeInRight"><a href="#">Extensive product line</a></li>
                <li class="wow fadeInRight"><a href="#">Extensive product line</a></li>
                <li class="wow fadeInRight"><a href="#">Extensive product line</a></li>
                <li class="wow fadeInRight"><a href="#">Extensive product line</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
<!--======================End parallax=========================-->
