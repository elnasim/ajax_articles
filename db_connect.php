<?php

$connect = mysqli_connect(localhost, root, '', test);

if ($connect == false) {
  echo 'Ошибка подключения к БД';
  exit();
}

