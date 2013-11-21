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
?>