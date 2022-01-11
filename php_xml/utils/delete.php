<?php
session_start();

$file = "../files/file.xml";

header("Content-disposition: attachment; filename=$file");
header("Content-type: application/xml");
readfile("$file");


if (file_exists($file)) {
    unlink($file);
}

session_destroy();
header("../index.php");
