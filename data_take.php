<?php

include_once 'db_connect.php';

$page = $_GET['page'];

$data = mysqli_query($connect, "SELECT * FROM `data` WHERE id = $page");

while ($dat = mysqli_fetch_assoc($data)) {
  print_r(json_encode($dat));
}