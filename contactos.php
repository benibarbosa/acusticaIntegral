<!DOCTYPE html>



<html>

<head>
   <meta charset="utf-8">
   <script type="text/javascript" src="jquery.js">
   </script>
   <script type="text/javascript" src="jquery-ui.min.js">
   </script>
   <script type="text/javascript" src="tt_slideshow.js">
   </script>
   <script type="text/javascript" src="bootstrap.min.js">
   </script>
   <!--<script type="text/javascript" src="Customjs.js">
   </script>
   <script type="text/javascript" src="contactform.js">
   </script>-->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>
      Contacto
   </title>
   <link rel="stylesheet" href="bootstrap.css" type="text/css" media="screen" />
   <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
   <link rel="shortcut icon" href="images/ai.png">
   <script type="text/javascript" src="totop.js">
   </script>
   <!-- Google tag (gtag.js) -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=AW-830516782"></script>
   <script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'AW-830516782'); </script>
   <script> gtag('config', 'AW-830516782/AW9FCLTYn_oDEK7cgowD', { 'phone_conversion_number': '5558615137' }); </script>
   <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
</head>

<?php
 $envio=$_POST['submit'];
if (isset($envio)) {
   
   ini_set('display_errors', 1);

   error_reporting(E_ALL);
   $from = "contacto@acusticaintegral.com.mx";

   // $to = $_POST["email"];
  //$to = "miguelga.mg94@gmail.com";
  
   $to="emmanuel@acusticaintegral.com.mx";
   $subject = "Informes";
   $mensaje ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Informes</title>
    
</head>
<body><div><div><p style="margin:0em 0em 0em 0em;text-align:Center;"><span style="font-family:\'Titillium Web\',\'Arial\';font-weight:600;font-size:3.214em;color:green;">ACUSTICA INTEGRAL</span></p><p style="margin:0em 0em 0em 0em;text-align:Center;"><span style="font-family:\'Titillium Web\',\'Arial\';font-size:1.286em;color:rgba(52,52,52,1);">
                                 Fabricación, diseño, comercialización e instalación de materiales acústicos, sistemas de insonorización y servicios de ingeniería acústica. Disponemos de la experiencia necesaria para resolver todos los problemas de ruido.
                                 </span>
                              </p></div><div> <table width="80%">
    <thead>
      <tr>
        <th></th>
        <th>Información</th>
        
      </tr>
    </thead>
    
    <tbody>
      <tr>
        <td>Nombre</td>
        <td>'. $_POST["nombre"].'</td>
        
      </tr>
      <tr>
        <td>Telefono</td>
        <td>'. $_POST["telefono"].'</td>
        
      </tr>
      <tr>
        <td>Email</td>
        <td>'. $_POST["email"] .'</td>
        
      </tr>
      <tr>
        <td>País</td>
        <td>'.$_POST["pais"].'</td>
        
      </tr><tr>
        <td>Estado</td>
        <td>'.$_POST["estado"].'</td>
        
      </tr><tr>
        <td>Mensaje</td>
        <td>'. $_POST["mensaje"].'</td>
        
      </tr>
    </tbody>
  </table>
</div><br></div>

<div class="row" style="
    background-color: #343434;
">
                  <p style="color: white;text-align: center;">Importaciones Internacionales EKL SA de CV, importador y distribuidor exclusivo en México de Acústica Integral S.L.</p>
                  <p style="color: white;text-align: center;"><a href="mailto:info@eklinternacional.com" style="color:#038004; text-decoration: none;">info@eklinternacional.com</a> todas las imágenes y productos en esta página pertencen a Acústica Integral S.L. <a href="http://www.acusticaintegral.com" target="_blank" style="color:#038004; text-decoration: none;">www.acusticaintegral.com</a> </p>
                  <br>
                  <br>
               </div>
</div> </body></html>'; 
   
$mensaje2 ='<div><div><p style="margin:0em 0em 0em 0em;text-align:Center;"><span style="font-family:\'Titillium Web\',\'Arial\';font-weight:600;font-size:3.214em;color:green;">ACUSTICA INTEGRAL</span></p><p style="margin:0em 0em 0em 0em;text-align:Center;"><span style="font-family:\'Titillium Web\',\'Arial\';font-size:1.286em;color:rgba(52,52,52,1);">
                                 Fabricación, diseño, comercialización e instalación de materiales acústicos, sistemas de insonorización y servicios de ingeniería acústica. Disponemos de la experiencia necesaria para resolver todos los problemas de ruido.
                                 </span>
                              </p></div><div> Gracias por contactarnos en un momento un asesor se comunicara con usted
</div><br></div>

<div class="row" style="
    background-color: #343434;
">
                  <p style="color: white;text-align: center;">Importaciones Internacionales EKL SA de CV, importador y distribuidor exclusivo en México de Acústica Integral S.L.</p>
                  <p style="color: white;text-align: center;"><a href="mailto:info@eklinternacional.com" style="color:#038004; text-decoration: none;">info@eklinternacional.com</a> todas las imágenes y productos en esta página pertencen a Acústica Integral S.L. <a href="http://www.acusticaintegral.com" target="_blank" style="color:#038004; text-decoration: none;">www.acusticaintegral.com</a> </p>
                  <br>
                  <br>
               </div>
</div>'; 
      

   
   $headers = "MIME-Version: 1.0" . "\r\n";

# ojo, es una concatenación:
$headers .= "Content-type:text/html; charset=UTF-8" . "\r\n";
   $headers .= "From:" . $from;
   mail($_POST["email"], $subject,$mensaje, $headers);    
   mail($to, $subject, $mensaje2, $headers);
   
   echo '
<script>
 alert("Se ha enviado correctamente tu datos");

</script>';
     $envio='';
    }

?>



<body class="Contact-Us">
   <!-- Google tag (gtag.js) -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=AW-830516782"></script>
   <script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'AW-830516782'); </script>
   <script> gtag('config', 'AW-830516782/AW9FCLTYn_oDEK7cgowD', { 'phone_conversion_number': '5558615137' }); </script>
   <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
   <div class="totopshow">
      <a href="#" class="back-to-top"><img alt="Back to Top" src="images/gototop0.png" /></a>
   </div>
   <div id="ttr_page" class="container">
      <nav id="ttr_menu" class="navbar-default navbar">
         <div id="ttr_menu_inner_in">
            <div class="menuforeground">
            </div>
            <div id="navigationmenu">
               <div class="navbar-header">
                  <button id="nav-expander" data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle"
                     type="button">
                     <span class="sr-only">
                     </span>
                     <span class="icon-bar">
                     </span>
                     <span class="icon-bar">
                     </span>
                     <span class="icon-bar">
                     </span>
                  </button>
                  <a href="http://acusticaintegral.com.mx/" target="_self">
                     <img class="ttr_menu_logo" src="menulogo.svg">
                  </a>
               </div>
               <div class="menu-center collapse navbar-collapse">
                  <ul class="ttr_menu_items nav navbar-nav navbar-right">
                     <li class="ttr_menu_items_parent dropdown">
                        <a href="index.html" class="ttr_menu_items_parent_link"><span
                              class="menuchildicon"></span>Inicio</a>
                        <hr class="horiz_separator" />
                     </li>
                     <li class="ttr_menu_items_parent dropdown">
                        <a href="sectores.html" class="ttr_menu_items_parent_link"><span
                              class="menuchildicon"></span>Sectores</a>
                        <hr class="horiz_separator" />
                     </li>
                     <li class="ttr_menu_items_parent dropdown ">
                        <a href="conceptos.html" class="ttr_menu_items_parent_link"><span
                              class="menuchildicon"></span>Conceptos</a>
                        <hr class="horiz_separator" />
                     </li>
                     <li class="ttr_menu_items_parent dropdown ">
                        <a href="productos.html" class="ttr_menu_items_parent_link"><span
                              class="menuchildicon"></span>Productos</a>
                        <hr class="horiz_separator" />
                     </li>
                     <li class="ttr_menu_items_parent dropdown">
                        <a href="control-de-ruido.html" class="ttr_menu_items_parent_link"><span
                              class="menuchildicon"></span>Control de Ruido</a>
                        <hr class="horiz_separator" />
                     </li>
                     <li class="ttr_menu_items_parent dropdown">
                        <a href="clientes.php" class="ttr_menu_items_parent_link"><span
                              class="menuchildicon"></span>Clientes/Proyectos</a>
                        <hr class="horiz_separator" />
                     </li>
                     <li class="ttr_menu_items_parent dropdown active">
                        <a href="contactos.php" class="ttr_menu_items_parent_link_active"><span
                              class="menuchildicon"></span>Contacto</a>
                        <hr class="horiz_separator" />
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </nav>
      <header id="ttr_header">
         <div id="ttr_header_inner">
            <div class="ttr_headershape01">
               <div class="html_content">
                  <p><span
                        style="font-family:'Titillium Web','Arial';font-weight:600;font-size:2.286em;color:green;">HOME</span>
                  </p>
               </div>
            </div>
            <div class="ttr_headershape02">
               <div class="html_content">
                  <p><span
                        style="font-family:'Titillium Web','Arial';font-weight:600;font-size:2.286em;color:green;">Contacto
                     </span></p>
               </div>
            </div>
         </div>
      </header>
      <div id="ttr_content_and_sidebar_container">
         <div id="ttr_content">
            <div id="ttr_content_margin" class="container-fluid">
               <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
               <div class="ttr_Contact-Us_html_row0 row">
                  <div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <div class="ttr_Contact-Us_html_column00">
                        <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                        <div class="html_content">
                           <p style="margin:0em 0em 0em 0em;text-align:Center;"><span
                                 style="font-family:'Titillium Web','Arial';font-weight:600;font-size:3.214em;color:green;">
                                 ACUSTICA INTEGRAL</span></p>
                           <p style="margin:0em 0em 0em 0em;text-align:Center;"><span
                                 style="font-family:'Titillium Web','Arial';font-size:1.286em;color:rgba(51,51,51,1);">Fabricación,
                                 diseño, comercialización e instalación de materiales acústicos, sistemas de
                                 insonorización y servicios de ingeniería acústica. Disponemos de la experiencia
                                 necesaria para resolver todos los problemas de ruido.</span>
                           </p>
                        </div>
                        <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                        <div style="clear:both;"></div>
                     </div>
                  </div>
                  <div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
                  </div>
                  <div class="post_column col-lg-5 col-md-5 col-sm-5 col-xs-12">
                     <div class="ttr_Contact-Us_html_column01">
                        <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                        <div class="html_content">
                           <p><span
                                 style="font-family:'Titillium Web','Arial';font-weight:600;font-size:1.429em;color:green;">SEDE</span>
                           </p>
                           <p style="margin:1.43em 0em 0.36em 0em;"><span
                                 style="font-family:'Verdana';color:rgba(105,105,105,1);">Av. Quetzal 84 lt 1, Lomas del
                                 Bosque </span>
                           </p>
                           <p style="margin:0em 0em 0.36em 0em;"><span
                                 style="font-family:'Verdana';color:rgba(105,105,105,1);">Cuautitlan Izcalli, Estado de
                                 México</span></p>
                           <p style="margin:1.07em 0em 0.36em 0em;"><span
                                 style="font-family:'Verdana';color:rgba(105,105,105,1);">TELÉFONO: </span><span
                                 style="font-family:'Verdana';color:rgba(105,105,105,1);">+52 (55)5861 5137</span><br>
                                 <a href="https://api.whatsapp.com/send?phone=5215529815651&text=Hola%2C%20me%20interesar%C3%ADa%20tener%20m%C3%A1s%20informacion"><img src="images/whatsapp.gif"></img></a>
                                 </p>
                          

                           


                        </div>
                        <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                        <div style="clear:both;"></div>
                     </div>
                  </div>
                  <div class="clearfix visible-xs-block">
                  </div>
                  <div class="post_column col-lg-7 col-md-7 col-sm-7 col-xs-12">
                     <div class="ttr_Contact-Us_html_column02">
                        <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                        <div class="html_content">
                           <p><span
                                 style="font-family:'Titillium Web','Verdana';font-weight:600;font-size:1.429em;">Información
                                 de contacto</span></p>
                           <p style="margin:1.43em 0em 0.36em 0em;">
                           <form class="form-horizontal" role="form" method="post" action="contactos.php"
                              style="padding:0px 0px 0px 0px;float:left;">
                              <div class="form-group"><label class="col-sm-4 control-label required">Nombre</label>
                                 <div class="col-sm-8"><input type="text" name="nombre" class="form-control required"
                                       data-vali="novalidation" /></div>
                              </div>
                              <div class="form-group"><label class="col-sm-4 control-label required">Email</label>
                                 <div class="col-sm-8"><input type="text" name="email" class="form-control required"
                                       data-vali="email" /></div>
                              </div>
                              <div class="form-group"><label class="col-sm-4 control-label">País</label>
                                 <div class="col-sm-8"><input type="text" name="pais" class="form-control"
                                       data-vali="novalidation" /></div>
                              </div>
                              <div class="form-group"><label class="col-sm-4 control-label">Estado</label>
                                 <div class="col-sm-8"><input type="text" name="estado" class="form-control"
                                       data-vali="novalidation" /></div>
                              </div>
                              <div class="form-group"><label class="col-sm-4 control-label">Teléfono</label>
                                 <div class="col-sm-8"><input type="text" name="telefono" class="form-control"
                                       data-vali="novalidation" /></div>
                              </div>
                              <div class="form-group"><label class="col-sm-4 control-label">Mensaje</label>
                                 <div class="col-sm-8"><textarea name="mensaje" class="form-control comment"
                                       name="message" rows="4"></textarea></div>
                              </div>
                              <div class="form-group">
                                 <div class="col-sm-4 col-sm-offset-8"><input type="submit" rows="4" id="submit"
                                       name="submit" class="pull-right btn btn-md btn-primary" value="Aceptar" /></div>
                              </div>
                              <div class="clearfix"></div>
                              <div class="success"></div>
                              <div class="req_field"></div>
                              <div class="clearfix"></div>
                           </form>

                           </p>
                           <p>&nbsp;</p>
                        </div>
                        <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                        <div style="clear:both;"></div>
                     </div>
                  </div>
                  <div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
                  </div>
               </div>
               <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
            </div>
         </div>
         <div style="clear:both">
         </div>
      </div>
      <div style="height:0px;width:0px;overflow:hidden;"></div>
       <footer id="ttr_footer">
               <!--Inicio-->
               <div class="ttr_footerHome_html_row0 row">
                  <div class="post_column col-lg-3 col-md-6 col-sm-6 col-xs-12 col-lg-offset-3">
                     <div class="ttr_footerHome_html_column00">
                        <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                        <div class="html_content">
                           <p style="margin:0em 0em 0em 4.29em;">&nbsp;</p>
                           <p style="margin:0em 0em 0em 4.29em;"><br
                                 style="font-family:'Titillium Web','Arial';font-weight:600;font-size:1.429em;color:#03b403;" />
                           </p>
                           <p style="margin:0em 0em 0em 4.29em;"><a HREF="home.html" class="tt_link" target="_self"><span
                                    style="font-family:'Titillium Web','Arial';font-weight:600;font-size:1.429em;color:#03b403;">COMPAÑIA</span>
                           </p>
                           <p style="margin:1.43em 0em 0em 4.29em;"><a HREF="sectores.html" class="tt_link"
                                 target="_self"><span
                                    style="font-family:'Verdana';color:rgba(255,255,255,1);">SECTORES</span></a></p>
      
                           <p style="margin:0.71em 0em 0em 4.29em;"><a HREF="conceptos.html" class="tt_link"
                                 target="_self"><span
                                    style="font-family:'Verdana';color:rgba(255,255,255,1);">CONCEPTOS</span></a></p>
      
                           <p style="margin:0.71em 0em 0em 4.29em;"><a HREF="productos.html" class="tt_link"
                                 target="_self"><span
                                    style="font-family:'Verdana';color:rgba(255,255,255,1);">PRODUCTOS</span></a></p>
      
                           <p style="margin:0.71em 0em 0em 4.29em;"><a HREF="control-de-ruido.html" class="tt_link"
                                 target="_self"><span style="font-family:'Verdana';color:rgba(255,255,255,1);">CONTROL DE
                                    RUIDO</span></a></p>
      
                           <p style="margin:0.71em 0em 0em 4.29em;"><a HREF="clientes.php" class="tt_link"
                                 target="_self"><span
                                    style="font-family:'Verdana';color:rgba(255,255,255,1);">CLIENTES</span></a></p>
      
                           <p style="margin:0.71em 0em 0em 4.29em;"><a HREF="contactos.php" class="tt_link"
                                 target="_self"><span
                                    style="font-family:'Verdana';color:rgba(255,255,255,1);">CONTACTO</span></a></p>
      
                        </div>
                        <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                     </div>
                  </div>
                  <div class="clearfix visible-xs-block"></div>
      
                  <div class="clearfix visible-xs-block"></div>
                  <div class="post_column col-lg-3 col-md-6 col-sm-6 col-xs-12">
                     <div class="ttr_footerHome_html_column03">
                        <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                        <div class="html_content">
                           <p style="margin:0em 0em 0em 4.29em;">&nbsp;</p>
                           <p style="margin:0em 0em 0em 4.29em;"><br
                                 style="font-family:'Titillium Web','Arial';font-weight:600;font-size:1.429em;color:#03b403;" />
                           </p>
                           <p style="margin:0em 0em 0em 4.29em;"><span
                                 style="font-family:'Titillium Web','Arial';font-weight:600;font-size:1.429em;color:#03b403;">CONTACTO</span>
                           </p>
                           <p style="margin:1.43em 0em 0em 4.29em;"><span
                                 style="font-family:'Verdana';color:rgba(255,255,255,1);">TEL :- +52 5558615137</span></p>
                           <p style="margin:0.71em 0em 0em 4.29em;"><span
                                 style="font-family:'Verdana';color:rgba(255,255,255,1);">DIR :- Av. Quetzal 84 lt 1, Lomas
                                 del Bosque | Cuautitlan Izcalli, Estado de México.</span></p>
                           <p style="margin:0.71em 0em 0em 4.29em;"><span
                                 style="font-family:'Verdana';color:rgba(255,255,255,1);">EMAIL :-
                                 info@acusticaintegral.com.mx</span></p>
                        </div>
                        <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
                     </div>
                  </div>
                  <div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block"></div>
               </div>
               <br>
               <br>
               <div class="row">
                  <p style="color: white;text-align: center;">Importaciones Internacionales EKL SA de CV, importador y distribuidor exclusivo en México de Acústica Integral S.L.</p>
                  <p style="color: white;text-align: center;"><a href="mailto:info@eklinternacional.com" style="color:#038004; text-decoration: none;">info@eklinternacional.com</a> todas las imágenes y productos en esta página pertencen a Acústica Integral S.L. <a href="http://www.acusticaintegral.com" target="_blank" style="color:#038004; text-decoration: none;">www.acusticaintegral.com</a> </p>
                  <br>
                  <br>
               </div>
               <!--Fin-->
            </footer>
      <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-bottom-collapse: separate;"></div>
   </div>
   <script type="text/javascript">
      WebFontConfig = {
         google: { families: ['Titillium+Web:600', 'Titillium+Web'] }
      };
      (function () {
         var wf = document.createElement('script');
         wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.0.31/webfont.js';
         wf.type = 'text/javascript';
         wf.async = 'true';
         var s = document.getElementsByTagName('script')[0];
         s.parentNode.insertBefore(wf, s);
      })();
   </script>
</body>

</html>
