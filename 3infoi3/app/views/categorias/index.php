
<a href="?acao=inserir">Inserir</a>
<h1>Categorias</h1>
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
