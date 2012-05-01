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
	<div class="title">Ingreso de Tiempo de Examenes</div>
	</div>

   <form action="cod_examenes.php" method="post" name="formulario" id="formulario" onsubmit="return validar()">
      <table >
        <tr>
          <td width="10">&nbsp;</td>
          <td width="100%"><table align="center">
              <tr>
              </tr>
              <tr>
                <td><div align="right">
                    <table width="100%" border="0">
                      <tr >
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
                <td></td>
              </tr>
              <tr>
                <td><table align="left">
                    <tr>
                      <td width="10" class="text1">&nbsp;</td>
                      <td width="183"><div align="right" class="text1">
                          <p>Tiempo para Examen :<br />
                            ej :<br />
                          </p>
                      </div></td>
                      <td width="438"><label>
                        <input name="examen" type="text" id="examen" size="60" autocomplete="off" />
                        <br />
                        <span class="tex2 Estilo7"> 1er Bimestre | Primer Bimestre | 1er Trimestre | etc. </span></label></td>
                    </tr>
                    <tr>
                      <td class="text1">&nbsp;</td>
                      <td class="text1"><div align="right">Observaci&oacute;n:</div></td>
                      <td><label>
                        <textarea name="observacion" cols="45" id="observacion" ></textarea>
                        </label>
                          <label class="tex2 Estilo7"></label></td>
                    </tr>
                    <tr>
                      <td class="text1">&nbsp;</td>
                      <td class="text1"><div align="right">Status:</div></td>
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
              <table >
               
                <tr>
                  <td class="title">
                  	<table >
                      <tr width="100%">
                        <td>&nbsp;</td>
                        <td width="300px">Tiempo de Examenes</td>
                        <td width="325px" style="padding-left:65px">Fecha Ingreso</td>
                        <td width="100px">Status</td>
                      </tr>
                  </table></td>
                </tr>
              </table>
            <iframe src="examenes.php" width="100%" height="200" align="center"><br />
              <br />
            </iframe></td>
        </tr>
      </table>
    </form>
</div>
</body>
</html>
<script language="JavaScript" type="text/javascript">
document.formulario.examen.focus();
</script>


<script language="JavaScript" type="text/javascript">

function validar(){
if(!confirm("Seguro que Desea Guardar el Nuevo Tiempo de Examen?")){
return false;
}
MM_validateForm('examen','','R');return document.MM_returnValue;
}
</script>


