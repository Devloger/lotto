<?php
use App\Lotto;

require 'vendor/autoload.php';
$t1 = microtime(true);
var_dump($lotto = (new Lotto(1,59, 5))->run());
$t2 = microtime(true);
var_dump(number_format($t2-$t1, 3));
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<title>TITLE</title>
	<meta name="description" content="DESCRIPTION">
	<meta name="author" content="AUTHOR">
	<!--<link rel="stylesheet" href="css/styles.css?v=1.0">-->
	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
	<![endif]-->
</head>
<body>

	Lotto

</body>
</html>