<?php
$toproot = '../../';
require_once('../../conexion.php');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Listado de Alumnos</title>
<link rel="stylesheet" type="text/css" href="../../style.css"  />
<script src="../../tmenu.js" type="text/javascript"></script>
<script src="../../jquery.js" type="text/javascript"></script>

</head>

<body>
	<div id="content" class="float-holder">
		<div id="cuadro">
			<div id="ini"><a href="../../index.php"><img src="../../images/inicio.jpg" /></a></div>
			<div id="men"><img src="../../images/menu.jpg" /></div>
			<div id="exit"><a href="../../exit.php"><img src="../../images/exit.jpg" /></a></div>
		</div><!-- fin del cuadro-->
		     <div id="content2">
              <?php include('../../menu.php'); ?>
              <div class="title">Reportes de Alumnos</div>
            </div>
<table width="840" border="0" align="center" bgcolor="#000000">
  <tr>
    <td width="830"><table width="833" border="0" align="center" bgcolor="#FFFFFF">
      <tr>
        <td valign="top">&nbsp;</td>
        <td></td>
      </tr>
      <tr>
        <td width="8" valign="top">&nbsp;</td>
        <td width="809"><div align="right">
        </div>
            <table width="821" align="center">
              
              <tr bgcolor="#F3F3F3">
                <td width="806" bordercolor="#000000" bgcolor="#F3F3F3"><br />
                  <table width="776" border="0">
                    <tr>
                      <td width="58">&nbsp;</td>
                      <td width="669">
						<form action="listado_alumno1.php" method="get" name="form1" target="_blank" id="form1">
							Grado: <select id="grado" name="grado">
								<?php
								
								$seleccionar = "SELECT * FROM grado WHERE status = 'Alta'";
								$ejecutar = mysql_query($seleccionar);
                        
                        //echo '<option value="0">Seleccione </option>';
                        //por cada registro encontrado en la tabla me genera un <option>
                        while ($arreglo = mysql_fetch_array($ejecutar))
                        {
                        	echo '<option value="' . $arreglo['id_grado'] . '" >' . $arreglo['nombre'] . '</option>';
                        }
                        
                        ?>
						  </select> Secci&oacute;n: 
                          <select id="seccion" name="seccion">
												<?php
                        
                        $seleccionar = "SELECT * FROM secciones WHERE id_grado = 1";
                        $ejecutar = mysql_query($seleccionar);
                        
                        //echo '<option value="0">Seleccione </option>';
                        //por cada registro encontrado en la tabla me genera un <option>
                        while ($arreglo = mysql_fetch_array($ejecutar))
                        {
                        	echo '<option value="' . $arreglo['id_seccion'] . '" >' . $arreglo['nombre_seccion'] . '</option>';
                        }
                        
                        ?>
						  </select>
						  
                           A&ntilde;o:
						  <select name="anio">
						  <?php
						  
						  for ($i_year = date('Y'); $i_year >= 2010; $i_year--)
						  {
							echo '<option value="' . $i_year . '">' . $i_year . '</option>';
						  }
						  
						  ?>
						  </select>
						  
						  <br /><br />
                          <label>
                                            <input type="submit" name="Submit" value="Ver Listado..." />
                          </label>
                      </form> 
                          
						  <br /><br />
						                      </td>
                      <td width="27">&nbsp;</td>
                    </tr>
                  </table>
                    <br />
                   </td>
              </tr>
              </table>
          <table width="820">
              <tr>
                <td width="810"></td>
              </tr>
          </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<script language="JavaScript" type="text/javascript">
document.formulario.carne.focus();
</script>


<script language="JavaScript" type="text/javascript">

function buscar(url) {  
ventana = open(url,"ventana","scrollbars=yes,status=no,toolbar=no,directories=no,menubar=no,resizable=yes,width=350,height=425")  
}  

$(function() {
	$('#grado').change(function() {
		$.ajax({
			type: "POST",
			url: "../../actseccion.php",
			data: "grado=" + this.value,
			success: function(msg) {
				$('#seccion').html(msg);
			}
 });
	});
});

</script>