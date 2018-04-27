

<div class="container">
    <h1>Categoria <span class="badge badge-secondary">ALL</span></h1>
</div>
<a class="badge badge-success" href="?acao=inserir">Inserir</a>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>Id</th>
        <th>Nome do Produto<th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($produtos as $produto): ?>
        <tr>
            <td><?= $produto->getId();?></td>
            <td><a href="?acao=listar&id=<?= $produto->getId();?>"><?= $produto->getNome();?></a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

