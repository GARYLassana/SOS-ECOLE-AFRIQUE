  <!-- Start main-content -->
  <div class="main-content">

    <!-- Divider: Contact -->
    <section class="divider" style="margin: 100px 0 0 0;">
      <div class="container">
        <div class="row pt-30">
          <div class="col-md-6">
            <h3 class="line-bottom mt-0 mb-30">Vous souhaitez nous en parler ?</h3>

            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post">

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Nom <small>*</small></label>
                    <input name="nom" class="form-control" type="text" placeholder="Ex: Dupont Michel" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Prénom <small>*</small></label>
                    <input name="prenom" class="form-control" type="text" placeholder="Ex: Dupont Michel" required>
                  </div>
                </div>
              </div>

              <div class="row">

                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Téléphone</label>
                    <input name="telephone" class="form-control" type="text" placeholder="Ex: 06 01 02 03 04" required>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Email <small>*</small></label>
                    <input name="email" class="form-control required email" type="email" placeholder="Ex: mon@mail.com" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Sujet <small>*</small></label>
                    <input name="sujet" class="form-control required" type="text" placeholder="Ex: Comment aider les pauvres au Mali" required>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label>Message</label>
                <textarea name="message" class="form-control required" rows="5" placeholder="Votre message..." required></textarea>
              </div>
              <p>En envoyant ce formulaire vous acceptez <a href="rgpd" style="color:blue" target="_blank">la politique de protection des données personnelles </a> de SOS École Afrique</p>
              <div class="form-group">
                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Envoyer</button>
              </div>
            </form>

            <!-- Contact Form Validation-->
            <script type="text/javascript">
              $("#contact_form").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = '#form-result';
                  $(form_result_div).remove();
                  form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType: 'json',
                    success: function(data) {
                      if (data.status == 'true') {
                        $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function() {
                        $(form_result_div).fadeOut('slow')
                      }, 6000);
                    }
                  });
                }
              });
            </script>
          </div>
          <div class="col-md-6">
            <h3 class="line-bottom mt-0">Prendre contact avec nous</h3>
            <p>Aliquam officia dolor rerum enim doloremque iusto eos atque tempora dignissimos similique, quae, maxime sit accusantium delectus.</p>
            <ul class="styled-icons icon-dark icon-sm icon-circled mb-20">
              <li><a href="#" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" data-bg-color="#C15561"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#" data-bg-color="#D9CCB9"><i class="fa fa-instagram"></i></a></li>

            </ul>

            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-20" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0">Localisation</h5>
                <p>2 place ddu marché 28300 Mainvilliers</p>
              </div>
            </div>
            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0">Contact</h5>
                <p><a href="tel:+325-12345-65478">+336 27 01 55 23</a></p>
              </div>
            </div>
            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0">Adresse mail</h5>
                <p><a href="mailto:supporte@yourdomin.com">seafrique602@gmail.com</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Google Map -->
    <section>
      <div class="container-fluid pt-0 pb-0">
        <div class="row">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2646.282790691497!2d1.459935076737582!3d48.451103429281986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e40c0ce5eb9bd3%3A0xf43021195960eae7!2s2%20Pl.%20du%20March%C3%A9%2C%2028300%20Mainvilliers!5e0!3m2!1sfr!2sfr!4v1722944503344!5m2!1sfr!2sfr" width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->