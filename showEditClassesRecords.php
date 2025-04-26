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
        $sql = "SELECT * FROM classes ORDER BY classId";
        $result = $conn->query($sql);

        // Making the table and show records........................
        if ($result->num_rows > 0) {
            // Outputting data of each row...........................
            echo "<table class='table table-bordered text-red'>";
            echo    "<tr class=''>
                        <th>id</th>
                        <th>class_id</th>
                        <th>subject</th>
                        <th>fee</th>
                        <th>time</th>
                        <th>teacher</th>
                        <th>X</th>
                    </tr>";
            $ittirator = 0;
            while($row = $result->fetch_assoc()) {
                $idReciever_pre[$ittirator] = $row["id"];
                
            echo "<tr class='w3 table-bordered'>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["classId"] . "</td>
                    <td>" . $row["subject"] . "</td>
                    <td>" . $row["fee"] . "</td>
                    <td>" . $row["time"] . "</td>
                    <td>" . $row["teacher"] . "</td>
                    <td>" . " <form action='$phpSelf'>
                                <input style='display:none' name='id' value= '" . $idReciever_pre[$ittirator] . "'>
                                <input type='submit' value='delete' class='closing btn-danger'>
                            </form>" . 
                    "</td>" .
                "</tr>";
                $ittirator++;
            }
     
            echo "</table>";
        } else {
        echo "<p class='text-warning'>No record(empty entity)</p>";
        }

        // Makin a function
        function delete_record_byId($id){
            $sqlDelete = "DELETE FROM classes WHERE id = $id";
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