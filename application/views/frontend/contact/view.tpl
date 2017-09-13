<section class="well-6 bg-primary border">
    <div class="container center_text">
      <h2 class="secondary_color">Liên hệ</h2>
    <!-- RD Mailform -->
          <form class='mailform' method="post" action="bat/rd-mailform.php">
            <input type="hidden" name="form-type" value="contact"/>
            <fieldset>
                <div class="row">
                  <div class="col-md-4">
                    <label data-add-placeholder data-add-icon>
                      <input type="text"
                               name="name"
                               placeholder="Name:"
                               data-constraints="@LettersOnly @NotEmpty"/>
                    </label>
                  </div>
                  <div class="col-md-4">
                    <label data-add-placeholder data-add-icon>
                        <input type="text"
                               name="email"
                               placeholder="E-mail:"
                               data-constraints="@Email @NotEmpty"/>
                    </label>
                  </div>
                  <div class="col-md-4">
                    <label data-add-placeholder data-add-icon>
                        <input type="text"
                               name="phone"
                               placeholder="Phone:"
                               data-constraints="@Phone"/>
                    </label>
                  </div>
                  <div class="col-md-12">
                    <label data-add-placeholder>
                        <textarea name="message" placeholder="Message:"
                        data-constraints="@NotEmpty"></textarea>
                    </label>
                  </div>
                </div>
                <div class="mfControls">
                    <button class="btn_mf btn-lg btn-default" type="submit">SEND</button>
                </div>
                <div class="mfInfo"></div>
            </fieldset>
          </form>
    <!-- END RD Mailform -->
    </div>
  </section>
