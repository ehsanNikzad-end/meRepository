<?php
    include 'navigationBar.php';
    include 'header.php';
?>
<!DOCTYPE html>
<html>
<body>
    <!-- Makin a form...................................................... -->
    <div class="container-fluid mt-5" style="text-align: center;">
        <form method="post" action="<?php $_SERVER['PHP_SELF']?>">
            <label>
                Class_id:
                <input type="number" name="classId" placeholder="Class_id">
            </label>
            <label>
                Subject:
                <input type="text" name="subject" placeholder="subject">
            </label>
            <label>
            <label>
                Fee:
                <input type="number" name="fee" placeholder="fee">
            </label>
            <label>
                Time:
                <input type="time" name="time" placeholder="time">
            </label>
            <label>
                Teacher: 
                <select type="" name="teacher" class="btn-lg btn-secondary">
                    <option value="Ahmad">Ahmad</option>
                    <option value="Qadir">Qadir</option>
                    <option value="Naieem">Naieem</option>
                    <option value="Abdullah">Abdullah</option>
                    <option value="Nabi">Nabi</option>
                    <option value="Qafoor">Qafoor</option>
                    <option value="Qafoor">Wali Ahmad</option>
                </select>
            </label>
            <input type="submit" name="submit" value="Record" class="btn btn-success">
        </form>
    </div>

    <?php
        include 'connection.php';
        if(isset($_POST['classId'])){
            
            // Getting data from the inputs of the form into variables............
            $classId = $_POST['classId'];
            $subject = $_POST['subject'];
            $fee = $_POST['fee'];
            $time = $_POST['time'];
            $teacher = $_POST['teacher'];
            
            // Putting data into sql query.................................
            $sql = "INSERT INTO classes(classId, subject, fee, time, teacher) 
                    values('$classId', '$subject', '$fee', '$time', '$teacher')";

            // Executing the query.......................................
            if($conn->query($sql) === TRUE){
                echo "<p class='text-success'>New record.</p>";
            } else {
                die("<p class='text-danger'>
                record not inserted because " . $conn->error . '</p>');
            }

        }
        // OK WORKING................................................................
        $conn->close();

    ?>  



 <?php include 'footer.php'; ?>                
</body>
</html>