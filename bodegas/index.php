<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <title>Bodegas - SmartBrix.</title>
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="../js/index.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="icon" type="image/png" href="../logo.png" />
  </head>
  <body>
    <div class="banner">
      <div class="margen-contenido">
        <div class="logo-banner">
          <!-- <h1>SMARTBRIX</h1> -->
          <a href="../"><img src="../images/logo-negro.png" alt=""></a>
        </div>
        <div class="nav-banner">
          <a href="../nosotros/">Nosotros</a>
          <a href="../salones" class="smartbrix">Instituciones Educativas</a>
          <a href="../oficinas">Oficinas</a>
          <a href="../campamentos">Campamentos de Obra</a>
          <a href="../bodegas" class="smartbrix">Bodegas</a>
          <a href="../ventajas">Ventajas</a>
          <a href="../proyectos">Proyectos</a>
        </div>
        <div id="menu" class="menu-banner">
          <h1>Menú</h1>
        </div>
        <div id="contacto" class="contacto-banner">
          <h1>Contacto</h1>
        </div>
      </div>
    </div>
      <div class="contenido-con-imagen">
        <div class="banner-imagen">
          <img src="../images/Fotos/Finales/bodegas.jpeg" alt="" style="object-position: 0 -120px;">
          <div class="margen-contenido">
            <div class="texto-imagen">
              <h3>Bodegas y Carpas</h3>
              <p>Nuestras bodegas te ofrecen soluciones seguras y convenientes de acuerdo a tus necesidades.</p>
            </div>
            <a href="../images/Fotos/Finales/salones.jpg" download><div class="boton-descarga">
              <h3>Descargar PDF</h3>
            </div></a>
          </div>
        </div>
        <div class="contenido-vista-principal">
          <div class="margen-contenido">
            <div class="contenido-info-vista-principal">
              <div class="texto-info-vista-principal">
                <p>SmartBrix tenemos la solución adecuada para cada ocasión.</p>
                <p>Gracias a nuestro sistema prefabricado podemos ofrecer estructuras metálicas con gran
                  variedad de tamaños, formas y opciones de configuración para que todos los deseos se
                  puedan resolver de la manera más rápida y eficaz.
                </p>
                <p>Al no necesitar columnas internas nuestras carpas y bodegas resultan la mejor opción para
                optimizar cualquier espacio.
                </p>
              </div>
              <div class="listas-info-vista-principal">
                <div class="listas">
                  <div class="lista-izquierda">
                    <h5>Aplicaciones:</h5>
                    <ul>
                      <li>Hall de eventos</li>
                      <li>Showrooms</li>
                      <li>Bodegas de almacenamiento</li>
                      <li>Edificios industriales</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="margen-formulario">
        <div class="margen-contenido">
          <div id="formulario" class="contacto">
            <div class="formulario">
              <div class="texto-contacto">
                <span>Solicita</span>
                <span><strong>Tu cotización</strong></span>
              </div>
              <form id="contactForm" class="form" action="./" method="post">
                <input type="text" name="name" value="" placeholder="Nombre: ">
                <input type="text" name="telephone" value="" placeholder="Teléfono: ">
                <input type="text" name="email" value="" placeholder="E-mail: ">
                <input type="text" name="country" value="" placeholder="País">
                <textarea name="description" rows="4" cols="56" placeholder="Descripción de la necesidad"></textarea>
                <button
                  class="g-recaptcha"
                  data-sitekey="6Leq2TQUAAAAAMrEtsMqzn_L4F9dde0uEYD-P4hd"
                  data-callback="onSubmit">
                  Enviar
                </button>
              </form>
              <div class="telefono-contacto">
                <span><i class="fa fa-phone fa-lg" aria-hidden="true"></i> (1) 805 2677 Colombia</span>
                <span><i class="fa fa-phone fa-lg" aria-hidden="true"></i> +507 221 6301 Panamá</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="menu-responsive" class="menu-banner-responsive">
        <ul>
          <li><a href="../nosotros/">Nosotros</a></li>
          <li><a href="../salones">Instituciones Educativas</a></li>
          <li><a href="../oficinas">Oficinas</a></li>
          <li><a href="../campamentos">Campamentos de Obra</a></li>
          <li><a href="../bodegas" class="smartbrix">Bodegas</a></li>
          <li><a href="../ventajas">Ventajas</a></li>
          <li><a href="../proyectos">Proyectos</a></li>
        </ul>
      </div>
      <div class="sobre-footer">
        <div id="datos-colombia" class="margen-contenido">
          <div  class="local-footer">
            <span><i class="fa fa-map-marker fa-2x smartbrix" style="padding-top:4px;"aria-hidden="true"></i></span>
            <span><strong>Oficina Bogotá, Colombia</strong><br> Calle 62 #7-52 Bogotá, Colombia.</span>
          </div>
          <div class="hora-footer">
            <span><i class="fa fa-clock-o fa-2x" aria-hidden="true"></i></span>
            <span>8:30 am - 5:30 pm</span>
          </div>
          <div class="telefono-footer">
            <span><i class="fa fa-phone fa-2x smartbrix" aria-hidden="true"></i></i></span>
            <span>(1) 805 2677</span>
          </div>
          <div class="boton-footer">
            <button id="boton-colombia" type="button" name="button">Ubicación Panamá</button>
          </div>
        </div>
        <div id="datos-panama" class="margen-contenido">
          <div class="local-footer">
            <span><i class="fa fa-map-marker fa-2x smartbrix" style="padding-top:4px;"aria-hidden="true"></i></span>
            <span><strong>Oficina Panamá, Panamá</strong><br> Vía España - Calle Tercera Rio Abajo Panamá, Panamá.</span>
          </div>
          <div class="hora-footer">
            <span><i class="fa fa-clock-o fa-2x" aria-hidden="true"></i></span>
            <span>8:00 am - 5:00 pm</span>
          </div>
          <div class="telefono-footer">
            <span><i class="fa fa-phone fa-2x smartbrix" aria-hidden="true"></i></i></span>
            <span>+507 221 6301</span>
          </div>
          <div class="boton-footer">
            <button id="boton-panama" type="button" name="button">Ubicación Bogotá</button>
          </div>
        </div>
      </div>
      <div class="footer">
        <div class="contenido-footer">
          <div class="margen-contenido">
            <div class="columna-1 hb">
              <a href="../oficinas">Oficinas</a>
              <a href="../bodegas">Bodegas</a>
              <a href="../salones">Instituciones Educativas</a>
            </div>
            <div class="columna-2 hb">
              <a href="../campamentos">Campamentos de Obra</a>
              <a href="../ventajas">Ventajas</a>
              <a href="../proyectos">Proyectos</a>
            </div>
            <div class="columna-3 hb">
              <h4>Contáctanos</h4>
              <a href="https://www.facebook.com/SmartbrixEspaciosModulares/"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
              <a href="https://co.linkedin.com/company/smartbrix-espacios-modulares-sas"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>
              <a href="https://www.youtube.com/channel/UCfqe6KzmFbBdMv31OdVMniw"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a>
            </div>
            <div class="fila-1 hb">
              <span>©2017 SmartBrix Espacios Modulares</span>
              <a href="../privacidad">Política de privacidad</a>
              <a href="../trabaja">Trabaja con nosotros</a>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>
<?php include_once('../sendmail.php'); ?>
