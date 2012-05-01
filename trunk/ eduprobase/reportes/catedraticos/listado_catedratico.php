<?php
$toproot = '../../';
require_once('../../conexion.php');

?>
	<div id="content" class="float-holder">
		<div id="cuadro">
			<div id="ini"><a href="../../index.php"><img src="../../images/inicio.jpg" /></a></div>
			<div id="men"><img src="../../images/menu.jpg" /></div>
			<div id="exit"><a href="../../exit.php"><img src="../../images/exit.jpg" /></a></div>
		</div><!-- fin del cuadro-->
		     <div id="content2">
              <?php include('../../menu.php'); 
		encabezado('Catedraticos', '../');?>
              <div class="title">Catedraticos</div>
            </div>
<table width="840" border="0" align="center" >
  <tr>
    <td width="830"><table width="833" border="0" align="center">
      <tr>
        <td valign="top">&nbsp;</td>
        <td></td>
      </tr>
      <tr>
        <td width="8" valign="top"></td>
        <td width="809">
            <table width="821" align="center">
              <tr>
                <td width="806" bgcolor="#4682B4"><div class="title"> Reportes de Catedratico con Cursos </div></td>
              </tr>
              <tr >
                <td ><br />
                  <table width="776" border="0">
                    <tr>
                      <td width="58">&nbsp;</td>
                      <td width="669"><form action="listado_catedratico1.php" method="get" name="form1" target="_blank" id="form1">
                        <select id="grado" name="grado">
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
						  </select>
                        <label>
                                            <input type="submit" name="Submit" value="Ver Listado..." />
                          </label>
                      </form>                      </td>
                      <td width="27">&nbsp;</td>
                    </tr>
                  </table>
                <br />
                    <br />
                    <div align="center"></div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
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
