<div class="container">
    <h1>Categoria <span class="badge badge-secondary"><?=$produto->getNome()?></span></h1>
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
        <td><?=$produto->getId()?></td>
        <td><?=$produto->getNome()?></td>
        <td><?=$produto->getDescricao()?></td>
    </tr>
    </tbody>
</table>

<a class="badge badge-secondary" href="produtos.php?acao=update&id=<?= $produto->getId()?>">Update</a>
<a class="badge badge-danger" href="produtos.php?acao=delete&id=<?= $produto->getId()?>">Delete</a>
