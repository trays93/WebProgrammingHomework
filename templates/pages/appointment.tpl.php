<?php
$showForm = true;

if (isset($_POST['name'])) {
  $showForm = false;
}

// ToDo: check form validation
?>
<div class="col-12">
  <div class="card mx-auto">
    <?php if ($showForm) : ?>
    <div class="card-header">
      <h2>Make an appointment</h2>
      <p class="lead">Please enter your contact information so I can send you a message</p>
    </div>
    <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
      <div class="card-body">
        
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" name="name" id="name" class="form-control" placeholder="Your name" required />
        </div>

        <div class="form-group">
          <label for="email">E-mail:</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="Your E-mail" required />
        </div>

        <div class="form-group">
          <label for="address">Address:</label>
          <input type="text" name="address" id="address" class="form-control" placeholder="Your address" />
        </div>

        <div class="form-group">
          <label for="phone">Phone:</label>
          <input type="text" name="phone" id="phone" class="form-control" placeholder="Your phone number" />
        </div>
        
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea name="message" id="message" class="form-control"></textarea>
        </div>

      </div>
      <div class="card-footer">
        <input type="submit" class="btn btn-primary" />
      </div>
    </form>
    <?php else : ?>
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
