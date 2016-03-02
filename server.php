<?php
  $font = 'arial.ttf';

  switch($_GET['who']) {
    case 'ben':
      $file = 'ben.png';
      $x = 340;
      $y = 80;
      $fontsize = 24;
    break;
    case 'seren':
      $file = 'seren.png';
      $x = 300;
      $y = 100;
      $fontsize = 30;
    break;
    case 'ryan':
      $file = 'ryan.png';
      $x = 20;
      $y = 100;
      $fontsize = 20;
    break;
    case 'ruth':
      $file = 'ruth.png';
      $x = 120;
      $y = 120;
      $fontsize = 20;
    break;
    case 'pete':
      $file = 'pete.png';
      $x = 60;
      $y = 100;
      $fontsize = 30;
    break;
    default:
      $file = 'template.png';
      $x = 200;
      $y = 50;
      $fontsize = 30;
  }

  $im = imagecreatefrompng($file);
  $text_color = imagecolorallocate($im, 40, 40, 40);
  $text = wordwrap(substr($_GET['text'], 1), 20, "\n");

  imagettftext($im, $fontsize, 0, $x, $y, $text_color, $font, $text);

  header('Content-Type: image/png');
  imagepng($im);
  imagedestroy($im);
  
