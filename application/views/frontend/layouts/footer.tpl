<footer>
    {if $uuid eq 'home' or $uuid eq 'contact'}
    <div class="container">
      <div class="row inset-2 flow-offset-1">
        <div class="col-lg-4 col-xs-12 icon-hover" style="padding-left: 0px; padding-right: 0px;">
          <i class="icon secondary-icon icon-xs material-icons-location_on"></i>
          <h3>Địa chỉ:</h3>
          <p><a href="#">Nguyễn Thị Minh Khai, khu phố Đông Chiêu, phường Tân Đông Hiệp, Tx. Dĩ An, Bình Dương, Vietnam</a>
          </p>
        </div>
        <div class="col-lg-4 col-xs-12 icon-hover offset-6" style="padding-left: 0px; padding-right: 0px;">
          <i class="icon secondary-icon icon-xs material-icons-phone"></i>
          <h3>Điện thoại:</h3>
          <p><a href="callto:#">0963 693 626</a><br>
          <a href="callto:#">0982 791 717</a></p>
        </div>
        <div class="col-lg-4 col-xs-12 icon-hover offset-6">
          <i class="icon secondary-icon icon-xs material-icons-schedule"></i>
          <h3>Mở cửa:</h3>
          <p>24/7<br>
          Tất cả các ngày trong tuần</p>
        </div>
      </div>
    </div>
    <section class="map">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7835.292095563145!2d106.74764670062788!3d10.914481504147462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d84b4148ff51%3A0x14fbe01f763034f4!2zNjggTmd1eeG7hW4gVGjhu4sgTWluaCBLaGFpLCBwaMaw4budbmcgVMOibiDEkMO0bmcgSGnhu4dwLCBI4buTIENow60gTWluaCwgQsOsbmggRMawxqFuZywgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1505235671396" frameborder="0" style="width: 100%; height: 450px; border:0;" allowfullscreen></iframe>
      <div id="google-map" class="map_model" style="display: none;"></div>
      <ul class="map_locations" style="display: none;">
            <li data-x="-73.9874068" data-y="40.643180">
          <p> 9870 St Vincent Place, Glasgow, DC 45 Fr 45. <span>800 2345-6789</span></p>
        </li>
      </ul>
    </section>
    {/if}
    <div class="footer-cnt center_text">
      <p class="copyright">Toan Thang Precision © 2017. <a href="index-5.html" class="rights">Privacy Policy</a></p>
    </div>
  </footer>