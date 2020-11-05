<?php
    include("db.php");

    // if(!$con)
    // {
    //   echo 'Not connected to server';
    // }
    // if(!mysqli_select_db($con,'Ideal'))
    // {
    //   echo 'Database not selected';
    // }


    if(isset($_POST['s1'])){
        $name = $_POST['uName'];
        $password = $_POST['uPassword'];
        $email = $_POST['uEmail'];
        $phoneNo = $_POST['phoneNo'];

        $insert_sql = "INSERT INTO user(userName, password, email, phone) VALUES ('$name', '$password', '$email', '$phoneNo')";
        $run_insert_sql = mysqli_query($con, $insert_sql);
        if($run_insert_sql){
            header("location: index.php");
        }else{
            header("location: submit.php");
        }
    }else{
        header("location: insert.php");
    }

?>