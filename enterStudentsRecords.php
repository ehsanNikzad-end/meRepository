<?php
    include 'navigationBar.php';
    include 'header.php';
?>
<!DOCTYPE html>
<html>
    <!-- Makin a form...................................................... -->
    <div class="container-fluid mt-5" style="text-align: center;">
        <form method="post" action="<?php $_SERVER['PHP_SELF']?>">
            <label>
                Name: 
                <input type="text" name="name" placeholder="name">
            </label>
            <label>
                age: 
                <input type="number" name="age" placeholder="age">
            </label>
            <label>
                Country: 
                <input type="text" name="country" placeholder="country">
            </label>
            <label>
                Phone: 
                <input type="number" name="phone" placeholder="phone">
            </label>
            <input type="submit" name="submit" value="Record" class="btn btn-success">
        </form>
    </div>

    <?php

        include 'connection.php';
        if(isset($_POST['name'])){
            
            // Getting data from the inputs of the form into variables............
            $name = $_POST['name'];
            $age = $_POST['age'];
            $country = $_POST['country'];
            $phone = $_POST['phone'];

            // Putting data into sql query.................................
            $sql = "INSERT INTO students(name, age, country, phone) 
                    values('$name', '$age', '$country', '$phone')";

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