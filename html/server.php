
    
<?php 


$db_user = "kapadiyn_pbl";
$db_pass = "mypassword";
$db_name = "kapadiyn_pbl";


$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




 ?>