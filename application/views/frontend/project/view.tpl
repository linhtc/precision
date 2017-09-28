<!--======================well-3=========================-->
    <section class="well-3 bg-primary border">
      <div class="container">
        <h2 class="center_text secondary_color">Dự án</h2>
        {assign var="reverse" value=0}
        {assign var="curr" value=0}
        {assign var="colrand" value=4}
        {foreach from=$finalPhoto->project_section_1 key=ksub item=isub name=foo}
        {math assign="curr" equation='x+y' x=$curr y=1}
        {if $curr eq 1}
	        {if $reverse eq 0}
	        {math assign="colrand" equation='x+y' x=$colrand y=1}
	        {else}
	        {math assign="colrand" equation='x-y' x=$colrand y=1}
	        {/if}
	    {/if}
        {math assign="colrand2" equation='x-y' x=12 y=$colrand}
        	{if $curr eq 1}
          	<div class="row offset-1 ">
          	{/if}
	          <div class="col-lg-{if $curr eq 1}{$colrand}{else}{$colrand2}{/if} col-xs-{if $curr eq 1}{$colrand}{else}{$colrand2}{/if}">
	            <div class="product bg-100p-pr wow fadeInUp" 
	            	style="background-image: url({base_url()}media/filemanager/thumbs/{$isub->v3});"
	            	bg-src="{base_url()}media/filemanager/source/{$isub->v2}">
	              <a href="#" class="product_cont">
	                <h3>{$isub->v1}</h3>
	                <i class="icon primary-icon icon-sm material-icons-keyboard_arrow_right"></i>
	              </a>
	            </div>
	          </div>
          	{if $colrand gte 7 and  $curr eq 2 and $reverse eq 0}
          	{assign var="colrand" value=7}
          	{assign var="reverse" value=1}
          	{else}
	          	{if $colrand lte 5 and  $curr eq 2 and $reverse eq 1}
	          	{assign var="colrand" value=4}
	          	{assign var="reverse" value=0}
	          	{/if}
          	{/if}
          	{if $curr gte 2}
          	{assign var="curr" value=0}
          	</div>
          	{/if}
        {/foreach}
        {if $curr eq 1}
        {math assign="colrand2" equation='x-y' x=12 y=$colrand}
          	<div class="col-lg-{$colrand2} col-xs-{$colrand2}">
	            <div class="product pr-img-06 bg-100p-pr wow fadeInUp" style="background-color: silver; background-image: url();">
	              <a href="#" class="product_cont">
	                <h3>Và còn nhiều nữa...</h3>
	                <i class="icon primary-icon icon-sm material-icons-keyboard_arrow_right"></i>
	              </a>
	            </div>
	          </div>
        {/if}
      </div>
    </section>
<!--======================End well-3=========================-->
<!--======================well-1=========================-->
    <section class="well-4">
      <div class="container">
        <div class="row flow-offset-1">
          <div class="col-lg-5">
            <img src="{base_url()}media/uploads/images/page-04_img_07.jpg" alt="">
          </div>
          <div class="col-lg-7 primary_color">
            <h2 class="secondary_color wow fadeInRight">Company team</h2>
            <h3 class="wow fadeInRight">Committed to quality and efficiency</h3>
            <p class="offset-5">Our Company has assembled a team of experienced and certified craftsmen, engineers, and designers with a commitment to quality and efficiency. </p>
            <p>We deliver products according to the highest quality standards. Our customers receive reliability, predictability, performance, and quality through their entire project’s fabrication schedule. The result is an outstanding finished product, from the source material to the complete documentation.</p>
          </div>
        </div>
      </div>
    </section>
<!--======================End well-1=========================-->
<!--======================parallax=========================-->
    <section class="parallax well-2" data-url="{base_url()}media/uploads/images/page-04_bg-01.jpg" data-mobile="true" data-speed="0.6">
      <div class="container">
        <h2 class="wow fadeInLeft">Our technology</h2>
        <h3 class="wow fadeInLeft">Unsurpassed quality</h3>
        <i class="icon secondary-icon icon-lg
         offset-5 material-icons-build wow fadeInLeft"></i>
        <h4 class="offset-4">Our integrated production method is the product of our commitment to technology. 
        From procurement to final delivery our technological applications offer precision 
        and excellence in all of our work.</h4>
      </div>
    </section>
<!--======================End parallax=========================-->