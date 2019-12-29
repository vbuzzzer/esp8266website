<?php

foreach ($_REQUEST as $key => $value)
{
if ($key == "name") {
$name = $value;
}
if ($key == "age") {
$age = $value;
}
}
if ($age < 21) {
echo "<p> $name, You're not old enough to drink.</p>\n";
} else {
echo "<p> Hi $name. You're old enough to have a drink, ";
echo "but do so responsibly.</p>\n";
}
?>
