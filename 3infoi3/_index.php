<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>



<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <a class="navbar-brand" href="">Inicio</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" >

      <li class="nav-item active"><a class="nav-link" href="produtos.php?cat=1" >casa</a></li>

      <li class="nav-item"><a class="nav-link" href="produtos.php?cat=2">Link</a></li>

      <li class="nav-item"><a class="nav-link disabled" href="produtos.php?cat=3">infos</a></li>

      <li class="nav-item"><a class="nav-link disabled" href="produtos.php?cat=4">manto</a></li>

    </ul>


    <form method="post" class="form-inline my-3 my-lg-0" action="produtos.php">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="busca">
      <input class="btn btn-outline-success my-2 my-sm-0" type="submit">
    </form>

  </div>
</nav>
<div class="container" >

<?php
if(isset($_GET['erro']) && $_GET['erro']==1){
echo  "<h3>Dados incorretos </h3>";
}
?>

<!-- ao aparece se estiver logado -->

    <?php
    if (!isset($_SESSION['nome'])) {
        ?>

        <form method="post" action="login.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="login" type="email" class="form-control" id="exampleInputEmail1"
                       aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.
                </small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="senha" type="password" class="form-control" id="exampleInputPassword1"
                       placeholder="Password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php
    }else {
        ?>

        <!--se tiver-->

        <p> bem vindo <?= $_SESSION['nome'] ?></p>
        <?php
    }
    ?>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>