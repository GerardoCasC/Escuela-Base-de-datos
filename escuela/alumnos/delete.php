<?php
require_once("../lib/functions.php");
$ID=$_POST["ID"];
delete_alumno($ID);
header("Location: index.php");
?> 
