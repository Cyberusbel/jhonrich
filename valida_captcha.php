<?php
$recaptcha = $_POST['g-recaptcha-response'];

if($recaptcha != '')
{
	$secret = "6Lf_VSQTAAAAAJSkTrL_0dvBAob85clcJPTGE3gE";
	$ip = $_SERVER['REMOTE_ADDR'];
	$var = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha&remoteip=$ip");
	$array = json_decode($var, true);
	echo "<pre>";
	print_r($array);
	echo "</pre>";
	
	if($array['success'])
		echo 'Correcto, puede ingresar!';
	else
		echo 'No coinciden los datos de validación!';
}
else
{
	//echo 'Ingrese todos los campos!';
	echo 'No seleccionó el check de verificación!';
}
?>
