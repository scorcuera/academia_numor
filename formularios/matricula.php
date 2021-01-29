<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title> matricula </title>
</head>
<body>
<?php


$nombre=$_POST['nombre'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];
$nacimiento=$_POST['nacimiento'];
$dni=$_POST['dni'];
$domicilio=$_POST['domicilio'];
$poblacion=$_POST['poblacion'];
$codpost=$_POST['codpost'];
$tmovil=$_POST['tmovil'];
$tfijo=$_POST['tfijo'];
$suemail=$_POST['suemail'];
$alumno=$_POST['alumno'];
$menores=$_POST['menores'];
$idioma=$_POST['idioma'];
$susdias=$_POST['susdias'];
$sushoras=$_POST['sushoras'];
$cuantashoras=$_POST['cuantashoras'];
$tutor=$_POST['tutor'];
$notas=$_POST['notas'];

if($idioma <> "idioma y nivel actual si lo sabe") {

$graboen="./formularios/".$apellido1.$apellido2.".txt";
$handle=fopen($graboen,'a');
fwrite($handle,">>>*** ES ALUMNO".chr(10));
fwrite($handle,$alumno.chr(10));
fwrite($handle,"*** NOMBRE".chr(10));
fwrite($handle,strtoupper($nombre).chr(10));
fwrite($handle,"*** APELLIDO1".chr(10));
fwrite($handle,strtoupper($apellido1).chr(10));
fwrite($handle,"*** APELLIDO2".chr(10));
fwrite($handle,strtoupper($apellido2).chr(10));
fwrite($handle,"*** NACIMIENTO".chr(10));
fwrite($handle,strtoupper($nacimiento).chr(10));
fwrite($handle,"*** PROTOCOLO MENORES".chr(10));
fwrite($handle,$menores.chr(10));
fwrite($handle,"*** DNI".chr(10));
fwrite($handle,strtoupper($dni).chr(10));
fwrite($handle,"*** DOMICILIO".chr(10));
fwrite($handle,strtoupper($domicilio).chr(10));
fwrite($handle,"*** POBLACION".chr(10));
fwrite($handle,strtoupper($poblacion).chr(10));
fwrite($handle,"*** CODPOST".chr(10));
fwrite($handle,$codpost.chr(10));
fwrite($handle,"*** TMOVIL".chr(10));
fwrite($handle,$tmovil.chr(10));
fwrite($handle,"*** TFIJO".chr(10));
fwrite($handle,$tfijo.chr(10));
fwrite($handle,"*** SUEMAIL".chr(10));
fwrite($handle,strtoupper($suemail).chr(10));
fwrite($handle,"*** IDIOMA".chr(10));
fwrite($handle,strtoupper($idioma).chr(10));
fwrite($handle,"*** SUSDIAS".chr(10));
fwrite($handle,strtoupper($susdias).chr(10));
fwrite($handle,"*** SUSHORAS".chr(10));
fwrite($handle,strtoupper($sushoras).chr(10));
fwrite($handle,"*** HORAS SEMANALES".chr(10));
fwrite($handle,strtoupper($cuantashoras).chr(10));
fwrite($handle,"*** TUTOR".chr(10));
fwrite($handle,strtoupper($tutor).chr(10));
fwrite($handle,"*** NOTAS".chr(10));
fwrite($handle,$notas.chr(10));

fclose($handle);

echo "PROCESO DE DATOS FINALIZADO CORRECTAMENTE,";
echo "<br><p>
<a href='index.html'> <b>         <<=== VOLVER A LA PAGINA PRINCIPAL </b></a></p>";


} else {
echo "<b>Probablemente falten datos en el formulario.<br>
Vuelva a la pantalla anterior y una vez todos<br>
los campos llenos pulse en ENVIAR </b>";
echo "<br><br>
<input type='button' value='VOLVER ATRAS' onclick='history.back()' style='font-family: Verdana; font-size: 12 pt'>";
}
?>

</body>
</html>
