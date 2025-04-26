<?php
    include 'navigationBar.php';
    include 'header.php';
?>
<!DOCTYPE html>
<html>
<body>
    <?php

        include 'connection.php';

        // Geting the file name into a declared variable......................
        $phpSelf = $_SERVER['PHP_SELF'];

        // Making sql query.............................................
        $sql = "SELECT * FROM registeredones";
        $result = $conn->query($sql);

        // Making the table and show records........................
        if ($result->num_rows > 0) {
            // Outputting data of each row...........................
            echo "<table class='table table-bordered text-red'>";
            echo    "<tr class=''>
                        <th>id</th>
                        <th>Class_id</th>
                        <th>Student_id</th>
                    </tr>";
            while($row = $result->fetch_assoc()) {
            echo "<tr class='w3 table-bordered'>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["class_id"] . "
                    <td>" . $row["student_id"] . 
                    "</td>" .
                "</tr>";
            }
     
            echo "</table>";
        } else {
        echo "<p class='text-warning'>No record</p>";
        }


    ?>  


                
 <?php include 'footer.php'; ?>                
</body>
</html>