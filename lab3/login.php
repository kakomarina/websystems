<?php
include('template.php');
if (isset($_POST['username']) and isset($_POST['password'])) {
 $stmt = $mysqli->prepare('SELECT * FROM users WHERE username = ? and password = ?');
 $stmt->bind_param('ss', $_POST['username'], $_POST['password']); // 's' specifies the variable type => 'string'
 $stmt->execute();
 $result = $stmt->get_result();

 if($result->num_rows > 0) {
 $row = $result->fetch_object();
 $_SESSION["username"] = $row->username;
 $_SESSION["userId"] = $row->id;
 header("Location:index.php");
 } else {
echo "Wrong username or password. Try again";
 }
}
$content = <<<END
<form action="login.php" method="post">
<input type="text" name="username" placeholder="username">
<input type="password" name="password" placeholder="password">
<input type="submit" value="Login">
</form>
END;
echo $navigation;
echo $content;
?>
