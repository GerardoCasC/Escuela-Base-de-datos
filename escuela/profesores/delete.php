<?php
require_once("../lib/functions.php");
$ID=$_POST["ID"];
delete_profesor($ID);
header("Location: index.php");
?> 
