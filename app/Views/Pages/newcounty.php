<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<style>
label{
  padding: auto;
  font-family: "Times New Roman", Times, serif;
}
input{
  border-radius: 5px;
  margin: 10px;
  width: 220px

}
</style>

<div class="position-absolute top-50 start-50 translate-middle">

<div class="card shadow-lg" style="width:60rem;">
  <div class="card-body">
  <form action="/newcounty" method="post">
    <?= csrf_field() ?>

    <label for="county_code">County Code</label>
    <input type="text" name="county_code" value="<?= set_value('county_code') ?>">
    <br>

    <label for="county_name">County</label>
    <input type="text" name="county_name" value="<?= set_value('county_name') ?>">
    <br>

    <div class="d-flex justify-content-center">
    <input type="submit" class="btn btn-outline-dark" name="submit" value="Add new county">
    </div>

    
</form>
  </div>
</div>

</div>

