<?php
if(http_response_code() !== 404){
    header("location: index.php");
}
echo 'error'; ?>