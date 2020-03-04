<?php
// default-web.php 

require $rootPath."/common/load/default.php";

if($di instanceof \Phalcon\DI\FactoryDefault\CLI) {
    return;
}

// Pseudo-static Url
if(isset($_GET['_url'])) {
    $_GET['_url'] = str_replace(
        ['.html', '.htm', '.jsp', '.shtml'], 
        '', 
        $_GET['_url']
    );
}


/* default-web.php ends here */
