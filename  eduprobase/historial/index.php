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
      <? include('../menu.php'); ?>
      <? encabezado('Historial de Alumno');?>
	<div class="title">Ver Historial del Alumno</div>
<table border="0" align="center">
      <tr>
        <td width="830">
        	<form action="historial.php" method="get" name="formulario" id="formulario" onsubmit="MM_validateForm('carne','','R');return document.MM_returnValue">
            <table width="833" border="0" align="center">
              <tr>
                <td valign="top">&nbsp;</td>
                <td></td>
              </tr>
              <tr>
                <td valign="top"><label><br />
                      <br />
                      <br />
                      <br />
                </label></td>
                <td><br />
                    <table width="100%" align="center">
                      <tr>
                        <td></td>
                      </tr>
                      <tr>
                        <td ><table width="520" border="0" align="center">
                            <tr>
                              <td width="3" class="text1">&nbsp;</td>
                              <td width="275" class="Estilo4">&nbsp;</td>
                              <td width="228"><label></label></td>
                            </tr>
                            <tr>
                              <td class="text1">&nbsp;</td>
                              <td class="text1">&nbsp;</td>
                              <td class="text1">&nbsp;</td>
                            </tr>
                            <tr>
                              <td class="text1">&nbsp;</td>
                              <td class="text1"><div align="right"><span class="text2"> Carn&eacute;:
                                <input name="carne" type="text" id="carne" aurotomplete="off" size="20"  autocomplete="off" />
                              </span></div></td>
                              <td class="text1"><div align="left" class="text2"><a href="#"></a>
                                  <input name="submit" type="image" src="../images/arrow_right.png" title="Buscar por carn�..." width="75" height="75" />
</div></td>
                            </tr>
                            
                            <tr>
                              <td class="text1">&nbsp;</td>
                              <td class="text1">&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                          </table>
                          <div align="right"><br />
                          </div>
                          <table width="289" border="0" align="right">
                            <tr>
                              <td width="141"><div align="center"></div></td>
                              <td width="138"><label>
                              <span class="text2"><a href="#"><img src="../images/search.png" onclick="return buscar('../aux_search/search.php'); " title="Busqueda Rapida de Alumnos..." width="90" height="90" border="0" /></a></span>                                </label></td>
                            </tr>
                          </table>
                          <div align="center"></div></td>
                      </tr>
                  </table></td>
              </tr>
            </table>
        </form></td>
      </tr>
</table>
</div></div>
</body>
</html>
<script language="JavaScript" type="text/javascript">
document.formulario.carne.focus();
</script>


<script language="JavaScript" type="text/javascript">

function buscar(url) {  
ventana = open(url,"ventana","scrollbars=yes,status=no,toolbar=no,directories=no,menubar=no,resizable=yes,width=350,height=425")  
}  
</script>
