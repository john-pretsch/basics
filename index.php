<?php

$t = $_GET['t'];

switch($t){
    case 'fib':
        include 'fibinacci.php';
        break;
    default:
        echo 'Nothing to do';
}