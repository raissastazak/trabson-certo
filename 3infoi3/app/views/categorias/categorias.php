
<h1>Categoria</h1>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>id</th>
        <th>Nome</th>
        <th>Descricao</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?=$categoria->getId()?></td>
        <td><?=$categoria->getNome()?></td>
        <td><?=$categoria->getDescricao()?></td>
    </tr>
    </tbody>

</table>
<a href="categorias.php?acao=update&id=<?= $categoria->getId()?>">Update</a>
<a href="categorias.php?acao=delete&id=<?= $categoria->getId()?>">Delete</a>
