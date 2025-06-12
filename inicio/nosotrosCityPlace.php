<?php include 'Menu.php'; ?>





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

            <section class="site-section">
                <div class="view-panel-banner">
                    <div class="view-panel-banner__rel">
                        <div class="row">
                            <div class="col-xs-22 col-xs-offset-1 text-center">
                                <div class="visible-xs visible-sm">
                                    <h1 class="sg-mb-20px text-white"></h1>
                                </div>
                                <br><br><br><br>
                                <div class="visible-md visible-lg">
                                <br><br><br><br>
                                </div>
                                <br><br><br><br>
                           
                            </div>
                        </div>
                    </div>
                    <div class="view-panel-banner__gradient half-opacity"></div>
                    <div class="view-panel-banner__visual">
                        <div class="bg-image lazyload" data-bgset="https://demo.cityplacecr.com/images/Categorias/nosotros.png" data-alt="City Place"></div>
                    </div>
                </div>
            </section>


            <section class="site-section">
                <div class="container sg-mt-30px">
                    <div class="row">
                        <div class="col-xs-24">
                            <div class="row ">
                                <div class="col-sm-24">
                                    <center><strong>NOSOTROS CITY PLACE</strong></center>
                                    <p><br /><br /> <strong>¿Quienes Somos?</strong></p>
                                    <p>City Place es uno de los desarrollos más innovadores de Rocca Portafolio Comercial. Corresponde al primer Town Center en Santa Ana, un proyecto urbano realmente contemporáneo. Integra elementos sociales y citadinos, como comercios, cine, gimnasio, restaurantes, oficinas, hotel, centros de entretenimiento… con un elegante ambiente de negocios, perfeccionando la integración de las diferentes necesidades personales de la familia y el ejecutivo moderno en un mismo lugar, consolidando uno de los proyectos de uso mixto más interesantes en Costa Rica.</p>
                                      <p><br /> <strong>Hilton Garden Inn Santa Ana</strong></p>
                                    <p>¡Disfrute de su estadía en el Hotel más nuevo y bioseguro de la ciudad! Contamos con 143 habitaciones, 6 salones, bar, restaurante con terraza privada, tienda interna para huéspedes, gimnasio, piscina y jacuzzi.</p>
                                    <p><br /> <strong>Studio Cinema</strong></p>
                                    <p>Somos un cine independiente que te brinda una experiencia distinta y acogedora.
Nuestro diseño está pensado para el máximo disfrute de nuestros consumidores.
Contamos con 4 salas de cine y gran variedad de productos en confitería.</p>
                                    <p><br /> <strong>Vía Gastronómica</strong></p>
                                    <p>Todos los sabores en mismo lugar</p>
                                    <p><br /> <strong>Fashion Avenue</strong></p>
                                    <p>Próximamente</p>
                                    <p><br /> <strong>Salud</strong></p>
                                    <p>Próximamente</p>
                                    <p><br /> <strong>Oficinas</strong></p>
                                    <p>Próximamente</p>
                                    <h4 class="tdm-master-txt">Rocca Development Group es la desarrolladora de City Place</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>


    </div>
</div>
</div>


<?php include 'Footer.php'; ?>















































<div class="container-fluid md-full-width md-reset-padding" style="background-color: rgba(51, 51, 51, 0.9);position: fixed;bottom: -1px;z-index: 1000;" id="cookie_bar">

    <div class="site-search-drop" id="site-search">
        <div class="container">

            <!-- search input -->
            <section class="search-section search-input">
                <div class="col-xs-24 sg-mb-40px">
                    <form action="#" id="search" class="search-form" onsubmit="return false;">
                        <fieldset>
                            <input id="q" name="q" class="input--search" placeholder="Search The Dubai Mall" type="search" autocomplete="off" />
                            <button data-toggle="search-debug" class="search-submit" id="shop-search">
                                <span class="icon icon-search"></span>
                            </button>
                            <span class="icon icon-search fix" id="icon-search-topSearch"></span>
                        </fieldset>
                    </form>
                </div>
            </section>

            <!-- results -->
            <section class="search-section search-results--lead">
                <div class="row">
                    <div class="col-xs-24 sg-mb-50px">
                        <ul class="sub-nav--search">
                            <li>
                                <a href="#" target="_blank" class="active" data-toggle="filter-search" data-filter="all">
                                    All (<span id="srch_count_all">0</span>)
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" data-toggle="filter-search" data-filter="src__shops">
                                    Shop (<span id="srch_count_shop">0</span>)
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" data-toggle="filter-search" data-filter="src__offers">
                                    Offers (<span id="srch_count_offer">0</span>)
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" data-toggle="filter-search" data-filter="src__events">
                                    Events (<span id="srch_count_event">0</span>)
                                </a>
                            </li>
                        </ul>

                        <div class="drop-category">
                            <select id="shop-category2" class="search-shop-category no-transform" style="border: 1px solid #000; background-color: #FFF; border-radius: 0;">
                                <option value="all" selected="selected">All</option>
                                <option value="cat--01">Shop</option>
                                <option value="cat--02">Offers</option>
                                <option value="cat--03">Events</option>
                            </select>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-24 sg-mb-30px">
                        <h3 id="yourSearch" class="text-center">Showing search results for &quot;&quot;</h3>
                        <!--<h2 id="yourSearchXs" class="text-center visible-xs">Showing search results for &quot;&quot;</h2>-->
                    </div>
                </div>
            </section>

            <section class="search-section search-results--content src__shops">

                <div class="row sg-mb-20px">
                    <div class="col-xs-18">
                        <div class="column-border-bottom column-border-bottom--pull-right">
                            <h5 class="text-uppercase">Shops</h5>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <!--<div class="select" style="border: 1px solid #000; padding: 0 5px; overflow: hidden !important; height: 36px;">
                                        <select name="category" id="search-shop-category" class="select-styled" style="width: 100% !important; border:0px; outline:0px; font-size: 14px !important; background-color: transparent; height: 34px;">

                                        </select>
                                    </div>-->
                        <select name="category" id="search-shop-category" class="search_me"></select>
                    </div>
                </div>


                <div class="row">
                    <div class="container padding-bottom-xs">
                        <div class="row padding-xs block-grid-legend" style="margin-top: 30px !important;">
                            <div class="col-md-12"></div>
                            <div class="col-md-12 text-right">
                                <i class="new-icon"></i> <span class="inner">Accepts Emaar Gift Card</span>
                            </div>
                        </div>
                    </div>

                    <div class="container block-grid search-results--content__all sg-mb-10px" id="filteredShop-parent">
                        <div class="row">
                            <div class="col-xs-24">
                                <h5 class="text-center text-uppercase bordered" id="top-srch-matched-stores-head"><span>Matched Results</span></h5>
                            </div>
                        </div>
                        <div class="row" id="filteredShop"></div>
                        <div class="row pagination">
                            <a href="#" id="showMore" style="text-decoration:none !important;" target="_self" class="pagination__txt">Load more</a>
                        </div>
                    </div>

                    <div class="container block-grid search-results--content__all sg-mb-10px hidden" id="related-filteredShop-parent">
                        <div class="row">
                            <div class="col-xs-24">
                                <h5 class="text-center text-uppercase bordered" id="top-srch-related-stores-head"><span>Related Results</span></h5>
                            </div>
                        </div>
                        <div class="row" id="related-filteredShop"></div>
                        <div class="row pagination">
                            <a href="#" id="relatedshop-showMore" style="text-decoration:none !important;" target="_self" class="pagination__txt">Load more</a>
                        </div>
                    </div>

                    <!--<div id="filteredShop" class="container block-grid search-results--content__all sg-mb-10px ">
                                </div>-->

                    <!--<section class="site-section">
                                    <div class="container">
                                        <div class="row pagination">
                                            <a href="#" id="showMore" style="text-decoration:none !important;" target="_self" class="pagination__txt">Load more</a>
                                        </div>
                                    </div>
                                </section>-->

                </div>

            </section>

            <section class="search-section search-results--content src__offers">
                <div class="row">
                    <div class="col-xs-24 sg-mb-20px">
                        <div class="column-border-bottom">
                            <h5 class="text-uppercase">Offers</h5>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="container block-grid search-results--content__all sg-mb-10px" id="filteredOffer-parent">
                        <div class="row">
                            <div class="col-xs-24">
                                <h5 class="text-center text-uppercase bordered" id="top-srch-matched-offers-head"><span>Matched Results</span></h5>
                            </div>
                        </div>
                        <div class="col-xs-24 sg-mb-20px" id="filteredOffer"></div>
                        <div class="row pagination">
                            <a href="#" id="offershowMore" style="text-decoration:none !important;" target="_self" class="pagination__txt">Load more</a>
                        </div>
                    </div>
                    <!--<div id="filteredOffer" class="col-xs-24 sg-mb-20px"></div>-->
                    <div class="container block-grid search-results--content__all sg-mb-10px hidden" id="related-filteredOffer-parent">
                        <div class="row">
                            <div class="col-xs-24">
                                <h5 class="text-center text-uppercase bordered" id="top-srch-related-offers-head"><span>Related Results</span></h5>
                            </div>
                        </div>
                        <div class="col-xs-24 sg-mb-20px" id="related-filteredOffer"></div>
                        <div class="row pagination">
                            <a href="#" id="related-offershowMore" style="text-decoration:none !important;" target="_self" class="pagination__txt">Load more</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="search-section search-results--content src__events">
                <div class="row">
                    <div class="col-xs-24 sg-mb-20px">
                        <div class="column-border-bottom">
                            <h5 class="text-uppercase">Events</h5>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="container block-grid search-results--content__all sg-mb-10px" id="filteredEvent-parent">
                        <div class="row">
                            <div class="col-xs-24">
                                <h5 class="text-center text-uppercase bordered" id="top-srch-matched-events-head"><span>Matched Results</span></h5>
                            </div>
                        </div>
                        <div class="col-xs-24 sg-mb-20px" id="filteredEvent"></div>
                        <div class="row pagination">
                            <a href="#" id="eventshowMore" style="text-decoration:none !important;" target="_self" class="pagination__txt">Load more</a>
                        </div>
                    </div>
                    <!--<div id="filteredEvent" class="col-xs-24 sg-mb-40px"></div>-->
                    <div class="container block-grid search-results--content__all sg-mb-10px hidden" id="related-filteredEvent-parent">
                        <div class="row">
                            <div class="col-xs-24">
                                <h5 class="text-center text-uppercase bordered" id="top-srch-related-events-head"><span>Related Results</span></h5>
                            </div>
                        </div>
                        <div class="col-xs-24 sg-mb-20px" id="related-filteredEvent"></div>
                        <div class="row pagination">
                            <a href="#" id="related-eventshowMore" style="text-decoration:none !important;" target="_self" class="pagination__txt">Load more</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="search-section search-preloading">
                <div class="row">
                    <div class="col-xs-24 sg-mb-20px" id="search-results-preloading"></div>
                </div>
            </section>

            <!-- links -->
            <section class="search-section">
                <div class="row">
                    <div class="col-xs-24">
                        <h3 class="text-center hidden-xs">Haven&#039;t found what you&#039;re looking for?</h3>
                        <h2 class="text-center visible-xs">Haven&#039;t found what you&#039;re looking for?</h2>
                    </div>
                </div>
                <div class="row text-center reset-margin">
                    <a href="#site-search" id="main-top-srch-refine-srch" class="btn btn-primary-transparent btn-primary-transparent--diap-sm text-uppercase sg-mt-20px sg-mb-40px" target="_self" style="color: #000; border: 1px solid #000;" data-scroll-to>Refine search <i class="arrow"></i></a>
                    <a href="#site-search" id="main-top-srch-srch-again" class="btn btn-primary-transparent btn-primary-transparent--diap-sm text-uppercase sg-mt-20px sg-mb-40px hidden" target="_self" style="color: #000; border: 1px solid #000;" data-scroll-to>Search again <i class="arrow"></i></a>
                </div>
            </section>


            <!-- top searches -->
            <section class="search-section top-searches">
                <div class="row">
                    <div class="col-xs-24 sg-mb-20px">
                        <h3 class="text-center">Featured Search</h3>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xs-24 sg-mb-20px">
                        <div class="panel-card">
                            <article>

                                <main>
                                    <h5 class="text-uppercase sg-mb-5px"><strong>Cartier</strong></h5>

                                    <div class="sg-mb-5px" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 100%">Founded in 1847 by Louis Francois Cartier, the House of Cartier has been producing pieces with a unity of style for generations, no matter the differences in artistic expression.</div>

                                    <a class="btn btn-link sg-mb-20px hidden-xs" href="en/shop/cartier-fashion-avenue.html">Find out more</a>
                                    <a class="btn btn-default visible-xs sg-mt-20px sg-mb-20px " href="en/shop/cartier-fashion-avenue.html">Find out more</a>

                                </main>
                            </article>
                        </div>
                        <div class="panel-card">
                            <article>

                                <main>
                                    <h5 class="text-uppercase sg-mb-5px"><strong>Chanel</strong></h5>

                                    <div class="sg-mb-5px" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 100%">“I want to be part of what happens” – Mademoiselle Chanel
                                        This aspiration, coupled with a visionary mind, has made Chanel a unique brand.</div>

                                    <a class="btn btn-link sg-mb-20px hidden-xs" href="en/shop/chanel.html">Find out more</a>
                                    <a class="btn btn-default visible-xs sg-mt-20px sg-mb-20px " href="en/shop/chanel.html">Find out more</a>

                                </main>
                            </article>
                        </div>
                        <div class="panel-card">
                            <article>

                                <main>
                                    <h5 class="text-uppercase sg-mb-5px"><strong>Christian Louboutin</strong></h5>

                                    <div class="sg-mb-5px" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 100%">Christian Louboutin established his business in the heart of Paris in 1991, first with a collection for Women followed by a Men’s collection a few years later, both recognizable by the signature red lacquered sole. 2014 welcomed the launch of Christian Louboutin Beauté. With a prolific collection of women’s and men’s shoes, handbags and small leather goods. Christian Louboutin now has 145 boutiques available around the world.</div>

                                    <a class="btn btn-link sg-mb-20px hidden-xs" href="en/shop/christian-louboutin-1.html">Find out more</a>
                                    <a class="btn btn-default visible-xs sg-mt-20px sg-mb-20px " href="en/shop/christian-louboutin-1.html">Find out more</a>

                                </main>
                            </article>
                        </div>
                        <div class="panel-card">
                            <article>

                                <main>
                                    <h5 class="text-uppercase sg-mb-5px"><strong>Graff</strong></h5>

                                    <div class="sg-mb-5px" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 100%">Graff Diamonds-The most Fabulous Jewels In the World</div>

                                    <a class="btn btn-link sg-mb-20px hidden-xs" href="en/shop/graff.html">Find out more</a>
                                    <a class="btn btn-default visible-xs sg-mt-20px sg-mb-20px " href="en/shop/graff.html">Find out more</a>

                                </main>
                            </article>
                        </div>
                        <div class="panel-card">
                            <article>

                                <main>
                                    <h5 class="text-uppercase sg-mb-5px"><strong>Harry Winston</strong></h5>

                                    <div class="sg-mb-5px" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 100%">Founded in New York City in 1932, the brand continues to set the standard as the “King of Diamonds” in fine jewelry and high-end watchmaking.</div>

                                    <a class="btn btn-link sg-mb-20px hidden-xs" href="en/shop/harry-winston-1.html">Find out more</a>
                                    <a class="btn btn-default visible-xs sg-mt-20px sg-mb-20px " href="en/shop/harry-winston-1.html">Find out more</a>

                                </main>
                            </article>
                        </div>
                        <div class="panel-card">
                            <article>

                                <main>
                                    <h5 class="text-uppercase sg-mb-5px"><strong>Level Shoes</strong></h5>

                                    <div class="sg-mb-5px" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 100%">Level Shoes is the world's largest luxury shoe store spanning over 96,000 square feet with over 200+ global brands inclusive of adidas, Axel Arigato, Amina Muaddi, Burberry, Jacquemus, Malone Souliers, Nike and many more, as well as 23 designer boutiques, such as Chanel, Louis Vuitton, Christian Dior and Saint Laurent.

                                        With a range of services spanning from personalisation to an in-store foot spa, Level Shoes has a dedicated Concierge Team to support with personal shopping requests, VAT processing and regional deliveries.</div>

                                    <a class="btn btn-link sg-mb-20px hidden-xs" href="en/shop/level-shoes.html">Find out more</a>
                                    <a class="btn btn-default visible-xs sg-mt-20px sg-mb-20px " href="en/shop/level-shoes.html">Find out more</a>

                                </main>
                            </article>
                        </div>
                        <div class="panel-card">
                            <article>

                                <main>
                                    <h5 class="text-uppercase sg-mb-5px"><strong>Symphony</strong></h5>

                                    <div class="sg-mb-5px" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 100%">Prominently located along the luxurious Fashion Avenue, Symphony offers its discerning clientele an edited selection of luxury ready-to-wear, accessories and evening gowns.</div>

                                    <a class="btn btn-link sg-mb-20px hidden-xs" href="en/shop/symphony.html">Find out more</a>
                                    <a class="btn btn-default visible-xs sg-mt-20px sg-mb-20px " href="en/shop/symphony.html">Find out more</a>

                                </main>
                            </article>
                        </div>
                        <div class="panel-card">
                            <article>

                                <main>
                                    <h5 class="text-uppercase sg-mb-5px"><strong>Van Cleef & Arpels</strong></h5>

                                    <div class="sg-mb-5px" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 100%">Loyal to its founders, the architecture of the Van Cleef & Arpels boutique preserves the spirit of high-end jewellery creations.</div>

                                    <a class="btn btn-link sg-mb-20px hidden-xs" href="en/shop/van-cleef.html">Find out more</a>
                                    <a class="btn btn-default visible-xs sg-mt-20px sg-mb-20px " href="en/shop/van-cleef.html">Find out more</a>

                                </main>
                            </article>
                        </div>
                    </div>
                </div>


            </section>

        </div>
    </div>

    <div class="modal-custom-container modal-newsletter-popup" data-newsletter>
        <div class="modal-custom-container__view">
            <div class="display-table">
                <div class="display-table-cell col-middle">
                    <div class="modal-custom-container__box text-center animated fadeInUp">

                        <a class="modal-custom-close" href="#" data-newsletter-close>
                            <span class="icon-cross"></span>
                        </a>

                        <div class="step-1">
                            <h3 class="sg-mb-20px">Sign Up to The Dubai Mall Newsletter</h3>

                            <p class="sg-mb-20px">Be the first to know about exciting events and new products available at The Dubai Mall, delivered straight to your inbox.</p>

                            <form id="newsletter-signup-form" data-parsley-validate novalidate>
                                <div class="input-group newsletter-group sg-mb-40px">
                                    <input type="hidden" name="source" value="website">
                                    <input type="hidden" name="language" value="en">
                                    <input type="email" name="email" data-parsley-type="email" class="form-control" placeholder="Email Address" maxlength="100" autocomplete="off" data-parsley-required="true" data-parsley-required-message="This value is required." data-parsley-type-message="Please enter a valid email address." />
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary text-uppercase" type="submit">Sign Up</button>
                                    </span>
                                </div>
                            </form>
                            <p class="text-muted">
                                <a target="_blank" href="en/about-us/privacy-policies.html">Privacy Policy</a>
                            </p>
                        </div>

                        <!-- <div class="step-2 hidden">
                        <h3 class="sg-mb-25px">Congratulations</h3>
                        <p class="sg-mb-30px">You&#039;ll be the first to know about The Dubai Mall news and updates. In the meantime, why not explore the variety of outstanding stores and entertainment options on our site?</p>
                        <div class="row">
                            <div class="col-sm-18 col-sm-offset-3">
                                <a class="btn btn-primary btn-block" id="newsletter_close" href="#" data-newsletter-close>
                                    Continue
                                </a>
                            </div>
                        </div>
                    </div> -->

                    </div>
                </div>
            </div>
        </div>
        <div class="modal-custom-container__overlay"></div>
    </div>


    <script defer type="text/javascript" src="staticassets.azureedge.net/main/scripts/vendorsa4fc.js?refresh=3"></script>
    <script defer src="staticassets.azureedge.net/main/scripts/main9477.js?refresh=122042022"></script>

    <script defer src="staticassets.azureedge.net/public-scripts/locale/ena016.js?refresh=22042022"></script>

    <script type="text/javascript">
        window.fbAsyncInit = function() {
            FB.init({
                appId: '',
                xfbml: true,
                version: 'v2.7'
            });
        };
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