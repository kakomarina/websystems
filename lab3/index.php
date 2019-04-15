<!DOCTYPE html>
<html lang="es">
<head>
<title>Webshop</title>
</head>
<body>
<?php
include('template.php');
$content = <<<END
<h1>Welcome to this website</h1>
<p>
This is gonna be a webshop
</p>
<img src="shop.jpg">
END;
echo $navigation;
echo $content;
?>
</body>
</html>