<?php
require_once('config.php');
$client = new SoapClient(SOAPService."service.wsdl",array('location' => SOAPService));
$return = $client->createUser($_POST['reg_username'],$_POST['reg_password'], $_POST['reg_email'], $_POST['reg_nama'], $_POST['reg_alamat'],$_POST['reg_provinsi'], $_POST['reg_kota'], $_POST['reg_kodepos'], $_POST['reg_telepon']);	
header("Location: index.php");
?>
