<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firist = $_POST["firist"];
    $second = $_POST["second"];
    echo $firist+$second;
    echo "<br>";
    echo $firist*$second;
    echo "<br>";
    echo $firist-$second;
}
?>
