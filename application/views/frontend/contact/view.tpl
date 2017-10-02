<section class="well-6 bg-primary border">
    <div class="container center_text">
      <h2 class="secondary_color" lang-key="lien he">{lang('lien he')}</h2>
    <!-- RD Mailform -->
          <form class='mailform' method="post" action="{base_url()}contacts/message">
            <input type="hidden" name="form-type" value="contact"/>
            <fieldset>
                <div class="row">
                  <div class="col-md-4">
                    <label data-add-placeholder data-add-icon>
                      <input type="text"
                               name="name"
                               placeholder="{lang('name colon')}"
                               has-placeholder="true"
                               data-constraints="@NotEmpty"/>
                    </label>
                  </div>
                  <div class="col-md-4">
                    <label data-add-placeholder data-add-icon>
                        <input type="text"
                               name="email"
                               placeholder="{lang('email colon')}"
                               has-placeholder="true"
                               data-constraints="@Email @NotEmpty"/>
                    </label>
                  </div>
                  <div class="col-md-4">
                    <label data-add-placeholder data-add-icon>
                        <input type="text"
                               name="phone"
                               placeholder="{lang('phone colon')}"
                               has-placeholder="true"
                               data-constraints="@Phone"/>
                    </label>
                  </div>
                  <div class="col-md-12">
                    <label data-add-placeholder>
                        <textarea name="message" 
                        	   placeholder="{lang('message colon')}"
                               has-placeholder="true"
                        data-constraints="@NotEmpty"></textarea>
                    </label>
                  </div>
                </div>
                <div class="mfControls">
                    <button class="btn_mf btn-lg btn-default" type="submit" lang-key="send">{lang('send')}</button>
                </div>
                <div class="mfInfo"></div>
            </fieldset>
          </form>
    <!-- END RD Mailform -->
    </div>
  </section>
