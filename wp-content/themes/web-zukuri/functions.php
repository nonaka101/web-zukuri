<?php
$func_paths = array(
  'functions/init.php',
  'functions/scripts.php',
  'functions/customize.php',
  'functions/theme-func.php',
  'functions/block.php',
);

foreach ($func_paths as $path){
  require_once locate_template($path, true);
}
