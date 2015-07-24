<?php

function print_link($name,$dom){
  echo "<a href='http://$name$dom' target='_blank'>$name$dom</a><br/>";
}
  $name='dir';
  $dom='.bg';
  print_link($name,$dom);
  $name='tv-mobile';
  $dom='.org';
  print_link($name,$dom);
  $name='google';
  $dom='.com';
  print_link($name,$dom);
?>