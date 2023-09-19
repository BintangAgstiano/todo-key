<?php
require 'functions.php';
$id = $_GET['id'];
delete("delete from content where content_id='$id'");

header("Location: index.php");
