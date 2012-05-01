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
	<?php encabezado('Mantenimiento');?>
	<div class="title">Mantenimiento</div>
	</div>
<table width="200" border="0" align="center" >
  <tr>
    <td><table width="800" border="0" align="center" >
      <tr>
        <td width="800"><form action="../historial/historial.php" method="get" name="formulario" id="formulario" onsubmit="MM_validateForm('carne','','R');return document.MM_returnValue">
            <table width="800" border="0" align="center">
              <tr>
                <td valign="top">&nbsp;</td>
                <td></td>
              </tr>
              <tr>
                <td width="8" valign="top"></td>
                <td width="800"><div align="right">
                    <table width="353" border="0">
                      <tr>
                        <td width="24">&nbsp;</td>
                        <td width="10">&nbsp;</td>
                        <td width="153">&nbsp;</td>
                        <td width="57">&nbsp;</td>
                        <td width="87"></td>
                      </tr>
                    </table>
                </div>
                    <table width="821" align="center">
                      <tr>
                        <td width="806" bgcolor="#4682B4"><div  class="title">Modulo de Mantenimiento del Sistema </div></td>
                      </tr>
                      <tr >
                        <td ><br />
                            <table width="781" border="0" align="center">
                              <tr>
                                <td width="262"><div align="right"><img src="../images/iconos/59.ico" /></div></td>
                                <td width="475" class="text1"><a href="alumnos/index.php">Alumnos</a></td>
                                <td width="30">&nbsp;</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td class="text1">&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td><div align="right"><img src="../images/iconos/106.ico" /></div></td>
                                <td class="text1"><a href="grados.php">Grados</a></td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td class="text1">&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td><div align="right"><img src="../images/iconos/166.ico" /></div></td>
                                <td class="text1"><a href="cursos/cursos.php">Cursos</a></td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td class="text1">&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td><div align="right"><img src="../images/iconos/209.ico" /></div></td>
                                <td class="text1"><a href="catedraticos/index.php">Catedr&aacute;ticos</a></td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td class="text1">&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                              <tr>
                                <td><div align="right"><img src="../images/iconos/292.ico" /></div></td>
                                <td class="text1"><a href="examen/index.php">Rango de Tiempo para Examenes</a></td>
                                <td>&nbsp;</td>
                              </tr>
                            </table>
                          <br />
                            <br />
                            <br />
                            <div align="center"></div></td>
                      </tr>
                    </table>
                  </td>
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

function buscar(url) {  
ventana = open(url,"ventana","scrollbars=yes,status=no,toolbar=no,directories=no,menubar=no,resizable=yes,width=350,height=425")  
}  
</script>
