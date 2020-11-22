<?php
if (!isset($_POST['name'])) {
  
}
?>
<div class="col-12">
  <div class="card">
  <?php if (!isset($_POST['name'])) : ?>
    <div class="card-header">
      <h2>Your data</h2>
    </div>
    <div class="card-body">
      <dl class="row">
        <dt class="col-sm-3">Name:</dt>
        <dd class="col-sm-9"><?= $_POST['name'] ?></dd>

        <dt class="col-sm-3">E-mail:</dt>
        <dd class="col-sm-9"><?= $_POST['email'] ?></dd>

        <dt class="col-sm-3">Address:</dt>
        <dd class="col-sm-9"><?= $_POST['address'] ?></dd>

        <dt class="col-sm-3">Phone:</dt>
        <dd class="col-sm-9"><?= $_POST['phone'] ?></dd>

        <dt class="col-sm-3">Message:</dt>
        <dd class="col-sm-9"><?= $_POST['message'] ?></dd>
      </dl>
    </div>
  <?php endif; ?>
  </div>
</div>