<!--======================well-1=========================-->
    <section class="well-2 bg-primary border">
      <div class="container">
        <h2 class="secondary_color center_text">Tuyển dụng</h2>
        <div class="row primary_color flow-offset-1">
          <div class="col-sm-12 col-md-12">
            <div class="box wow fadeInUp">
              <img src="{base_url()}media/images/recruitment.jpg" alt="" style="margin-bottom: 0px;">
            </div>         
            <div class="benefit wow fadeInUp">
				<div class="item" style="display:none;">
					<p class="image">
						<img src="{base_url()}media/images/recruitment4.png" alt="">
					</p>
					<div class="text">
						<h4>GIẢI TRÍ</h4>
						<p>Không gian cởi mở và các trò chơi như X-box, bi lắc, phim HD ngay tại văn phòng.</p>
					</div>
				</div>
				<div class="item">
					<p class="image">
						<img src="{base_url()}media/images/recruitment5.png" alt="">
					</p>
					<div class="text">
						<h4>HỌC HỎI</h4>
						<p>Được đào tạo, trải nghiệm và phát triển tốt nhất khả năng của bạn tại TTP.</p>
					</div>
				</div>
				<div class="item">
					<p class="image">
						<img src="{base_url()}media/images/recruitment6.png" alt="">
					</p>
					<div class="text">
						<h4>THU NHẬP</h4>
						<p>Mức lương / thưởng ở mức cạnh tranh so với các công ty cùng ngành.</p>
					</div>
				</div>
				<div class="item">
					<p class="image">
						<img src="{base_url()}media/images/recruitment7.png" alt="">
					</p>
					<div class="text">
						<h4>ƯU ĐÃI</h4>
						<p>Chương trình ưu đãi đặc biệt dành riêng cho nhân viên khi làm việc tại TTP.</p>
					</div>
				</div>
			</div>
        	<table style="width:100%" class="listjob wow fadeInUp">
			  <tr>
			    <th>Thông tin tuyển dụng</th>
			    <th>Số lượng</th> 
			    <th>Vị trí</th>
			    <th>Hạn nộp hồ sơ</th>
			  </tr>
			  {foreach from=$careerList key=ksub item=isub name=foo}
			  <tr>
			    <td>{$isub->j}</td>
			    <td>{$isub->q}</td> 
			    <td>{$isub->p}</td>
			    <td>{$isub->t}</td>
			  </tr>
		      {/foreach}
			</table>
          </div>
        </div>
      </div>
     </section> 
<!--======================End well-1=========================-->
