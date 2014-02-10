<!DOCTYPE html>
	<html lang="es">
	<head>
	<title>Hoja de vida de: <?php print($cv->nombre); ?></title>
	<meta charset="utf-8" />
  
</head>
<body>
  <div id="caja_flotante" style="margin-top: 0px;">
    <a href="javascript:imprSelec('muestra')" title="Imprimir" href="#">
      <img src="imprimir.png" id="imagen">
    </a>
  </div>
<div id="muestra">    
  <link rel="stylesheet" type="text/css" href="estilo.css" media="screen, print" />
    <header>
    	<img src="logoUTPL.jpg">
    </header>

    <section id="headerCV">
       <article id="titulo">
           <h2>DIRECCI&Oacute;N GENERAL DE RELACIONES INTERINSTITUCIONALES<h2>
           <h2>UNIDAD DE EX ALUMNOS<h2>    
       </article>

       <article id="logo">
       		<!--<img src="<?php $cv->logo; ?>">-->
          <img src="<?php print($cv->imagen); ?>">
       </article>

       <article id="datosPersonales">
       		<h3>Datos personales</h3>
          <hr />
       		<ul>
       			<li><label>Nombres completos:</label><p><?php print($cv->nombres); ?></p></li>
       			<li><label>Estado civil: </label><p><?php print($cv->estadoCivil); ?></p></li>
       			<li><label>Direcci&oacute;n de domicilio: </label><p><?php print($cv->direccion); ?></p></li>
       			<li><label>Ciudad: </label><p><?php print($cv->ciudad); ?></p></li>       		
       			<li><label>Provincia: </label><p><?php print($cv->provincia); ?></p></li>       	
       			<li><label>Correo electr&oacute;nico: </label><p><?php print($cv->mail); ?></p></li>
       			<li><label>Convencional: </label><p><?php print($cv->convencional); ?></p></li>       
       			<li><label>Celular: </label><p><?php print($cv->celular); ?></p></li>       
       			<li><label>Licencia para conducir: </label><p><?php print($cv->licencia); ?></p></li>
          <ul>
       </article>
    </section>

<section>
  <article id="estudios">
    <h3>Estudios</h3>
    <hr />
    
    <h4>Colegio</h4>    
    <div class="educacion"> 
      <ul>
        <li><label>Nombre: </label><p><?php print($cv->nombreColegio); ?></p></li>
        <li><label>Diploma: </label><p><?php print($cv->diplomaColegio); ?></p></li>
        <li><label>Ciudad: </label><p><?php print($cv->ciudadColegio); ?></p></li>
        <li><label>Provincia: </label><p><?php print($cv->provinciaColegio); ?></p></li>
      </ul>
    </div>
    <p></p>
    <h4>Universidad</h4>
    <div class="educacion">
      <ul>
        <li><label>Nombre: </label><p><?php print($cv->nombreU); ?></p></li>
        <li><label>Ciudad: </label><p><?php print($cv->ciudadU); ?></p></li>
        <li><label>Provincia: </label><p><?php print($cv->provinciaU); ?></p></li>
        <li><label>A&ntilde;o de titulaci&oacute;n: </label><p><?php print($cv->anioTU); ?></p></li>
        <li><label>T&iacute;tulo obtenido: </label><p><?php print($cv->tituloU); ?></p></li>
      </ul>
    </div>

    <h4>Estudios de cuarto nivel</h4>
    <div class="educacion">
      <ul>
        <li><label>Nombre de la Universidad: </label><p><?php print($cv->nombreCN); ?></p></li>
        <li><label>Ciudad: </label><p><?php print($cv->ciudadCN); ?></p></li>
        <li><label>Provincia: </label><p><?php print($cv->provinciaCN); ?></p></li>
        <li><label>A&ntilde;o de titulaci&oacute;n: </label><p><?php print($cv->anioTCN); ?></p></li>
        <li><label>T&iacute;tulo obtenido: </label><p><?php print($cv->tituloCN); ?></p></li>
      </ul>
    </div>
    <h4>Otros estudios</h4>
    <div class="educacion">
      <ul>
        <li><label>Nombre de la instituci&oacute;n: </label><p><?php print($cv->nombreOE); ?></p></li>
        <li><label>Ciudad: </label><p><?php print($cv->ciudadOE); ?></p></li>
        <li><label>Provincia: </label><p><?php print($cv->provinciaOE); ?></p></li>
        <li><label>A&ntilde;o de titulaci&oacute;n: </label><p><?php print($cv->anioTOE); ?></p></li>
        <li><label>T&iacute;tulo obtenido: </label><p><?php print($cv->titulacionOE); ?></p></li>
      </ul>
    </div>
  </article>

  <div class="separador"></div>

  <article id="idiomas">
     <h3>Idiomas</h3>
    <hr />
    <table class="idioma">
      <tr class="titulo_idioma">
        <td>IDIOMAS</td>
        <td>Lectura(1/10)</td>
        <td>Escritura(1/10)</td>
        <td>Comprensi&oacute;n(1/10)</td>
      </tr>

      <?php 
        if(!empty($cv->idiomas)){
          foreach ($cv->idiomas as $idioma) {
          ?>
          <tr class="filas">
            <td class="oscuro"><?php print($idioma->nombre); ?></td>
            <td><?php print($idioma->lectura); ?></td>
            <td><?php print($idioma->escritura); ?></td>
            <td><?php print($idioma->comprension); ?></td>
          </tr>
          <?php
          }
        }
      ?>     
      
    </table>
  </article>
  <div class="separador"></div>
  <div class="separador"></div>
  <article id="empleos">
    <h3>Empleos recientes</h3> 
    <hr /> 
      <ul>
        <li><label>Empleador: </label><p><?php print($cv->empleador); ?></p></li>
        <li><label>Ciudad: </label><p><?php print($cv->ciudadE); ?></p></li>
        <li><label>Provincia: </label><p><?php print($cv->provinciaE); ?></p></li>
        <li><label>Tel&eacute;fono: </label><p><?php print($cv->telefonoE); ?></p></li>
        <li><label>Posici&oacute;n: </label><p><?php print($cv->posicionE); ?></p></li>
        <li><label>Fecha: </label><p><?php print($cv->fechaE); ?></p></li>
        <li><label>Supervisor: </label><p><?php print($cv->supervisorE); ?></p></li>
        <li><label>Raz&oacute;n por la cual dej&oacute; el trabajo: </label><p><?php print($cv->razonE); ?></p></li>      
      </ul> 
    <div class="separador"></div>

      <ul>
        <li><label>Empleador1: </label><p><?php print($cv->empleador1); ?></p></li>
        <li><label>Ciudad: </label><p><?php print($cv->ciudadE1); ?></p></li>
        <li><label>Provincia: </label><p><?php print($cv->provinciaE1); ?></p></li>
        <li><label>Tel&eacute;fono: </label><p><?php print($cv->telefonoE1); ?></p></li>
        <li><label>Posici&oacute;n: </label><p><?php print($cv->posicionE1); ?></p></li>
        <li><label>Fecha: </label><p><?php print($cv->fechaE1); ?></p></li>
        <li><label>Supervisor: </label><p><?php print($cv->supervisorE1); ?></p></li>
        <li><label>Raz&oacute;n por la cual dej&oacute; el trabajo: </label><p><?php print($cv->razonE1); ?></p></li>      
      </ul> 
    <div class="separador"></div>
      <ul>
        <li><label>Empleador2: </label><p><?php print($cv->empleador2); ?></p></li>
        <li><label>Ciudad: </label><p><?php print($cv->ciudadE2); ?></p></li>
        <li><label>Provincia: </label><p><?php print($cv->provinciaE2); ?></p></li>
        <li><label>Tel&eacute;fono: </label><p><?php print($cv->telefonoE2); ?></p></li>
        <li><label>Posici&oacute;n: </label><p><?php print($cv->posicionE2); ?></p></li>
        <li><label>Fecha: </label><p><?php print($cv->fechaE2); ?></p></li>
        <li><label>Supervisor: </label><p><?php print($cv->supervisorE2); ?></p></li>
        <li><label>Raz&oacute;n por la cual dej&oacute; el trabajo: </label><p><?php print($cv->razonE2); ?></p></li>      
      </ul> 
    <div class="separador"></div>
      <ul>
        <li><label>Empleador3: </label><p><?php print($cv->empleador3); ?></p></li>
        <li><label>Ciudad: </label><p><?php print($cv->ciudadE3); ?></p></li>
        <li><label>Provincia: </label><p><?php print($cv->provinciaE3); ?></p></li>
        <li><label>Tel&eacute;fono: </label><p><?php print($cv->telefonoE3); ?></p></li>
        <li><label>Posici&oacute;n: </label><p><?php print($cv->posicionE3); ?></p></li>
        <li><label>Fecha: </label><p><?php print($cv->fechaE3); ?></p></li>
        <li><label>Supervisor: </label><p><?php print($cv->supervisorE3); ?></p></li>
        <li><label>Raz&oacute;n por la cual dej&oacute; el trabajo: </label><p><?php print($cv->razonE3); ?></p></li>      
      </ul> 
  </article>

  <div class="separador"></div>
  <div class="separador"></div>
  <article id="referencias">
    <h3>Referencias personales</h3>
    <hr />
    <ul>
      <li><label>Referencia(1)</label></li>
      <li><label>Nombres: </label><p><?php print($cv->nombreRef1); ?></p></li>      
      <li><label>Tel&eacute;fono: </label><p><?php print($cv->telefonoRef1); ?></p></li>
      <li><label>Relaci&oacute;n: </label><p><?php print($cv->relacionRef1); ?></p></li>
      <li><label>Direcci&oacute;n: </label><p><?php print($cv->direccionRef1); ?></p></li>
    </ul>
  <div class="separador"></div>
    <ul>
      <li><label>Referencia(2)</label></li>
      <li><label>Nombres: </label><p><?php print($cv->nombreRef2); ?></p></li>      
      <li><label>Tel&eacute;fono: </label><p><?php print($cv->telefonoRef2); ?></p></li>
      <li><label>Relaci&oacute;n: </label><p><?php print($cv->relacionRef2); ?></p></li>
      <li><label>Direcci&oacute;n: </label><p><?php print($cv->direccionRef2); ?></p></li>
    </ul>
  <div class="separador"></div>
    <ul>
      <li><label>Referencia(3)</label></li>
      <li><label>Nombres: </label><p><?php print($cv->nombreRef3); ?></p></li>      
      <li><label>Tel&eacute;fono: </label><p><?php print($cv->telefonoRef3); ?></p></li>
      <li><label>Relaci&oacute;n: </label><p><?php print($cv->relacionRef3); ?></p></li>
      <li><label>Direcci&oacute;n: </label><p><?php print($cv->direccionRef3); ?></p></li>
    </ul>
  </article>
  <div class="separador"></div>
  <div class="separador"></div>
  <article id="discapacidad">
    <h3>Discapacidad</h3>
    <hr />
    <ul>
      <li><label>Resumen: </label><p><?php print($cv->resumenDisc); ?></p></li>
    </ul>
  </article>
  <div class="separador"></div> 
  <div class="separador"></div>
    <article id="discapacidad">
    <h3>Habilidades</h3>
    <hr />
    <ul>
      <li><label>Resumen: </label><p><?php print($cv->resumen); ?></p></li>
    </ul>
  </article>
<div class="separador"></div>
</section>
</div>
</body>

<script type="text/javascript">
function imprSelec(muestra)
  {
    var ficha=document.getElementById(muestra);
    var ventimp=window.open(' ','popimpr');
    ventimp.document.write(ficha.innerHTML);
    ventimp.document.close();
    ventimp.print();
    ventimp.close();
  }
</script>
</html>
