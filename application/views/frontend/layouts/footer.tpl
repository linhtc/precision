<footer>
    {if $uuid eq 'home' or $uuid eq 'contact'}
    <div class="container no-padding">
      <div class="row inset-2 flow-offset-1">
        <div class="col-lg-3 col-xs-12 icon-hover" style="padding-left: 0px; padding-right: 0px;">
          <i class="icon secondary-icon icon-xs material-icons-location_on"></i>
          <h3>Địa chỉ:</h3>
          <p><a href="#">Nguyễn Thị Minh Khai, phường Tân Đông Hiệp, Hồ Chí Minh, Bình Dương, Vietnam</a>
          </p>
        </div>
        <div class="col-lg-3 col-xs-12 icon-hover offset-6" style="padding-left: 0px; padding-right: 0px;">
          <i class="icon secondary-icon icon-xs material-icons-phone"></i>
          <h3>Điện thoại:</h3>
          <p>
          <a href="callto:#">0963 693 626</a><br>
          <a href="callto:#">0982 791 717</a></p>
        </div>
        <div class="col-lg-3 col-xs-12 icon-hover offset-6" style="padding-left: 0px; padding-right: 0px;">
          <i class="icon secondary-icon icon-xs material-icons-email"></i>
          <h3>Liên hệ:</h3>
          <p style="white-space: pre;">
          <a href="#">info@toanthangprecision.com</a><br>
          <a href="callto:#">Hotline: 0984 499 008</a></p>
        </div>
        <div class="col-lg-3 col-xs-12 icon-hover offset-6">
          <i class="icon secondary-icon icon-xs material-icons-schedule"></i>
          <h3>Mở cửa:</h3>
          <p style="white-space: pre;">24/7<br>
          Tất cả các ngày trong tuần</p>
        </div>
      </div>
    </div>
    <section class="map">
    	<iframe id="google-map-iframe" src="" frameborder="0" style="width: 100%; height: 450px; border:0;" allowfullscreen></iframe>
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