<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('vendor/autoload.php');

use App\src\ConnectBdd;

$bdd = new ConnectBdd();
$bdd->connect();

$result = $bdd->fetchAll("SELECT * FROM contact");



?>

<html>
<head>
    <title>Homepage</title>
</head>
<body>

</body>
</html>
