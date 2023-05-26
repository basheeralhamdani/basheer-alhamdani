<?php
require "DB.php";

if(isset($_POST['submit'])){


    $sname = $_POST['sname'];
    $snumber = $_POST['snumber'];
    $sgender = $_POST['sgender'];
    $semail = $_POST['semail'];

    $sql = "INSERT INTO `student`(`name`, `number`, `gender`, `email`) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($dbcon, $sql);
    
    // Check if the statement was prepared successfully
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssss", $sname, $snumber, $sgender, $semail);
        $result = mysqli_stmt_execute($stmt);

        if($result) {
            echo "Inserted successfully";
            header("location:index.php");
        } else {
            echo "Error occurred: " . mysqli_error($dbcon);
        }

        mysqli_stmt_close($stmt);
    } 
    else {
        echo "Error occurred while preparing the statement: " . mysqli_error($dbcon);
    }

    mysqli_close($dbcon);
}

?>
