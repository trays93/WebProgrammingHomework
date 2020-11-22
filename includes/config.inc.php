<?php

$pageTitle = [
  'title' => 'The Cat Sitter',
];

$year = date('Y');
$footer = [
  'copyright' => "CatSitter &copy; {$year}",
  'info' => 'Made by Bálint Lovas',
  'githubUrl' => 'https://github.com/trays93/WebProgrammingHomework',
];

$pages = [
  'home' => [
    'file' => 'home',
    'text' => 'Home',
  ],
  'contact' => [
    'file' => 'contact',
    'text' => 'Contact',
  ],
  'prices' => [
    'file' => 'prices',
    'text' => 'Prices',
  ],
  'gallery' => [
    'file' => 'gallery',
    'text' => 'Gallery',
  ],
  'appointment' => [
    'file' => 'appointment',
    'text' => 'Appointment',
  ],
];

$errorPage = [
  'file' => '404',
  'text' => 'Page not found!',
];

$fileUploadConfig = [
  'path' => './upload/',
  'types' => [
    'image/jpeg',
    'image/png',
  ],
  'dateformat' => 'm/d/Y H:i',
  'maxsize' => 500 * 1024,
];
