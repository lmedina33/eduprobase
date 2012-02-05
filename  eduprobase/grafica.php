<?php
require ('phplot.php');
require('conexion.php');

	$a = 2010;
	$seleccionar1 = "SELECT * FROM alumno a, reinscripcion r  WHERE r.id_alumno = a.id_alumno AND r.anio = '$a' ";
	$ejecutar1 = mysql_query($seleccionar1);
	$total1 = mysql_num_rows($ejecutar1);
	
	
	$selec1 = "SELECT * FROM alumno a, reinscripcion r  WHERE r.id_alumno = a.id_alumno AND a.sexo = 'F' AND r.anio = '$a' ";
	$ejec1 = mysql_query($selec1);
	$tot1 = mysql_num_rows($ejec1);
	
	$totala = $total1 - $tot1;

	$b = 2011;
	$seleccionar2 = "SELECT * FROM alumno a, reinscripcion r  WHERE r.id_alumno = a.id_alumno AND r.anio = '$b' ";
	$ejecutar2 = mysql_query($seleccionar2);
	$total2 = mysql_num_rows($ejecutar2);
	
	$selec2 = "SELECT * FROM alumno a, reinscripcion r  WHERE r.id_alumno = a.id_alumno AND a.sexo = 'F' AND r.anio = '$b' ";
	$ejec2 = mysql_query($selec2);
	$tot2 = mysql_num_rows($ejec2);
	
	$totalb = $total2 - $tot2;


	$c = 2012;
	$seleccionar3 = "SELECT * FROM alumno a, reinscripcion r  WHERE r.id_alumno = a.id_alumno AND r.anio = '$c' ";
	$ejecutar3 = mysql_query($seleccionar3);

	$total3 = mysql_num_rows($ejecutar3);
	
	$selec3 = "SELECT * FROM alumno a, reinscripcion r WHERE r.id_alumno = a.id_alumno AND a.sexo = 'F' AND r.anio ='$c' ";
	$ejec3 = mysql_query($selec3);
	$tot3 = mysql_num_rows($ejec3);
	
	$totalc = $total3 - $tot3;
	
	$d = 2013;
	$seleccionar4 = "SELECT * FROM alumno a, reinscripcion r  WHERE r.id_alumno = a.id_alumno AND r.anio = '$c' ";
	$ejecutar4 = mysql_query($seleccionar4);

	$total4 = mysql_num_rows($ejecutar4);
	
	$selec4 = "SELECT * FROM alumno a, reinscripcion r WHERE r.id_alumno = a.id_alumno AND a.sexo = 'F' AND r.anio ='$c' ";
	$ejec4 = mysql_query($selec4);
	$tot4 = mysql_num_rows($ejec4);
	
	$totald = $total4 - $tot4;
	
	$e = 2014;
	$seleccionar5 = "SELECT * FROM alumno a, reinscripcion r  WHERE r.id_alumno = a.id_alumno AND r.anio = '$c' ";
	$ejecutar5 = mysql_query($seleccionar5);

	$total5 = mysql_num_rows($ejecutar5);
	
	$selec5 = "SELECT * FROM alumno a, reinscripcion r WHERE r.id_alumno = a.id_alumno AND a.sexo = 'F' AND r.anio ='$c' ";
	$ejec5 = mysql_query($selec5);
	$tot5 = mysql_num_rows($ejec5);
	
	$totale = $total5 - $tot5;


$data = array(
  array($a, $total1, $tot1,$totala),
  array($b, $total2,$tot2,$totalb), // Missing data point
  array($c, $total3,$tot3,$totalc),
  array($d, $total4,$tot4,$totald),
  array($e, $total5,$tot5,$totale),
);

$plot = new PHPlot(600, 400);
$plot->SetImageBorderType('plain'); // Improves presentation in the manual
$plot->SetPlotType('linepoints');
$plot->SetDataType('text-data');
#  Set a tiled background image:
#$plot->SetPlotAreaBgImage('images/92091501.jpg','tile');
$plot->SetDataColors(array('red', 'green', 'blue', 'black'));
$plot->SetDataValues($data);
$plot->SetTitle("Estadisticas de Alumnos\n"
              . "($a a $e)");

# Turn on Y data labels:
$plot->SetYDataLabelPos('plotin');

# Turn on X data label lines (drawn from X axis up to data point):
$plot->SetDrawXDataLabelLines(True);

# With Y data labels, we don't need Y ticks, Y tick labels, or grid lines.
$plot->SetYTickLabelPos('none');
$plot->SetYTickPos('none');
$plot->SetDrawYGrid(False);
$plot->SetLegend(array('Total Alumnos - '.$total3, 'Alumnas Femeninas - '.$tot3 , 'Alumnos Masculinos - '.$totalc));
# X tick marks are meaningless with this data:
$plot->SetXTickPos('none');
$plot->SetXTickLabelPos('none');

$plot->DrawGraph();



/*
$data = array(
  array($a, $total1, 222, 224,300), array($b, $total2, 323, 334,233), array($c, $total3	, 114, 234,350)
);

$plot = new PHPlot(500, 500);
$plot->SetImageBorderType('plain');
$plot->SetDataColors(array('red', 'pink', 'blue', 'black'));

$plot->SetYTickIncrement(50);
$plot->SetPlotType('bars');
$plot->SetDataType('text-data');
$plot->SetDataValues($data);
$plot->SetYDataLabelPos('plotin');
# Main plot title:
$plot->SetTitle('Estadisticas de Alumnos Inscritos');

# No 3-D shading of the bars:
$plot->SetShading(0);

# Make a legend for the 3 data sets plotted:
$plot->SetLegend(array('Total Alumnos', 'Alumnos Masculinos' , 'Alumnas Femeninas'));


# Turn off X tick labels and ticks because they don't apply here:
$plot->SetXTickLabelPos('none');
$plot->SetXTickPos('none');

$plot->DrawGraph();*/

?>
