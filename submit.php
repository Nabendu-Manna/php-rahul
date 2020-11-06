<?php
    include("db.php");

    if(isset($_POST['submitData'])){
        $name = $_POST['uName'];
        $password = $_POST['uPassword'];
        $email = $_POST['uEmail'];
        $phoneNo = $_POST['phoneNo'];

        $insert_sql = "INSERT INTO user(userName, password, email, phone) VALUES ('$name', '$password', '$email', '$phoneNo')";
        $run_insert_sql = mysqli_query($con, $insert_sql);
        if($run_insert_sql){
            header("location: index.php");
        }else{
            header("location: insert.php");
        }
    }else{
        header("location: insert.php");
    }

?>