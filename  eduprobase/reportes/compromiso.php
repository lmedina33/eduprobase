<?php

require_once("../conexion.php");

$id_alumno = $_GET['id_alumno'];

$seleccionar = "SELECT * FROM alumno a WHERE a.id_alumno = '$id_alumno' ";
$ejecutar = mysql_query($seleccionar); // || die (mysql_error());

if($arreglo = mysql_fetch_assoc($ejecutar))
{
	
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Compromiso de Responsabilidad de Estudios</title>

<style type="text/css">
<!--
.text1{ font-family:Tahoma; font-size:11px;}

.Estilo6 {font-size: 24px}
.Estilo8 {
	font-size: 18px;
	font-weight: bold;
}
.Estilo10 {font-size: 16px}
-->
</style>
</head>

<body>
<table width="792" border="0">
  <tr>
    <td width="23">&nbsp;</td>
    <td width="729"><table width="754" border="0">
      <tr>
        <td width="150"><div align="center">LOGOTIPO</div></td>
        <td width="594" valign="top"><div align="center"><br class="Estilo6" />
            <span class="Estilo8">COLEGIO MIXTO DE EDUCACION MEDIA CON ORIENTACION UNIVERSITARIA</span> <br />
            <span class="Estilo10">&quot;C.M.E.M.O.U.&quot;</span></div></td>
      </tr>
    </table>    </td>
    <td width="18">&nbsp;</td>
  </tr>
  <tr>
    <td height="821">&nbsp;</td>
    <td><p align="center"><br />
        <strong>COMPROMISO DE RESPONSABILIDAD DE ESTUDIOS </strong></p>
      <p align="justify">En Santa Elena, Pet&eacute;n, el d&iacute;a <?php echo date('d');?> de _______________de <?php echo date('Y'); ?>,ante&nbsp; mi, el( la) infrascrito(a) Director(a) del Colegio Mixto de Educaci&oacute;n Media con Orientaci&oacute;n Universitaria, se present&oacute; <?php echo $arreglo['encargado'];?>  mayor de edad, con C&eacute;dula de Vecindad No. de Orden <?php echo $arreglo['orden']; ?> y de Registro <?php echo $arreglo['registro']; ?> manifiesta&nbsp; que&nbsp; es&nbsp; <?php $arreglo['emergencia']; ?> del&nbsp; (de la) alumno <?php echo $arreglo['nombre_alumno'];?><?php echo " , "?><?php echo $arreglo['apellido']; ?> de&nbsp; <?php echo $arreglo['edad']; ?> de&nbsp; edad,&nbsp; cursante&nbsp; del <?php echo $arreglo['id_grado'];?> con Orientaci&oacute;n en Computaci&oacute;n, quienes por este acto convienen SUSCRIBIR EL PRESENTE COMPROMISO DE RESPONSABILIDADES DE ESTUDIO, de acuerdo a las cl&aacute;usulas que se se&ntilde;alan en los siguientes puntos: PRIMERO: El (la) alumno (a)<?php echo $arreglo['nombre_alumno'];?><?php echo " , "?><?php echo $arreglo['apellido']; ?> se compromete a lo siguiente:<br />
          <br />
         &nbsp;&nbsp;&nbsp;&nbsp;a) Cumplir con todas las obligaciones que en su calidad de alumno le sean requeridas por las autoridades educativas y espec&iacute;ficamente por el (la) Director (a) del Colegio, Personal T&eacute;cnico-Administrativo, Administrativo y Catedr&aacute;ticos. <br />
         <br />
        &nbsp;&nbsp;&nbsp;&nbsp;b) Respetar a las Autoridades T&eacute;cnico-Administrativas, Administrativas, Docentes y Servicio. <br />
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;c) Asistir con puntualidad a sus clases y actividades programadas por la Direcci&oacute;n del Establecimiento, en caso de ausencia presentar excusa por escrito firmada por el padre, madre o encargado. <br />
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;d) Observar buena conducta en todos los actos, tanto dentro como fuera del establecimiento. <br />
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;e) Presentarse debidamente uniformado, (CAMISA y BLUSA), o playera del Colegio. <br />
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;f) Colaborar con mantener en buenas condiciones el edificio, mobiliario y equipo del establecimiento. <br />
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;g) Pagar &iacute;ntegramente el valor del equipo, &uacute;tiles y mobiliario, de cuya p&eacute;rdida o deterioro resulten responsables. <br />
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;h) Respetar nuestros&nbsp; S&iacute;mbolos Patrios, participar en desfiles, actos y eventos de car&aacute;cter c&iacute;vico, sociales y deportivos que se programen en el establecimiento y en la comunidad. <br />
        <br />
      &nbsp;&nbsp;&nbsp;&nbsp;i) Cumplir fielmente con el Reglamento de Disciplina&nbsp; del establecimiento.</p>
      <p align="justify">SEGUNDO: El (la) se&ntilde;or (a) <?php echo $arreglo['encargado'];?> Se compromete a :<br />
        <br /> 
      &nbsp;&nbsp;&nbsp;&nbsp;a) Velar porque su hijo (a) cumpla con las cl&aacute;usulas contenidas en el punto anterior del presente compromiso y a la vez responder mancomunadamente con el educando de lo prescrito en la cl&aacute;usula &ldquo;g&rdquo; del punto primero. <br />
      <br />
      &nbsp;&nbsp;&nbsp;&nbsp;b) Pagar su colegiatura por anticipado en un plazo de cinco d&iacute;as de cada mes en el Colegio o Banco&nbsp; que se designe. <br />
      <br />
      &nbsp;&nbsp;&nbsp;&nbsp;c) Presentarse a la Direcci&oacute;n del establecimiento u &oacute;rganos de administraci&oacute;n cuando su presencia sea requerida. <br />
      <br />
      &nbsp;&nbsp;&nbsp;&nbsp;d) No permitir que los alumnos traigan al establecimiento objetos de valor ni excesivas cantidades de dinero. <br />
      <br />
      &nbsp;&nbsp;&nbsp;&nbsp;e) Presentarse mensualmente al establecimiento para ver el avance de aprendizaje y comportamiento de su hijo. <br />
      <br />
      &nbsp;&nbsp;&nbsp;&nbsp;f) Efectuar los pagos de inscripci&oacute;n y colegiatura correspondientes al ciclo escolar cursado, comprendiendo del mes de enero a octubre, seg&uacute;n lo establece la Resoluci&oacute;n respectiva, MAS el pago de Computaci&oacute;n, la cual se cursar&aacute; en una academia particular o Laboratorio de Computaci&oacute;n del Colegio.<br />
      <br />
      TERCERO: Para garantizar la buena disciplina del establecimiento, as&iacute; como para sancionar las faltas en que incurra el alumno, la Direcci&oacute;n del mismo podr&aacute; hacer uso de las sanciones siguientes:<br />
      <br />      
      &nbsp;&nbsp;1&ordm;. Amonestaci&oacute;n Verbal <br />
      &nbsp;&nbsp;2&ordm;. Amonestaci&oacute;n Escrita <br />
      &nbsp;&nbsp;3&ordm;. Suspensi&oacute;n de estudios por un per&iacute;odo no mayor de un mes, y <br />
      &nbsp;&nbsp;4&ordm;. Cancelaci&oacute;n de la matr&iacute;cula. &nbsp; <br />
      <br />
      Estas sanciones ser&aacute;n consideradas y aplicadas seg&uacute;n la gravedad de la falta o su reincidencia, de lo cual se notificar&aacute; al Padre, Madre o Encargado. &nbsp; <br />
      <br />
      CUARTO: Cuando el alumno sea mayor de edad y cometa actos que sean constitutivos de faltas y delitos, dentro o fuera del establecimiento educativo, ser&aacute; procesado conforme las leyes del Pa&iacute;s. &nbsp; <br />
      <br />
      QUINTO: Los suscritos, plenamente conscientes del contenido, alcance o efecto del presente COMPROMISO, lo aceptamos y firmamos de conformidad. <br />
      <br />
      </p>
      <table width="728" border="0">
        <tr>
          <td><div align="center">(f)______________________________</div></td>
          <td><div align="center">(f)______________________________</div></td>
        </tr>
        <tr>
          <td><div align="center" class="text1"><?php echo $arreglo['nombre_alumno'];?><?php echo ","?><?php echo $arreglo['apellido'];?></div></td>
          <td><div align="center" class="text1"><?php echo $arreglo['encargado'];?></div></td>
        </tr>
      </table>      <p align="justify">&nbsp;</p>
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
