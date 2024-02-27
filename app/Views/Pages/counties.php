<div class="position-absolute top-50 start-50 translate-middle">
<div class="card" style="width: 70rem;">
    <div class="d-flex justify-content-around card-title">
        <h4 class='p-3'>Members</h4>


  <button type="button" class="btn btn-outline-primary">Add Role</button>
 

    </div>
    <hr/>
  <div class="card-body">
  <table class="table table-hover">
  <thead>
    <tr >
      <th scope="col">Code</th>
      <th scope="col">County</th>
      <th scope="col">Actions</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
  </div>
</div>
</div>


<?php if (!empty($counties)): ?>

<?php if (is_array($counties)): ?>
    <?php foreach ($counties as $county_item): ?>
        <div class="d-flex justify-content-center">
            <h4><?= esc($county_item['county_code']) ?></h4>
            <?= esc($county_item['county_name']) ?>
        </div>
    <?php endforeach ?>
<?php else: ?>
    <div class="d-flex justify-content-center">
        <h4><?= esc($counties['county_code']) ?></h4>
        <?= esc($counties['county_name']) ?>
    </div>
<?php endif ?>

<?php else: ?>

<h3>No News</h3>

<p>Unable to find any news for you.</p>

<?php endif ?>

