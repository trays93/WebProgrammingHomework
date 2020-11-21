<?php

include('./includes/config.inc.php');

if (isset($_GET['page'])) {
  if (isset($pages[$_GET['page']])
      && file_exists("./templates/pages/{$pages[$_GET['page']]['file']}.tpl.php")) {
    $find = $pages[$_GET['page']];
  } else {
    $find = $errorPage;
		header("HTTP/1.0 404 Not Found");
  }
} else {
  $find = $pages['home'];
}

include('./templates/index.tpl.php');
