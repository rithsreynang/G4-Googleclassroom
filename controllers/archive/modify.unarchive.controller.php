<?php
require_once "../../models/archive/modify.status.class.model.php";
$classroom_id = $_GET['classroom_id'];
unarchive($classroom_id);
header("Location: /archive");
?>