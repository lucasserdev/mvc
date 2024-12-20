<?php $render('header'); ?>

<a href="<?= $base; ?>/novo">Add new user</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>

    <?php foreach($usuarios as $usuario): ?>
        
        <tr>
            <td><?= $usuario['id']; ?></td>
            <td><?= $usuario['nome']; ?></td>
            <td><?= $usuario['email']; ?></td>
            <td>
                <a href="<?= $base; ?>/usuario/<?= $usuario['id']; ?>/edit"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="<?= $base; ?>/usuario/<?= $usuario['id']; ?>/del" onclick="return confirm('Tem certeza que deseja excluir?')"><i class="fa-solid fa-trash"></i></a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>


<?php $render('footer'); ?>