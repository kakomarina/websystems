<!DOCTYPE html>
<html lang="en">
<head>
	<title>Details</title>
</head>
<?php
include_once('template.php');
$content = '<h1>Product Details</h1>';
if (isset($_GET['id'])) {
 $query = <<<END
SELECT * FROM products
 WHERE id = '{$_GET['id']}'
END;
 $res = $mysqli->query($query) or die("Could not query database" . $mysqli->errno . " : " . $mysqli->error);
 if ($res->num_rows > 0) {
 $row = $res->fetch_object();
 $content = <<<END
<hr>Product id: {$row->id}<hr>
 Title: {$row->name}<hr>
 Price: {$row->price}<hr>
 Description: {$row->description}<hr>
 Date: {$row->created_at}
END;
 }
}
echo $navigation;
echo $content;
?>
</html>