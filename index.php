<?php
//standaart index.php 
session_start();
require_once 'controller/Controller.php';

$controller = new Controller();
$controller->handleRequest();
?>