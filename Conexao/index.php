<?php

include "Connection.php";

$connect = (new Connection("mysql", "localhost", "mysql", "root", ""))->getConnect();
var_dump($connect->query("SELECT * FROM db"));
var_dump($connect->execute());