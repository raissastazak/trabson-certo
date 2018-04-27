<?php


require_once '../modelos/CrudCategoria.php';


if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}
switch ($acao){

    case 'index':

        $crud = new CrudCategoria();
        $categorias = $crud->getCategorias();
        include '../views/templetes/navbar.php';
        include '../views/categorias/index.php';
        include '../views/templetes/rodape.php';
        break;

    case 'inserir':
        $crud = new CrudCategoria();
        if (isset($_POST['gravar'])){
            $cat = new Categoria('',$_POST['nome'],$_POST['descricao']);
            $res = $crud->insertCategoria($cat);
            header('Location: categorias.php');
        }else{
            include '../views/templetes/navbar.php';
            include '../views/categorias/inserir.php';
            include '../views/templetes/rodape.php';
        }
        break;

    case 'listar':
        $crud = new CrudCategoria();
        $categoria = $crud->getCategoria($_GET['id']);
        include '../views/templetes/navbar.php';
        include '../views/categorias/categorias.php';
        include '../views/templetes/rodape.php';
        break;


    case 'update':
        $crud = new CrudCategoria();
        if (isset($_POST['gravar'])){
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $newcat = new Categoria($id, $nome, $descricao);
            $res = $crud->updateCategoria($newcat);
            header('Location: categorias.php');
        }else{
            $cat = $crud->getCategoria($_GET['id']);
            include '../views/templetes/navbar.php';
            include '../views/categorias/update.php';
            include '../views/templetes/rodape.php';
        }
        break;

    case 'delete':
        $crud = new CrudCategoria();
        $res = $crud->deleteCategoria($_GET['id']);
        header('Location: categorias.php');
        break;
    default:
        echo 'acao invalida';
}