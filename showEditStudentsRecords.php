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
        $sql = "SELECT students.name, students.age, classes.classId, classes.time, classes.teacher, classes.fee, registeredones.id
        FROM ((registeredones
        INNER JOIN students ON registeredones.student_id = students.id)
        INNER JOIN classes ON registeredones.class_id = classes.id) ORDER BY classes.classId";
        $result = $conn->query($sql);

        // Making the table and show records........................
        

        
        if ($result->num_rows > 0) {
            // Outputting data of each row...........................
            echo "<table class='table table-bordered text-red'>";
            echo    "<tr class=''>
                        <th>Name</th>
                        <th>Age</th>       
                        <th>Class</th>
                        <th>Time</th>
                        <th>Teacher</th>
                        <th>Fee</th>
                        <th>X</th>
                    </tr>";
            while($row = $result->fetch_assoc()) {
            echo "<tr class='w3 table-bordered'>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["age"] . "</td>
                    <td>" . $row["classId"] . "</td>
                    <td>" . $row["time"] . "</td>
                    <td>" . $row["teacher"] . "</td>
                    <td>" . $row["fee"] . "</td>
                    <td>" . " <form action='$phpSelf'>
                                <input style='display:none' name='id' value= '" . $row["id"] . "'>
                                <input type='submit' value='delete' class='closing btn-danger'>
                            </form>" . 
                    "</td></tr>";
            }
            
            echo "</table>";
        } else {
        echo "<p class='text-warning'>No record(empty entity)</p>";
        }


        // Makin a function
        function delete_record_byId($id){
            $sqlDelete = "DELETE FROM registeredones WHERE id = $id";
            // Executing the query.......................................
            if(isset($id)){
                if($id != ""){
                    $conn = new mysqli("localhost", "root", "", "course");
                        if($conn->query($sqlDelete) === TRUE){
                            echo "<p class='text-success'>Record is deleted.</p>";
                        } else {
                            die("<p class='text-danger'>Record is not deleted because " . $conn->error . '</p>');
                        }
                    
                } else {
                    echo "<p class='text-danger'>First, please fill the blank.</p>";
                }
            }
        }
            
        if(isset($_GET['id'])){
                
        $idReciever = $_GET['id'];
        delete_record_byId($idReciever);
    
        }

    ?>  


                
 <?php include 'footer.php'; ?>                
</body>
</html>