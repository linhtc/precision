<!--======================well-1=========================-->
    <section class="well-2 bg-primary border" id="company-s1">
      <div class="container">
        <h2 class="secondary_color center_text">Công ty chúng tôi</h2>
        {assign var="curr" value=0}
        {foreach from=$finalPhoto->company_section_1 key=ksub item=isub name=foo}
        {math assign="curr" equation='x+y' x=$curr y=1}
        {math assign="currdevide" equation='x%y' x=$curr y=3}
        	{if $curr eq 1}
          	<div class="row primary_color flow-offset-1 text-center">
          	{/if}
          	<div class="col-sm-6 col-md-4">
	            <div class="box wow fadeInUp">
	              <div class="img" style="background-image: url({base_url()}media/filemanager/thumbs/{$isub->v3});">
	              	<a href="{base_url()}media/filemanager/source/{$isub->v2}" data-lightbox="image-1-{$ksub}" data-title="Công ty chúng tôi"></a>
	              </div>
	              <p>{$isub->v1}</p>
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
  <section class="parallax well-6 center_text" data-url="{base_url()}media/filemanager/source/{$finalPhoto->company_section_2[0]->v2}" data-mobile="true" data-speed="0.6" id="company-s2">
    <div class="container">
    <h2 class="wow fadeInRight">Tại sao chọn chúng tôi?</h2>
      <div class="row"> 
        <div class="col-lg-1">
        </div>
        <div class="col-lg-6">
          <ul class="marked-list-1 text-left">
              {foreach from=$finalList->company_section_2 key=ksub item=isub name=foo}
	          {if $isub->v2 eq 'left'}
	          <li class="wow fadeInRight" data-wow-delay="{$ksub*0.2}s"><a href="#">{$isub->v1}</a></li>
	          {/if}
	          {/foreach}
          </ul>
        </div>
        <div class="col-lg-5">
          <ul class="marked-list-1 text-left">
              {foreach from=$finalList->company_section_2 key=ksub item=isub name=foo}
	          {if $isub->v2 eq 'right'}
	          <li class="wow fadeInRight" data-wow-delay="{$ksub*0.2}s"><a href="#">{$isub->v1}</a></li>
	          {/if}
	          {/foreach}
          </ul>
        </div>
      </div>
    </div>
  </section>
<!--======================End parallax=========================-->
<!--======================parallax=========================-->
  <section style="margin-top: 85px;" class="parallax well-2" data-url="{base_url()}media/filemanager/source/{$finalPhoto->company_section_3[0]->v2}" data-mobile="true" data-speed="0.6" id="company-s3">
    <div class="container">
      <h2>Triết lý của chúng tôi</h2>
      <h3>Mục tiêu của chúng tôi là sự hài lòng và thành công của bạn</h3>
      <div class="row  offset-9">
        <ul class="index-list_1 icon-hover_3 flow-offset-1">
          {foreach from=$finalList->company_section_3 key=ksub item=isub name=foo}
          <li class="wow fadeInUp col-lg-4 col-md-4 {if not $smarty.foreach.foo.first}offset-6{/if}" data-wow-delay="{$ksub*0.2}s">
	          <h3>{$isub->v1}</h3>
	          <h4>{$isub->v2}</h4>
          </li>
          {/foreach}
        </ul>
      </div>
    </div>
  </section>
<!--======================End parallax=========================-->
<!--======================End well=========================-->
    <section class="well-4" id="company-s4">
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
