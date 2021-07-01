<?php 
try {
    $db = new PDO('mysql:host=localhost;dbname=inscription', 'myhed', 'toto');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e){
    die('error: '. $e->getMessage());
}

?>