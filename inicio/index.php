<?php include 'Menu.php'; ?>








<style>


/* common */
.ribbon {
  width: 150px;
  height: 150px;
  overflow: hidden;
  position: absolute;
}

.ribbon::before,
.ribbon::after {
  position: absolute;
  z-index: -1;
  content: '';
  display: block;
  border: 5px solid black;
}


.ribbon span {
  position: absolute;
  display: block;
  width: 225px;
  padding: 15px 0;
  background-color: black;
  box-shadow: 0 5px 10px rgba(0,0,0,.1);
  color: #fff;
  font-size: 15px;
  text-shadow: 0 1px 1px rgba(0,0,0,.2);
  text-transform: uppercase;
  text-align: center;
}

/* top left*/
.ribbon-top-left {
  top: 2px;
  left: 2px;
}
.ribbon-top-left::before,
.ribbon-top-left::after {
  border-top-color: transparent;
  border-left-color: transparent;
}
.ribbon-top-left::before {
  top: 0;
  right: 0;
}
.ribbon-top-left::after {
  bottom: 0;
  left: 0;
}
.ribbon-top-left span {
  right: -25px;
  top: 30px;
  transform: rotate(-45deg);
}

/* top right*/
.ribbon-top-right {
  top: -10px;
  right: -10px;
}
.ribbon-top-right::before,
.ribbon-top-right::after {
  border-top-color: transparent;
  border-right-color: transparent;
}
.ribbon-top-right::before {
  top: 0;
  left: 0;
}
.ribbon-top-right::after {
  bottom: 0;
  right: 0;
}
.ribbon-top-right span {
  left: -25px;
  top: 30px;
  transform: rotate(45deg);
}

/* bottom left*/
.ribbon-bottom-left {
  bottom: -10px;
  left: -10px;
}
.ribbon-bottom-left::before,
.ribbon-bottom-left::after {
  border-bottom-color: transparent;
  border-left-color: transparent;
}
.ribbon-bottom-left::before {
  bottom: 0;
  right: 0;
}
.ribbon-bottom-left::after {
  top: 0;
  left: 0;
}
.ribbon-bottom-left span {
  right: -25px;
  bottom: 30px;
  transform: rotate(225deg);
}

/* bottom right*/
.ribbon-bottom-right {
  bottom: -10px;
  right: -10px;
}
.ribbon-bottom-right::before,
.ribbon-bottom-right::after {
  border-bottom-color: transparent;
  border-right-color: transparent;
}
.ribbon-bottom-right::before {
  bottom: 0;
  left: 0;
}
.ribbon-bottom-right::after {
  top: 0;
  right: 0;
}
.ribbon-bottom-right span {
  left: -25px;
  bottom: 30px;
  transform: rotate(-225deg);
}
</style>



<!--Aqui empieza el banner principal-->
<div class="site">
  <div class="site-content home-page">
    <div class="site-sections">

      <nav class="site-sections__menu hidden-xs">
        <ul>
          <li><a href="promociones.php">Promociones</a></li>
          <li><a href="eventos.php">Eventos</a></li>
          <li><a href="contacto.php">Contacto</a></li>
        </ul>
      </nav>

      <div class="block-container">
        <div class="block-abs">
          <div class="block col-xs-24" data-block>
            <div class="block-bottom sg-mb-50px sg-mb-20px-xs">
              <div class="container-fluid md-full-width md-reset-padding" id="home_view1">
                <div class="row">
                  <div class="col-xs-22 col-sm-offset-half md-pull-in-line">

                    <h1 class="sg-mb-10px text-white col-sm-16" style="margin-left: 0; padding-left: 0;">

                      City Place</h1>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-22 col-sm-offset-half md-pull-in-line">
                    <span class="sg-mb-10px text-white col-sm-16">
                      <br>
                      <p class="sg-mb-25px text-white hidden-xs"> Donde la naturaleza del arte grita fuerte</p>

                    </span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-22 col-sm-offset-half md-pull-in-line">

                  </div>
                </div>
              </div>
            </div>
            <div class="block-gradient"></div>
            <div class="block-visuals">
              <figure class="block-cover-img">
                <div class="bg-image lazyload" data-bgset="images/banners-categorias/CPBanner07.jpg [(max-width: 766px] | images/banners-categorias/CPBanner07.jpg [(max-width: 1022px] | images/banners-categorias/CPBanner07.jpg" data-alt="City Place Centro Urbano en Santa Ana"></div>
              </figure>
            </div>

          </div>
        </div>
        <div class="block-padding" data-block-height data-xs="1" data-sm="1" data-md="1" data-lg="1"></div>
      </div>

      <br><br><br>



      <div class="block-container">
        <div class="block-abs">

          <div class="block block-border-right col-md-14 col-sm-12 hidden-xs" data-block>
            <div class="block-gradient"></div>
            <div class="block-visuals">
              <figure class="block-cover-img">
                <!--<div class="bg-image lazyload" id="bg-img-fashion-avenue"></div>-->
          
                <div data-bgset="images/NUEVOS/theyardNew.jpg" class="bg-image lazyload">
                </div>
                
              </figure>
            </div>
          </div>


          <div class="block block-border-left col-md-10 col-sm-12 block-white" data-block>
            <div class="block-content" id="blockFashionAvenue">

              <div class="display-table">
                <div class="display-table-cell col-middle text-center" style="position: relative;">

                  <h3 class="sg-mb-50px text-uppercase visible-xs hidden-sm visible-md visible-lg" style="position: absolute; top:5%; left: 0; right: 0;"> News</h3>
                  <h5 class="sg-mb-50px text-uppercase visible-xs hidden-sm visible-md visible-lg" style="position: absolute; top: 15%; left: 0; right: 0;">VÍA GASTRONÓMICA</h5>
                  <div class="hidden-xs visible-sm">
                    <br>
                    <h4 class="sg-mb-50px text-uppercase">News</h4>
                    <h5 class="sg-mb-50px text-uppercase">Food</h5>
                  </div>
                  <h2 class="sg-mb-30px text-uppercase block__push-in hidden-xs hidden-sm" style="font-weight: 400;">
                    THE YARD
                  </h2>
                  <h3 class="sg-mb-30px text-uppercase block__push-in visible-sm" style="font-weight: 400;">
                  THE YARD
                  </h3>
                  <h1 class="sg-mb-30px text-uppercase block__push-in visible-xs" style="font-weight: 400;">
                  THE YARD
                  </h1>


                  <div class="col-lg-12 col-lg-offset-6 col-md-18 col-md-offset-3">
                    <p class="clearfix sg-mb-30px" style="font-size:18px">
                    ¡Cocktails to go!
                    </p>
                    <a href="theyard.php" class="btn btn-primary-transparent btn-primary-transparent--diap-sm text-uppercase hidden-xs visible-sm" style="color: #000; border-color: #000;">
                      MÁS INFORMACIÓN
                    </a>

                  </div>
                  <div class="visible-xs hidden-sm visible-md visible-lg" style="position: absolute; bottom: 10%; left: 15px; right: 15px;">
                    <a href="theyard.php" class="btn btn-primary-transparent btn-primary-transparent--diap-sm text-uppercase hidden-xs visible-md visible-lg" style="max-width: 50%; margin: auto;">
                      MÁS INFORMACIÓN
                    </a>
                    <a href="theyard.php" class="btn btn-primary-transparent btn-primary-transparent--diap-sm text-uppercase visible-xs hidden-sm" style="color: #FFF; border-color: #FFF;">
                      MÁS INFORMACIÓN
                    </a>
                  </div>
                </div>
              </div>

            </div>
            <div class="block-gradient visible-xs"></div>
            <div class="block-visuals visible-xs">
              <figure class="block-cover-img">
              <div class="ribbon"><span>Nueva Apertura</span></div>
                <div data-bgset="images/NUEVOS/shibuyanews.jpg" class="bg-image lazyload visible-xs-block"></div>
                <div class="ribbon"><span>Nueva Apertura</span></div>
                <div data-bgset="images/NUEVOS/shibuyanews.jpg" class="bg-image lazyload visible-sm-block"></div>
                <div class="ribbon"><span>Nueva Apertura</span></div>
                <div data-bgset="images/NUEVOS/shibuyanews.jpg" class="bg-image lazyload visible-md-block"></div>
                <div class="ribbon"><span>Nueva Apertura</span></div>
                <div data-bgset="images/NUEVOS/shibuyanews.jpg" class="bg-image lazyload visible-lg-block"></div>
              </figure>
            </div>
          </div>

        </div>
        <div class="block-padding" data-block-height data-xs="1" data-sm="1" data-md="1" data-lg="1"></div>
      </div>


      <div class="block-container">
        <div class="block-abs">
          <div class="block col-xs-24" data-block>
            <div class="block-bottom sg-mb-50px sg-mb-20px-xs">
              <div class="container-fluid md-full-width md-reset-padding" id="home_view1">
                <div class="row">
                  <div class="col-xs-22 col-sm-offset-half md-pull-in-line">
                    <h5 class="text-uppercase sg-mb-15px text-white hidden-lg spaced"><strong>Entretenimiento</strong></h5>
                    <h5 class="text-uppercase sg-mb-25px text-white visible-lg spaced"><strong>Entretenimiento</strong></h5>
                    <h1 class="sg-mb-10px text-white col-sm-16" style="margin-left: 0; padding-left: 0;">

                      Studio Cinema</h1>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-22 col-sm-offset-half md-pull-in-line">
                    <span class="sg-mb-10px text-white col-sm-16">
                      <p class="sg-mb-25px text-white hidden-xs">Somos un cine independiente que te brinda una experiencia distinta y acogedora. <br> Nueva confitería en línea compra tu combo favorita desde la web </p>

                    </span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-22 col-sm-offset-half md-pull-in-line">
                    <a href="studioCinema.php" class="btn btn-default-transparent btn-block-sm text-uppercase margin-right-xs-px">
                      MÁS INFORMACIÓN
                    </a>
                    <a href="https://www.studiocinemascr.com/" class="btn btn-default-transparent btn-block-sm text-uppercase">
                      Visita la pagina
                    </a>
                    <!-- <a href="https://confiteria.studiocinemascr.com/" class="btn btn-default-transparent btn-block-sm text-uppercase margin-right-xs-px">
                      Menú Digital
                    </a> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="block-gradient"></div>
            <div class="block-visuals">
              <figure class="block-cover-img">
                <div class="bg-image lazyload" data-bgset="images/NUEVOS/NewbannerSC.jpg [(max-width: 766px] | images/NUEVOS/NewbannerSC.jpg [(max-width: 1022px] | images/NUEVOS/NewbannerSC.jpg" data-alt="City Place Studio Cinema"></div>
              </figure>
            </div>

          </div>
        </div>
        <div class="block-padding" data-block-height data-xs="1" data-sm="1" data-md="1" data-lg="1"></div>
      </div>


      <div class="block-container">
        <div class="block-abs">
          <div class="block block-border-right col-md-12 col-sm-24 " id="home_view2" data-block>

            <div class="block-bottom sg-mb-50px sg-mb-20px-xs">
              <div class="container-fluid md-reset-padding md-full-width">
                <div class="row">
                  <div class="col-xs-22 col-xs-offset-1 md-pull-in-line">
                    <h5 class="text-uppercase sg-mb-15px text-white hidden-lg spaced"><strong>Gastronomía</strong></h5>
                    <h5 class="text-uppercase sg-mb-25px text-white visible-lg spaced"><strong>Gastronomía</strong></h5>
                    <div class="visible-xs">
                      <h1 class="sg-mb-10px text-white">The Yard</h1>
                    </div>
                    <div class="hidden-xs">
                      <h2 class="sg-mb-10px text-white">The Yard</h2>

                    </div>
                    <div class="row">
                      <div class="col-md-20 col-sm-14">
                        <p class="sg-mb-25px text-white hidden-xs"></p>

                      </div>
                    </div>
                    <a href="theyard.php" class=" btn btn-default-transparent btn-block-sm margin-right-xs-px text-uppercase">
                      MÁS INFORMACIÓN
                    </a>
                    <a href="gastronomia.php" class="btn btn-default-transparent btn-block-sm text-uppercase">
                      Ver Restaurantes
                    </a>
                  </div>
                </div>
              </div>
            </div>


            <div class="block-gradient"></div>
            <div class="block-visuals">
              <figure class="block-cover-img">
                <div data-bgset="images/Restaurantes/theyard/externa.JPG" class="bg-image lazyload" data-alt="Via Gastronomica The Yard City Place"></div>
              </figure>
            </div>
          </div>

          <div class="block block-border-left col-md-12 col-sm-24" data-block>
            <div class="block-wrap">



              <div class="block-bottom sg-mb-50px sg-mb-20px-xs" id="home_view3">
                <div class="container-fluid md-reset-padding md-full-width">
                  <div class="row">
                    <div class="col-xs-22 col-xs-offset-1 md-pull-in-line">
                      <h5 class="text-uppercase sg-mb-15px text-white hidden-lg spaced"><strong>Hospitalidad</strong></h5>
                      <h5 class="text-uppercase sg-mb-15px text-white visible-lg spaced"><strong>Hospitalidad</strong></h5>
                      <div class="visible-xs">
                        <h1 class="sg-mb-10px text-white">Hilton Garden Inn Santa Ana</h1>

                      </div>
                      <div class="hidden-xs">
                        <h2 class="sg-mb-10px text-white">Hilton Garden Inn Santa Ana</h2>

                      </div>
                      <div class="row">
                        <div class="col-md-20 col-sm-12">
                          <p class="sg-mb-25px text-white hidden-xs"></p>

                        </div>
                      </div>
                      <a href="HiltonGardenInnSA.php" target="_blank" class="exploreMoreStayCTA btn btn-default-transparent btn-block-sm margin-right-xs-px text-uppercase">
                        MÁS INFORMACIÓN
                      </a>
                      <a href="https://www.hilton.com/en/hotels/sjogsgi-hilton-garden-inn-santa-ana-san-jose/?fbclid=IwAR0nxOBRpvlCr0gTp15DZ4F03lMiC9djkBOiL62fvscT-GAxBHrt24VaA6o" class="btn btn-default-transparent btn-block-sm text-uppercase">
                        Reserva Aquí
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="block-gradient"></div>
              <div class="block-visuals">
                <figure class="block-cover-img">
                  <div data-bgset="images/banners-categorias/5-hilton.png" class="bg-image lazyload" data-alt="Hilton Garden Inn Santa Ana"></div>
                </figure>
              </div>
            </div>
          </div>

        </div>
        <div class="block-padding" data-block-height data-xs="2" data-sm="2" data-md="1" data-lg="1"></div>
      </div>











      <div class="block-container">
        <div class="block-abs">
          <div class="block block-border-right col-md-12 col-sm-24 " id="home_view2" data-block>

            <div class="block-bottom sg-mb-50px sg-mb-20px-xs">
              <div class="container-fluid md-reset-padding md-full-width">
                <div class="row">
                  <div class="col-xs-22 col-xs-offset-1 md-pull-in-line">
                    <h5 class="text-uppercase sg-mb-15px text-white hidden-lg spaced"><strong>Comercio</strong></h5>
                    <h5 class="text-uppercase sg-mb-25px text-white visible-lg spaced"><strong>Comercio</strong></h5>
                    <div class="visible-xs">
                      <h1 class="sg-mb-10px text-white">Expo Design</h1>
                    </div>
                    <div class="hidden-xs">
                      <h2 class="sg-mb-10px text-white">Expo Design</h2>

                    </div>
                    <div class="row">
                      <div class="col-md-20 col-sm-14">
                        <p class="sg-mb-25px text-white hidden-xs"></p>

                      </div>
                    </div>
                    <a href="ExpoDesign.php" class=" btn btn-default-transparent btn-block-sm margin-right-xs-px text-uppercase">
                      MÁS INFORMACIÓN
                    </a>
                    <a href="comercio.php" class="btn btn-default-transparent btn-block-sm text-uppercase">
                      Más tiendas
                    </a>
                  </div>
                </div>
              </div>
            </div>


            <div class="block-gradient"></div>
            <div class="block-visuals">
              <figure class="block-cover-img">
                <div data-bgset="images/Comercio/ExpoDesign/22.webp" class="bg-image lazyload" data-alt="Expo Design City Place"></div>
              </figure>
            </div>
          </div>

          <div class="block block-border-left col-md-12 col-sm-24" data-block>
            <div class="block-wrap">



              <div class="block-bottom sg-mb-50px sg-mb-20px-xs" id="home_view3">
                <div class="container-fluid md-reset-padding md-full-width">
                  <div class="row">
                    <div class="col-xs-22 col-xs-offset-1 md-pull-in-line">
                      <h5 class="text-uppercase sg-mb-15px text-white hidden-lg spaced"><strong>Nuestra agenda de</strong></h5>
                      <h5 class="text-uppercase sg-mb-15px text-white visible-lg spaced"><strong>Nuestra agenda de</strong></h5>
                      <div class="visible-xs">
                        <h1 class="sg-mb-10px text-white">Eventos</h1>

                      </div>
                      <div class="hidden-xs">
                        <h2 class="sg-mb-10px text-white">Eventos</h2>

                      </div>
                      <div class="row">
                        <div class="col-md-20 col-sm-12">
                          <p class="sg-mb-25px text-white hidden-xs"></p>

                        </div>
                      </div>
                      <a href="eventos.php" target="_blank" class="exploreMoreStayCTA btn btn-default-transparent btn-block-sm margin-right-xs-px text-uppercase">
                        MÁS INFORMACIÓN
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="block-gradient"></div>
              <div class="block-visuals">
                <figure class="block-cover-img">
                  <div data-bgset="images/banners-categorias/banner-events.avif" class="bg-image lazyload" data-alt="Eventos City Place"></div>
                </figure>
              </div>
            </div>
          </div>

        </div>
        <div class="block-padding" data-block-height data-xs="2" data-sm="2" data-md="1" data-lg="1"></div>
      </div>






      <!-- Titulo de Eventos -->

      <div class="col-xs-24">
        <div class="visible-xs">
          <h2 class="text-center sg-mt-40px sg-mb-25px">Descubrí promociones….</h2>
        </div>
        <div class="hidden-xs">

          <h3 class="text-center sg-mt-40px">Descubrí promociones….</h3>
        </div>
      </div>
    </div>
  </div>



  <section class="site-section">
          <!-- @view-panel -->
          <div class="container">
          <div class="row sg-mt-30px">




<div class="col-md-6 col-sm-6">
    <div class="slick-slider-container">
      <div class="slick-slider-container__row" id="imag_changes">
        <div class="row">
             <div class="single-slide force-arrows-inside"  data-slick data-slick-options="{'arrows': true, 'dots': false, 'infinite': true, 'slidesToShow': 1, 'slidesToScroll': 1 }">
                <div class="panel-card">
                  <article>
                    <figure>
                      <div class="panel-card__img bg-image lazyload sg-mb-10px"
                        data-bgset="images/promociones/2025/eventos.jpg" style="width: 100% !important;" data-alt="Introducing: Alexander McQUEEN Store"></div>
                    </figure>

                  </article>
                </div>
              </div>
            </div>
        </div>
    </div>

      <div class="row margin-bottom-xs">
        <div class="col-xs-24">
         <p class="p--date sg-mb-15px"> Reservar fecha </p>
         <h5  class="sg-mb-10px panel__title" style="text-transform: uppercase;">PROMOCIÓN</h5>
          <h3 class="sg-mb-10px">Elevá tus eventos</h3>
          <p class="sg-mb-10px"><p>En Hilton Garden Inn  reuniones, lanzamientos, fiestas, baby showers, 15 años...
              </p></p>

             <a href="https://www.instagram.com/hiltongardeninnsantaana/" class="btn btn-default sg-mb-30px hidden-xs" >
              MÁS INFORMACIÓN
               </a>
        </div>
      </div>
    </div>


  <div class="col-md-6 col-sm-6">
    <div class="slick-slider-container">
       <div class="slick-slider-container__row" id="imag_changes">
         <div class="row">
            <div class="single-slide force-arrows-inside" data-slick data-slick-options="{'arrows': true, 'dots': false, 'infinite': true, 'slidesToShow': 1, 'slidesToScroll': 1 }">
                <div class="panel-card">
                  <article>
                    <figure>
                      <div class="panel-card__img bg-image lazyload sg-mb-10px"
                        data-bgset="images/promociones/2025/happyhour.jpg" style="width: 100% !important;" data-alt="Eventos City Place Santa Ana"></div>
                      </figure>

                  </article>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="row margin-bottom-xs">
      <div class="col-xs-24">
        <p class="p--date sg-mb-15px">Lunes a Jueves de 5:00pm a 7:00pm </p>
          <h5  class="sg-mb-10px panel__title" style="text-transform: uppercase;">PROMOCIÓN</h5>
            <h3 class="sg-mb-10px">Happy Hour</h3>
        <p class="sg-mb-10px"><p>En Hilton Garden Inn de 5:00pm a 7:00pm</p></p>
                <a href="https://www.instagram.com/hiltongardeninnsantaana/" class="btn btn-default sg-mb-30px hidden-xs" >
                 MÁS INFORMACIÓN
               </a>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-sm-6">
    <div class="slick-slider-container">
      <div class="slick-slider-container__row" id="imag_changes">
        <div class="row">
             <div class="single-slide force-arrows-inside"  data-slick data-slick-options="{'arrows': true, 'dots': false, 'infinite': true, 'slidesToShow': 1, 'slidesToScroll': 1 }">
                <div class="panel-card">
                  <article>
                    <figure>
                      <div class="panel-card__img bg-image lazyload sg-mb-10px"
                        data-bgset="images/promociones/2025/almuerzo.jpg" style="width: 100% !important;" data-alt="Introducing: Alexander McQUEEN Store"></div>
                    </figure>

                  </article>
                </div>
              </div>
            </div>
        </div>
    </div>

      <div class="row margin-bottom-xs">
        <div class="col-xs-24">
         <p class="p--date sg-mb-15px"> Lunes a Viernes de 12:00md a 2:00pm </p>
         <h5  class="sg-mb-10px panel__title" style="text-transform: uppercase;">PROMOCIÓN</h5>
          <h3 class="sg-mb-10px">Almuerzo Ejecutivo</h3>
          <p class="sg-mb-10px"><p>En Hilton Garden Inn, incluye entrada, plato fuerte y postre
              </p></p>

             <a href="https://www.instagram.com/hiltongardeninnsantaana/" class="btn btn-default sg-mb-30px hidden-xs" >
              MÁS INFORMACIÓN
               </a>
        </div>
      </div>
    </div>



  

    <div class="col-md-6 col-sm-6">
    <div class="slick-slider-container">
      <div class="slick-slider-container__row" id="imag_changes">
        <div class="row">
             <div class="single-slide force-arrows-inside"  data-slick data-slick-options="{'arrows': true, 'dots': false, 'infinite': true, 'slidesToShow': 1, 'slidesToScroll': 1 }">
                <div class="panel-card">
                  <article>
                    <figure>
                      <div class="panel-card__img bg-image lazyload sg-mb-10px"
                        data-bgset="images/promociones/2025/desayuno.jpg" style="width: 100% !important;" data-alt="Introducing: Alexander McQUEEN Store"></div>
                    </figure>

                  </article>
                </div>
              </div>
            </div>
        </div>
    </div>

      <div class="row margin-bottom-xs">
        <div class="col-xs-24">
         <p class="p--date sg-mb-15px"> Sábados y Domingos de 7:00am a 11:00am </p>
         <h5  class="sg-mb-10px panel__title" style="text-transform: uppercase;">PROMOCIÓN</h5>
          <h3 class="sg-mb-10px">Desayuno para dos</h3>
          <p class="sg-mb-10px"><p>En Hilton Garden Inn, $35ii dos personas
              </p></p>

             <a href="https://www.instagram.com/hiltongardeninnsantaana/" class="btn btn-default sg-mb-30px hidden-xs" >
              MÁS INFORMACIÓN
               </a>
        </div>
      </div>
    </div>



    
<div class="visible-xs"><br></div>


            

</section>
  <br><br><br><br>
  <div class="visible-xs hidden-sm visible-md visible-lg" style="position: absolute; bottom: 5%; left: 15px; right: 15px;">
    <a href="promociones.php" class="btn btn-primary-transparent btn-primary-transparent--diap-sm text-uppercase hidden-xs visible-md visible-lg" style="max-width: 50%; margin: auto;">
      MÁS PROMOCIONES
    </a>
    <a href="promociones.php" class="btn btn-primary-transparent btn-primary-transparent--diap-sm text-uppercase visible-xs hidden-sm" style="color: #FFF; border-color: #FFF;">
      MÁS PROMOCIONES
    </a>
  </div>



  <br><br><br><br>


  <section class="site-section">
    <div class="view-panel-banner">
      <div class="view-panel-banner__rel">
        <div class="row">
          <div class="col-xs-22 col-xs-offset-1 text-center">
            <div class="visible-xs visible-sm">
              <h1 class="sg-mb-20px text-white"></h1>
            </div>
            <div class="visible-md visible-lg">
              <h2 class="sg-mb-20px text-white"></h2>
            </div>
            
            <!-- <a href="en/whats-new.html" class="btn btn-default-transparent btn-block-sm text-uppercase">
                          Discover more
                        </a> -->
          </div>
        </div>
      </div>
      <div class="view-panel-banner__gradient half-opacity"></div>
      <div class="view-panel-banner__visual">
        <div class="bg-image lazyload" data-bgset="https://demo.cityplacecr.com/images/Categorias/arte2.jpg" data-alt="City Place"></div>
      </div>
    </div>
  </section>


</div>


</div>
</div>
</div>


<?php include 'Footer.php'; ?>




  <script defer type="text/javascript" src="staticassets.azureedge.net/main/scripts/vendorsa4fc.js?refresh=3"></script>
  <script defer src="staticassets.azureedge.net/main/scripts/main9477.js?refresh=122042022"></script>

  <script defer src="staticassets.azureedge.net/public-scripts/locale/ena016.js?refresh=22042022"></script>

  <script type="text/javascript">
  
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) {
        return;
      }
      js = d.createElement(s);
      js.id = id;
      js.src = "../connect.facebook.net/en_US/sdk.js";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    // current footer
    var footer_element = document.getElementById("btnShowGroup");
    if (typeof(footer_element) != 'undefined' && footer_element != null) {
      document.getElementById("btnShowGroup").addEventListener("click", displayMenu);

      function displayMenu() {
        var footerContainer = document.getElementById("footerContainer");
        if (footerContainer.classList.contains('active')) {
          footerContainer.className = "";
        } else {
          footerContainer.className = "active";
        }
        var scrollingElement = (document.scrollingElement || document.body);
        scrollingElement.scrollTop = scrollingElement.scrollHeight;
      }
      document.getElementById("btnCloseGroup").addEventListener("click", hideMenu);

      function hideMenu() {
        var footerContainer = document.getElementById("footerContainer");
        footerContainer.className = "";
      }
      document.getElementById("footerOverlay").addEventListener("click", hideMenu);
    }
    document.addEventListener('DOMContentLoaded', function() {


      var myEle = document.getElementById("mobile_app_bar");
      if (myEle) {
        $("#site-collapse-menu").css('margin-top', '120px');
      }
      var el = document.getElementById('close_app_notification');
      if (el) {
        el.addEventListener('click', mobileNotification, false);
      }
      var elAC = document.getElementById('accept_cookie');
      if (elAC) {
        var checkCookiePolicy = getCookie('CookiePolicy');
        console.log("checkCookiePolicy-" + checkCookiePolicy);
        if (checkCookiePolicy == 1) {
          //document.getElementById("accept_cookie").style.display = 'none';
          var cookieBar = document.getElementById("cookie_bar");
          cookieBar.remove();
        }
        elAC.addEventListener('click', cookieAccept, false);
      }



    }, false);
  </script>




  </body>


  </html>