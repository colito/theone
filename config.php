<?php
 Class Config
 {
    public $site_name = "Success Motivation";

    public function file_root()
    {
        $root = $_SERVER['DOCUMENT_ROOT'].'/emp/theone/';
        return $root;
    }
 }

# navigation links
define('navi_home', '../home/');
define('navi_solutions', '../solutions/');
define('navi_contact', '../contact/');

# included file paths
define('main_include', '../includes/');
define('main_header', '../includes/header.php');
define('main_footer', '../includes/footer.php');

define('main_images', '../images/');
define('main_css', '../css/');
define('main_js', '../js/');
define('main_jquery', '../js/jquery-2.0.3.min.js');

?>