<?php
    include 'navigationBar.php';
    include 'header.php';
?>
<!DOCTYPE html>
<html>
<body>
    <?php

        include 'connection.php';
    echo "<div class='container'>";
    // Geting the file name into a declared variable......................
    $phpSelf = $_SERVER['PHP_SELF'];

    // Makin sql code for students table................................................
    $sqlSelectStudents = "SELECT id, name, phone FROM students";
    $result0 = $conn->query($sqlSelectStudents);

    // Making the form and showing recorded data........................
    // Student id.......................................................
    echo "<form class='' method='POST' action='" . $phpSelf . "'>";
    if ($result0->num_rows > 0) {
        echo "<label class=''>
                Name: 
                <select type='' name='studentId' class='form-select btn-lg btn-secondary  mr-3'>";
                    while($row = $result0->fetch_assoc()) {
                        // extra information just in showing...................
                    echo "<option value='" . $row['id'] . "'>" . $row['name'] . "___" . $row['phone'] . "</option>";
                    }
        echo    "</select>
            </label>";
    }

    // Making sql code for classes table................................................
    $sqlSelectClasses1 = "SELECT id, subject, teacher FROM classes";
    $result = $conn->query($sqlSelectClasses1);

    // Making the table and showing recorded data......................................
    if ($result->num_rows > 0) {
        echo "<label>
                Subject: 
                <select type='' name='classId' class='form-select btn-lg btn-secondary mr-3'>";
                    while($row = $result->fetch_assoc()) {
                        // extra information just in showing...................
                    echo "<option value='" . $row['id'] . "'>" . $row['subject'] . "___" . $row['teacher'] . "</option>";
                    }
        echo    "</select>
        </label>";
    }
    echo "<input type='submit' name='submit' class='btn btn-success'>";
    echo "</form>";


    // Inserting the data into regirstered table...........................
    
    if(isset($_POST['studentId'])){
        
        // Getting data from students & classes tables.................................
        $studentId = $_POST['studentId'];
        $classId = $_POST['classId'];
        
        // Putting data into students & classes tables.................................
        $sql = "INSERT INTO registeredones(student_id, class_id) 
                values('$studentId', '$classId')";

        // Executing the query.......................................
        if($conn->query($sql) === TRUE){
            echo "<p class='text-success'>New record.</p>";
        } else {
            die("<p class='text-danger'>
            record not inserted because " . $conn->error . '</p>');
        }

    }

    echo "</div>";


    ?>

 <?php include 'footer.php'; ?>
 </body>
</html>