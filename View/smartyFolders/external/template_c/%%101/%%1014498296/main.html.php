<?php /* Smarty version 2.6.1, created on 2014-05-31 15:51:08
         compiled from main.html */ ?>
﻿<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>

<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">

<title>Scripts S.A.S.</title>


<!-- Meta Tags-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 

<meta name="description" content="Scripts" /> 

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>   

<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<!-- Bootstrap -->
<link href="../css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style -->
<link href="../css/main.css" rel="stylesheet">

<!-- Scripts Style -->
<link href="../css/scripts.css" rel="stylesheet">

<!-- Supersized -->
<link href="../css/supersized.css" rel="stylesheet">
<link href="../css/supersized.shutter.css" rel="stylesheet">

<!-- FancyBox -->
<link href="../css/fancybox/jquery.fancybox.css" rel="stylesheet">

<!-- Font Icons -->
<link href="../css/fonts.css" rel="stylesheet">

<!-- Shortcodes -->
<link href="../css/shortcodes.css" rel="stylesheet">

<!-- Responsive -->
<link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="../css/responsive.css" rel="stylesheet">

<!-- Supersized -->
<link href="../css/supersized.css" rel="stylesheet">
<link href="../css/supersized.shutter.css" rel="stylesheet">

<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

<!-- Fav Icon -->
<link rel="shortcut icon" href="#">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">

<!-- Modernizr -->
<script src="../js/modernizr.js"></script>


<!-- Js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
<script src="../js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="../js/supersized.3.2.7.min.js"></script> <!-- Slider -->
<script src="../js/waypoints.js"></script> <!-- WayPoints -->
<script src="../js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
<script src="../js/jquery.isotope.js"></script> <!-- Isotope Filter -->
<script src="../js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
<script src="../js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
<script src="../js/jquery.tweet.js"></script> <!-- Tweet -->
<script src="../js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="../js/main.js"></script> <!-- Default JS -->
<script src="../View/js/main-control.js"></script>
<!-- End Js -->
 

</head>


<body>

<!-- This section is for Splash Screen -->
<div class="ole">
<section id="jSplash">
	<!--<div id="circle"></div>-->
	<img id="slidecaption" src="../img/load.gif">
</section>
</div>
<!-- End of Splash Screen -->

<!-- Homepage Slider -->
<div id="home-slider">	
    <div class="overlay"></div>

   <div class="slider-text">
        <!--<img id="slidecaption" src="../img/scripts.png"> -->
        <div id="slidecaption"></div>
    </div>  
	 
	<div class="control-nav">
        <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
        <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>
        <ul id="slide-list"></ul>
        
        <!-- <a id="nextsection" href="#work"><i class="font-icon-arrow-simple-down"></i></a>-->
        <a id="nextsection" href="#work"><img id="slidecaption" src="../img/start1.png"></a>
    </div>
 

</div>
<!-- End Homepage Slider -->

<!-- Header -->
<header>
    <div class="sticky-nav">
    	<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
        
      
        <div id="logo">
            <a id="goUp" href="#home-slider" title="Scripts">Scripts</a>	
	 	    
	 	    
        </div>
        
        
        <nav id="menu">
        	<ul id="menu-nav">
            	<li class="current"><a href="#home-slider"><?php echo $this->_tpl_vars['MainTitle01']; ?>
</a></li>
                <li><a href="#work"><?php echo $this->_tpl_vars['MainTitle02']; ?>
</a></li>
                <li><a href="#about"><?php echo $this->_tpl_vars['MainTitle03']; ?>
</a></li>
                <li><a href="#contact"><?php echo $this->_tpl_vars['MainTitle04']; ?>
</a></li>
                <li><a href="#" id="lenguage"><?php echo $this->_tpl_vars['MainTitle05']; ?>
</li>
		        
            </ul>
        </nav>

    </div>
    
</header>
<!-- End Header -->

<!-- Our Work Section -->
<div id="work" class="page1">
     
	<div class="container">
    	<!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title" ><?php echo $this->_tpl_vars['MainTitle02_02']; ?>
</h2>
                    <h3 class="title-description" ><?php echo $this->_tpl_vars['MainTitle02_01'];  echo $this->_tpl_vars['MainTitle02_02']; ?>
</h3>
                </div>
            </div>
        </div>
        <!-- End Title Page -->
        
        <!-- Portfolio Projects -->
        <div class="row">
        	<div class="span3">
            	<!-- Filter -->
                <nav id="options" class="work-nav">
                    <ul id="filters" class="option-set" data-option-key="filter">
                    	<li class="type-work"><?php echo $this->_tpl_vars['Detail02_01']; ?>
</li>
                        <li><a href="#filter" data-option-value="*" class="selected" style="font-size: large;"><?php echo $this->_tpl_vars['Detail02_01_01']; ?>
</a></li>
                        <li><a href="#filter" data-option-value=".development" style="font-size: large;"><?php echo $this->_tpl_vars['Detail02_01_02']; ?>
</a></li>
                        <li><a href="#filter" data-option-value=".visual" style="font-size: large;"><?php echo $this->_tpl_vars['Detail02_01_03']; ?>
</a></li>
                        <!--<li><a href="#filter" data-option-value=".video" style="font-size: large;"><?php echo $this->_tpl_vars['Detail02_01_04']; ?>
</a></li> -->
                    </ul>
                </nav>
                <!-- End Filter -->
            </div>
            
            <div class="span9">
            	<div class="row">
                	<section id="projects">
                    	<ul id="thumbs">
                            <!--Inicio Development-->
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 development">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap" data-fancybox-group="gallery" title="E-Comerce" href="#ModalECommerce"  data-toggle="modal">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="../img/work/thumbs/image-01.jpg" alt="Desarrollo E-Comerce">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 development">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap" data-fancybox-group="gallery" title="Sitios web con responsive design" href="http://scriptsteam.com/Plantillas" target="_blank">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="../img/work/thumbs/image-02.jpg" alt="Desarrollo de Sitios web con responsive design">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 development">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap" data-fancybox-group="gallery" title="Sistema de seguimiento empresarial" href="http://scriptsteam.com/eventum" target="_blank">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="../img/work/thumbs/image-03.jpg" alt="Implementacion Sistema de seguimiento empresarial">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 development">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap" data-fancybox-group="gallery" title="Tecnología Móvil" href="#ModalMobile" data-toggle="modal">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="../img/work/thumbs/image-04.jpg" alt="Desarrollo en Tecnología Móvil">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 development">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap" data-fancybox-group="gallery" title="POS (Punto de venta)" href="#ModalPOS" data-toggle="modal">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="../img/work/thumbs/image-05.jpg" alt="Implementacion POS (Punto de venta)">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 development">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap" data-fancybox-group="gallery" title="DataCenter" href="#ModalDataCenter" data-toggle="modal">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="../img/work/thumbs/image-06.jpg" alt="Implementacion DataCenter">
                            </li>
                        	<!-- End Item Project -->
                        	<!--Fin Development-->
                            
                            <!------------------------------------------------------------------------------------>
                            
                            <!--Inicio Visual-->
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 visual">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Toma de Fotografía" href="../img/work/full/fotografia.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="../img/work/thumbs/image-07.jpg" alt="Realizacion de Fotografía">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 visual">
                            	<!-- Fancybox Media - Gallery Enabled - Title - Link to Video -->
                            	<a class="hover-wrap fancybox-media" data-fancybox-group="video" title="Producción de Vídeos Institucionales" href="http://vimeo.com/51460511">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="../img/work/thumbs/image-08.jpg" alt="Realizacion de Vídeos institucionales">
                            </li>
                        	<!-- End Item Project -->
                        	
                        	<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 visual">
                            	<!-- Fancybox Media - Gallery Enabled - Title - Link to Video -->
                            	<a class="hover-wrap fancybox-media" data-fancybox-group="video" title="Producción de videoclips" href="https://www.youtube.com/watch?v=U8yAgRkW0F0">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="../img/work/thumbs/image-09.jpg" alt="Realizacion de videoclips">
                            </li>
                        	<!-- End Item Project -->
  
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 visual">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap" data-fancybox-group="gallery" title="Dise&ntilde;os" href="#ModalDesign"  data-toggle="modal">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="../img/work/thumbs/image-10.jpg" alt="Realizacion Logotipos y Carnés">
                            </li>
                        	<!-- End Item Project -->
                            
                            <!--Fin Visual-->
							
                        </ul>
                    </section>
                    
            	</div>
            </div>
        </div>
        <!-- End Portfolio Projects -->
    </div>
</div>
<!-- End Our Work Section -->

<!-- About Section -->
<div id="about" class="page2">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title"><?php echo $this->_tpl_vars['MainTitle03_03']; ?>
</h2>
                <h3 class="title-description"><?php echo $this->_tpl_vars['Detail03_01_01']; ?>
 &amp; <?php echo $this->_tpl_vars['Detail03_01_02']; ?>
</h3>
            </div>
        </div>
    </div>
    <!-- End Title Page -->
    
    <!-- People -->
    <div class="row">
    	
        <!-- Start Profile -->
    	<div class="span4 profile">
    		<h3 class="profile-name">&nbsp;</h3>
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <a href="#ModalScripts" data-toggle="modal">
	                    <span class="overlay-img"></span>
	                    <span class="overlay-text-thumb">Empresa</span>
                    </a>
                </div>
                <img src="../img/profile/profile-01.png" alt="Scripts">
            </div>
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
    	<div class="span4 profile">
    	    <h3 class="profile-name">Marcial Banguero</h3>
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <a href="#ModalImplementation" data-toggle="modal">
	                    <span class="overlay-img"></span>
	                    <span class="overlay-text-thumb">Implementacion</span>
                    </a>
                </div>
                <img src="../img/profile/profile-02.jpg" alt="Marcial Banguero">
            </div>
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
    	<div class="span4 profile">
    	    <h3 class="profile-name">Nicolas Salmanca</h3>
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <a href="#ModalCreativity" data-toggle="modal">
	                    <span class="overlay-img"></span>
	                    <span class="overlay-text-thumb">Creatividad</span>
                    </a>
                </div>
                <img src="../img/profile/profile-03.jpg" alt="Nicolas Salmanca">
            </div>  
        </div>
        <!-- End Profile -->
        
        <!-- Start Profile -->
    	<div class="span4 profile">
    	    <h3 class="profile-name">Ramiro Bedoya</h3>
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <a href="#ModalDevelopment" data-toggle="modal">
	                    <span class="overlay-img"></span>
	                    <span class="overlay-text-thumb">Desarrollo</span>
                    </a>
                </div>
                <img src="../img/profile/profile-04.jpg" alt="Ramiro Bedoya">
            </div>

        </div>
        <!-- End Profile -->
        
         <!-- Start Profile -->
    	<div class="span4 profile">
    	    <h3 class="profile-name">Samuel Espinoza</h3>
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <a href="#ModalManagement" data-toggle="modal">
	                    <span class="overlay-img"></span>
	                    <span class="overlay-text-thumb">Gerencia</span>
                    </a>
                </div>
                <img src="../img/profile/profile-05.jpg" alt="Samuel Espinoza">
            </div>
           
        </div>
        <!-- End Profile -->
        
         <!-- Start Profile -->
    	<div class="span4 profile">
    	    <h3 class="profile-name">Harvy Ordonez</h3>
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <a href="#ModalLeadership" data-toggle="modal">
	                    <span class="overlay-img"></span>
	                    <span class="overlay-text-thumb">Direccion</span>
                    </a>
                </div>
                <img src="../img/profile/profile-06.jpg" alt="Harvy Ordonez">
            </div> 
        </div>
        <!-- End Profile -->
        
    </div>
    <!-- End People -->
</div>
</div>
<!-- End About Section -->


<!-- Contact Section -->
<div id="contact" class="page3">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title"><?php echo $this->_tpl_vars['MainTitle04_04']; ?>
</h2>
                <h3 style="text-align: justify;"><?php echo $this->_tpl_vars['Detail04_01']; ?>
</h3>
            </div>
        </div>
    </div>
    <!-- End Title Page -->
    
    <!-- Contact Form -->
    <div class="row">
    	<div class="span9">
        
        	<form id="contact-form" class="contact-form" action="#">
            	<p class="contact-name">
            		<input id="contact_name" type="text" placeholder="Full Name" value="" name="name" />
                </p>
                <p class="contact-email">
                	<input id="contact_email" type="text" placeholder="Email Address" value="" name="email" style="font: bolder;" />
                </p>
                <p class="contact-message">
                	<textarea id="contact_message" placeholder="Your Message" name="message" rows="15" cols="40"></textarea>
                </p>
                <p class="contact-submit">
                	<a id="sendMail" class="submit" href="#">Send Your Email</a>
                </p>
                
                <div id="response">
                
                </div>
            </form>
    
        </div>
       
        <div class="span3">
        	<div class="contact-details">
        		<h3>Contact Details</h3>
        	 
                <ul>
                    <li><a href="https://emailmg.ipage.com/ox6/ox.html" target="_blank">info@scriptsteam.com</a></li>
                    <li>(312) 237-6027</li>
                    <li>
                        Scripts S.A.S.
                        <br>
                        Colombia. Cali (Valle)
                        <br>
                        Scripts
                    </li>
                </ul>
                
                
            </div>
        </div>
    </div>
    <!-- End Contact Form -->
</div>
</div>
<!-- End Contact Section -->

<!-- Twitter Feed -->
<!--  
<div id="twitter-feed" class="page4">
	<div class="container">
    	<div class="row">
            <div class="span12">
                <div class="follow">
                    <a href="https://twitter.com/Bluxart" title="Follow Me on Twitter" target="_blank"><i class="font-icon-social-twitter"></i></a>
                </div>
                    
                <div id="ticker" class="query"> 
                </div>
            </div>
        </div>
    </div>
</div>
-->
<!-- End Twitter Feed -->

<!-- Socialize -->
<!--  
<div id="social-area" class="page3">
	<div class="container">
    	<div class="row">
            <div class="span12">
                <nav id="social">
                    <ul>
                        <li><a href="https://twitter.com/Bluxart" title="Follow Me on Twitter" target="_blank"><span class="font-icon-social-twitter"></span></a></li>
                        <li><a href="http://dribbble.com/Bluxart" title="Follow Me on Dribbble" target="_blank"><span class="font-icon-social-dribbble"></span></a></li>
                        <li><a href="http://forrst.com/people/Bluxart" title="Follow Me on Forrst" target="_blank"><span class="font-icon-social-forrst"></span></a></li>
                        <li><a href="http://www.behance.net/alessioatzeni" title="Follow Me on Behance" target="_blank"><span class="font-icon-social-behance"></span></a></li>
                        <li><a href="https://www.facebook.com/Bluxart" title="Follow Me on Facebook" target="_blank"><span class="font-icon-social-facebook"></span></a></li>
                        <li><a href="https://plus.google.com/105500420878314068694" title="Follow Me on Google Plus" target="_blank"><span class="font-icon-social-google-plus"></span></a></li>
                        <li><a href="http://www.linkedin.com/in/alessioatzeni" title="Follow Me on LinkedIn" target="_blank"><span class="font-icon-social-linkedin"></span></a></li>
                        <li><a href="http://themeforest.net/user/Bluxart" title="Follow Me on ThemeForest" target="_blank"><span class="font-icon-social-envato"></span></a></li>
                        <li><a href="http://zerply.com/Bluxart/public" title="Follow Me on Zerply" target="_blank"><span class="font-icon-social-zerply"></span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
-->
<!-- End Socialize -->

<!-- MODAL PERFILES -->
<!-- ModalScripts -->
<div id="ModalScripts" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
    <h3>Scripts s.a.s.</h3>
  </div>
  <div class="modal-body">
    <p align="justify">Con m&aacute;s de 8 a&ntilde;os de experiencia y m&aacute;s de 100 aplicaciones desarrolladas, un equipo de profesionales deciden construir una empresa joven e innovadora con el &aacute;nimo de brindar soluciones inform&aacute;ticas a la medida de los clientes de pa&iacute;ses como Argentina, Canada, Colombia, Mexico, Espana, Estados Unidos entre otros.</p>
    <p align="justify">Scripts es un equipo independiente ubicado en Santiago de Cali, Colombia.</p>				     
  </div>
  <div class="modal-footer">
    <img src="../img/logo.png" align="left">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
  </div>
</div>

<!--ModalImplementation-->
<div id="ModalImplementation" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
    <h3>Marcial Banguero Chala</h3>
  </div>
  <div class="modal-body">
    <p align="justify">Ingeniero de Sistemas, con  conocimientos en SQL, lenguajes de programación como Java y C#; configuración  sistemas operativos Windows y Linux; aplicación de pruebas de software caja negra y caja blanca.</p>
    <!--<p align="justify">Scripts es un equipo independiente ubicado en Santiago de Cali, Colombia.</p>-->				     
  </div>
  <div class="modal-footer">
    <img src="../img/logo.png" align="left">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
  </div>
</div>

<!--ModalCreativity-->
<div id="ModalCreativity" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
    <h3>Nicolas Salamanca</h3>
  </div>
  <div class="modal-body">
    <p align="justify">Comunicador Social – Periodista con conocimientos en Diseño Gráfico. Especializado en medios audiovisuales, piezas gráficas y fotografía. Experto en Postproducción de Vídeo Digital (Edición y Montaje). Conocimiento en Comunicación Digital, estrategias para Redes Sociales en Organizaciones y Community Management.</p>
    <!--<p align="justify">Scripts es un equipo independiente ubicado en Santiago de Cali, Colombia.</p>-->				     
  </div>
  <div class="modal-footer">
    <img src="../img/logo.png" align="left">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
  </div>
</div>

<!--ModalDevelopment-->
<div id="ModalDevelopment" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
    <h3>Ramiro Andres Bedoya</h3>
  </div>
  <div class="modal-body">
    <p align="justify">Desarrollador enfocado en las tecnologías Microsoft, con experiencia en el área de contabilidad. Destreza en SQL Server 2008 r2 y 2012, lenguajes de programación C#, Silverlight, WCF y JAVA. Y en el ámbito de aplicaciones web ASP.NET MVC 4.</p>
    <!--<p align="justify">Scripts es un equipo independiente ubicado en Santiago de Cali, Colombia.</p> -->				     
  </div>
  <div class="modal-footer">
    <img src="../img/logo.png" align="left">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
  </div>
</div>

<!--ModalManagement-->
<div id="ModalManagement" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
    <h3>Samuel Espinoza Velandia</h3>
  </div>
  <div class="modal-body">
    <p align="justify">Ingeniero de Sistemas, con manejo de bases de Datos Oracle, MySQL y Postgres; lenguajes de programación Java, C# y Visual Fox Pro; desarrollo de aplicaciones para móviles J2ME; desarrollo de aplicaciones web en ASP.NET, Jsp y Php con JQuery.</p>
    <!--<p align="justify">Scripts es un equipo independiente ubicado en Santiago de Cali, Colombia.</p>-->				     
  </div>
  <div class="modal-footer">
    <img src="../img/logo.png" align="left">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
  </div>
</div>

<!--ModalLeadership-->
<div id="ModalLeadership" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
    <h3>Harvy Ordonez Navia</h3>
  </div>
  <div class="modal-body">
    <p align="justify">Ingeniero de Sistemas, con conocimientos en bases de Datos (Oracle, MySQL, Postgres); lenguajes de programación como Java, Ansii C, C++, C# y Visual Fox Pro; desarrollo de aplicaciones para móviles Android, Windows Phone, J2ME; desarrollo de aplicaciones para Datafonos Spectra Creon, Spectra T800, Nurit 8000; desarrollo de aplicaciones web en ASP.NET, GWT y Php con JQuery.</p>
    <!--<p align="justify">Scripts es un equipo independiente ubicado en Santiago de Cali, Colombia.</p>-->				     
  </div>
  <div class="modal-footer">
    <img src="../img/logo.png" align="left">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
  </div>
</div>
<!-- FIN MODAL PERFILES -->


<!-- MODAL NUESTRO TRABAJO -->


<!--ModalECommerce-->
<div id="ModalECommerce" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
    <h3>E-Commerce</h3>
  </div>
  
  <div class= "modal-body">
	  <div class="parteInfo1">
	    <a href="http://70.38.38.114:7777/ecommerce/prestashop/index.php" target="_blank"><p>PrestaShop</p></a>
	    <a href="http://70.38.38.114:7777/ecommerce/prestashop/index.php" target="_blank"><img src="../img/work/ecommerce/prestashop.png"></a>
	  </div>
	   
	  <div class="parteInfo2">
	    <a href="http://70.38.38.114:7777/ecommerce/opencart/" target="_blank"><p>OpenCart</p></a>
	    <a href="http://70.38.38.114:7777/ecommerce/opencart/" target="_blank"><img src="../img/work/ecommerce/opencart.png"></a>
	  </div>
  </div>
  <div class="modal-footer">
    <img src="../img/logo.png" align="left">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
  </div>
</div>
<!--Fin ModalECommerce-->


<!--ModalMobile-->
<div id="ModalMobile" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
    <h3>Movil</h3>
  </div>
  
  <div class= "modal-body">
	    <div class="parteInfo1">
		    <p>Android</p>
		    <img src="../img/work/mobile/android.png">
		    <br>
		    <p>iOs</p>
		    <img src="../img/work/mobile/ios.png">
	    </div>
	   
	    <div class="parteInfo2">
		    <p>Windows Phone</p>
		    <img src="../img/work/mobile/windows.jpeg">
		    <br>
		    <p>Datafonos</p>
		    <img src="../img/work/mobile/datafono.png">
	    </div>
	  
  </div>
  <div class="modal-footer">
    <img src="../img/logo.png" align="left">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
  </div>
</div>
<!--Fin ModalMobile-->



<!--ModalPOS-->
<div id="ModalPOS" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
    <h3>Punto de Venta</h3>
  </div>
  
  <div class= "modal-body">
		<img src="../img/work/pos/pos.gif">
		   
  </div>
  <div class="modal-footer">
    <img src="../img/logo.png" align="left">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
  </div>
</div>
<!--Fin ModalPOS-->

<!--ModalDataCenter-->
<div id="ModalDataCenter" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
    <h3>Data Center</h3>
  </div>
  
  <div class= "modal-body">
	     <ul id="data">
		   <li>Servidores dedicados.</li>
		   <br>
		   <li>Hosting.</li>
		   <br>
		   <li>Dominios.</li>
		</ul>
		   
  </div>
  <div class="modal-footer">
    <img src="../img/logo.png" align="left">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
  </div>
</div>
<!--Fin ModalDataCenter-->



<!--ModalDesign-->
<div id="ModalDesign" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
    <h3>Dise&ntilde;os</h3>
  </div>
  
  <div class= "modal-body">
	     <ul id="design">
		   <li>Logotipos, Tarjetas de presentación, Carnés, Folletos, Anuncios.</li>
		</ul>
		   
  </div>
  <div class="modal-footer">
    <img src="../img/logo.png" align="left">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
  </div>
</div>
<!--Fin ModalDesign-->

<!-- FIN MODAL NUESTRO TRABAJO -->

<!-- MODAL EMAIL -->
<!-- Modal -->
<div id="message1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
     <h3 id="title1">Respuesta</h3>
   </div>
   <div id="content1" class="modal-body">
   </div>
   <div class="modal-footer">
     <button class="btn" data-dismiss="modal" aria-hidden="true">Aceptar</button>
   </div>
</div>

<!--Fin Mensajes Modal -->

<!-- Cargando Version 01 -->
  
<div id="cargando" hidden="true"
	style="z-index: 100009; position: fixed; width: 100%; height: 100%; top: 0px; left: 0px; background: #000000; filter: alpha(opacity = 60); -moz-opacity: 0.6; opacity: 0.6;">
	<div align="center">
		<img src="../img/load.gif" alt="image01" style="margin-top: 22%" />
	</div>
</div>

<!--FIN MODAL EMAIL  -->

<!-- Footer -->
<footer>
	<p class="credits">Copyright &copy;2013 Scripts S.A.S.</p>
</footer>
<!-- End Footer -->

<!-- Back To Top -->
<a id="back-to-top" href="#">
	<i class="font-icon-arrow-simple-up"></i>
</a>
<!-- End Back to Top -->


</body>
</html>