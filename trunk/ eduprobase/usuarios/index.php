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
	<?php encabezado('Ingreso de Usuarios');?>
	<div class="title">Ingreso de Usuarios</div>
	</div>
<table border="0" align="center" >
  <tr>
    <td><form action="cod_usuarios.php" method="post" name="formulario" id="formulario" onsubmit="return validar_user();">
      <table width="833" border="0" align="center" bgcolor="#FFFFFF">
        <tr>
          <td valign="top">&nbsp;</td>
          <td></td>
        </tr>
        <tr>
          <td width="10" valign="top"><label><br />
                <br />
                <br />
                <br />
          </label></td>
          <td>
              <table width="815" border="0">
                <tr>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                </tr>
                <tr>
                  <td ><table width="645" border="0" align="center">
                      <tr>
                        <td width="3" class="text1">&nbsp;</td>
                        <td width="150"><div align="right" class="text1"> Nombres y Apellidos: </div></td>
                        <td width="478"><label>
                          <input name="nombre" type="text" id="nombre" size="60" autocomplete="off"  />
                        </label></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1"><div align="right"></div></td>
                        <td><label></label></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1"><div align="right">Usuario::</div></td>
                        <td><label>
                          <input name="usuario" type="text" id="usuario"  autocomplete="off" />
                        </label></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1"><div align="right">Contrase&ntilde;a: </div></td>
                        <td><label>
                          <input name="password" type="text" id="password" autocomplete="off" />
                        </label></td>
                      </tr>
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1"><div align="right"></div></td>
                        <td><label></label></td>
                      </tr>
                      
                      <tr>
                        <td class="text1">&nbsp;</td>
                        <td class="text1">&nbsp;</td>
                        <td><table width="290" border="0">
                            <tr>
                              <td></td>
                              <td><label></label></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td><input type="submit" name="Submit2" value="Guardar Usuario" /></td>
                            </tr>
                        </table></td>
                      </tr>
                  </table></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </table>
            </td>
        </tr>
      </table>
    </form>
    </td>
  </tr>
</table></div>
</body>
</html>
<script language="JavaScript" type="text/javascript">
document.formulario.nombre.focus();
</script>


<script language="JavaScript" type="text/javascript">
function alerta(){
return window.confirm("�Seguro que desea Realizar la Acci�n...?");}
</script>
