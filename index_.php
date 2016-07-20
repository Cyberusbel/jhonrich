<?php
	require_once 'controller/c_pagina.php';    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>JHON RICH</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="bootstrap/css/modern-business.css" rel="stylesheet">    	
    <link href="bootstrap/css/main.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="public/css/style.css" rel="stylesheet">        
    <!-- Custom Fonts -->
    <link href="bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- FONT STYLES -->
    <script type="text/javascript">
        (function() {
            var link_element = document.createElement("link"),
                s = document.getElementsByTagName("script")[0];
            if (window.location.protocol !== "http:" && window.location.protocol !== "https:") {
                link_element.href = "http:";
            }
            //link_element.href += "//fonts.googleapis.com/css?family=Courgette:400";
            link_element.href += "//fonts.googleapis.com/css?family=Poiret+One|Courgette:400|Indie+Flower|Dosis|Quicksand|Josefin Sans|Shadows Into Light";
            //link_element.href += "//fonts.googleapis.com/css?family=Indie+Flower";
            link_element.rel = "stylesheet";
            link_element.type = "text/css";
            s.parentNode.insertBefore(link_element, s);
        })();
    </script>
    
    <script type="text/javascript"> 
        var _gaq = _gaq || []; 
        _gaq.push(['_setAccount', ' UA-52442823-1']); 
        _gaq.push(['_trackPageview']); 
        (function() { 
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; 
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; 
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s); 
        })(); 
    </script> 
    
    <link rel="shortcut icon" href="/favicon.ico" />
    
    
</head>
<body>
    <!-- Navigation -->
    <header id="header" role="banner">
        <div class="main-nav">
            <div class="container-fluid">
                <div class="header-top vcenter">
                    <div class="col-md-4">
                        <a href="index.php"><img class="img-responsive" src="public/images/logo.png" width="292"/></a>
                    </div>
                    <div class="col-md-4 hidden-sm hidden-xs">
                        <div class="pull-right social-icons">
                            <label style="font-family: Yanone Kaffeesatz; font-weight: 300; font-size: 20px;">Conversemos:</label>
                                <a target="_blank" href="https://twitter.com/JhonRichSM"><i class="fa fa-twitter"></i></a>
                                <a target="_blank" href="https://www.facebook.com/JhonRichSM"><i class="fa fa-facebook"></i></a>
                                <a target="_blank" href="https://plus.google.com/u/1/111335988163346653560/posts"><i class="fa fa-google-plus"></i></a>
                                <a target="_blank" href="https://www.youtube.com/channel/UCJDCgz33ce6JdcByi4Z-Aug"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 text-right hidden-sm hidden-xs">
                        <label style="font-family: Yanone Kaffeesatz; font-weight: 300; font-size: 20px;">Ll&aacute;menos las 24/7</label>
                        <label style="font-family: Yanone Kaffeesatz; font-weight: 400; font-size: 40px;">01 543 3616</label>
                    </div>
                </div>
                <div class="container-fluid" style="background-color: #e36c0a;">
                    <div class="navbar-header pull-left" style="margin-left: 10px;">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="scroll active"><a href="index.php" style="margin-left: 20px;"></a></li>
                            <li class="scroll"><a href="index.php?menu=estvia">Estilos de Viajes</a></li>
                            <li class="scroll"><a href="index.php?menu=viaesc">Viajes escolares</a></li>
                            <li class="scroll"><a href="index.php?menu=viaest">Viajes de Estudio</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>


<?php if($_GET['msj'] == 'error_code'): ?>
        <div id="msj_contacto" class="alert alert-success" role="alert" style="text-align: center; font-weight: bold;">
        C&oacute;digo de verificaci&oacute;n es incorrecto!
        </div>
    <?php endif; ?>


    <!-- Header Carousel -->
    <?php if(!$menu == "estvia" || !$menu == "viaesc" || !$menu == "viaest"):  ?>  
    <?php if($pagina ==null){?>
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('public/images/programas/hom1.jpg');"></div>
                <div class="carousel-caption">
                <h1 class=""><a href="index.php?pagina=7" style="border: solid 5px white; padding: 10px; color: white; text-shadow: 3px 3px 3px #000;">SABER MAS</a></h1>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('public/images/programas/hom2.jpg');"></div>
                <div class="carousel-caption ">
                    <h1>
                    <a href="#" data-target="#myModal" role="button" id="alumno" data-id="FORMULARIO DE RESERVAS"  class="open-Modal" style="border: solid 3px white; padding: 10px; color: white; text-shadow: 3px 3px 3px #000;" data-toggle="modal">RESERVE Y VIAJE</a>
                    
                    </h1>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('public/images/programas/hom3.jpg');"></div>
                <div class="carousel-caption ">
                    <h1 class=""><a href="index.php?pagina=9" style="border: solid 3px white; padding: 10px; color: white; text-shadow: 3px 3px 3px #000;">NUESTRO COMPROMISO CON EL MUNDO</a></h1>
                </div>
            </div>            
        </div>
        
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
    <?php } ?>
    <?php endif; ?>
    <div class="container">
        <!-- E S T I L O S   D E   V I A J E -->
        <?php 
        if ($menu == "estvia" && !$lista == null && $pagina==null) { ?>
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12">                   
                   <img class="img-responsive" src="public/images/ima_<?=$lista?>.jpg" width="1900">
                </div>
            </div>
        </div>     
        <div style="margin-top: 20px;">
        <a href="index.php?menu=estvia"><button><span class="glyphicon fa fa-backward" aria-hidden="true"></span> Atras</button></a>
        </div>        
        <?php foreach($programas_estilo as $est):?>  
        <div class="row" style="border: solid 1px silver; box-shadow: 3px 3px 3px #c0c0c0; margin: 20px 1px 1px 1px; padding: 20px; border-radius: 15px;">
            <div class="row" >
                <div class="col-md-8">
                    <h1><?=utf8_encode($est['titulo'])?>|<?=utf8_encode($est['destino'])?>-<?=utf8_encode($est['dias'])?></h1> 
                    <p><?=$est['descripcion']?></p>
                </div>
                <div class="col-md-4">
                    <h1><img class="img-responsive" src="public/images/programas/<?=$est['imagen']?>"/></h1>
                </div>
            </div>               
            <!-- B O T O N E S -->
            <div class="row" style="margin-top: 20px;">
                <div class="col-md-2">     
                    <h1 class="alert alert-success" role="alert" style="font-weight: 300; font-size: 18px; padding: 10px; margin-top: 24px;">
                      Desde: S/.
                      <span class="glyphicon glyphicon-pen" aria-hidden="true"></span>
                      <?=$est['precio']?>
                    </h1>                          
                </div>
                <div class="col-md-3">
                    <h1><a href="<?=$urlweb?>public/programas/<?=$est['adjunto']?>" class="btn btn-warning btn-block">Descargue Itinerario<span class="glyphicon glyphicon-circle-arrow-down" aria-hidden="true" style="margin-left: 10px; float: right;"></span></a> </h1>                               
                </div>
                
             
                
                <div class="col-md-3">
                    <h1><a href="#" data-target="#myModal" role="button" id="alumno" data-id="<?php echo $est['titulo']; ?>"  class="open-Modal btn btn-large btn-primary btn-block" data-toggle="modal">Reservar Ahora<span class="glyphicon glyphicon-envelope" aria-hidden="true" style="margin-left: 10px; float: right;"></span></a></h1>
                </div>
                <div class="col-md-4">
                </div>
            </div>  
         </div>     
        <?php endforeach;?>    
        <div style="margin-top: 20px; margin-bottom: 20px;">
        <a href="index.php?menu=estvia"><button><span class="glyphicon fa fa-backward" aria-hidden="true"></span> Atras</button></a>
        </div>
        <!-- V I A J E S    E S C O L A R E S -->
        <?php } elseif ($menu == "viaesc" && $dias == null && $pagina==null)  { ?>
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12">                   
                   <img class="img-responsive" src="public/images/ima_escolares.jpg" width="1900">
                </div>
            </div>
        </div>  
        <div class="jumbotron" style="background-color: white;">
              <!--<h1 class="text-center">Estilos de viaje!</h1>-->
              <p>
	           Un viaje con los amigos de la vida, es una etapa &uacute;nica que muchos desean disfrutarlo y vivirlo. Comparte buenos momentos al lado de grandes compa&ntilde;eros de clases viajando por grandiosos destinos que hemos dise&ntilde;ado para ustedes</p>
         </div>    
        <div class="row">
            <div class="col-md-6">
                <a href="index.php?menu=viaesc&dias=3d/2n"><img class="img-responsive img-portfolio img-hover" src="public/images/prog3d.jpg" alt=""/></a>
            </div>
            <div class="col-md-6">
                <a href="index.php?menu=viaesc&dias=4d/3n"><img class="img-responsive img-portfolio img-hover" src="public/images/prog4d.jpg" alt=""/></a>
            </div>
            <div class="col-md-6">
                <a href="index.php?menu=viaesc&dias=5d/4n"><img class="img-responsive img-portfolio img-hover" src="public/images/prog5d.jpg" alt=""/></a>
            </div>
            <div class="col-md-6">
                <a href="index.php?menu=viaesc&dias=6d/5n"><img class="img-responsive img-portfolio img-hover" src="public/images/prog6d.jpg" alt=""/></a>              
            </div>
        </div>
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12">                   
                   <img class="img-responsive" src="public/images/ima_escolares2.jpg" width="1900">
                </div>
            </div>
        </div>         
        <div class="jumbotron" style="background-color: white;">
              <!--<h1 class="text-center">Estilos de viaje!</h1>-->
              <p>
	           Aprender es parte del d&iacute;a a d&iacute;a, al igual que las ense&ntilde;anzas que nos brindan en clase. Por eso Jhon Rich ha dise&ntilde;ado exclusivas salidas escolares como complemento a los cursos que cada profesor dicta. Los invitamos a conocer los viajes que brindamos dentro de Lima y sus alrededores.</p>
         </div>         
        <div class="row">
            <?php foreach($salidas_esc as $salidas):?> 
            <a href="public/programas/<?=$salidas['adjunto']?>">
            <div class="col-md-4">
                <img class="img-responsive img-portfolio img-hover" src="public/images/programas/<?=$salidas['imagen']?>" alt="">
                <h2 class="carousel carousel-caption2"><br/><?=$salidas['titulo']?></h2>                
            </div>
            </a>
            <?php endforeach; ?>     
        </div>        
        <?php } elseif ($menu == "viaesc" && !$dias==null && $pagina==null)  { ?>
            <?php
            if ($dias == '3d/2n') { ?>
            <div class="jumbotron" style="background-color: white;">
                <h1 class="text-center">Programas de 3 d&iacute;as / 2 noches</h1>
                <p>Comparte, vive y disfruta estos destinos a tu mejor estilo. Cada viaje que vives, es una experiencia imborrable al lado de tus mejores amigos.&nbsp;.</p>
            </div>  
            <?php } elseif ($dias == '4d/3n') { ?>
            <div class="jumbotron" style="background-color: white;">
                <h1 class="text-center">Programas de 4 d&iacute;as / 3 noches</h1>
                <p>Disfruta de estos viajes que tenemos para ti, y encuentra tu mejor destino. Haz del viaje tu momento inolvidable al lado de grandes compa&ntilde;eros que recordar&aacute;s por siempre.</p>
            </div>                  
            <?php } elseif ($dias == '5d/4n') { ?>    
            <div class="jumbotron" style="background-color: white;">
                <h1 class="text-center">Programas de 5 d&iacute;as / 4 noches</h1>
                <p>Grandes historias de viajes se dan en grandes experiencias que descubres a trav&eacute;s de estos destinos que hemos dise&ntilde;ado para ti y tus compa&ntilde;eros de clase.&nbsp;</p>
            </div>                 
            <?php } elseif ($dias == '6d/5n') { ?>    
            <div class="jumbotron" style="background-color: white;">
                <h1 class="text-center">Programas de 6 d&iacute;as / 5 noches</h1>
                <p>Rutas memorables, experiencias inolvidables. Conoce y explora distintos destinos en un solo viaje, disfrutando de culturas, vivencias, alegr&iacute;as y emociones al lado de tus mejores amigos. No esperes m&aacute;s y &iexcl;Elige el viaje inolvidable para tu viaje de promoci&oacute;n!&nbsp;</p>
            </div>            
            <?php } else {
            }
            ?>    
            <div class="row">
                <div class="col-lg-6">
                    <ul style="margin-left: 30px;">
                        <?php foreach($programas_esc as $programas):?> 
                            <li>
                            <a href="public/programas/<?=$programas['adjunto']?>"><?=utf8_encode($programas['titulo']),"-",$programas['dias']?>
                            </a>&nbsp; 
                            <span class="glyphicon fa fa-file-word-o"></span>
                            </li>     
                        <?php endforeach; ?>
                    </ul>                
                </div>
                <div class="col-lg-6">
                    <img class="img-responsive" src="public/images/ima_viaj1.jpg" alt=""/>
                </div>                
            </div>
        <div class="row" style="margin-top: 20px; margin-bottom: 20px;">
            <div class="col-md-3">
                <button type="button" class="btn btn-warning btn-block  " <?php if($dias == "3d/2n"){echo "disabled='disabled'";} ?>><a href="index.php?menu=viaesc&dias=3d/2n">Programas 3 D&iacute;as / 2 Noches</a></button>
            </div>
            <div class="col-md-3">
                <button type="button" class="btn btn-warning btn-block  " <?php if($dias == "4d/3n"){echo "disabled='disabled'";} ?>><a href="index.php?menu=viaesc&dias=4d/3n">Programas 4 D&iacute;as / 3 Noches</a></button>
            </div>
            <div class="col-md-3">
                <button type="button" class="btn btn-warning btn-block  " <?php if($dias == "5d/4n"){echo "disabled='disabled'";} ?>><a href="index.php?menu=viaesc&dias=5d/4n">Programas 5 D&iacute;as / 4 Noches</a></button>
            </div>
            <div class="col-md-3">
                <button type="button" class="btn btn-warning btn-block  " <?php if($dias == "6d/5n"){echo "disabled='disabled'";} ?>><a href="index.php?menu=viaesc&dias=6d/5n">Programas 6 D&iacute;as / 5 Noches</a></button>
            </div>
        </div>
        <!-- V I A J E S    E S T U D I O -->        
        <?php } elseif ($menu == "viaest") { ?>
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <?php if($programa==null):  ?>                   
                   <img class="img-responsive" src="public/images/ima_estudio.jpg" width="1900">
                   <?php endif; ?>
                </div>
            </div>
        </div>      
        
        
        <div style="margin-top: 20px;">
        <a href="index.php?menu=<?=$menu?>"><button><span class="glyphicon fa fa-backward" aria-hidden="true"></span> Atras</button></a>
        </div>        
        <?php foreach($programas_estudio as $est):?>  
        <div class="row" style="border: solid 1px silver; box-shadow: 3px 3px 3px #c0c0c0; margin: 20px 1px 1px 1px; padding: 20px; border-radius: 15px;">
            <div class="row" >
                <div class="col-md-8">
                    <h1><?=utf8_encode($est['titulo'])?>|<?=utf8_encode($est['destino'])?>-<?=utf8_encode($est['dias'])?></h1> 
                    <p><?=$est['descripcion']?></p>
                </div>
                <div class="col-md-4">
                    <h1><img class="img-responsive" src="public/images/programas/<?=$est['imagen']?>"/></h1>
                </div>
            </div>    
            
            <div class="row">
                <div class="col-md-12">
                    <?php  
                        if($programa):                       
                            echo $est['itinerario'];
                        endif; 
                    ?>
                </div>            
            </div>          
                       
            <!-- B O T O N E S -->
            <div class="row" style="margin-top: 20px;">
                <div class="col-md-2">     
                    <h1 class="alert alert-success" role="alert" style="font-weight: 300; font-size: 18px; padding: 10px; margin-top: 24px;">
                      Desde: S/.
                      <span class="glyphicon glyphicon-pen" aria-hidden="true"></span>
                      <?=$est['precio']?>
                    </h1>                          
                </div>
                <!--
                <div class="col-md-3">
                    <h1><a href="<?=$urlweb?>public/programas/<?=$est['adjunto']?>" class="btn btn-warning btn-block">Descargar en Word<span class="glyphicon glyphicon-circle-arrow-down" aria-hidden="true" style="margin-left: 10px; float: right;"></span></a> </h1>                               
                </div>
                -->
                
                <div class="col-md-3">
                    <h1><a href="<?=$urlweb?>index.php?menu=<?=$menu?>&programa=<?=$est['idRec']?>" class="btn btn-success btn-block">Ver Itinerario<span class="glyphicon glyphicon-circle-arrow-down" aria-hidden="true" style="margin-left: 10px; float: right;"></span></a> </h1>                               
                </div>                   
                
                <div class="col-md-3">
                    <h1><a href="#" data-target="#myModal" role="button" id="alumno" data-id="<?php echo $est['titulo']; ?>"  class="open-Modal btn btn-large btn-primary btn-block" data-toggle="modal">Reservar Ahora<span class="glyphicon glyphicon-envelope" aria-hidden="true" style="margin-left: 10px; float: right;"></span></a></h1>
                </div>
                <div class="col-md-4">
                </div>
            </div>              
             
         </div>     
        <?php endforeach;?>  
        
       
        <?php if(!$programa == null):?>
        <div class="row">
            <?php foreach($programas_estudio_d as $est):?>  
            <div class="col-md-2">
                <h1><a href="index.php?menu=viaest&programa=<?=$est['idRec']?>"><img class="img-responsive" src="public/images/programas/<?=$est['imagen']?>"/></a></h1>
                <h4><?=utf8_encode($est['titulo'])?></h4>
            </div>
            <?php endforeach; ?>            
        </div>           
        <?php endif;?>
          
        <div style="margin-top: 20px;">
        <a href="index.php?menu=<?=$menu?>"><button><span class="glyphicon fa fa-backward" aria-hidden="true"></span> Atras</button></a>
        </div>    
                
        
        <!-- W E B D A T A -->        
        <?php } elseif (!$pagina == null)  { ?>
            <?php foreach($pagina as $pag): ?>
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12">                   
                   <?php if($pag['imagen']):?>
                   <img class="img-responsive" src="public/images/<?=$pag['imagen']?>" width="1900">
                   <?php endif;?>
                </div>
            </div>
        </div>          
        
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12">                   
                    <h1><p style="margin-top: 50px; margin-bottom: 50px;"><?=utf8_encode($pag['titulo'])?></p></h1>
                    <div style="text-align: justify;"><?=utf8_decode($pag['descripcion'])?></div>                
                </div>
            </div>
        </div>          
        <?php endforeach;?>  
                    <!-- F O R M U L A E I O  T R A V E L O V E R S -->
                    <?php if($paginaW == 5):   ?>             
                    <div class="container" style="margin-top: 40px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <!--<form role="form" class="form-normal">-->
                                    <form data-toggle="validator" role="form" method="post" class="form-group" action="view/sendform_t.php">
                                    
                                        <div class="form-group">
                                            <label class="control-label" for="nombres">Nombres y Apellidos:</label>
                                            <div>
                                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Ingrese Nombres" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="nombres">Fecha de Nacimiento:</label>
                                            <div>
                                                <input type="text" class="form-control" id="fec_name" name="fec_name" placeholder="Ingrese Fecha de Nacimiento" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="nombres">Nro de Telefono:</label>
                                            <div>
                                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese Nro de Telefono" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="control-label">Email:</label>
                                            <div>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="">
                                            </div>
                                        </div>
                    
                                        <div class="form-group">Deseas recibir promociones, ofertas y descuentos de viajes? .
                                            <div class="radio">
                                                <label >
                                                    <input type="radio" name="promociones" value="Si" required="">Si
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="promociones" value="No" required="">No
                                                </label>
                                            </div>
                                        </div>
                    
                                        <div class="form-group">
                                            <div class="col-md-12 text-center">
                                                <button type="submit" class="btn btn-default center-block active" data-html="false" style="margin-bottom: 25px;">Enviar</button>
                                            </div>                        
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                    
                    
                        </div>
                    <?php endif;?>           
        
          
        <!-- P O R T A D A -->   
        <?php } else { ?>
            <div class="jumbotron" style="background-color: white;">
              <h1 class="text-center">Estilos de viaje</h1>
              <p>Sabemos que cada etapa de tu vida es &uacute;nica al igual que tus sue&ntilde;os y experiencias.
        	Por eso hemos dise&ntilde;ado los mejores viajes a tu estilo.</p>
            </div>      
            
            <div class="row">
                <div class="col-md-4 visible-md visible-lg hidden-sm hidden-xs">
                    <a href="index.php?menu=estvia&lista=explora"><img class="img-responsive img-portfolio img-hover" src="public/images/ima_exp.jpg" alt=""></a>
                    <!--<h2 class="carousel carousel-caption1">EXPLORA</h2>-->       
                </div>
                <div class="col-md-4 visible-md visible-lg hidden-sm hidden-xs">
                   <a href="index.php?menu=estvia&lista=clasico"><img class="img-responsive img-portfolio img-hover" src="public/images/ima_cla.jpg" alt=""></a>
                    <!--<h2 class="carousel carousel-caption1">CLASICO</h2>-->       
                </div>
                <div class="col-md-4 visible-md visible-lg hidden-sm hidden-xs">
                    <a href="index.php?menu=estvia&lista=activo"><img class="img-responsive img-portfolio img-hover" src="public/images/ima_act.jpg" alt=""></a>
                    <!--<h2 class="carousel carousel-caption1">ACTIVO</h2>-->                        
                </div>                
            </div>
            
            <div class="row">
                <div class="col-md-4 hidden-md hidden-lg visible-sm visible-xs">
                    <a href="index.php?menu=estvia&lista=explora"><img class="img-responsive img-portfolio img-hover" src="public/images/exploralargo-wb.jpg" alt=""></a>
                </div>            
                <div class="col-md-4 hidden-md hidden-lg visible-sm visible-xs">
                   <a href="index.php?menu=estvia&lista=clasico"><img class="img-responsive img-portfolio img-hover" src="public/images/linealclasico-wb.jpg" alt=""></a>
                </div>
                <div class="col-md-4 hidden-md hidden-lg visible-sm visible-xs">
                    <a href="index.php?menu=estvia&lista=activo"><img class="img-responsive img-portfolio img-hover" src="public/images/linealactivo-wb.jpg" alt=""></a>
                </div>
            </div>            
            
        <?php }   ?>    
        <?php if($menu == null && $pagina==null): ?>        
        <hr/>
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12">                   
                   <img class="img-responsive" src="public/images/programas/lover.jpg" width="1900">
                </div>
            </div>
        </div>    
        
        <div class="row" style="margin-top: 20px;">
            <div class="col-md-12 text-center">
                <a href="index.php?pagina=5" class="btn btn-large btn-primary" style="font-size: 25px;">&iexcl;Unete a nuestra comunidad Viajera!<span class="glyphicon glyphicon-circle-arrow-down" aria-hidden="true" style="margin-left: 10px; float: right;"></span></a>
            </div>
        
        </div>
        
         
        <hr/>
        <?php endif; ?>
        <!-- F O R M U L A E I O S -->        
        <div class="container">
            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                <form data-toggle="validator" role="form" method="post" class="form-group" action="view/sendform.php">
                <div class="modal-header">
                    <button type="button" class="btn btn-default close"  style="color: black; border:solid 1px white;background-color: white; box-shadow: 3px 3px 3px #000;" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h2 class="modal-title text-center"><input type="text" name="bookId" id="bookId" value="" style="width: 80%; text-align: center; border: solid 0px;"/></h2>
                </div>
                <div class="modal-body">
                    <div class="bs-docs-section">                
                        <div class="bs-example">
                            <div class="form-group">        
                              <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-th-large"></span></span>     
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Nombres" required>
                              </div>
                            </div>
                            <div class="form-group">        
                              <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-th-large"></span></span>     
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellidos" required>
                              </div>
                            </div>
                            <div class="form-group">        
                              <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>     
                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Nro de Telefono" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" data-error="Bruh, that email address is invalid" required>
                              </div>
                              <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">        
                              <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></span>     
                                <textarea class="form-control" rows="3" id="comentario" name="comentario" placeholder="Comentario"></textarea>
                              </div>
                            </div>                    
                            <div class="form-group">Elija el mejor Horario para contactarlo.
                              <div class="radio">
                                <label>
                                  <input type="radio" name="turno" value="1" required>
                                  Ma&ntilde;ana
                                </label>
                              </div>
                              <div class="radio">
                                <label>
                                  <input type="radio" name="turno" value="2" required>
                                  Tarde
                                </label>
                              </div>
                            </div>
                            <div class="form-group"> 
                             <!-- OPEN IMPORTACION DE CODIGO CAPTCHA -->
                                <link href="captcha/styles.css" rel="stylesheet" type="text/css" />
                                <div class="bordeder" style="text-align:center;">
                                    <strong class="subder">Security Code </strong><br>
                                    <label style="color: #385B70;">Enter the code shown in the image: </label>
                                    <br><br>
                                      <img src="captcha/captcha.php" width="100" height="30" vspace="3"><br>
                                      <input name="tmptxt" id="tmptxt" type="text" size="30" class="txtcaptcha"><br>
                                      <!-- <input name="btget" type="submit" class="boton" value="Verificar Codigo"> -->
                                      <input name="action" type="hidden" value="checkdata">
                                </div>
                            <!-- CIERRA -->
                            </div>
                            <!--
                            <div class="form-group">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" checked="checked" name="subscribe"  value="Si" id="terms" data-error="Before you wreck yourself">
                                  Deseo Recibir Novedades de JHONRICH VIAJES.
                                </label>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                            -->
                            <div class="form-group">
                              <button type="submit" class="btn btn-primary" id="send_btn">Enviar</button>
                              <input type="hidden" name="programa" id="programa" value="<?=$paises_prog_det[0]['titulo']?>"/>
                            </div>
                        </div> <!-- /example -->
                      </div>           
                </div><!-- End of Modal body -->
                </form>
                </div><!-- End of Modal content -->
                </div><!-- End of Modal dialog -->
            </div><!-- End of Modal -->
        </div><!-- F I N  D E  F O R M U L A R I O S -->
        
        
        <!-- F O R M U L A E I O S  C O N T A C T E N O S-->        
        <div class="container">
            <div id="myModal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                <form data-toggle="validator" role="form" method="post" class="form-group" action="view/sendform_c.php">
                <div class="modal-header">
                    <button type="button" class="btn btn-default close"  style="color: black; border:solid 1px white;background-color: white; box-shadow: 3px 3px 3px #000;" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h2 class="modal-title text-center"><input type="text" name="bookId" id="bookId" value="" style="width: 80%; text-align: center; border: solid 0px;"/></h2>
                </div>
                <div class="modal-body">
                    <div class="bs-docs-section">                
                        <div class="bs-example">
                        
                        <div style="font-size: 15px;"><p>Oficina: Jir&oacute;n Miguel Anco 118 &ndash; San Felipe</p>
                            <p><em>(Se puede coordinar visitas previamente coordinadas para viajes empresariales, salidas privadas o viajes hechos a la medida del cliente seg&uacute;n su solicitud.)&nbsp;</em>                        
                        
                        </div>
                        
                            <div class="form-group">        
                              <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-th-large"></span></span>     
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Nombres" required>
                              </div>
                            </div>
                            <div class="form-group">        
                              <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-th-large"></span></span>     
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellidos" required>
                              </div>
                            </div>
                            <div class="form-group">        
                              <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>     
                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Nro de Telefono" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" data-error="Bruh, that email address is invalid" required>
                              </div>
                              <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">        
                              <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></span>     
                                <textarea class="form-control" rows="3" id="comentario" name="comentario" placeholder="Comentario"></textarea>
                              </div>
                            </div>  
                            
                            <div style="font-size: 15px; margin-bottom: 20px;">
                                N&uacute;meros de tel&eacute;fono<br />
                            	Oficina: (01) 543 3616<br />
                            	Claro: 963 744 780 Movistar: 962 636 892<br />
                            	Email: <a href="mailto:cotizaciones@jhonrich.com">cotizaciones@jhonrich.com</a>                                                            
                            </div>
                                              
                            <div class="form-group">Elija el mejor Horario para contactarlo.
                              <div class="radio">
                                <label>
                                  <input type="radio" name="turno" value="1" required>
                                  Ma&ntilde;ana
                                </label>
                              </div>
                              <div class="radio">
                                <label>
                                  <input type="radio" name="turno" value="2" required>
                                  Tarde
                                </label>
                              </div>
                            </div>
                            <!--
                            <div class="form-group">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox" checked="checked" name="subscribe"  value="Si" id="terms" data-error="Before you wreck yourself">
                                  Deseo Recibir Novedades de JHONRICH VIAJES.
                                </label>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                            -->
                            <div class="form-group text-center">
                              <button type="submit" class="btn btn-primary" id="send_btn">Enviar</button>
                              <input type="hidden" name="programa" id="programa" value="<?=$paises_prog_det[0]['titulo']?>"/>
                            </div>
                        </div> <!-- /example -->
                      </div>           
                </div><!-- End of Modal body -->
                </form>
                </div><!-- End of Modal content -->
                </div><!-- End of Modal dialog -->
            </div><!-- End of Modal -->
        </div><!-- F I N  D E  F O R M U L A R I O S -->        
        
        
   
</div>

<footer>
    <div class="row">
        <div class="col-md-6 text-center">                 
            <p><img class="img-responsive" src="public/images/logo.png" width="292" height="80" /></p>
        </div>   
        <div class="col-md-6 text-center social-icons" style="margin-top: 30px;">               
            <a href="https://twitter.com/JhonRichSM" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://www.facebook.com/JhonRichSM" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://plus.google.com/u/1/111335988163346653560/posts" target="_blank"><i class="fa fa-google-plus"></i></a>
            <a href="https://www.youtube.com/channel/UCJDCgz33ce6JdcByi4Z-Aug" target="_blank"><i class="fa fa-youtube"></i></a>
        </div>                
    </div>
    <div class="row">
        <div class="col-md-2" id="site">
        </div>
        <div class="col-md-3" id="site">
            <h3>GENERAL</h3> 
            <p >
            <a href="index.php">Inicio</a><br />
            <a href="index.php?menu=estvia">Estilos de Viajes</a><br />
            <a href="index.php?menu=viaesc">Viajes Escolares</a><br />
            <a href="index.php?menu=viaest">Viaje de Estudio</a><br />
            <a href="#" data-target="#myModal2" role="button" id="alumno" data-id="CONTACTENOS"  class="open-Modal" data-toggle="modal">Cont&aacute;ctenos</a><br />
            </p>
        </div>
        <div class="col-md-3" id="site">
            <h3>SOBRE NOSOTROS</h3> 
            <p >
            <a href="index.php?pagina=1">Nuestra Historia</a><br />
            <a href="index.php?pagina=2">Nuestros Valores</a><br />
            <a href="index.php?pagina=3">Nuestra Mision con el Mundo</a><br />
            <a href="index.php?pagina=4">Blog de Jhon Rich</a><br />
            </p>                
        </div>
        <div class="col-md-3" id="site">
            <h3>COMUNIDAD</h3>                 
            <p >
            <a href="index.php?pagina=5">Qu&eacute; es un #TraveLover?</a><br />
            <a href="index.php?pagina=6">Comunidad Viajera</a><br />
            </p>                
        </div>
        <div class="col-md-12 text-center">
            <h1>Ll&aacute;menos las 24 / 7 <br />01 543 3616</h1> 
            Desarrollado por <a href="http://www.goldensupport.com" class="tooltips" target="_blank"><span>Sistemas y Servicios Inform&aacute;ticos</span><label id="golden">Golden</label><label id="support" >Support</label><label style="color: white;">&nbsp;&reg;&nbsp;<?=date ("Y");?></label></a>
        </div>                        
    </div>    
</footer>  

    <!-- /.container -->
    <!-- jQuery -->
    <script src="bootstrap/js/jquery.js"></script>    
    <script type="text/javascript" src="public/js/jquery.smartmenus.js"></script>
    <!--<script type="text/javascript" src="public/js/pagina.js"></script>
    <!-- SmartMenus jQuery init -->
    <script>
        $(document).ready(function (e) {
          $('#myModal').on('show.bs.modal', function(e) {    
             var id = $(e.relatedTarget).data().id;
              $(e.currentTarget).find('#bookId').val(id);
          });
          
          $('#myModal2').on('show.bs.modal', function(e) {    
             var id = $(e.relatedTarget).data().id;
              $(e.currentTarget).find('#bookId').val(id);
          });          
        });
    </script>     
    <script type="text/javascript">
    	$(function() {
    		$('#main-menu').smartmenus({
    			subMenusSubOffsetX: 1,
    			subMenusSubOffsetY: -8
    		});
    	});
    </script>     
    <script>
    $(document).ready(function()
        {       
        $("#home").hide();             
    });    
    </script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })

    $('#msj_contacto').delay(4000).fadeOut('slow');
    </script>
</body>
</html>