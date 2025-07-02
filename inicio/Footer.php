<!-- Menu Responsive-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="site-collapse-menu site-collapse-menu--main hidden" id="site-collapse-menu" style="margin-top: 50px;">
  <nav>
    <ul class="js--accordion" role="tablist">
      <li class="site-collapse-menu-item">
        <a href="gastronomia.php"></a>
      </li>
      <li class="site-collapse-menu-item">
        <a href="gastronomia.php">Vía Gastronomía</a>
      </li>
      <li class="site-collapse-menu-item">
        <a href="comercio.php">Comercio</a>
      </li>
      <li class="site-collapse-menu-item">
        <a href="hoteleria.php">Hotel</a>
      </li>
      <li class="site-collapse-menu-item">
        <a href="arte&diseño.php">Arte&Moda</a>

      </li>
      <li class="site-collapse-menu-item">
        <a href="salud.php">Salud</a>

      </li>
      <li class="site-collapse-menu-item">
        <a href="oficinas.php">Oficinas</a>

      </li>
      <li class="site-collapse-menu-item">
        <a class="site-collapse-menu__level-0" href="#mm-5">Planea tu Visita</a>
        <ul class="collapse" id="mm-5">
          <li class="site-collapse-menu-item">
            <a href="promociones.php">Promociones
            </a>
          </li>
          <li class="site-collapse-menu-item">
            <a href="eventos.php">Eventos</a>
          </li>
          <li class="site-collapse-menu-item">
            <a href="contacto.php">Contacto</a>
          </li>
         
        </ul>
      </li>

    </ul>
  </nav>

  <!-- 
  <nav>
    <ul class="js--accordion" role="tablist">

              <li class="site-collapse-menu-item menu_lan" id="language-selecter">
                      <a href="ar.html">(506) 4035-5000</a>
                  </li>
            <li class="site-collapse-menu-item">

      </li>
    </ul>
  </nav> -->



  <!-- Menu FOOTER-->
</div>


<footer class="site-footer section">

  <div class="site-logo-lined hidden-xs sg-mb-30px">
    <a href="index.php" title="City Place Santa Ana Costa Rica">
      <span class="site-logo-lined--lines"> <span class="icon-the-dubai-mall"> <img src="images/LOGO CITYPLACE.png" alt="image" /></span></span>
    </a>
  </div>

  <div class="site-footer__content">
    <div class="container sg-mb-30px">
      <div class="row">

        <div class="col-md-7 col-sm-6 centered-block-sm clear-padding-md">
          <h5 class="gs padding-xs text-uppercase follow-us-head">Seguinos </h5>
          <ul class="follow-us">
            <li><a href="https://www.facebook.com/cityplacecr/?ref=page_internal" target="_blank" class="social_share" data-platform="Facebook"><span><img src="images/NUEVOS/facebook.png" alt="Facebook" width="20px" style="margin-top: -17%;"></span></a></li>
            <li><a href="https://www.instagram.com/cityplace_santaana/?hl=es" target="_blank" class="social_share" data-platform="Instagram"><span><img src="images/NUEVOS/instagram.png" alt="Instgram" width="20px" style="margin-top: -17%;"></span></a></li>
          </ul>
        </div>

        <div class="col-md-10 col-sm-11 centered-block-sm">
          <h5 class="gs padding-xs text-uppercase">RECIBÍ NUESTRO BOLETÍN INFORMATIVO</h5>
          <div data-newsletter="footer">
            <form class=""  id="myForm"  >
              <div class="step-1">
                <div class="input-group newsletter-group">
                  <input type="email" name="email"  id="email"  required class="form-control" placeholder="Email " maxlength="100" autocomplete="off"  />
                  <span class="input-group-btn">
                    <button class="btn btn-primary text-uppercase" type="submit">Inscribirse</button>
                  </span>
                </div>
              </div>
              <div class="step-2 hidden"  id="hidden">
                <p class="sg-mt-10px">Thank you for subscribing to our newsletter</p>
              </div>
            </form>
          </div>
        </div>

        <div class="col-md-7 col-sm-7 centered-block-sm clear-padding-md">
          <h5 class="gs padding-xs text-uppercase">Instagram Feed</h5>
          <!-- Place <div> tag where you want the feed to appear -->
          <div id="curator-feed-default-feed-layout"><a href="https://curator.io" target="_blank" class="crt-logo crt-tag">Powered by Curator.io</a></div><!-- The Javascript can be moved to the end of the html page before the </body> tag -->
          <script type="text/javascript">
            /* curator-feed-default-feed-layout */
            (function() {
              var i, e, d = document,
                s = "script";
              i = d.createElement("script");
              i.async = 1;
              i.charset = "UTF-8";
              i.src = "https://cdn.curator.io/published/52eec9d4-8c09-47cf-9e63-6437b106d2d0.js";
              e = d.getElementsByTagName(s)[0];
              e.parentNode.insertBefore(i, e);
            })();
          </script>
        </div>

      </div>
    </div>

    <div class="solid-line solid-line--grey hidden-xs"></div>

    <div class="container sg-mb-30px sg-mt-30px hidden-xs">
      <div class="row">

        <div class="col-md-6  col-sm-6">
          <section class="site-footer-links">
            <header>
              <h5 class="gs text-uppercase">Información visitante</h5>
            </header>
            <ul>
              <li><a href="amenidades.php">Amenidades</a></li>

              <li><a href="">Política de Privacidad</a></li>
              <li><a href="terminoscondiciones.php">Términos &amp; Condiciones</a></li>

            </ul>
          </section>
        </div>

        <div class="col-md-6 col-sm-6">
          <section class="site-footer-links">
            <header>
              <h5 class="gs text-uppercase">Sobre Nosotros</h5>
            </header>
            <ul>
              <li><a href="nosotrosCityPlace.php">City Place Santa Ana</a></li>
              <li><a href="roccaDevelopmentGroup2.php" target="_blank">Rocca Development Group</a></li>
              <li><a href="empleo.php" target="_blank">Empleos disponibles</a></li>

            </ul>
          </section>
        </div>

        <div class="col-md-6 col-sm-6">
          <section class="site-footer-links">
            <header>
              <h5 class="gs text-uppercase">Tu espacio en City Place</h5>
            </header>
            <ul>
              <li><a href="https://oficina.cityplacecr.com/contacto/oficinas" target="_blank">Oficinas Disponibles</a></li>
              <li><a href="https://oficina.cityplacecr.com/contacto/locales" target="_blank">Locales Comerciales Disponibles</a></li>
              <li><a href="login.php" target="_blank">Portal de Inquilinos</a></li>

            </ul>
          </section>
        </div>

        <div class="col-md-6 col-sm-6">
          <section class="site-footer-links">
            <header>
              <h5 class="gs text-uppercase">Contacto</h5>
            </header>
            <ul>
              <li>
                <p class="footer-fix"><a href="tel:+50640355000">Tel: (506) 4035-5000</a></p>
              </li>
              <li><a href="mailto:info@cityplacecr.com">
                  info@cityplacecr.com</a></li>
              <li>


                <!-- <div class="wecare_col">
                    <div class="wecarediv">
                      <a class="wecare-data-slide" href="javascript:void(0);"><img src="../staticassets.azureedge.net/assets/images/we-care-logo-en.png"></a>
                      <div class="wecare-data" style="display:none;">
                        <a href="https://emaarnewcustomer.secure.force.com/wecare?type=1&amp;from=vKteIARjY%2baJ2b6JsyhkZiLs7M%2b5KD0y%2fXUow0DFmQ0%3d&amp;Lang=en" target="_blank">Feedback</a>
                        <a href="https://emaarnewcustomer.secure.force.com/wecare?from=vKteIARjY%2baJ2b6JsyhkZiLs7M%2b5KD0y%2fXUow0DFmQ0%3d" target="_blank">Enquiry</a>
                        <a href="https://emaarnewcustomer.secure.force.com/wecare?type=2&amp;from=vKteIARjY%2baJ2b6JsyhkZiLs7M%2b5KD0y%2fXUow0DFmQ0%3d&amp;Lang=en" target="_blank">Suggestion</a>
                      </div>
                    </div>
                  </div> -->

              </li>
            </ul>
          </section>
        </div>

      </div>



    </div>

    <div class="container sg-mb-15px sg-mt-30px visible-xs" data-footer-mobile-menu>
      <div class="row">


        <section class="site-footer-mobile-links">
          <ul class="js--accordion full-width">

            <li class="site-collapse-menu-item text-left text-uppercase">
              <a class="site-collapse-menu__level-0" href="#mm-2">Información visitante</a>
              <ul class="collapse" id="mm-2">
                <li><a href="amenidades.php">Amenidades</a></li>
                <li><a href="">Política de Privacidad</a></li>
                <li><a href="">Términos &amp; Condiciones</a></li>
              </ul>
            </li>


            <li class="site-collapse-menu-item text-left text-uppercase">
              <a class="site-collapse-menu__level-0" href="#mm-2">Sobre Nosotros</a>
              <ul class="collapse" id="mm-2">
                <li><a href="nosotrosCityPlace.php">City Place Santa Ana</a></li>
                <li><a href="roccaDevelopmentGroup2.php" target="_blank">Rocca Developmente Group</a></li>
                <li><a href="empleo.php" target="_blank">Empleos disponibles</a></li>
              </ul>
            </li>
            <li class="site-collapse-menu-item text-left text-uppercase">
              <a class="site-collapse-menu__level-0" href="#mm-2">Tu espacio en City Place</a>
              <ul class="collapse" id="mm-2">
                <li><a href="https://oficina.cityplacecr.com/contacto/oficinas" target="_blank">Oficinas Disponibles</a></li>
                <li><a href="https://oficina.cityplacecr.com/contacto/locales" target="_blank">Locales Comerciales Disponibles</a></li>
                <li><a href="login.php" target="_blank">Portal de Inquilinos</a></li>

              </ul>
            </li>

            <li class="site-collapse-menu-item text-left text-uppercase">
              <a class="site-collapse-menu__level-0" href="#mm-3">Contacto</a>
              <ul class="collapse" id="mm-3">
                <li><a href="tel:506+4035-5000">Tel: (506) 4035-5000</a></li>
                <li><a href="mailto:info@cityplacecr.com">
                    info@cityplacecr.com</a></li>

              </ul>
            </li>
          </ul>


        </section>

      </div>
    </div>



  </div>



  <div class="site-footer__disclaimer">
    <p><span class="logo--footer"></span><span class="site-footer__disclaimer__inner">&copy; 2022 City Place. Todos los derechos reservados.</span></p>
  </div>
</footer>



<script type="application/javascript">
  function myFunction() {
    const Toast = Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Enviado Correctamente',
  showConfirmButton: false,
  timer: 2000
})

Toast.fire({
  icon: 'success',
  title: 'Enviado Correctamente'
})
  }


  // POST form data to zapier on submit
  $("#myForm").submit(function(e) {

    const emailInput = document.getElementById('email');



      e.preventDefault();
      $.ajax({
        url: "https://hooks.zapier.com/hooks/catch/5214118/bw4qc37/",
        type: "post",
        data: $("#myForm").serialize(),
        success: function() {
        emailInput.value = '';
          myFunction();
         
     
        }
      });

  });

  const form = document.getElementById('my_form');

  form.addEventListener('submit', function handleSubmit(event) {
    event.preventDefault();

    // 👇️ Send data to server here

    // 👇️ Reset form here
    form.reset();
  });
</script>