<html>
    <head>
	 <title>Command injection test environment</title>
    </head>
    <body>
        <form action="eval.php" method="POST">
        Enter your name: <input type="text" name="user">
        <input type="submit">
        </form>
    </body>
</html>

<?php
if (isset($_POST["user"])){
  # Execute command!
  eval("echo \"Hello, ".$_POST['user']."!\";");
}
?>