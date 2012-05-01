<?php
require_once('../conexion.php');
?>

<div id="content" class="float-holder">
			<div id="cuadro">
			<div id="ini"><a href="../index.php"><img src="../images/inicio.jpg" /></a></div>
			<div id="men"><img src="../images/menu.jpg" /></div>
			<div id="exit"><a href="../exit.php"><img src="../images/exit.jpg" /></a></div>
		</div><!-- fin del cuadro-->
	<div id="content2">
	<?php include('../menu.php'); ?>
	<?php encabezado('Ingreso de Tiempo de Examenes');?>
	<div class="title">Ingreso de Secciones</div>
	</div>
	<form action="cod_secciones.php" method="post" name="formulario" id="formulario" onsubmit="return validar();">
            <table >
              <tr>
                <td width="10">&nbsp;</td>
                <td><table width="811" border="0" align="center">
                    <tr>
                      <td></td>
                    </tr>
                    <tr>
                      <td><div align="right">
                      </div></td>
                    </tr>
                    <tr>
                      <td></td>
                    </tr>
                    <tr>
                      <td >
                      	<table  align="left">
                          
                          <tr>
                            <td class="text1">&nbsp;</td>
                            <td class="text1"><div align="right">Grado:</div></td>
                            <td><?php
                        
                        $seleccionar = "SELECT * FROM grado WHERE status = 'Alta'";
                        $ejecutar = mysql_query($seleccionar);
                        
                        echo '<select name="grado" >';
                        
                        //echo '<option value="0">Seleccione </option>';
                        //por cada registro encontrado en la tabla me genera un <option>
                        while ($arreglo = mysql_fetch_array($ejecutar))
                        {
                        	echo '<option value="' . $arreglo['id_grado'] . '" >' . $arreglo['nombre'], $arreglo['seccion'] . '</option>';
                        }
                        
                        echo '</select>';
                        
                        ?></td>
                          </tr>
                          <tr>
                            <td width="10" class="text1">&nbsp;</td>
                            <td width="183" class="text1"><div align="right" class="text1">Secci&oacute;n:</div></td>
                            <td width="438"><label>
                              <input name="seccion" type="text" id="seccion" autocomplete="off" />
                            </label></td>
                          </tr>
                          <tr>
                            <td class="text1">&nbsp;</td>
                            <td class="text1">&nbsp;</td>
                            <td><table width="290" border="0">
                                <tr>
                                  <td></td>
                                  <td><label>
                                    <div align="right">
                                      <input type="submit" name="Submit2" value="Guardar" />
                                      </div>
                                  </label></td>
                                </tr>
                            </table>

                    <p><br />
                    </p>
                    <table width="777" border="0">
                      <tr>
                        <td width="102">
						<?php 
						$seleccionar = "SELECT nombre, nombre_seccion FROM secciones s, grado g where g.id_grado = s.id_grado AND g.status = 'Alta'";
						$ejecutar = mysql_query($seleccionar);
						
						while($arreglo = mysql_fetch_assoc($ejecutar))
						{
						?></td><tr>
                        <td width="188"><?php echo $arreglo['nombre']; ?></td>
                        <td width="210"><?php echo $arreglo['nombre_seccion']; ?></td>
                        <td width="259"><?php }?></td>
                      </tr>
                    </table>
                    <p>&nbsp;</p>
                    <p>&nbsp; </p></td>
              </tr>
            </table>
        </form></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
</body>
</html>
<script language="JavaScript" type="text/javascript">
document.formulario.seccion.focus();
</script>


<script language="JavaScript" type="text/javascript">

function validar(){
if(!confirm("Seguro que Desea Guardar el Grado y Seccion?")){
return false;
}
MM_validateForm('grado','','R','seccion','','R');return document.MM_returnValue;
}
</script>


