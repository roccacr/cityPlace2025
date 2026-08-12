<?php include 'Menu.php'; ?>





<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/cupones.css">

<div>
    <div class="site">

        <div class="site-content stay-page">
            <div class="site-sections">

                <nav class="site-sections__menu hidden-xs">
                    <ul>
                        <li><a href="promociones.php">Promociones</a></li>
                        <li><a href="eventos.php">Eventos</a></li>
                        <li><a href="contacto.php">Contacto</a></li>
                    </ul>
                </nav>

                <br>
           
                <div class="header-container">
                    <h1 class="header-titulo">Beneficios exclusivos para colaboradores</h1>

                    <!-- <h2 class="header-subtitulo">Ser parte de City Place tiene sus privilegios.</h2> -->
                    <h2 class="header-subtitulo">Accedé a descuentos especiales, promociones y beneficios diseñados para vos.</h2>
                <div class="header-parrafos-container">
                    <p class="header-parrafo">
                    Aplican únicamente para colaboradores de empresas ubicadas en City Place. 
                    </p>
                    <p class="header-parrafo">
                    Es indispensable presentar el badge o una identificación empresarial vigente.
                    </p>
                </div>

                <div class="categorias-container">

                <h3 class="categoria-titulo" data-category="ALL">VER TODOS</h3>

                <h3 class="categoria-titulo" data-category="GASTONOMIA">GASTONOMÍA</h3>

                <h3 class="categoria-titulo" data-category="SALUD">SALUD</h3>

                <h3 class="categoria-titulo" data-category="ENTRETENIMIENTO">ENTRETENIMIENTO</h3>

                <h3 class="categoria-titulo" data-category="COMERCIO">COMERCIO</h3>
                    
                </div>

                
                </div>
                <div class="cupon-maincontainer">
                <?php
                $cupones = [];
                $cuponesJsonPath = __DIR__ . '/data/cupones.json';
                if (file_exists($cuponesJsonPath)) {
                    $jsonContent = file_get_contents($cuponesJsonPath);
                    $cupones = json_decode($jsonContent, true);
                    if (!is_array($cupones)) {
                        $cupones = [];
                    }
                }
                if (!empty($cupones)) {
                    shuffle($cupones);
                    foreach ($cupones as $coupon) {
                        $logo = htmlspecialchars($coupon['logo'] ?? '', ENT_QUOTES, 'UTF-8');
                        $description = htmlspecialchars($coupon['description'] ?? '', ENT_QUOTES, 'UTF-8');
                        $bigpromo = htmlspecialchars($coupon['bigpromo'] ?? '', ENT_QUOTES, 'UTF-8');
                        $txt = htmlspecialchars($coupon['txt'] ?? '', ENT_QUOTES, 'UTF-8');
                        $disclaimer = htmlspecialchars($coupon['disclaimer'] ?? '', ENT_QUOTES, 'UTF-8');
                        $img = htmlspecialchars($coupon['img'] ?? '', ENT_QUOTES, 'UTF-8');
                        $txt2 = htmlspecialchars($coupon['txt2'] ?? '', ENT_QUOTES, 'UTF-8');
                        $txtD = htmlspecialchars($coupon['txtD'] ?? '', ENT_QUOTES, 'UTF-8');
                        $txt2D = htmlspecialchars($coupon['txt2D'] ?? '', ENT_QUOTES, 'UTF-8');
                        $bigpromoD = htmlspecialchars($coupon['bigpromoD'] ?? '', ENT_QUOTES, 'UTF-8');
                        $categorie = htmlspecialchars($coupon['categorie'] ?? '', ENT_QUOTES, 'UTF-8');
                        ?>

                <div class="cupon-container <?php echo $categorie; ?>" >
                    <div class="cupon-ineercontainertxt img-bk" style="background-image: url('<?php echo $img; ?>');">
                        <?php
                        $logoWidth = (isset($coupon['name']) && ($coupon['name'] == 'bedoya' || $coupon['name'] == 'patas')) ? '25%' : '50%';
                        ?>
                        <img src="<?php echo $logo; ?>" alt="" style="width: <?php echo $logoWidth; ?>;">
                   

                        <h3 class="description-txt"><?php echo $description; ?></h3>
                    </div>
                    <div class="cupon-ineercontainer info <?php echo $coupon['type']; ?>">
                        <?php if ($coupon['type'] == 'single') { ?>
                        <h3 class="bigpromo-txt"><?php echo $bigpromo; ?></h3>
                        <h3 class="txt-txt"><?php echo $txt; ?></h3>
                        <h3 class="txt-txt"><?php echo $txt2; ?></h3>
                        <h3 class="disclaimer-txt"><?php echo $disclaimer; ?></h3>
                        <?php } else if ($coupon['type'] == 'double') { ?>
                        <h3 class="bigpromo-txt-double"><?php echo $bigpromo; ?></h3>
                        <h3 class="txt-txt-double"><?php echo $txt; ?></h3>
                        <h3 class="txt-txt-double"><?php echo $txt2; ?></h3>

                        <h3 class="bigpromo-txt-double"><?php echo $bigpromoD; ?></h3>
                        <h3 class="txt-txt-double"><?php echo $txtD; ?></h3>
                        <h3 class="txt-txt-double"><?php echo $txt2D; ?></h3>
                        <h3 class="disclaimer-txt"><?php echo $disclaimer; ?></h3>
                        <?php } ?>
                    </div>


                </div>

                <?php
                    }
                }
                ?>

        </div></div>
</div>










        </div>

        <?php include 'Footer.php'; ?>



        <script defer type="text/javascript" src="staticassets.azureedge.net/main/scripts/vendorsa4fc.js?refresh=3">
        </script>
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
            js.src = "../../connect.facebook.net/en_US/sdk.js";
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

            const categoryButtons = document.querySelectorAll('.categoria-titulo[data-category]');
            const coupons = document.querySelectorAll('.cupon-container');

            const applyFilter = (filter) => {
                coupons.forEach((coupon) => {
                    if (filter === 'ALL' || coupon.classList.contains(filter)) {
                        coupon.style.display = '';
                    } else {
                        coupon.style.display = 'none';
                    }
                });
            };

            categoryButtons.forEach((button) => {
                button.addEventListener('click', () => {
                    categoryButtons.forEach((btn) => btn.classList.remove('active'));
                    button.classList.add('active');
                    applyFilter(button.dataset.category || 'ALL');
                });
            });

            if (categoryButtons.length) {
                const defaultButton = Array.from(categoryButtons).find((btn) => btn.dataset.category === 'ALL') || categoryButtons[0];
                defaultButton.classList.add('active');
                applyFilter(defaultButton.dataset.category || 'ALL');
            }



        }, false);


        function mobileNotification() {
            // $.cookie("mobile_apps", "1", { expires: 0.21 });


            var date = new Date();
            date.setTime(date.getTime() + (1 * 24 * 60 * 60 * 1000));
            var expires = "; expires=" + date.toGMTString();
            document.cookie = "mobile_apps" + "=" + 1 + expires + "; path=/";

            var mobileBar = document.getElementById("mobile_app_bar");
            $("#site-collapse-menu").css('margin-top', '50px');
            mobileBar.remove();
        }
        </script>



        </body>

        </html>