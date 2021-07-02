<?php 
try {
    $db = new PDO('mysql:host=localhost;dbname=inscription', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e){
    die('error: '. $e->getMessage());
}

?>