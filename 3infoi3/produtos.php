<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

if(isset($_GET['cat'])){
    if ($_GET['cat']==1){
    $categoria = "casa";
    }elseif ($_GET['cat']==2){
        $categoria = 'link';
    }elseif ($_GET['cat']==3){
        $categoria = 'infos';
    }elseif ($_GET['cat']==4){
        $categoria = 'manto';
    }else{
        $categoria="codigo inexistente";
    }
}elseif (isset($_POST['busca'])){
    $categoria = "nothin have anything in ".$_POST['busca'];
}else{
    $categoria = 'invalid';
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2><?= $categoria ?></h2>
</body>
</html>
