<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kax";

$conn = new mysqli($servername, $username, $password, $dbname);

function checkpass($un, $pw) {
    global $conn;
    $q = "SELECT password from users where username = '$un';";
    $result = mysqli_query($conn, $q);
    while ($row = $result->fetch_assoc()){
        if ($pw == $row["password"]){
            header ('Location: portal.php'); exit;
        } else {
            echo "failed";
        }
    }
}   
?>