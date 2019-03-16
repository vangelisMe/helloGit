<?php
include_once 'newfile1.php';

$oOutput = new hello(array(
    "hello",
    "Git",
    "Spring"
));
// new comment
echo $oOutput->outputItems();