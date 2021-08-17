<html>
<body>

Welcome <?php echo $_REQUEST["name"]; ?><br>
Your email address is: <?php echo $_REQUEST["email"]; ?>

</body>
</html>


<form method="POST"
 action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">