<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $A = $_POST["firist"];
    $B = $_POST["second"];
    $C = $_POST["third"];
    $D = $_POST["foured"];
    echo ($A*$B)-($C*$D);
    
}
?>
