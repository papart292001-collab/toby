<?php
if ($_SERVER["REQUEST_METHOD"] =="POST") {
    $name = $_POST['username'];
    
    echo "<h2>HELLO,". htmlspecialchars($name) . "!<h2>";

}else{
    echo "no data received.";
}
?>