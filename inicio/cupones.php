<?php include 'Menu.php'; ?>



<style>
.fixed-size-container {
    max-width: 1000px;
    margin: 40px auto 0 auto;
    background-color: #FFF;
    /* padding: 30px 0; */
    display: flex;
    align-items: center;
    border: 1px solid black;


}

.fixed-size1 {
    width: 500px;
    height: 250px;
    background-color: green;
    color: #FFF;
    line-height: 50px;
    text-align: center;
    font-weight: bold;
    font-size: 12px;
    background-color: white;
    color: black;

}

.fixed-size1 .text {

    text-align: center;
    margin-top: 14%;


}

.info {
    font-family: 'Montserrat', sans-serif;
    padding: 13px 0 0 30px;
    text-align: center;


}

.span {
    font-family: 'Montserrat', sans-serif;
    text-align: center;
    font-size: 85px;



}


.fixed-size1 .text p {
    font-family: 'Montserrat', sans-serif;
    text-align: center;
    font-weight: 300;

}


.fixed-size2 {
    width: 500px;
    height: 250px;
    background-color: green;
    color: #FFF;
    line-height: 20px;
    text-align: center;
    font-weight: bold;
    font-size: 12px;
    background-color: black;
    color: white;

}

.fixed-size2 .text {
    text-align: left;
    padding: 30px 0 0 20px;

}

.fixed-size2 .text h3 {
    text-align: left;
    padding: 10px 0 0 0;
    line-height: 30px;
    font-size: 20px;

}

.fixed-size2 .text p {
    text-align: left;
    padding: 40px 0 0 0;
    font-weight: 300;
    line-height: 20px;
    font-size: 11px;

}

.fixed-size2 .text h4 {
    margin-top: -1%;
    margin-left: 20%;
    font-family: 'Montserrat', sans-serif;
    font-size: 15px;
}

.prin {
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    font-size: 36px;
    margin-left: 36%;
}

.sec {
    font-family: 'Montserrat', sans-serif;
    font-size: 29px;
    margin-left: 36%;
    margin-top: -1.5%;

}

.important {
    font-weight: 300;
    text-align: center;
    line-height: 20px;
    font-family: 'Montserrat', sans-serif;
    background-color: #000;
    color: #FFF;
    margin-left: 5%;
    margin-right: 2%;
    font-size: 20px;
}

.double {
    font-size: 60px;
    font-family: 'Montserrat', sans-serif;
    text-align: center;

}

.doubletxt {
    font-family: 'Montserrat', sans-serif;
    margin-top: 1%;
    font-size: 15px;
}

.doubletxt2 {
    font-family: 'Montserrat', sans-serif;
    margin-top: 1%;
    font-size: 15px;
}

@media (max-width: 768px) {
    .prin {
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        font-size: 36px;
        margin-left: 16%;
    }

    .sec {
        font-family: 'Montserrat', sans-serif;
        font-size: 29px;
        margin-left: 16%;
        margin-top: -1.5%;
    }

    .info {
        padding: 6px 0 0 0px;
        text-align: center;
        font-size: 20px;
    }

    .important {
        font-weight: 300;
        text-align: center;
        line-height: 20px;
        font-family: 'Montserrat', sans-serif;
        background-color: #000;
        color: #FFF;
        margin-left: 5%;
        margin-right: 2%;
        font-size: 12px;
    }

    .double {
        font-size: 55px;
        font-family: 'Montserrat', sans-serif;
        text-align: center;

    }

    .doubletxt {
        font-family: 'Montserrat', sans-serif;
        margin-top: 1%;
        font-size: 12px;
    }

    .doubletxt2 {
        font-family: 'Montserrat', sans-serif;
        margin-top: 1%;
        font-size: 12px;
    }
}

@media (max-width: 700px) {
    .prin {
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        font-size: 36px;
        margin-top: 16%;
        margin-left: 16%;
    }

    .sec {
        font-family: 'Montserrat', sans-serif;
        font-size: 29px;
        margin-left: 16%;
        margin-top: -1.5%;
    }

}

@media (max-width: 320px) {
    .prin {
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
        font-size: 20px;
        margin-top: 16%;
        margin-left: 5%;
    }

    .sec {
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
        margin-left: 7%;
        margin-top: -3.5%;
    }

    .info {
        padding: 0px 0 0 0px;
        text-align: center;
        font-size: 15px;
    }

    .span {
        font-family: 'Montserrat', sans-serif;
        text-align: center;
        font-size: 60px;
    }

    .important {
        font-weight: 300;
        text-align: center;
        line-height: 20px;
        font-family: 'Montserrat', sans-serif;
        background-color: #000;
        color: #FFF;
        margin-left: 5%;
        margin-right: 2%;
        font-size: 7px;
    }

    .double {
        font-size: 40px;
        font-family: 'Montserrat', sans-serif;
        text-align: center;

    }

    .doubletxt {
        font-family: 'Montserrat', sans-serif;
        margin-top: -3%;
        font-size: 12px;
    }

    .doubletxt2 {
        font-family: 'Montserrat', sans-serif;
        margin-top: -17%;
        font-size: 12px;
    }

    .fixed-size2 .text h4 {
        margin-top: -1%;
        margin-left: -3%;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
    }


}
</style>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;800&display=swap" rel="stylesheet">

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
                <h1 class="prin">BENEFICIOS EXCLUSIVOS</h1>
                <h1 class="sec">Para colaboradores de City Place</h1>

                <!--THE YARD-->

                <div class="fixed-size-container">
                    <div class="fixed-size2">
                        <div class="text">
                            <img src="images/Restaurantes/theyard/logoblanco.png" alt="" width="55%"
                                style="margin-top: 5%; margin-left: 17%;">
                            <br><br><br><br>
                            <h4 style="margin-left:30%">¡Cocktails to go!</h4>
                            <!-- <p>Válido hasta el 30 septiembre,2022.No aplican con otras promociones. <br> Válido una única vez.No es reeembolsable en efectivo ni compra inferiores</p> -->
                        </div>
                    </div>
                    <div class="fixed-size1">
                        <div class="text">


                            <!-- <h3>Cupón válido por </h3> -->
                            <span class="span">30%</span>

                            <h3 class="info">Descuento en refill de yardas al traer el envase</h3>
                            <h4 class="important">*No aplica con otras promociones o paquetes.</h4>

                        </div>

                    </div>



                </div>



                <!--CALLEJON MEXICANO-->
                <div class="fixed-size-container">
                    <div class="fixed-size2">
                        <div class="text">
                            <img src="images/cuponera/callejonmexicano-logo.png" alt="" width="55%"
                                style="margin-top: 5%; margin-left: 17%;">
                            <br><br>
                            <h4 style="margin-left:30%">Taquería Mexicana</h4>
                            <!-- <p>Válido hasta el 30 septiembre,2022.No aplican con otras promociones. <br> Válido una única vez.No es reeembolsable en efectivo ni compra inferiores</p> -->
                        </div>
                    </div>
                    <div class="fixed-size1">
                        <div class="text">


                            <!-- <h3>Cupón válido por </h3> -->
                            <span class="span">10%</span>

                            <h3 class="info">Descuento sobre el menú regular</h3>
                            <h4 class="important">*No aplica con otras promociones o paquetes.</h4>

                        </div>

                    </div>



                </div>

                <!--Go Fish-->
                <div class="fixed-size-container">
                    <div class="fixed-size2">
                        <div class="text">
                            <img src="images/cuponera/LOGO-GO FISH BLANCO.png" alt="" width="55%"
                                style="margin-top: 5%; margin-left: 17%;">
                            <br><br>
                            <h4>Una experiencia única de mariscos</h4>
                            <!-- <p>Válido hasta el 30 septiembre,2022.No aplican con otras promociones. <br> Válido una única vez.No es reeembolsable en efectivo ni compra inferiores</p> -->
                        </div>
                    </div>
                    <div class="fixed-size1">
                        <div class="text">


                            <!-- <h3>Cupón válido por </h3> -->
                            <span class="span">10%</span>

                            <h3 class="info">Descuento sobre el menú regular</h3>
                            <h4 class="important">*No aplica con otras promociones.</h4>

                        </div>

                    </div>



                </div>

           

               

                <!--STUDIO CINEMA-->
                <div class="fixed-size-container">
                    <div class="fixed-size2">
                        <div class="text">
                            <img src="images/cuponera/STUDIOCINEMAS-logo.png" alt="" width="55%"
                                style="margin-top: 5%; margin-left: 17%;">
                            <br><br>
                            <h4 style="margin-left :20%;">Tu cine favorito en Santa Ana</h4>
                        </div>
                    </div>
                    <div class="fixed-size1">
                        <div class="text" style="margin-top: 5%;">

                            <!-- <h3>Cupón válido por </h3> -->
                            <span class="span">2X1</span>

                            <h3 class="info">En boletos. Sin límite de uso.</h3>
                            <h4 class="important">*No aplica los días miércoles. No aplica en películas de estreno
                                durante la primera semana.</h4>


                        </div>

                    </div>

                </div>

            


           

                <!--COSI-->
                <div class="fixed-size-container">
                    <div class="fixed-size2">
                        <div class="text">
                            <img src="images/cuponera/COSI-logo.png" alt="" width="55%"
                                style="margin-top: 5%; margin-left: 17%;">
                            <br><br>
                            <h4 style="margin-left :10%;">Cadena de restaurantes del segmento Fast-Casual.</h4>
                            <!-- <p>Válido hasta el 30 septiembre,2022.No aplican con otras promociones. <br> Válido una única vez.No es reeembolsable en efectivo ni compra inferiores</p> -->
                        </div>
                    </div>
                    <div class="fixed-size1">
                        <div class="text">


                            <!-- <h3>Cupón válido por </h3> -->
                            <span class="span">15%</span>

                            <h3 class="info">Descuento en todo el menú.</h3>

                        </div>

                    </div>

                </div>

                <!--506 FIT-->
                <div class="fixed-size-container">
                    <div class="fixed-size2">
                        <div class="text">
                            <img src="images/cuponera/506FIT-logo.png" alt="" width="55%"
                                style="margin-top: 5%; margin-left: 17%;">
                            <br><br>
                            <h4>Gimnasio, acondicionamiento deportivo, entrenamiento personal y clases grupales</h4>
                            <!-- <p>Válido hasta el 30 septiembre,2022.No aplican con otras promociones. <br> Válido una única vez.No es reeembolsable en efectivo ni compra inferiores</p> -->
                        </div>
                    </div>
                    <div class="fixed-size1">
                        <div class="text" style="margin-top: 3%;">

                            <span class="double">$60</span>
                            <h3 class="doubletxt">Mensualidad</h3>
                            <span class="double">50%</span>
                            <h3 class="doubletxt">Matrícula</h3>


                            <h4 class="important">*No aplica con otras promociones.</h4>

                        </div>

                    </div>



                </div>

                <!--CENTRO DE NUTRICION LARISSA PAEZ-->
                <div class="fixed-size-container">
                    <div class="fixed-size2">
                        <div class="text">
                            <img src="images/cuponera/CNPlogonuevo.png" alt="" width="35%"
                                style="margin-top: 3%; margin-left: 30%;">
                            <br><br>
                            <h4>Consultas nutricionales y psicología.</h4>
                            <!-- <p>Válido hasta el 30 septiembre,2022.No aplican con otras promociones. <br> Válido una única vez.No es reeembolsable en efectivo ni compra inferiores</p> -->
                        </div>
                    </div>
                    <div class="fixed-size1">
                        <div class="text" style="margin-top: 4%;">


                            <!-- <h3>Cupón válido por </h3> -->
                            <span class="double">15%</span>
                            <h3 class="doubletxt2">Consulta Individual Nutrición o Psicología
                            </h3>
                            <span class="double">10%</span>
                            <h3 class="doubletxt2">Programas de 6 citas: Wellness, Básico de Nutrición, Básico de Psicología</h3>

                        </div>

                    </div>

                </div>

                <!--THE TREE HOUSE-->
                <div class="fixed-size-container">
                    <div class="fixed-size2">
                        <div class="text">
                            <img src="images/cuponera/THETREEHOUSE-logo.png" alt="" width="55%"
                                style="margin-top: 5%; margin-left: 17%;">
                            <br><br>
                            <h4 style="margin-left :10%;">Una nueva experiencia gastronómica en la ciudad.</h4>
                        </div>
                    </div>
                    <div class="fixed-size1">
                        <div class="text" style="margin-top: 1%;">



                            <span class="double">10%</span>
                            <h3 class="doubletxt2">Descuento en menú ejecutivo.</h3>
                            <span class="double">15%</span>
                            <h3 class="doubletxt2">Descuento en menú abierto</h3>

                            <h4 class="important">*No incluido bebidas alcohólicas.</h4>

                        </div>

                    </div>

                </div>


                <!--LABORATORIO SAN JOSE-->
                <div class="fixed-size-container">
                    <div class="fixed-size2">
                        <div class="text">
                            <img src="images/cuponera/LBS-logo.png" alt="" width="55%"
                                style="margin-top: 5%; margin-left: 17%;">
                            <br><br>
                            <h4>Servicios Médicos de Laboratorio.</h4>
                            <!-- <p>Válido hasta el 30 septiembre,2022.No aplican con otras promociones. <br> Válido una única vez.No es reeembolsable en efectivo ni compra inferiores</p> -->
                        </div>
                    </div>
                    <div class="fixed-size1">
                        <div class="text">


                            <!-- <h3>Cupón válido por </h3> -->
                            <span class="span">15%</span>

                            <h3 class="info">Descuento en pruebas de rutina.</h3>
                            <h4 class="important">*No incluye pruebas especiales que se referencia al extranjero. </h4>

                        </div>

                    </div>



                </div>

                <!--HILTON GARDEN INN-->
                <div class="fixed-size-container">
                    <div class="fixed-size2">
                        <div class="text">
                            <img src="images/cuponera/HILTON-logo.png" alt="" width="55%"
                                style="margin-top: 5%; margin-left: 17%;">
                            <br><br>
                            <h4>Hotel más nuevo de la ciudad.</h4>
                            <!-- <p>Válido hasta el 30 septiembre,2022.No aplican con otras promociones. <br> Válido una única vez.No es reeembolsable en efectivo ni compra inferiores</p> -->
                        </div>
                    </div>
                    <div class="fixed-size1">
                        <div class="text">


                            <!-- <h3>Cupón válido por </h3> -->
                            <span class="span">10%</span>

                            <h3 class="info">Descuento en carta regular de restaurante y bar</h3>
                            <h4 class="important">*No aplica con otras promociones.</h4>

                        </div>

                    </div>



                </div>

                <!--LEGACY-->
                <div class="fixed-size-container">
                    <div class="fixed-size2">
                        <div class="text">
                            <img src="images/cuponera/legacyLogo.png" alt="" width="55%"
                                style="margin-top: 5%; margin-left: 17%;">
                            <br><br>
                            <h4>EXCLUSIVE - FASHION - STYLE</h4>
                            <!-- <p>Válido hasta el 30 septiembre,2022.No aplican con otras promociones. <br> Válido una única vez.No es reeembolsable en efectivo ni compra inferiores</p> -->
                        </div>
                    </div>
                    <div class="fixed-size1">
                        <div class="text">


                            <!-- <h3>Cupón válido por </h3> -->
                            <span class="span">12%</span>

                            <h3 class="info">Descuento en toda la tienda</h3>
                            <h4 class="important">*No aplica en productos en descuento.</h4>

                        </div>

                    </div>



                </div>

                    <!--CHIA-->
                    <div class="fixed-size-container">
                    <div class="fixed-size2">
                        <div class="text">
                            <img src="images/cuponera/chiaLogo.png" alt="" width="55%"
                                style="margin-top: -2%; margin-left: 17%;">
                            <br><br>
                            <h4>More than sustainable swimwear</h4>
                            <!-- <p>Válido hasta el 30 septiembre,2022.No aplican con otras promociones. <br> Válido una única vez.No es reeembolsable en efectivo ni compra inferiores</p> -->
                        </div>
                    </div>
                    <div class="fixed-size1">
                        <div class="text">


                            <!-- <h3>Cupón válido por </h3> -->
                            <span class="span">15%</span>

                            <h3 class="info">Descuento en toda la tienda</h3>
                            <!-- <h4 class="important">*No aplica en productos en descuento.</h4> -->

                        </div>

                    </div>



                </div>

                
                    <!--GAIA-->
                    <div class="fixed-size-container">
                    <div class="fixed-size2">
                        <div class="text">
                            <img src="images/cuponera/gaiaLogo.png" alt="" width="55%"
                                style="margin-top: -2%; margin-left: 17%;">
                            <br><br>
                            <h4 style="margin-left: 35%;">Design Collector</h4>
                            <!-- <p>Válido hasta el 30 septiembre,2022.No aplican con otras promociones. <br> Válido una única vez.No es reeembolsable en efectivo ni compra inferiores</p> -->
                        </div>
                    </div>
                    <div class="fixed-size1">
                        <div class="text">


                            <!-- <h3>Cupón válido por </h3> -->
                            <span class="span">15%</span>

                            <h3 class="info">Descuento en toda la tienda</h3>
                            <h4 class="important">*Aplica restricciones.</h4>

                        </div>

                    </div>



                </div>

                                <!--Magic Steps-->
                                <div class="fixed-size-container">
                    <div class="fixed-size2">
                        <div class="text">
                            <img src="images/cuponera/logoMagicSteps.png" alt="" width="55%"
                                style="margin-top: -10%; margin-left: 17%;">
                            
                            <h4 style="margin-left: 35%; margin-top: -5%;">Parque infantil</h4>
                            <!-- <p>Válido hasta el 30 septiembre,2022.No aplican con otras promociones. <br> Válido una única vez.No es reeembolsable en efectivo ni compra inferiores</p> -->
                        </div>
                    </div>
                    <div class="fixed-size1">
                        <div class="text" style="margin-top: 3%;">

                            <span class="double">2x1</span>
                            <h3 class="doubletxt">Aplica solo para hijos</h3>
                            <span class="double">10%</span>
                            <h3 class="doubletxt">En celebraciones en paquete Basic</h3>


                            <h4 class="important">*No aplica con otras promociones.</h4>

                        </div>

                    </div>



                </div>

             

                   <!--Dental Gabriela Castro-->
                   <div class="fixed-size-container">
                    <div class="fixed-size2">
                        <div class="text">
                            <img src="images/cuponera/LogoDentalGabrielaCastro.png" alt="" width="55%"
                                style="margin-top: 10%; margin-left: 17%;">
                            <br><br>
                            <h4 style="margin-left: 35%;">Consultorio Dental</h4>
                            <!-- <p>Válido hasta el 30 septiembre,2022.No aplican con otras promociones. <br> Válido una única vez.No es reeembolsable en efectivo ni compra inferiores</p> -->
                        </div>
                    </div>
                    <div class="fixed-size1">
                        <div class="text" style="margin-top: 3%;">

                            <span class="double">10%</span>
                            <h3 class="doubletxt">Valoración dental, limpieza dental, ⁠valoración de Odontontopediaria, ⁠ferula dental bruxismo.</h3>
                            <span class="double">20%</span>
                            <h3 class="doubletxt">Blanqueamiento dental laser + Blanqueamiento dental en casa</h3>
                           



                        </div>

                    </div>



                </div>


                        <!--Dental Gabriela Castro-->
                        <div class="fixed-size-container">
                    <div class="fixed-size2">
                        <div class="text">
                            <img src="images/cuponera/LogoDentalGabrielaCastro.png" alt="" width="55%"
                                style="margin-top: 10%; margin-left: 17%;">
                            <br><br>
                            <h4 style="margin-left: 35%;">Consultorio Dental</h4>
                            <!-- <p>Válido hasta el 30 septiembre,2022.No aplican con otras promociones. <br> Válido una única vez.No es reeembolsable en efectivo ni compra inferiores</p> -->
                        </div>
                    </div>
                    <div class="fixed-size1">
                    <div class="text" style="margin-top: 9%;">

<span class="double">20%</span>
<h3 class="doubletxt">Descuento para usuarios activos de Fit 506 en blanqueamiento premium</h3>



<h4 class="important">*No aplica con otras promociones.</h4>

</div>

                    </div>



                </div>


                 <!--Vine por Vino-->
                 <div class="fixed-size-container">
                    <div class="fixed-size2">
                        <div class="text">
                            <img src="images/cuponera/vineporvinoLogo.png" alt="" width="55%"
                                style="margin-top: -8%; margin-left: 17%;">
                            <br><br>
                            <h4 style="margin-left: 15%;">Una nueva forma de conocer el mundo del vino.</h4>
                            <!-- <p>Válido hasta el 30 septiembre,2022.No aplican con otras promociones. <br> Válido una única vez.No es reeembolsable en efectivo ni compra inferiores</p> -->
                        </div>
                    </div>
                    <div class="fixed-size1">
                        <div class="text">


                            <!-- <h3>Cupón válido por </h3> -->
                            <span class="span">10%</span>

                            <h3 class="info">Descuento</h3>
                            <h4 class="important">*No aplica en productos en descuento.</h4>

                        </div>

                    </div>



                </div>

                
                 <!--Pizza Republica-->
                 <div class="fixed-size-container">
                    <div class="fixed-size2">
                        <div class="text">
                            <img src="images/cuponera/PR-logo.png" alt="" width="55%"
                                style="margin-top: 0%; margin-left: 17%;">
                            <br><br>
                            <h4 style="margin-left: 15%;">Restaurante de comida italiana</h4>
                            <!-- <p>Válido hasta el 30 septiembre,2022.No aplican con otras promociones. <br> Válido una única vez.No es reeembolsable en efectivo ni compra inferiores</p> -->
                        </div>
                    </div>
                    <div class="fixed-size1">
                        <div class="text">


                            <!-- <h3>Cupón válido por </h3> -->
                            <span class="span">10%</span>

                            <h3 class="info">Descuento en todo el menú</h3>
                            <h4 class="important">*No aplica en productos en descuento.</h4>

                        </div>

                    </div>



                </div>

                  <!--CENTRO DE NUTRICION LARISSA PAEZ-->
                  <div class="fixed-size-container">
                    <div class="fixed-size2">
                        <div class="text">
                            <img src="images/cuponera/CNPlogonuevo.png" alt="" width="35%"
                                style="margin-top: 3%; margin-left: 30%;">
                            <br><br>
                            <h4>Consultas nutricionales y psicología.</h4>
                            <!-- <p>Válido hasta el 30 septiembre,2022.No aplican con otras promociones. <br> Válido una única vez.No es reeembolsable en efectivo ni compra inferiores</p> -->
                        </div>
                    </div>
                    <div class="fixed-size1">
                    <div class="text" style="margin-top: 7%;">


<!-- <h3>Cupón válido por </h3> -->
<span class="span">30%</span>

<h3 class="info">Descuento en Wellness Journal</h3>
<h4 class="important">*Presentar este cupón. No aplica con otras promociones de Wellness Journal. Aplica únicamente en la sucursal de City Place.</h4>

</div>

                    </div>

                </div>

















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