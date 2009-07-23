<?php // ** MySQL settings ** //
$conf_file = '../conf.php';
for($i=0; $i<3; $i++) {
  if(file_exists($conf_file)) {
    require_once($conf_file);
    break;
  } else {
    $conf_file = '../' . $conf_file;
  }
}
/* That's all, stop editing! Happy blogging. */
define('ABSPATH', dirname(__FILE__).'/');
require_once(ABSPATH.'wp-settings.php'); 
