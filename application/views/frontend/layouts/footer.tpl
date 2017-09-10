<footer>
    {if $uuid eq 'home' or $uuid eq 'contact'}
    <div class="container">
      <div class="row inset-2 flow-offset-1">
        <div class="col-lg-4 col-xs-12 icon-hover">
          <i class="icon secondary-icon icon-xs material-icons-location_on"></i>
          <h3>Address:</h3>
          <p><a href="#">4578 Marmora Road,
          Glasgow D04 89GR</a>
          </p>
        </div>
        <div class="col-lg-4 col-xs-12 icon-hover offset-6">
          <i class="icon secondary-icon icon-xs material-icons-phone"></i>
          <h3>Phones:</h3>
          <p><a href="callto:#">800-2345-6789;</a><br>
          <a href="callto:#">800-2345-6790</a></p>
        </div>
        <div class="col-lg-4 col-xs-12 icon-hover offset-6">
          <i class="icon secondary-icon icon-xs material-icons-schedule"></i>
          <h3>Hours:</h3>
          <p>24/7 from<br>
          8:00 am  to  7:00 pm</p>
        </div>
      </div>
    </div>
    <section class="map">
      <div id="google-map" class="map_model"></div>
      <ul class="map_locations">
            <li data-x="-73.9874068" data-y="40.643180">
          <p> 9870 St Vincent Place, Glasgow, DC 45 Fr 45. <span>800 2345-6789</span></p>
        </li>
      </ul>
    </section>
    {/if}
    <div class="footer-cnt center_text">
      <p class="copyright">Toan Thang Precision © 2016. <a href="index-5.html" class="rights">Privacy Policy</a></p>
    </div>
  </footer>