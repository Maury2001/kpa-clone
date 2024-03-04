<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<style>
label {
    padding: auto;
    font-family: "Times New Roman", Times, serif;
}

input {
    border-radius: 5px;
    margin: 10px;
    width: 220px
}
</style>

<a href="counties" type="button" class="btn btn-dark icon-link icon-link-hover">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"/>
  <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"/>
</svg> Back to Counties</a>

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