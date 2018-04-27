<?php
if(isset($_POST['login'])){
 //segue a vida
}elseif ($_POST['senha']) {
//segue a vida
}else{
    print 'Grrr';
}

function verifica($email,$senha){
    if($email == 'admin@me' && $senha == 12345){
        return true;
    }else{
        return false;
    }
}

if (verifica($_POST['login'],$_POST['senha'])){
    $_SESSION['nome'] = 'admin';
    $_SESSION['email'] = 'admin@me';
    header('location:index.php');
}else{
    session_destroy();
    header('location:index.php?erro=1');
}

?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a class="navbar-brand" href="">Inicio</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" >

            <li class="nav-item active">
                <a class="nav-link" href="produtos.php?cat=1" >casa</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="produtos.php?cat=2">Link</a>
            </li>

            <li class="nav-item">
                <a class="nav-link disabled" href="produtos.php?cat=3">infos</a>
            </li>

            <li class="nav-item">
                <a class="nav-link disabled" href="produtos.php?cat=4">manto</a>
            </li>

        </ul>


        <form method="post" class="form-inline my-3 my-lg-0" action="produtos.php">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="busca">
            <input class="btn btn-outline-success my-2 my-sm-0" type="submit">
        </form>

    </div>
</nav>

<div class="container">
<h1> <?= $echo ?> </h1>
<div class="container-fluid">
<p><a href="_index.php" class="badge badge-danger">SAIR</a></p>
</div>
</div>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
