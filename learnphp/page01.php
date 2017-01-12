<!DOCTYPE html>
<html>
<body>

<h1>My 1.2 PHP page</h1>

    <!-- php scripting starts here -->
<?php
echo "<h4>Hello World!</h4>";

$myString = "Hello World 2.";
$x = 20;
$y = 3.5;
$z= $x +$y;

echo "<p>" . $myString . "</p>";
echo"<p>" . $z . "</p>";

define("PI", 1.2312);
echo "<h1>" . PI . "</h1>";

echo 12;

?>
 <!-- php scripting ends here -->
</body>
</html>