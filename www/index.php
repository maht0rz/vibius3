<?php
session_start();
error_reporting(E_ALL); ini_set('display_errors', '1');

require '../vendor/autoload.php';

$container = new Vibius\Container\Container();
$container->add();

