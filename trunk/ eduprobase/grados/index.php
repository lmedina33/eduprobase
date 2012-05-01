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
	<div class="title">Ingreso de Grados</div>
	</div>
<table width="200" border="0" align="center" >
  <tr>
    <td><table width="840" border="0" align="center" >
      <tr>
        <td width="830"><form action="cod_grado.php" method="post" name="formulario" id="formulario" onsubmit="return validar();">
            <table width="833" border="0">
              <tr>
                <td width="10">&nbsp;</td>
                <td width="813"><table width="811" border="0" align="center">
                    <tr>
                      <td></td>
                    </tr>
                    <tr>
                      <td><div align="right">
                          <table width="353" border="0">
                            <tr>
                              <td width="24">&nbsp;</td>
                              <td width="24">&nbsp;</td>
                              <td width="24">&nbsp;</td>
                              <td width="172">&nbsp;</td>
                              <td width="87"></td>
                            </tr>
                          </table>
                      </div></td>
                    </tr>
                    <tr>
                      <td width="789" bgcolor="#4682B4"><div class="title"> Ingreso de Grados y Secciones </div></td>
                    </tr>
                    <tr>
                      <td ><table width="645" border="0" align="left">
                          <tr>
                            <td width="10" class="text1">&nbsp;</td>
                            <td width="183"><div align="right" class="text1">
                                <p class="tex1">Nombre del Grado: </p>
                            </div></td>
                            <td width="438"><label>
                              <input name="grado" type="text" id="grado" size="60" autocomplete="off" />
                            </label></td>
                          </tr>
                          <tr>
                            <td class="text1">&nbsp;</td>
                            <td class="text1"><div align="right" class="tex2"></div></td>
                            <td><label></label></td>
                          </tr>
                          <tr>
                            <td class="text1">&nbsp;</td>
                            <td class="text1"><div align="right" class="tex1">Status:</div></td>
                            <td><label>
                              <select name="status" id="status" >
                                <option value="Alta">Alta</option>
                                <option value="Baja">Baja</option>
                              </select>
                            </label></td>
                          </tr>
                          <tr>
                            <td class="text1">&nbsp;</td>
                            <td class="text1">&nbsp;</td>
                            <td><table width="290" border="0">
                                <tr>
                                  <td></td>
                                  <td><label>
                                    <input type="submit" name="Submit2" value="Guardar" />
                                  </label></td>
                                </tr>
                            </table></td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
                    <br />
                    <table width="817" border="0">
                      <tr>
                        <td bgcolor="#999999"><div align="center" class="Estilo4">Visualizaci&oacute;n de Grados y Secciones Actuales </div></td>
                      </tr>
                      <tr>
                        <td class="title"><table width="805" border="0">
                            <tr>
                              <td width="10">&nbsp;</td>
                              <td width="528" class="text1"><div align="center" class="Estilo4">Grado</div></td>
                              <td width="100"><div align="center" class="text1 Estilo4">Secci&oacute;n</div></td>
                              <td width="149"><div align="center" class="Estilo5">Status</div></td>
                            </tr>
                        </table></td>
                      </tr>
                    </table>
                  <iframe src="grados.php" width="100%" height="200" align="center"><br />
                    <br />
                  </iframe></td>
              </tr>
            </table>
        </form></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<script language="JavaScript" type="text/javascript">
document.formulario.grado.focus();
</script>


<script language="JavaScript" type="text/javascript">

function validar(){
if(!confirm("Seguro que Desea Guardar el Grado y Seccion?")){
return false;
}
MM_validateForm('grado','','R');return document.MM_returnValue;
}
</script>


