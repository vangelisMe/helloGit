<?php
include_once 'newfile1.php';

$oOutput = new hello(array(
    "hello",
    "Git"
));
// new comment
echo $oOutput->outputItems();