<style>
    label{
        padding:10px;
    }

    input{
        width:300px
    }
    textarea{
        width: 500px;
        /* height: 200px; */
    }
</style>
<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>


<div class="card position-absolute top-50 start-50 translate-middle" style="width: 50rem;">
<div class="card-title bg-dark shadow rounded text-light p-3 m-2">
    <h5>Add New Specialization</h5>
</div>
  <div class="card-body">
  <!-- Specializations Form -->
<form action="/newspecializations" method="post">
    <?= csrf_field() ?>

    <label for="name">Specialization Name</label>
    <input type="text" name="name" value="<?= set_value('name') ?>">
    <br>

    <label for="description">Description</label>
    <textarea name="description"><?= set_value('description') ?></textarea>
    <br>
    <div class="d-flex justify-content-center">
    <input type="submit" class="btn btn-outline-dark" name="submit" value="Add Specialization">
    </div>

   
</form>
  </div>
</div>

