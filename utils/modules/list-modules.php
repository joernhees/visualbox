<?php
require_once('common.inc.php');
require_once('settings.inc.php');

foreach ($conf['modules']['available'] as $k => $v){
  echo "$k) $v\n";
}
?>
