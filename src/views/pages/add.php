<?php $render('header'); ?>
<h2>Add User</h2>

<a href="<?= $base; ?>/">Back to home</a>

<form action="<?= $base; ?>/novo" method="post">
    <label for="">
        NAME: <br>
        <input type="text" name="name" id=""> <br> <br>
    </label>

    <label for="">
        EMAIL: <br>
        <input type="email" name="email" id=""> <br> <br>
    </label>

    <input type="submit" value="Add">
</form>

<?php $render('footer'); ?>