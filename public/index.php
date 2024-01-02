<?php 
if(!session_id()) session_start();

// teknik bootsrapping => memanggil 1 file, yg akan memanggil seluruh aplikasi mvc nya
require_once "../app/init.php";

$app = new App;