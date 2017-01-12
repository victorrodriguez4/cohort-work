<?php
date_default_timezone_set("America/Los_Angeles");
echo date("D H:i:s");
$t = date("H");

if (intval($t) < 10) {
    echo "Have a good morning!";
} else if (inval($t) < 20) {
    echo "have a good day";
}else {
    echo "Have a good night";
}

echo "<br>";

$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
        
}

?>