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
    'visibleInMenu' => true,
  ],
  'contact' => [
    'file' => 'contact',
    'text' => 'Contact',
    'visibleInMenu' => true,
  ],
  'prices' => [
    'file' => 'prices',
    'text' => 'Prices',
    'visibleInMenu' => true,
  ],
  'gallery' => [
    'file' => 'gallery',
    'text' => 'Gallery',
    'visibleInMenu' => true,
  ],
  'appointment' => [
    'file' => 'appointment',
    'text' => 'Appointment',
    'visibleInMenu' => true,
  ],
  'appointmentDetails' => [
    'file' => 'appointmentDetails',
    'text' => 'Appointment Details',
    'visibleInMenu' => false,
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
