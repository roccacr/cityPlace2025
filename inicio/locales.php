

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>City Place, Compras, Restaurantes, Qué hacer en Santa Ana,  Entretenimiento, Cafés, Hoteles, Días festivos, Eventos y ofertas</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon_io/favicon.ico" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  
  <!-- Animate css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Global site tag (gtag.js) - Google Ads: 10951964473 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10951964473"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-10951964473');
</script>


<style>

@media only screen and (max-width: 600px) {
  .text-centerr {
   font-size: 12%;
  }
}
.btn-main, .btn-solid-border, .btn-transparent, .btn-small {
    background: #000;
    color: #fff;
    display: inline-block;
    font-size: 11px;
    letter-spacing: 1px;
    padding: 2% 8%;
    text-transform: uppercase;
    font-weight: 200;
    border-radius: 0;

}

</style>
</head>

<body id="body">

<section class="signin-page account">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
          <a class="logo" href="index.php">
            <img src="images/LOGO CITYPLACE.png" alt="" width="100%">
          </a>
          <h2 class="text-centerr">TU Próximo local en City Place</h2>
          <h4 class="text-centerr">Envíanos tus datos para recibir más información sobre nuestras locales disponibles</h4>
          <form class="text-left clearfix" id="myForm">
            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Nombre " name="nombre"  id="nombre"  required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control"  placeholder="Email"  name="email"  id="email"  required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Teléfono" name="telefono"  id="telefono"  required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Nombre de la empresa" name="empresa"  id="empresa"  required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control"  placeholder="Espacio requerido(m2)" name="espacio"  id="espacio"  required>
            </div>
            
            <div class="text-center">
              <button type="submit" class="btn btn-main text-center"> Enviar</button>
            </div>
          </form>
          <br>
          <button type="submit" onclick="location.href='index.php';" class="btn btn-main text-center">Volver a Página Principal</button>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="plugins/syo-timer/build/jquery.syotimer.min.js"></script>

    <!-- slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="js/script.js"></script>
    


  </body>
  </html>

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


    const nombreInput = document.getElementById('nombre');
    const emailInput = document.getElementById('email');
    const telefonoInput = document.getElementById('telefono');
    const empresaInput = document.getElementById('empresa');
    const espacioInput = document.getElementById('espacio');


      e.preventDefault();
      $.ajax({
        url: "https://hooks.zapier.com/hooks/catch/5214118/bw4727f/",
        type: "post",
        data: $("#myForm").serialize(),
        success: function() {
          nombreInput.value = '';
        emailInput.value = '';
        telefonoInput.value = '';
        empresaInput.value = '';
        espacioInput.value = '';
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