<?php 
include 'script/header.php'; 
?>
<!------------------------------------SECCION DEL VIDEO CONTENEDOR (PORTADA)-------------------------------------------------->

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/categorias.css" type="text/css"> <!-- Incluir el archivo CSS específico solo aquí -->
</head>

<!-- content begin -->
<div id="content" class="no-bottom no-top">

            <section class="full-height dark no-padding dark" data-stellar-background-ratio=".2">
                <div class="de-video-container">
                    <div class="de-video-content">
                        <div class="text-center text-intro">
                            
                            <div class="spacer-single"></div>
                            <div class="text-slider border-deco">
                                <div class="text-item"> <span class="id-color"></span></div>
                                <div class="text-item"> <span class="id-color"></span></div>
                              
                               
                            </div>
                            <div class="spacer-single"></div>
                            <a href="#section-denuncias" class="btn btn-border btn-big" style="font-family: Averta !important;">IECR</a>
                            <div class="spacer-single"></div>
                            <a href="unidades_transparencia.php" class="btn btn-border btn-big" style="font-family: Averta !important;">REGRESAR</a>
                        </div>
                    </div>

                    <!-- load your video here -->
                
                    <img class="imagen-intro-mobil-dc" src="images/portadas/web-portada.png" alt="WebPortada" />
                    
                </div>

            </section>

            <!----------------------------ESPACIADO ENTRE SECCIONES--------------------------------->
            <div class="spacing-sections-second"></div>
            <!-- CLOSE -->

            <div id="section-denuncias">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h1 class="titulo-primario">
                                <span>ÍNDICE DE EXPEDIENTES CLASIFICA&shy;DOS
                                   <span style="color: #c5a47e;">COMO RESERVADOS</span> 
                                </span>
                            </h1>
                            <span class="small-border"></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- section begin -->
            <div id="section-dgsepp">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h1 class="titulo-primario">
                                <a style="text-decoration: none;" href="" onclick="restaurarEstadoInicial()">
                                    <span>
                                        FR_29
                                   </span>
                                </a>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>


            <script>
                function restaurarEstadoInicial() {
                    // Oculta los elementos 'titulo2022' y 'titulo2023' y muestra 'normal'
                    document.getElementById("titulo2022").style.display = "none";
                    document.getElementById("titulo2023").style.display = "none";
                    document.getElementById("datos2022").style.display = "none";
                    document.getElementById("datos2023").style.display = "none";
                }
            </script>

            <!----------------------------ESPACIADO ENTRE SECCIONES--------------------------------->
            <div class="spacing-sections-second"></div>
            <!-- CLOSE -->

            <div id="titulo2022">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h1 class="titulo-primario">
                                <span style="color: #c5a47e;">/2022</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div id="titulo2023">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h1 class="titulo-primario">
                                <span style="color: #c5a47e;">/2023</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

            <!----------------------------ESPACIADO ENTRE SECCIONES--------------------------------->
            <div class="spacing-sections-second"></div>
            <!-- CLOSE -->

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h5>
                            Oprima cualquier año para mostrar los documentos correspondientes
                        </h5>
                    </div>
                </div>
            </div>
            
            <!----------------------------ESPACIADO ENTRE SECCIONES--------------------------------->
            <div class="spacing-sections-second"></div>
            <!-- CLOSE -->

            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                        <button type="button" class="btn btn-primary w-100" onclick="mostrarUno()">2022</button>
                    </div>
                    <div class="col-12 col-sm-6">
                        <button type="button" class="btn btn-primary w-100" onclick="mostrarDos()">2023</button>
                    </div>
                </div>
            </div>

            <!----------------------------ESPACIADO ENTRE SECCIONES--------------------------------->
            <div class="spacing-sections-second"></div>
            <!-- CLOSE -->

            <div id="datos2022" class="container">
                <div class="row">
                    <div class="col-12">
                        <h5>
                            Documentos del Año 2022
                        </h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 columna">
                        <div class="categoria" style="background-image: url('images/file.png');">
                            <div class="txt">
                                <h1><b>2021 II Cotaipec ISSIEP 01 INFOMEX</b></h1>
                                <!--<p>How design is implemented on the web.</p>-->
                            </div>
                            <a href="inforecabada/Transparencia/fr_29/2022/2021-II-Cotaipec-ISSIEP-01-INFOMEX.pdf" target="_blank">VER</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 columna">
                        <div class="categoria" style="background-image: url('images/file.png');">
                            <div class="txt">
                                <h1><b>2021 II Cotaipec ISSIEP 01 SISAI</b></h1>
                                <!--<p>How design is implemented on the web.</p>-->
                            </div>
                            <a href="inforecabada/Transparencia/fr_29/2022/2021-II-Cotaipec-ISSIEP-01-SISAI.pdf" target="_blank">VER</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 columna">
                        <div class="categoria" style="background-image: url('images/file.png');">
                            <div class="txt">
                                <h1><b>2021 II Cotaipec ISSIEP 02</b></h1>
                                <!--<p>How design is implemented on the web.</p>-->
                            </div>
                            <a href="inforecabada/Transparencia/fr_29/2022/2021-II-Cotaipec-ISSIEP-02.pdf" target="_blank">VER</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 columna">
                        <div class="categoria" style="background-image: url('images/file.png');">
                            <div class="txt">
                                <h1><b>IAPDP 2021</b></h1>
                                <!--<p>How design is implemented on the web.</p>-->
                            </div>
                            <a href="inforecabada/Transparencia/fr_29/2022/IAPDP_2021.pdf" target="_blank">VER</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 columna">
                        <div class="categoria" style="background-image: url('images/file.png');">
                            <div class="txt">
                                <h1><b>ICT 2021</b></h1>
                                <!--<p>How design is implemented on the web.</p>-->
                            </div>
                            <a href="inforecabada/Transparencia/fr_29/2022/ICT_2021.pdf" target="_blank">VER</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 columna">
                        <div class="categoria" style="background-image: url('images/file.png');">
                            <div class="txt">
                                <h1><b>IECR 2022 1er semestre</b></h1>
                                <!--<p>How design is implemented on the web.</p>-->
                            </div>
                            <a href="inforecabada/Transparencia/fr_29/2022/IECR2022_1er_semestre.pdf" target="_blank">VER</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 columna">
                        <div class="categoria" style="background-image: url('images/file.png');">
                            <div class="txt">
                                <h1><b>IECR 2022 1er semestre</b></h1>
                                <!--<p>How design is implemented on the web.</p>-->
                            </div>
                            <a href="inforecabada/Transparencia/fr_29/2022/IECR2022_1er_semestre.xlsx" target="_blank">VER</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 columna">
                        <div class="categoria" style="background-image: url('images/file.png');">
                            <div class="txt">
                                <h1><b>IECR 2do semestre 2021</b></h1>
                                <!--<p>How design is implemented on the web.</p>-->
                            </div>
                            <a href="inforecabada/Transparencia/fr_29/2022/IECR_2do_semestre_2021.pdf" target="_blank">VER</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 columna">
                        <div class="categoria" style="background-image: url('images/file.png');">
                            <div class="txt">
                                <h1><b>Formato Mecanismos</b></h1>
                                <!--<p>How design is implemented on the web.</p>-->
                            </div>
                            <a href="inforecabada/Transparencia/fr_29/2022/formato_mecanismos.pdf" target="_blank">VER</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="datos2023" class="container">
                <div class="row">
                    <div class="col-12">
                        <h5>
                            Documentos del Año 2023
                        </h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 columna">
                        <div class="categoria" style="background-image: url('images/file.png');">
                            <div class="txt">
                                <h1><b>Cuadro detallado solicitudes de información 1er semestre</b></h1>
                                <!--<p>How design is implemented on the web.</p>-->
                            </div>
                            <a href="inforecabada/Transparencia/fr_29/2023/CUADRO-DETALLADO_SOLICITUDES-DE-INFORMACION_PRIMER-SEMESTRE_ 2023.pdf" target="_blank">VER</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 columna">
                        <div class="categoria" style="background-image: url('images/file.png');">
                            <div class="txt">
                                <h1><b>Cuadro detallado solicitudes de información 2022</b></h1>
                                <!--<p>How design is implemented on the web.</p>-->
                            </div>
                            <a href="inforecabada/Transparencia/fr_29/2023/CUADRO-DETALLADO_SOLICITUDES-DE-INFORMACIÓN_2022.pdf" target="_blank">VER</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 columna">
                        <div class="categoria" style="background-image: url('images/file.png');">
                            <div class="txt">
                                <h1><b>Cuadro resumen de solicitudes de información 2022</b></h1>
                                <!--<p>How design is implemented on the web.</p>-->
                            </div>
                            <a href="inforecabada/Transparencia/fr_29/2023/CUADRO-RESUMEN-DE-SOLICITUDES-DE-INFORMACION_2022.pdf" target="_blank">VER</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 columna">
                        <div class="categoria" style="background-image: url('images/file.png');">
                            <div class="txt">
                                <h1><b>Cuadro resumen solicitudes de información 1er semestre</b></h1>
                                <!--<p>How design is implemented on the web.</p>-->
                            </div>
                            <a href="inforecabada/Transparencia/fr_29/2023/CUADRO-RESUMEN_SOLICITUDES DE INFORMACION_PRIMER SEMESTRE_2023.pdf" target="_blank">VER</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 columna">
                        <div class="categoria" style="background-image: url('images/file.png');">
                            <div class="txt">
                                <h1><b>Formatos Derechos Arco P2 SEMAIG 2022</b></h1>
                                <!--<p>How design is implemented on the web.</p>-->
                            </div>
                            <a href="inforecabada/Transparencia/fr_29/2023/Formatos Derechos ARCO-P_2_SEMAIG_2022.pdf" target="_blank">VER</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 columna">
                        <div class="categoria" style="background-image: url('images/file.png');">
                            <div class="txt">
                                <h1><b>IECR 2023 1</b></h1>
                                <!--<p>How design is implemented on the web.</p>-->
                            </div>
                            <a href="inforecabada/Transparencia/fr_29/2023/IECR2023_1.pdf" target="_blank">VER</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 columna">
                        <div class="categoria" style="background-image: url('images/file.png');">
                            <div class="txt">
                                <h1><b>IECR 2023 2</b></h1>
                                <!--<p>How design is implemented on the web.</p>-->
                            </div>
                            <a href="inforecabada/Transparencia/fr_29/2023/IECR2023_2.pdf" target="_blank">VER</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 columna">
                        <div class="categoria" style="background-image: url('images/file.png');">
                            <div class="txt">
                                <h1><b>IECR 2023 3</b></h1>
                                <!--<p>How design is implemented on the web.</p>-->
                            </div>
                            <a href="inforecabada/Transparencia/fr_29/2023/IECR2023_3.pdf" target="_blank">VER</a>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                function mostrarUno() {
                    document.getElementById("datos2022").style.display = "block"; // Muestra el contenedor uno
                    document.getElementById("datos2023").style.display = "none";  // Oculta el contenedor dos
                    document.getElementById("titulo2022").style.display = "block"; // Muestra el título uno
                    document.getElementById("titulo2023").style.display = "none";  // Oculta el título dos
                }
        
                function mostrarDos() {
                    document.getElementById("datos2022").style.display = "none";  // Oculta el contenedor uno
                    document.getElementById("datos2023").style.display = "block"; // Muestra el contenedor dos
                    document.getElementById("titulo2022").style.display = "none";  // Oculta el título uno
                    document.getElementById("titulo2023").style.display = "block"; // Muestra el título dos
                }
            </script>


            <!----------------------------ESPACIADO ENTRE SECCIONES--------------------------------->
            <div class="spacing-sections-tree"></div>
            <!-- CLOSE -->

<?php 
include 'script/enlaces.php'; 
?>

<?php 
include 'script/footer.php'; 
?>
     