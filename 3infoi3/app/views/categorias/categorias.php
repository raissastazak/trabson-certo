<div class="container">
<h1>Categoria <span class="badge badge-secondary"><?=$categoria->getNome()?></span></h1>
    </div>
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

<a class="badge badge-secondary" href="categorias.php?acao=update&id=<?= $categoria->getId()?>">Update</a>
<a class="badge badge-danger" href="categorias.php?acao=delete&id=<?= $categoria->getId()?>">Delete</a>
