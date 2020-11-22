<?php

$message = '';

if (isset($_POST['submit'])) {
  foreach ($_FILES as $uploadedFile) {
    if (!in_array($uploadedFile['type'], $fileUploadConfig['types'])) {
      $message = "The file type is incorrect: {$uploadedFile['name']}";
    } else if ($uploadedFile['error'] == 1
              || $uploadedFile['error'] == 2
              || $uploadedFile['size'] > $fileUploadConfig['maxsize']) {
      $message = "The file uploaded file size is exceeds the upload limit: {$uploadedFile['name']}";
    } else {
      $targetPath = $fileUploadConfig['path'] . strtolower($uploadedFile['name']);
      if (file_exists($targetPath)) {
        $message ="The file is already exists: {$uploadedFile['name']}";
      } else {
        move_uploaded_file($uploadedFile['tmp_name'], $targetPath);
      }
    }
  }
}

$images = [];
$reader = opendir($fileUploadConfig['path']);

while (($file = readdir($reader)) !== false) {
  if (is_file($fileUploadConfig['path'] . $file)) {
    $fileType = mime_content_type($fileUploadConfig['path'] . $file);
    if (in_array($fileType, $fileUploadConfig['types'])) {
        $images[$file] = filemtime($fileUploadConfig['path'] . $file);
    }
  }
}

closedir($reader);

arsort($images);

?>
<div class="col-12">
  <div class="row">
    <div class="col-12">
      <div class="card mb-5">
        <div class="card-header">
          <h2>Upload new image:</h2>
        </div>
        <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post" enctype="multipart/form-data">
          <?php if (!empty($message)) : ?>
            <div class="alert alert-danger" role="alert">
              <?= $message ?>
            </div>
          <?php endif; ?>
          <div class="card-body">
            <div class="form-group">
              <label for="file">Picture to upload:</label>
              <input type="file" class="form-control-file" name="file" id="file" accept="image/jpeg,image/png">
            </div>
          </div>
          <div class="card-footer">
            <input class="btn btn-primary" type="submit" name="submit" />
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="row">
    <?php if (empty($images)) : ?>
      <div class="col-12">
        <div class="alert alert-primary" role="alert">
          Currently there are no uploaded pictures!
        </div>
      </div>
    <?php else : ?>
      <?php foreach($images as $file => $date) : ?>
      <div class="col-4">
        <div class="card">
          <a href="<?= $fileUploadConfig['path'] . $file ?>" target="_blank">
              <img class="card-img-top" src="<?= $fileUploadConfig['path'] . $file ?>" alt="<?= $fileUploadConfig['path'] . $file ?>" />
            </a>
          <div class="card-body">
          <h5 class="card-title"><?= $file ?></h5>
          <p class="card-text"><small class="text-muted">Uploaded: <?= date($fileUploadConfig['dateformat'], $date) ?></small></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</div>
