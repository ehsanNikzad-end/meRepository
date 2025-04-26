<?php
    $conn = new mysqli("localhost", "root", "", "course");
    if($conn->connect_error){
        echo "<p class='text-danger'>
                not connected! because " . $conn->connect_error . "</p>";
    }
?>

