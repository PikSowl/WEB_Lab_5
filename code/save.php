<?php
require_once __DIR__ . '/func.php';

if (empty($_POST['email'])) {
    header("HTTP/1.1 404 Not Found");
    exit();
}

$inputData = array();
$inputData[] = $_POST['email'];
$inputData[] = !empty($_POST['title']) ? $_POST['title'] : "untitled";
$inputData[] = $_POST['description'];
$inputData[] = !empty($_POST['category']) ? $_POST['category'] : "other";

$db = extracted();
