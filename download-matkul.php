<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=matkul.xls");

include 'includes/list-matkul.php';
