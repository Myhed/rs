<?php include_once('./templates/header.php') ?>


<?php
    $uri = $_SERVER['REQUEST_URI'];
    $uriArray = explode('/',$uri);
    $absolutPath = $_SERVER['DOCUMENT_ROOT']."/".$uriArray[1]."/";
    $relativePathPage = 'pages/'; 
    // var_dump($uriArray);
    if(!isset($_GET['page'])){
        header('location: index.php?page=inscription');
    }else{
       $pageRequested = $_GET['page'].".php";
       $pagesPath = $absolutPath.$relativePathPage;
       $existFile = file_exists($pagesPath."/".$pageRequested);
       if($existFile){
         header('location: '.$relativePathPage.$pageRequested);
       }else{
         http_response_code(404);
         include('404.php');
       }
    }

?>

<?php include_once('./templates/footer.php') ?>