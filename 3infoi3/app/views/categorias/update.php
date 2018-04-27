
<form action="categorias.php?acao=update" method="post">
    <input type="name" value="<?=$cat->getNome();?>" name="nome">
    <input type="descricao" value="<?=$cat->getDescricao();?>" name="descricao">
    <input type="hidden" value="<?=$cat->getId()?>" name="id">
    <input type="submit" name="gravar">
</form>
