<?php
require 'vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;

$image = Image::make('picture.jpg');

$image->rotate(-45);

$image->text('loftschool php dz 5', 100, 100, function($font) {
  $font->color('#ffffff');
});

$image->resize(200, null, function ($constraint) {
  $constraint->aspectRatio();
});

echo $image->response('jpg');
