<?php

include_once 'db_connect.php';

$text = trim($_GET['text']);

$connect->query("INSERT INTO `data` VALUES (NULL, '$text')");