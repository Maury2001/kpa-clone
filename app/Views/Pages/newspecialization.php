
<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>
<!-- Specializations Form -->
<form action="/newspecialization" method="post">
    <?= csrf_field() ?>

    <label for="name">Specialization Name</label>
    <input type="text" name="name" value="<?= set_value('name') ?>">
    <br>

    <label for="description">Description</label>
    <textarea name="description"><?= set_value('description') ?></textarea>
    <br>

    <input type="submit" name="submit" value="Add Specialization">
</form>
