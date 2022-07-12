<?php
require_once("../lib/functions.php");
$ID=$_POST["ID"];
delete_materia($ID);
header("Location: index.php");
?> 
