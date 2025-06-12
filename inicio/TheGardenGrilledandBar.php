<?php include 'Menu.php';?>
    


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
      
      <div class="block-container block-container--hero">
        <div class="block-abs">
            <div class="block-top hidden-xs">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-22 col-sm-offset-1">
                            <ul class="breadcrumb breadcrumb--reverse sg-mt-20px">
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <span class="arrow"></span>
                                    The Garden Grilled and Bar
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="block col-xs-24" data-block>
            <div class="block-bottom sg-mb-90px sg-mb-20px-sm">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-11 col-sm-offset-1">
                    <p class="text-uppercase text-white sg-mb-20px">Stay</p>
                    <h1 class="view-panel__heading text-white sg-mb-20px">Perfecta Estadía con deliciosos sabores<h1>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-11 col-sm-offset-1">
                      <div class="solid-line hidden-xs sg-mb-20px"></div>
                      <p class="text-white hidden-xs">
                        ¡Disfrute de su estadía en el Hotel más nuevo y bioseguro de la ciudad!
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="block-gradient"></div>
              <div class="block-visuals">
                <figure class="block-cover-img">
                  <div data-bgset="https://demo.cityplacecr.com/images/Categorias/hotel.webp"
class="bg-image lazyload" data-alt="Hilton Garden Inn Santa Ana City Place"></div>
          </figure>
              </div>
            </div>
            
          </div>
          <div class="block-padding-hero" data-xs="1" data-sm="1" data-md="1" data-lg="1"></div>
        </div>
        
        
   
                        
        <div class="block-container">
    <div class="block-abs">
                    <div class="block block-border-right col-md-12 col-sm-12 block-white" data-block>
                <div class="block-bottom sg-mb-40px blockStayText">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-22 col-sm-offset-1 text-white">
                                <div class="visible-xs">
                                    <h1 class="sg-mb-10px">The Garden Grill</h1>
                                </div>
                                <div class="hidden-xs">
                                    <h2 class="sg-mb-10px">The Garden Grill</h2>
                                 
                                </div>
                                <a href="promociones.php" class="stayExploreMoreCTA btn btn-default-transparent btn-block-sm text-uppercase margin-right-xs-px">
                                    MÁS INFORMACIÓN

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-gradient"></div>
                <div class="block-visuals">
                    <figure class="block-cover-img">
                                                    <div data-bgset="https://demo.cityplacecr.com/images/Restaurantes/hiltonrestaurantes/5.webp"
                                 class="bg-image lazyload" data-alt="Hilton Garden Inn Santa Ana City Place"></div>
                                            </figure>
                </div>
            </div>

            <div class="block block-border-left col-md-12 col-sm-12 block-white" data-block>
                <div class="block-bottom sg-mb-40px blockStayText">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-22 col-sm-offset-1 text-white">
                                <div class="visible-xs">
                                    <h1 class="sg-mb-10px">The Garden Bar</h1>
                                </div>
                                <div class="hidden-xs">
                                    <h2 class="sg-mb-10px">The Garden Bar</h2>
                                   
                                </div>
                                <a href="promociones.php"  class="stayExploreMoreCTA btn btn-default-transparent btn-block-sm text-uppercase margin-right-xs-px">
                                    MÁS INFORMACIÓN
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-gradient"></div>
                <div class="block-visuals">
                    <figure class="block-cover-img">
                                                    <div data-bgset="https://demo.cityplacecr.com/images/Restaurantes/hiltonrestaurantes/4.webp"
                                 class="bg-image lazyload" data-alt="Hilton Garden Inn Santa Ana City Place"></div>
                                            </figure>
                </div>
            </div>
            </div>
        <div class="block-padding" data-block-height data-xs="2" data-sm="1" data-md="1" data-lg="1"></div>
    </div>
                
       
        
        
                
           
     
        
    
        </div>
        
      </div>
    </div>
  </div>
  
  <?php include 'Footer.php';?>

     



    <script defer  type="text/javascript" src="staticassets.azureedge.net/main/scripts/vendorsa4fc.js?refresh=3"></script>
<script defer src="staticassets.azureedge.net/main/scripts/main9477.js?refresh=122042022" ></script>
   
<script defer src="staticassets.azureedge.net/public-scripts/locale/ena016.js?refresh=22042022"></script>

<script type="text/javascript">
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '',
            xfbml      : true,
            version    : ''
        });
    };
    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    // current footer
	var footer_element = document.getElementById("btnShowGroup");
	if(typeof(footer_element) != 'undefined' && footer_element != null){
		document.getElementById("btnShowGroup").addEventListener("click", displayMenu);
		function displayMenu() {
			var footerContainer = document.getElementById("footerContainer");
			if (footerContainer.classList.contains('active')){
				footerContainer.className ="";
			} else {
				footerContainer.className ="active";
			}
			var scrollingElement = (document.scrollingElement || document.body);
			scrollingElement.scrollTop = scrollingElement.scrollHeight;
		}
		document.getElementById("btnCloseGroup").addEventListener("click", hideMenu);
		function hideMenu() {
			var footerContainer = document.getElementById("footerContainer");
			footerContainer.className ="";
		}
		document.getElementById("footerOverlay").addEventListener("click", hideMenu);
	}
	document.addEventListener('DOMContentLoaded', function(){
		
			
		var myEle = document.getElementById("mobile_app_bar");
		if(myEle){
			$("#site-collapse-menu").css('margin-top','120px');
		}  
		   var el = document.getElementById('close_app_notification');
			if(el){
				el.addEventListener('click', mobileNotification, false);
			}
			var elAC = document.getElementById('accept_cookie');
     if(elAC){
		var checkCookiePolicy = getCookie('CookiePolicy');
		console.log("checkCookiePolicy-"+checkCookiePolicy);
		if(checkCookiePolicy == 1){
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