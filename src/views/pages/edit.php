<?php $render('header'); ?>
<h2>Edit User</h2>

<form action="<?= $base; ?>/usuario/<?= $usuario['id']; ?>/edit" method="post">
    <label for="">
        NAME: <br>
        <input type="text" name="name" id="" value="<?= $usuario['nome']; ?>"> <br> <br>
    </label>

    <label for="">
        EMAIL: <br>
        <input type="email" name="email" id="" value="<?= $usuario['email']; ?>"> <br> <br>
    </label>

    <input type="submit" value="Save">
</form>

<?php $render('footer'); ?>