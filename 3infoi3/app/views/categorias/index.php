

<div class="container">
    <h1>Categoria <span class="badge badge-secondary">ALL</span></h1>
</div>
<a class="badge badge-success" href="?acao=inserir">Inserir</a>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>Id</th>
        <th>Nome da Categoria</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($categorias as $categoria): ?>
        <tr>
            <td><?= $categoria->getId();?></td>
            <td><a href="?acao=listar&id=<?= $categoria->getId();?>"><?= $categoria->getNome();?></a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

